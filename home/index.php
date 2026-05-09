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

        /* ---- NEW DASHBOARD STYLES ---- */
        .view-section { display: none; }
        .view-section.active { display: block; animation: fadeInDown 0.5s ease both; }
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .hero-banner {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            border-radius: 15px;
            padding: 50px 40px;
            color: #fff;
            margin-bottom: 30px;
            box-shadow: 0 10px 30px rgba(30,60,114,0.2);
            position: relative;
            overflow: hidden;
        }
        .hero-banner::after {
            content: '\f19c';
            font-family: 'Feather';
            position: absolute;
            right: -20px;
            bottom: -50px;
            font-size: 250px;
            opacity: 0.1;
            transform: rotate(-15deg);
        }
        .hero-title { font-size: 36px; font-weight: 800; margin-bottom: 15px; }
        .hero-subtitle { font-size: 18px; opacity: 0.9; margin-bottom: 30px; max-width: 800px; line-height: 1.6; }
        .hero-cta {
            background: #f5af19;
            background: linear-gradient(to right, #f12711, #f5af19);
            color: #fff;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 16px;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(241,39,17,0.3);
        }
        .hero-cta:hover { transform: translateY(-3px); box-shadow: 0 8px 25px rgba(241,39,17,0.5); color: #fff; }

        .stat-box {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            border-bottom: 4px solid #f5af19;
            transition: all 0.3s;
        }
        .stat-box:hover { transform: translateY(-5px); box-shadow: 0 5px 20px rgba(0,0,0,0.1); }
        .stat-icon { font-size: 30px; color: #1e3c72; margin-bottom: 15px; }
        .stat-value { font-size: 28px; font-weight: 800; color: #333; margin-bottom: 5px; }
        .stat-label { font-size: 14px; color: #777; font-weight: 600; text-transform: uppercase; }

        /* ---- SIDEBAR TOGGLE LOGIC ---- */
        body.no-sidebar .app-sidebar { display: none; }
        body.no-sidebar .app-sidebar__toggle { display: none !important; }
        body.no-sidebar .app-content { margin-left: 0 !important; }
        @media (max-width: 991px) {
            body.no-sidebar .app-content { padding-top: 20px !important; }
        }

        /* ---- PREMIUM ENHANCEMENTS ---- */
        .page-main {
            background: #f4f7fb;
            background-image: radial-gradient(#d1d5db 0.5px, transparent 0.5px);
            background-size: 20px 20px;
        }

        .header-brand-text {
            font-size: 20px;
            font-weight: 800;
            color: #1e3c72;
            letter-spacing: -0.5px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .header-brand-text span { color: #f5af19; }

        /* Floating Animation */
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .floating { animation: float 4s ease-in-out infinite; }

        /* Feature Card */
        .feature-item {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
            gap: 15px;
            transition: all 0.3s;
            border: 1px solid transparent;
        }
        .feature-item:hover {
            border-color: #3276b1;
            box-shadow: 0 10px 25px rgba(0,0,0,0.05);
        }
        .feature-icon-wrap {
            width: 45px; height: 45px;
            background: #eff6ff;
            color: #1e3c72;
            border-radius: 10px;
            display: flex; align-items: center; justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }
        .feature-text h4 { font-size: 16px; font-weight: 700; color: #1e293b; margin-bottom: 5px; }
        .feature-text p { font-size: 13px; color: #64748b; margin: 0; line-height: 1.5; }
    </style>

</head>

<body class="app sidebar-mini Left-menu-Default Sidemenu-left-icons no-sidebar">

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
                    <a class="header-brand" href="index.php" style="text-decoration:none; padding-top: 15px;">
                        <div class="header-brand-text">
                            <i class="fe fe-shield" style="color: #1e3c72; font-size: 24px;"></i>
                            SIMDA<span>GENAK</span>
                        </div>
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
                    <!-- VIEW 1: LANDING DASHBOARD (DITAMPILKAN AWAL) -->
                    <!-- ============================================ -->
                    <div id="viewDashboard" class="view-section active">
                        <div class="hero-banner">
                            <div class="floating">
                                <h1 class="hero-title">Sistem Informasi Data Gender dan Anak (SIMDAGENAK)</h1>
                                <p class="hero-subtitle">
                                    Selamat datang di platform digital Kabupaten Sleman yang dirancang khusus untuk mengintegrasikan, mengelola, dan menyajikan data pilah gender dan anak dari berbagai instansi pemerintah secara akurat, transparan, dan akuntabel.
                                </p>
                            </div>
                            <button class="hero-cta" id="btnExplore">
                                <i class="fe fe-layers mr-2"></i> Jelajahi Data Matriks
                            </button>
                        </div>

                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="stat-box">
                                    <div class="stat-icon"><i class="fe fe-home"></i></div>
                                    <div class="stat-value">42</div>
                                    <div class="stat-label">Instansi Terhubung</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="stat-box" style="border-color: #6366f1;">
                                    <div class="stat-icon" style="color: #6366f1;"><i class="fe fe-grid"></i></div>
                                    <div class="stat-value">1.248</div>
                                    <div class="stat-label">Total Matriks Data</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="stat-box" style="border-color: #10b981;">
                                    <div class="stat-icon" style="color: #10b981;"><i class="fe fe-check-square"></i></div>
                                    <div class="stat-value">100%</div>
                                    <div class="stat-label">Data Terverifikasi</div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="stat-box" style="border-color: #ef4444;">
                                    <div class="stat-icon" style="color: #ef4444;"><i class="fe fe-calendar"></i></div>
                                    <div class="stat-value">2026</div>
                                    <div class="stat-label">Tahun Aktif</div>
                                </div>
                            </div>
                        </div>

                        <!-- NEW: INTERACTIVE FEATURES SECTION -->
                        <div class="row mt-5">
                            <div class="col-md-12 mb-4">
                                <h3 style="font-weight: 800; color: #1e293b; text-align:center;">Mengapa Menggunakan SIMDAGENAK?</h3>
                                <p style="color: #64748b; text-align:center;">Platform terpadu untuk memantau kesejahteraan gender dan anak secara real-time.</p>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <div class="feature-icon-wrap"><i class="fe fe-zap"></i></div>
                                    <div class="feature-text">
                                        <h4>Akses Cepat</h4>
                                        <p>Data dapat diakses dan divisualisasikan hanya dalam beberapa klik saja.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <div class="feature-icon-wrap"><i class="fe fe-shield"></i></div>
                                    <div class="feature-text">
                                        <h4>Data Terpercaya</h4>
                                        <p>Sumber data langsung dari OPD terkait yang telah melalui proses validasi ketat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-item">
                                    <div class="feature-icon-wrap"><i class="fe fe-bar-chart-2"></i></div>
                                    <div class="feature-text">
                                        <h4>Visualisasi Modern</h4>
                                        <p>Disertai grafik interaktif untuk mempermudah analisis tren dari tahun ke tahun.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ============================================ -->
                    <!-- VIEW 2: MATRIX DATA (DISEMBUNYIKAN AWAL)     -->
                    <!-- ============================================ -->
                    <div id="viewMatrix" class="view-section">
                        <div class="mb-4">
                            <button class="btn btn-outline-primary" id="btnBackToHome">
                                <i class="fe fe-arrow-left"></i> Kembali ke Beranda
                            </button>
                        </div>
                        
                        <!-- FILTER CARD: 3 Dropdown + Tombol Cari -->
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
                    </div>
                    <!-- ROW CHARTS CLOSED -->

                    </div><!-- /#viewMatrix -->

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
    <script src="../plugins/highcharts/js/modules/exporting.js"></script>

    <!-- PUBLIC JS -->
    <script src="../public.js"></script>

    <script>
        $(document).ready(function() {
            // Toggle View Logic
            $('#btnExplore').on('click', function() {
                $('body').removeClass('no-sidebar');
                $('#viewDashboard').removeClass('active');
                setTimeout(function() {
                    $('#viewDashboard').hide();
                    $('#viewMatrix').show().addClass('active');
                    // Refresh layout if needed
                    $(window).trigger('resize');
                }, 100);
            });

            $('#btnBackToHome').on('click', function() {
                $('body').addClass('no-sidebar');
                $('#viewMatrix').removeClass('active');
                setTimeout(function() {
                    $('#viewMatrix').hide();
                    $('#viewDashboard').show().addClass('active');
                }, 100);
            });
        });
    </script>

</body>

</html>