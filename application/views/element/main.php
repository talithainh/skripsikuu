<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Clustering Wanita Jawa di Jawa Timur</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="<?php echo base_url() ?>assets/main/images/icon/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/slicknav.min.css">
    <!-- amcharts css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/typography.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/default-css.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/main/css/responsive.css">
    <!-- modernizr css -->
    <script src="<?php echo base_url() ?>assets/main/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">

        <?php $this->load->view('element/sidebar'); ?>

        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- Search Box -->
                        <!-- <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> -->
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span><?php echo $this->session->userdata('pages'); ?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url() ?>assets/main/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Administrator <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="<?php echo base_url() ?>Login/logout">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <?php 
                  if(!empty($content)){
                    echo $content;
                  }
                ?>
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2018. All right reserved. Template by <a href="https://colorlib.com/wp/">Colorlib</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- jquery latest version -->
    <script src="<?php echo base_url() ?>assets/main/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url() ?>assets/main/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/metisMenu.min.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/jquery.slicknav.min.js"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> -->
    <!-- others plugins -->
    <script src="<?php echo base_url() ?>assets/main/js/plugins.js"></script>
    <script src="<?php echo base_url() ?>assets/main/js/scripts.js"></script>
</body>

</html>
