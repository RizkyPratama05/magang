<?php
include_once '../public-service.php';
?>

<!doctype html>
<html lang="id" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="SIMDAGENAK - Sistem Informasi Data Gender dan Anak Kabupaten Sleman">
    <meta name="author" content="SIMDAGENAK">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="./assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>SIMDAGENAK | Sistem Informasi Data Gender dan Anak</title>

    <!-- BOOTSTRAP CSS -->
    <link href="./assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="./assets/css/style.css" rel="stylesheet" />
    <link href="./assets/css/skin-modes.css" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="./assets/plugins/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- C3 CHARTS CSS -->
    <link href="./assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="./assets/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!-- SELECT2 CSS -->
    <link href="./assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- TABS STYLES -->
    <link href="./assets/plugins/tabs/tabs.css" rel="stylesheet" />

    <!-- FONT-ICONS CSS -->
    <link href="./assets/css/icons.css" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="./assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="./assets/colors/color1.css" />

    <!-- DATA TABLE CSS -->
    <link href="./assets/plugins/datatable/dataTables.bootstrap4.min.css" rel="stylesheet" />

    <style>
        th {
            vertical-align: center !important;
            text-align: center !important;
        }
        .bg-azure {
            background-color: #1594ef !important;
        }
        .th-format {
            background-color: #5db85d !important;
            color: #fff !important;
            text-align: center;
            padding: 8px;
            font-size: 13px;
        }
        .filter-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 8px;
        }
        .filter-card .card-header {
            background: transparent;
            border-bottom: 1px solid rgba(255,255,255,0.2);
        }
        .filter-card .card-header h3 {
            color: #fff;
        }
        .filter-card label {
            color: #fff;
            font-weight: 600;
        }
        .chart-card {
            border-radius: 8px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
        }
        .chart-card .card-header {
            background: #f8f9fa;
            border-bottom: 2px solid #e9ecef;
        }
        .btn-cari {
            background: linear-gradient(135deg, #f5af19 0%, #f12711 100%);
            border: none;
            color: #fff;
            font-weight: 700;
            padding: 8px 30px;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .btn-cari:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(241,39,17,0.4);
            color: #fff;
        }
        #dataTables {
            font-size: 13px;
        }
        .judul-data {
            font-size: 16px;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }
    </style>

</head>

<body class="app sidebar-mini Left-menu-Default Sidemenu-left-icons">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="./assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">

            <!--APP-SIDEBAR-->
            <div class="app-header header-search-icon">
                <div class="header-style1">
                    <a class="header-brand" href="index.php">
                        <img src="./assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="./assets/images/brand/logo-1.png" class="header-brand-img mobile-logo" alt="logo">
                    </a><!-- LOGO -->
                    <a class="header-brand header-brand1" href="index.php">
                        <img src="./assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                        <img src="./assets/images/brand/logo-1.png" class="header-brand-img mobile-logo" alt="logo">
                    </a><!-- LOGO -->
                </div>
                <div class="app-sidebar__toggle" data-toggle="sidebar">
                    <a class="open-toggle" href="#"><i class="fe fe-align-left"></i></a>
                    <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
                </div>
                <div class="d-flex  ml-auto header-right-icons">
                    <div class="dropdown d-md-flex">
                        <a class="nav-link icon full-screen-link nav-link-bg">
                            <i class="fe fe-minimize fullscreen-button"></i>
                        </a>
                    </div><!-- FULL-SCREEN -->
                </div>
            </div>
            <!--APP-SIDEBAR-->

            <!--APP-SIDEBAR-->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar">

                <ul class="side-menu menu-utama">
                    <li>
                        <h3>Data Pilah</h3>
                    </li>
                    <?php
                    foreach ($menu as $idx => $val) {
                    ?>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <i class="angle fe fe-chevron-right"></i><span class="side-menu__label"><?= $idx ?></span><i class="side-menu__icon fe fe-airplay"></i>
                            </a>
                            <ul class="slide-menu">
                                <?php
                                foreach ($val as $i) {
                                ?>
                                    <li>
                                        <a href="#" class="slide-item menudatapilah" data-kodedatapilah="<?= $i['kode_data_pilah'] ?>" data-judul="<?= $i['judul_data_pilah'] ?>">
                                            <i class="sidemenu-icon fe fe-chevrons-right"></i>
                                            <?= $i['judul_data_pilah'] ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>

            </aside>
            <!--/APP-SIDEBAR-->

            <!-- Mobile Header -->
            <div class="mobile-header">
                <div class="container-fluid">
                    <div class="d-flex">
                        <div class="app-sidebar__toggle" data-toggle="sidebar">
                            <a class="open-toggle" href="#"><i class="fe fe-align-left"></i></a>
                            <a class="close-toggle" href="#"><i class="fe fe-x"></i></a>
                        </div>
                        <a class="header-brand" href="index.php">
                            <img src="./assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Mobile Header -->

            <!--app-content open-->
            <div class="app-content">
                <div class="side-app">

                    <!-- PAGE-HEADER -->
                    <div class="page-header">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Visualisasi Data</li>
                        </ol>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- ============================================ -->
                    <!-- FILTER CARD: 3 Dropdown + Tombol Cari        -->
                    <!-- ============================================ -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card filter-card">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fe fe-filter"></i> Filter Data</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row align-items-end">
                                        <div class="col-md-3">
                                            <label>Instansi</label>
                                            <select class="form-control cbInstansi" id="cbInstansi">
                                                <option value="">-- Pilih Instansi --</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Data / Matriks</label>
                                            <select class="form-control cbJenisdata" id="cbJenisdata">
                                                <option value="">-- Pilih Jenis Data --</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label>Tahun</label>
                                            <select class="form-control cbTahun" id="cbTahun">
                                                <option value="">-- Tahun --</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-cari btn-block" id="btnCari">
                                                <i class="fe fe-search"></i> Cari Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- TABEL DATA                                   -->
                    <!-- ============================================ -->
                    <div class="row" id="rowTabel" style="display:none;">
                        <div class="col-md-12">
                            <div class="card chart-card">
                                <div class="card-header">
                                    <h3 class="card-title judul-header">Data</h3>
                                    <div class="card-options">
                                        <a href="#" class="btExcel btn-sm btn btn-success button-icon mr-2">
                                            <span><i class="fe fe-file-text"></i> Excel</span>
                                        </a>
                                        <a href="#" class="btPdf btn-sm btn btn-danger button-icon mr-2">
                                            <span><i class="fe fe-file"></i> PDF</span>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-primary button-icon mr-2 btPrint">
                                            <span><i class="fe fe-printer"></i> Print</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="judul-data text-center" id="judulData"></div>
                                    <div class="panel panel-primary">
                                        <div class="tab_wrapper" style="overflow: auto">
                                            <table id="dataTables" class="table table-striped table-bordered dataTable no-footer table-sm">
                                                <thead class="header-kolom"></thead>
                                                <tbody class="body-kolom"></tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- COL-END -->
                    </div>

                    <!-- ============================================ -->
                    <!-- GRAFIK: Bar Chart + Pie Chart                -->
                    <!-- ============================================ -->
                    <div class="row" id="rowCharts" style="display:none;">
                        <div class="col-md-7">
                            <div class="card chart-card">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fe fe-bar-chart-2"></i> Bar Chart</h3>
                                </div>
                                <div class="card-body p-4">
                                    <div id="chartBar" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card chart-card">
                                <div class="card-header">
                                    <h3 class="card-title"><i class="fe fe-pie-chart"></i> Pie Chart</h3>
                                </div>
                                <div class="card-body p-4">
                                    <div id="chartPie" style="min-width: 280px; height: 400px; margin: 0 auto"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW CHARTS CLOSED -->

                </div>
            </div>
            <!-- CONTAINER CLOSED -->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright &copy; 2024 <a href="#">SIMDAGENAK</a>. Sistem Informasi Data Gender dan Anak.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="./assets/js/jquery-3.4.1.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/plugins/bootstrap/js/popper.min.js"></script>

    <!-- SPARKLINE JS -->
    <script src="./assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS -->
    <script src="./assets/js/circle-progress.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="./assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- TABS JS -->
    <script src="./assets/plugins/tabs/jquery.multipurpose_tabcontent.js"></script>
    <script src="./assets/plugins/tabs/tab-content.js"></script>

    <!-- CUSTOM SCROLL BAR JS-->
    <script src="./assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- DATA TABLE JS-->
    <script src="./assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

    <!-- SIDEBAR JS -->
    <script src="./assets/plugins/sidebar/sidebar.js"></script>

    <!-- SELECT2 JS -->
    <script src="./assets/plugins/select2/select2.full.min.js"></script>

    <!-- CUSTOM JS-->
    <script src="./assets/js/custom.js"></script>

    <!-- HIGHCHARTS (local) -->
    <script src="../plugins/highcharts/js/highcharts.js"></script>
    <script src="../plugins/highcharts/js/modules/exporting.js" defer></script>

    <!-- PUBLIC JS -->
    <script src="../public.js"></script>

</body>

</html>