$(document).ready(function () {
    var cbInstansi = $('#cbInstansi');
    var cbJenisdata = $('#cbJenisdata');
    var cbTahun = $('#cbTahun');
    var btnCari = $('#btnCari');
    var MyApp = {};
    MyApp.$me = {};
    MyApp.$me.totalLp = 0;

    // ================================================================
    // INIT: Load dropdown Instansi & Tahun on page load
    // ================================================================
    function loadInstansi() {
        $.ajax({
            url: '../public-service.php',
            data: { action: 'listInstansi' },
            method: 'POST'
        }).done(function (resp) {
            resp = JSON.parse(resp);
            cbInstansi.html('<option value="">-- Pilih Instansi --</option>');
            $.each(resp, function (i, val) {
                cbInstansi.append('<option value="' + val.instansi + '">' + val.instansi + '</option>');
            });
        });
    }

    function loadTahun() {
        $.ajax({
            url: '../public-service.php',
            data: { action: 'listTahun' },
            method: 'POST'
        }).done(function (resp) {
            resp = JSON.parse(resp);
            cbTahun.html('<option value="">-- Tahun --</option>');
            var curYear = new Date().getFullYear().toString();
            $.each(resp, function (i, val) {
                var sel = (val.tahun === curYear) ? ' selected' : '';
                cbTahun.append('<option value="' + val.tahun + '"' + sel + '>' + val.tahun + '</option>');
            });
        });
    }

    // Load on page ready
    loadInstansi();
    loadTahun();

    // ================================================================
    // CASCADE: Instansi → Jenis Data
    // ================================================================
    cbInstansi.on('change', function () {
        cbJenisdata.html('<option value="">-- Pilih Jenis Data --</option>');
        if (!cbInstansi.val()) return;
        $.ajax({
            url: '../public-service.php',
            data: {
                instansi: cbInstansi.val(),
                action: 'loadJenisData'
            },
            method: 'POST'
        }).done(function (resp) {
            resp = JSON.parse(resp);
            $.each(resp, function (index, val) {
                cbJenisdata.append('<option value="' + val.kode_data_pilah + '">' + val.judul_data_pilah + '</option>');
            });
        });
    });

    // ================================================================
    // CARI: Load data + render table + charts
    // ================================================================
    btnCari.on('click', function () {
        var kode = cbJenisdata.val();
        var tahun = cbTahun.val();

        if (!kode) { alert('Pilih jenis data terlebih dahulu!'); return; }
        if (!tahun) { alert('Pilih tahun terlebih dahulu!'); return; }

        loadDataPilah(kode, tahun);
    });

    // Sidebar menu click (legacy support)
    $('.menudatapilah').click(function (e) {
        e.preventDefault();
        var kode = $(this).data('kodedatapilah');
        var judul = $(this).data('judul');
        var tahun = cbTahun.val() || new Date().getFullYear().toString();
        loadDataPilah(kode, tahun);
    });

    // ================================================================
    // LOAD DATA PILAH (tabel + grafik)
    // ================================================================
    function loadDataPilah(kode, tahun) {
        $('#dataTables').html('<h4 class="text-center text-muted"><i class="fe fe-loader"></i> Memuat data...</h4>');
        $('#rowTabel').show();
        $('#rowCharts').hide();

        $.ajax({
            url: '../public-service.php',
            data: {
                kode_data_pilah: kode,
                show_data: 1,
                tahun: tahun
            },
            method: 'POST'
        }).done(function (resp) {
            try {
                resp = JSON.parse(resp);
            } catch (e) {
                $('#dataTables').html('<h4 class="text-danger text-center">Error: Data tidak dapat dimuat</h4>');
                return;
            }

            if (!resp.success) {
                $('#dataTables').html('<h4 class="text-danger text-center">Data tidak ditemukan</h4>');
                return;
            }

            MyApp.$me.kolom = resp.kolom;
            MyApp.$me.totalLp = 0;

            // Build table body
            var cell = '';
            var td = '';
            $.each(resp.result, function (index, val) {
                var no = index + 1;
                td += "<td style='text-align: center'>" + no + "</td>";
                $.each(val, function (i, record) {
                    if (record == null) { record = 0; }
                    if (i != 'kode_baris' && i != 'kode_data_pilah') {
                        if (i == 'nama_baris') {
                            MyApp.$me.namabaris = record;
                            td += "<td style='text-align: left;font-weight: bold;'>" + record + "</td>";
                        } else {
                            var indexKolom = i.substring(0, 5);
                            if (MyApp.$me.kolom[indexKolom] == 'L+P') {
                                td += "<td>" + MyApp.$me.totalLp.toLocaleString('id') + "</td>";
                                MyApp.$me.totalLp = 0;
                            } else if (MyApp.$me.kolom[indexKolom] == 'L' || MyApp.$me.kolom[indexKolom] == 'P') {
                                MyApp.$me.totalLp = MyApp.$me.totalLp + record;
                                td += "<td>" + record.toLocaleString('id') + "</td>";
                            } else {
                                td += "<td>" + record.toLocaleString('id') + "</td>";
                            }
                        }
                    }
                });
                cell += "<tr>" + td + "</tr>";
                td = '';
            });

            var judul = $(".cbJenisdata option:selected").text();
            $('.judul-header').html(judul);
            $('#judulData').html(judul + ' — Tahun ' + tahun);
            $('#dataTables').html(resp.head_table + cell);
            $('#rowCharts').show();

            // Render charts
            renderBarChart(resp, judul);
            renderPieChart(resp, judul);
        }).fail(function () {
            $('#dataTables').html('<h4 class="text-danger text-center">Error: Gagal memuat data dari server</h4>');
        });
    }

    // ================================================================
    // BAR CHART (Highcharts)
    // ================================================================
    function renderBarChart(data, judul) {
        var kategori = [];
        var dataSeri = [];

        $.each(data.kolomsingle, function (index, val) {
            dataSeri[index] = {};
            dataSeri[index]['name'] = val;
            dataSeri[index]['data'] = [];
            dataSeri[index]['lineWidth'] = 3;
        });

        for (var k = 0; k < data.result.length; k++) {
            var m = 0;
            $.each(data.result[k], function (i, record) {
                if (record == null) { record = 0; }
                if (i == 'nama_baris') {
                    kategori.push(record);
                }
                if (i != 'kode_baris' && i != 'kode_data_pilah' && i != 'nama_baris') {
                    dataSeri[m].data.push(parseFloat(record) || 0);
                    m++;
                }
            });
        }

        Highcharts.chart('chartBar', {
            chart: {
                type: 'column',
                style: { fontFamily: 'Arial, sans-serif' }
            },
            title: {
                text: judul || 'Grafik Batang',
                style: { fontSize: '15px', fontWeight: '700' }
            },
            xAxis: {
                categories: kategori,
                labels: {
                    rotation: -45,
                    style: { fontSize: '11px' }
                }
            },
            yAxis: {
                min: 0,
                title: { text: 'Jumlah' }
            },
            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{point.color}">\u25CF</span> {series.name}: <b>{point.y:,.0f}</b><br/>'
            },
            plotOptions: {
                column: {
                    borderRadius: 3,
                    dataLabels: {
                        enabled: false
                    }
                }
            },
            colors: ['#3276b1', '#d9534f', '#5db85d', '#f0ad4e', '#5bc0de', '#9b59b6', '#e67e22'],
            series: dataSeri,
            credits: { enabled: false }
        });
    }

    // ================================================================
    // PIE CHART (Highcharts) — Total agregat per kolom
    // ================================================================
    function renderPieChart(data, judul) {
        var pieData = [];

        // Calculate totals per column
        $.each(data.kolomsingle, function (index, val) {
            pieData[index] = { name: val, y: 0 };
        });

        for (var k = 0; k < data.result.length; k++) {
            var m = 0;
            $.each(data.result[k], function (i, record) {
                if (i != 'kode_baris' && i != 'kode_data_pilah' && i != 'nama_baris') {
                    pieData[m].y += parseFloat(record) || 0;
                    m++;
                }
            });
        }

        // Make the largest slice "sliced"
        var maxIdx = 0;
        var maxVal = 0;
        $.each(pieData, function (i, v) {
            if (v.y > maxVal) { maxVal = v.y; maxIdx = i; }
        });
        if (pieData.length > 0) {
            pieData[maxIdx].sliced = true;
            pieData[maxIdx].selected = true;
        }

        Highcharts.chart('chartPie', {
            chart: {
                type: 'pie',
                style: { fontFamily: 'Arial, sans-serif' }
            },
            title: {
                text: 'Komposisi: ' + (judul || 'Data'),
                style: { fontSize: '14px', fontWeight: '700' }
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:,.0f}</b> ({point.percentage:.1f}%)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: { fontSize: '11px' }
                    },
                    showInLegend: true
                }
            },
            colors: ['#3276b1', '#d9534f', '#5db85d', '#f0ad4e', '#5bc0de', '#9b59b6', '#e67e22'],
            series: [{
                name: 'Total',
                colorByPoint: true,
                data: pieData
            }],
            credits: { enabled: false }
        });
    }

    // ================================================================
    // TAHUN change via dropdown (legacy support for sidebar clicks)
    // ================================================================
    cbTahun.on('change', function () {
        // If data is already loaded, auto-reload is optional
        // User can click Cari again
    });

    // ================================================================
    // EXPORT: Excel, PDF, Print
    // ================================================================
    var currentKode = null;
    var currentTahun = null;

    // Override loadDataPilah to save current kode/tahun
    var originalLoadDataPilah = loadDataPilah;
    loadDataPilah = function (kode, tahun) {
        currentKode = kode;
        currentTahun = tahun;
        originalLoadDataPilah(kode, tahun);
    };

    // Excel export
    $(document).on('click', '.btExcel', function (e) {
        e.preventDefault();
        if (!currentKode || !currentTahun) {
            alert('Silakan cari data terlebih dahulu!');
            return;
        }
        window.location.href = '../public-export.php?type=excel&kode=' + encodeURIComponent(currentKode) + '&tahun=' + encodeURIComponent(currentTahun);
    });

    // PDF export
    $(document).on('click', '.btPdf', function (e) {
        e.preventDefault();
        if (!currentKode || !currentTahun) {
            alert('Silakan cari data terlebih dahulu!');
            return;
        }
        window.open('../public-export.php?type=pdf&kode=' + encodeURIComponent(currentKode) + '&tahun=' + encodeURIComponent(currentTahun), '_blank');
    });

    // Print
    $(document).on('click', '.btPrint', function (e) {
        e.preventDefault();
        if (!currentKode || !currentTahun) {
            alert('Silakan cari data terlebih dahulu!');
            return;
        }

        var judulText = $('#judulData').text();
        var tableHtml = $('#dataTables').prop('outerHTML');

        // Capture Charts (if visible)
        var chart1Svg = '', chart2Svg = '';
        if ($('#rowCharts').is(':visible') && typeof Highcharts !== 'undefined') {
            $.each(Highcharts.charts, function (i, chart) {
                if (chart && chart.renderTo) {
                    var id = $(chart.renderTo).attr('id');
                    if (id === 'chartBar') chart1Svg = chart.getSVG({ chart: { width: 800, height: 400 } });
                    if (id === 'chartPie') chart2Svg = chart.getSVG({ chart: { width: 800, height: 400 } });
                }
            });
        }

        var printWin = window.open('', 'PrintWindow', 'width=1000,height=800');
        printWin.document.write('<html><head><title>Print - ' + judulText + '</title>');
        printWin.document.write('<style>');
        printWin.document.write('body { font-family: Arial, sans-serif; margin: 30px; color: #333; }');
        printWin.document.write('h2 { text-align: center; margin-bottom: 20px; color: #1e3c72; }');
        printWin.document.write('table { width: 100%; border-collapse: collapse; font-size: 11px; margin-bottom: 30px; }');
        printWin.document.write('th, td { border: 1px solid #999; padding: 6px 10px; }');
        printWin.document.write('th { background-color: #f4f7fb !important; color: #1e3c72 !important; text-align: center; font-weight: bold; }');
        printWin.document.write('td { text-align: right; }');
        printWin.document.write('td:first-child { text-align: center; }');
        printWin.document.write('td:nth-child(2) { text-align: left; font-weight: bold; }');
        printWin.document.write('.chart-container { text-align: center; margin-top: 30px; page-break-inside: avoid; }');
        printWin.document.write('.chart-container svg { max-width: 100%; height: auto; }');
        printWin.document.write('@media print { .no-print { display: none; } }');
        printWin.document.write('</style></head><body>');

        printWin.document.write('<h2>' + judulText + '</h2>');

        // Add Table
        printWin.document.write(tableHtml);

        // Add Charts
        if (chart1Svg) {
            printWin.document.write('<div class="chart-container"><h3>Visualisasi Grafik Batang</h3>' + chart1Svg + '</div>');
        }
        if (chart2Svg) {
            printWin.document.write('<div class="chart-container"><h3>Visualisasi Grafik Lingkaran</h3>' + chart2Svg + '</div>');
        }

        // Auto-close script
        printWin.document.write('<script>');
        printWin.document.write('window.onload = function() { ');
        printWin.document.write('  setTimeout(function() { ');
        printWin.document.write('    window.print(); ');
        printWin.document.write('    window.onafterprint = function() { window.close(); }; ');
        printWin.document.write('    // Fallback for browsers that dont support onafterprint well');
        printWin.document.write('    setTimeout(function() { if(!window.closed) window.close(); }, 500);');
        printWin.document.write('  }, 500);');
        printWin.document.write('};');
        printWin.document.write('</script>');

        printWin.document.write('</body></html>');
        printWin.document.close();
    });

});