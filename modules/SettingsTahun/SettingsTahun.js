(function() {
    MyApp.renderMainTpl();
    var $me = MyApp.$me;
    var $module = MyApp.module;
    var oTable;
    var initAction = 'add'; // default action

    var initGrid = function() {
        var buttonHeader = '<button class="btTambah btn btn-primary"><i class="fa fa-plus"></i><span class="hidden-mobile"> Tambah Data</span></button>';
        
        oTable = $me('#datatable_fixed_column').DataTable({
            "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>t" +
                    "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
            "oLanguage": {
                "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
            },
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "service.php",
            "fnServerData": function (sSource, aoData, fnCallback, oSettings) {
                aoData.push({ "name": "Module", "value": $module.curMod });
                aoData.push({ "name": "option", "value": "PUBLIC" });
                aoData.push({ "name": "action", "value": "list" });
                oSettings.jqXHR = $.ajax({
                    "dataType": 'json',
                    "type": "POST",
                    "url": sSource,
                    "data": aoData,
                    "success": fnCallback
                });
            },
            "columns": [
                {
                    data: "id_tahun",
                    width: "5%",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    }
                },
                {
                    data: "id_tahun",
                    width: "15%",
                    bSortable: false,
                    render: function (data, type, row, meta) {
                        var buttons = '<button class="btEdit btn btn-xs btn-primary"><i class="fa fa-edit"></i> Edit</button> ';
                        buttons += '<button class="btHapus btn btn-xs btn-danger"><i class="fa fa-trash"></i> Hapus</button>';
                        return buttons;
                    }
                },
                { data: "tahun", width: "40%" },
                { 
                    data: "aktif", 
                    width: "40%",
                    render: function (data) {
                        return data == 1 ? '<span class="label label-success">Aktif</span>' : '<span class="label label-danger">Tidak Aktif</span>';
                    }
                }
            ]
        });

        $me("div.toolbar").html(buttonHeader);
    };

    var initEvents = function() {
        $me().on('click', '.btTambah', function() {
            initAction = 'add';
            $me('#form_input')[0].reset();
            $me('input[name="id_tahun"]').val('');
            $me('#myModal .modal-title').html('Tambah Data Tahun');
            $me('#myModal').modal('show');
        });

        $me('tbody').on('click', '.btEdit', function() {
            var tr = $(this).closest('tr');
            var row = oTable.row(tr).data();
            initAction = 'update';
            
            $me('input[name="id_tahun"]').val(row.id_tahun);
            $me('input[name="tahun"]').val(row.tahun);
            $me('select[name="aktif"]').val(row.aktif);
            
            $me('#myModal .modal-title').html('Edit Data Tahun');
            $me('#myModal').modal('show');
        });

        $me('tbody').on('click', '.btHapus', function() {
            var tr = $(this).closest('tr');
            var row = oTable.row(tr).data();
            
            $.SmartMessageBox({
                title: "Konfirmasi Hapus",
                content: "Apakah anda yakin akan menghapus tahun " + row.tahun + "?",
                buttons: '[Tidak][Ya]'
            }, function(ButtonPressed) {
                if (ButtonPressed === "Ya") {
                    MyApp.ajax({
                        option: 'ACTION',
                        action: 'delete',
                        data: { id_tahun: row.id_tahun }
                    }, function(resp) {
                        if (resp.success) {
                            oTable.ajax.reload();
                        }
                    });
                }
            });
        });

        $me('.btSimpan').on('click', function() {
            var dataForm = $me('#form_input').serializeArray();
            var dataPost = {};
            $(dataForm).each(function(index, obj) {
                dataPost[obj.name] = obj.value;
            });
            
            if (!dataPost.tahun) {
                alert("Tahun harus diisi!");
                return;
            }

            MyApp.ajax({
                option: 'ACTION',
                action: initAction,
                data: dataPost
            }, function(resp) {
                if (resp.success) {
                    $me('#myModal').modal('hide');
                    oTable.ajax.reload();
                } else {
                    alert("Gagal menyimpan data!");
                }
            });
        });
    };

    initGrid();
    initEvents();
    $me('.overlay').hide();

})();
