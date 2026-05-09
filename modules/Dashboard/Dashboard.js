(function() {
    MyApp.renderMainTpl();
    var $me = MyApp.$me;

    // ================================================================
    // STATE MANAGEMENT — activeView
    // Mengontrol tampilan: 'dashboard' atau 'matrix'
    // ================================================================
    var activeView = 'dashboard';
    var allMatrixData = []; // cache semua data matriks dari server

    function switchView(view) {
        activeView = view;
        $me('.db-view').removeClass('active');
        $me('.db-pill').removeClass('active');
        $me('#view' + (view === 'dashboard' ? 'Dashboard' : 'Matrix')).addClass('active');
        $me('#pill' + (view === 'dashboard' ? 'Dashboard' : 'Matrix')).addClass('active');

        // Muat data matriks hanya saat pertama kali masuk ke view matrix
        if (view === 'matrix' && allMatrixData.length === 0) {
            loadMatrixList();
        }
    }

    // Klik nav pills
    $me('.db-pill').on('click', function() {
        var targetView = $(this).data('view') === 'viewDashboard' ? 'dashboard' : 'matrix';
        switchView(targetView);
    });

    // Tombol Hero CTA
    $me('#btnGoToMatrix').on('click', function() {
        switchView('matrix');
    });

    // ================================================================
    // VIEW 1: DASHBOARD — Load Summary + Chart
    // ================================================================
    MyApp.ajax({
        option: 'ACTION',
        action: 'getSummary'
    }, function(resp) {
        if (resp.success) {
            $me('#countMatrix').text(resp.countMatrix);
            $me('#countUnit').text(resp.countUnit);
            $me('#activeYear').text(resp.years ? resp.years[resp.years.length - 1] : new Date().getFullYear());

            // Render Highcharts column chart
            if (typeof Highcharts !== 'undefined') {
                Highcharts.chart('chartContainer', {
                    chart: { type: 'column', backgroundColor: 'transparent' },
                    title: { text: '' },
                    credits: { enabled: false },
                    xAxis: { categories: resp.years, crosshair: true },
                    yAxis: { title: { text: 'Jumlah Data Diinput' }, gridLineColor: '#f1f5f9' },
                    tooltip: { shared: true },
                    plotOptions: {
                        column: {
                            borderRadius: 6,
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                        name: 'Jumlah Entri',
                        data: resp.chartData,
                        color: {
                            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                            stops: [[0, '#3276b1'], [1, '#6aa3d5']]
                        }
                    }]
                });
            }
        }
    });

    // ================================================================
    // VIEW 2: MATRIKS — Load daftar + Search/Filter
    // ================================================================
    function loadMatrixList(keyword, tahun) {
        $me('#dbMatrixBody').html(
            '<tr class="db-empty-row"><td colspan="4"><i class="fa fa-circle-o-notch fa-spin"></i> Memuat data…</td></tr>'
        );

        MyApp.ajax({
            option: 'ACTION',
            action: 'getMatrixList'
        }, function(resp) {
            if (resp.success && resp.result && resp.result.length > 0) {
                allMatrixData = resp.result;
                renderMatrixTable(allMatrixData, keyword, tahun);
            } else {
                $me('#dbMatrixBody').html(
                    '<tr class="db-empty-row"><td colspan="4"><i class="fa fa-inbox"></i> Tidak ada data ditemukan.</td></tr>'
                );
                $me('#dbMatrixCount').text('');
            }
        });
    }

    function renderMatrixTable(data, keyword, tahun) {
        // Filter di sisi klien jika ada keyword atau tahun
        var filtered = data.filter(function(item) {
            var matchKw = true, matchTahun = true;
            if (keyword) {
                var kw = keyword.toLowerCase();
                matchKw = (item.judul_data_pilah || '').toLowerCase().indexOf(kw) > -1 ||
                          (item.kode_data_pilah  || '').toLowerCase().indexOf(kw) > -1 ||
                          (item.instansi         || '').toLowerCase().indexOf(kw) > -1;
            }
            // Tahun filter (jika ada kolom tahun di data pilah)
            // Lewat untuk sekarang karena data pilah belum punya kolom tahun langsung
            return matchKw;
        });

        if (filtered.length === 0) {
            $me('#dbMatrixBody').html(
                '<tr class="db-empty-row"><td colspan="4"><i class="fa fa-search"></i> Tidak ada matriks yang cocok dengan pencarian.</td></tr>'
            );
            $me('#dbMatrixCount').text('0 data');
            return;
        }

        var rows = '';
        $.each(filtered, function(i, item) {
            var aktifBadge = item.aktif == 1
                ? '<span class="db-badge aktif"><i class="fa fa-check" style="margin-right:4px;"></i>Aktif</span>'
                : '<span class="db-badge nonaktif"><i class="fa fa-times" style="margin-right:4px;"></i>Nonaktif</span>';

            rows += '<tr data-kode="' + (item.kode_data_pilah || '') + '">' +
                '<td class="db-cell-kode">' + (item.kode_data_pilah || '—') + '</td>' +
                '<td class="db-cell-judul">' + (item.judul_data_pilah || '—') + '</td>' +
                '<td>' + (item.instansi || '<span style="color:#94a3b8">—</span>') + '</td>' +
                '<td>' + aktifBadge + '</td>' +
            '</tr>';
        });

        $me('#dbMatrixBody').html(rows);
        $me('#dbMatrixCount').text(filtered.length + ' data');
    }

    // Tombol Terapkan
    $me('#dbBtnSearch').on('click', function() {
        var kw    = $me('#dbSearchKeyword').val().trim();
        var tahun = $me('#dbFilterTahun').val();
        if (allMatrixData.length > 0) {
            renderMatrixTable(allMatrixData, kw, tahun);
        } else {
            loadMatrixList(kw, tahun);
        }
    });

    // Enter key pada search input
    $me('#dbSearchKeyword').on('keyup', function(e) {
        if (e.key === 'Enter') $me('#dbBtnSearch').trigger('click');
    });

    // Tombol Reset
    $me('#dbBtnReset').on('click', function() {
        $me('#dbSearchKeyword').val('');
        $me('#dbFilterTahun').val('');
        if (allMatrixData.length > 0) {
            renderMatrixTable(allMatrixData, '', '');
        }
    });

    // Klik baris matriks (buka detail — opsional, bisa dikembangkan)
    $me('#dbMatrixBody').on('click', 'tr[data-kode]', function() {
        var kode = $(this).data('kode');
        if (kode) {
            // Arahkan ke modul DataPilah jika ada, atau tampilkan alert
            // MyApp.loadModule('DataPilah', kode);
            console.log('[Dashboard] Klik matriks:', kode);
        }
    });

    // Sembunyikan overlay loading
    setTimeout(function() {
        $me('.overlay').hide();
    }, 600);

})();