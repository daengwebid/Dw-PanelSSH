<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Invoce | <?php echo $record['nama_perusahaan']; ?></title>

  <link rel="apple-touch-icon" href="<?php echo base_url('assets/admin/images/apple-touch-icon.png'); ?>">
  <link rel="shortcut icon" href="<?php echo base_url('assets/admin/images/favicon.ico'); ?>">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/bootstrap-extend.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/site.min.css'); ?>">

  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/animsition/animsition.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/asscrollable/asScrollable.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/switchery/switchery.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/intro-js/introjs.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/slidepanel/slidePanel.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/flag-icon-css/flag-icon.css'); ?>">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/web-icons/web-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/brand-icons/brand-icons.min.css'); ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url('assets/admin/vendor/modernizr/modernizr.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/breakpoints/breakpoints.js'); ?>"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body>
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle hamburger hamburger-close navbar-toggle-left hided"
      data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-collapse"
      data-toggle="collapse">
        <i class="icon wb-more-horizontal" aria-hidden="true"></i>
      </button>
      <button type="button" class="navbar-toggle collapsed" data-target="#site-navbar-search"
      data-toggle="collapse">
        <span class="sr-only">Toggle Search</span>
        <i class="icon wb-search" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <p class="navbar-brand-logo"><?php echo $record['nama_perusahaan']; ?></p>
        <span class="navbar-brand-text"> - Panel</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float" id="toggleMenubar">
            <a data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs" id="toggleFullscreen">
            <a class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
          <li class="hidden-float">
            <a class="icon wb-search" data-toggle="collapse" href="#site-navbar-search" role="button">
              <span class="sr-only">Toggle Search</span>
            </a>
          </li>
          
        </ul>
        <!-- End Navbar Toolbar -->

        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" data-animation="slide-bottom"
            aria-expanded="false" role="button">
              <span class="flag-icon flag-icon-id"></span>
            </a>
          </li>
          <li class="dropdown">
            <a class="navbar-avatar dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <span class="avatar avatar-online">
                <img src="<?php echo base_url('assets/admin/portraits/5.jpg'); ?>" alt="...">
                <i></i>
              </span>
            </a>
            <!--<ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-user" aria-hidden="true"></i> Profile</a>
              </li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-settings" aria-hidden="true"></i> Settings</a>
              </li>
              <li class="divider" role="presentation"></li>
              <li role="presentation">
                <a href="javascript:void(0)" role="menuitem"><i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </li>
            </ul>-->
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Balance" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon icon wb-payment" aria-hidden="true"> <?php echo $record['mata_uang']; ?>. <?php echo $member['saldo']; ?></i>
              <span class="badge badge-danger up"></span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->

      <!-- Site Navbar Seach -->
      <div class="collapse navbar-search-overlap" id="site-navbar-search">
        <form role="search">
          <div class="form-group">
            <div class="input-search">
              <i class="input-search-icon wb-search" aria-hidden="true"></i>
              <input type="text" class="form-control" name="site-search" placeholder="Search...">
              <button type="button" class="input-search-close icon wb-close" data-target="#site-navbar-search"
              data-toggle="collapse" aria-label="Close"></button>
            </div>
          </div>
        </form>
      </div>
      <!-- End Site Navbar Seach -->
    </div>
  </nav>
  
  <?php $this->load->view('reseller/menu.php'); ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">Invoice</h1>
      <div class="page-header-actions">
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('index.php/clientarea'); ?>">Home</a></li>
          <li class="active"><a href="<?php echo base_url('index.php/clientarea/invoice'); ?>">Invoice</a></li>
        </ol>
      </div>
    </div>
    <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">

            <div class="col-md-12">
              <!-- Example Bordered Table -->
              <div class="example-wrap">
                <h4 class="example-title">
                </h4>
                <div class="example table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Invoce Date</th>
                        <th>Amount Deposit</th>
                        <th>Proof</th>
                        <th>Status</th>
                        <th class="text-nowrap">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
                    $isi = $lihat->num_rows();

                    if ($isi == 0) {
                      echo "<tr>
                            <td colspan=5>No Data Available</td>
                            </tr>";
                    
                    } else { 

                    foreach ($lihat->result() as $r) {
                      
                    ?>

                    <tr>
                      <td><?php echo $r->tgl_invoice; ?></td>
                      <td><?php echo $record['mata_uang']; echo " "; echo $r->deposit; ?></td>
                      <?php if (!empty($r->bukti)) { ?>
                      <td><?php echo "<a class='icon wb-eye' style='text-decoration:none' href=" . base_url('assets/index/invoice') . "/" . $r->bukti . " target=__blank>View</a>";  ?></td>
                      <?php } else { ?>
                      <td><font color="red"><p class="icon wb-add-file">Please Upload Payment Proof</p></font></td>
                      <?php } ?>
                      <td><?php echo $r->status; ?></td>
                      <td class="text-nowrap">
                        <a href="invoice_print/<?php echo $r->invoice_id; ?>"><button type="button" class="btn btn-sm btn-icon btn-flat btn-default" data-toggle="tooltip"
                          data-original-title="Pay Now">
                          <i class="icon wb-shopping-cart" aria-hidden="true"></i>
                        </button></a>
                      </td>
                    </tr>

                    <?php } } ?>
                      
                    </tbody>
                  </table>
                  
                </div>
              </div>
              <!-- End Example Bordered Table -->
            </div>

            <div class="clearfix visible-md-block visible-lg-block"></div>

          </div>
        </div>
      </div>
      <!-- End Panel -->

    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 <?php echo $record['nama_perusahaan']; ?></span>
    <div class="site-footer-right">
      Powered By <a href="http://makassarnetwork.info">MakassarNetwork</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="<?php echo base_url('assets/admin/vendor/jquery/jquery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/bootstrap/bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/animsition/jquery.animsition.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/asscroll/jquery-asScroll.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/mousewheel/jquery.mousewheel.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/asscrollable/jquery.asScrollable.all.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/ashoverscroll/jquery-asHoverScroll.js'); ?>"></script>

  <!-- Plugins -->
  <script src="<?php echo base_url('assets/admin/vendor/switchery/switchery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/intro-js/intro.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/screenfull/screenfull.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/slidepanel/jquery-slidePanel.js'); ?>"></script>

  <script src="<?php echo base_url('assets/admin/vendor/peity/jquery.peity.min.js'); ?>"></script>

  <!-- Scripts -->
  <script src="<?php echo base_url('assets/admin/js/core.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/site.js'); ?>"></script>

  <script src="<?php echo base_url('assets/admin/js/sections/menu.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/sections/menubar.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/sections/sidebar.js'); ?>"></script>

  <script src="<?php echo base_url('assets/admin/js/configs/config-colors.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/configs/config-tour.js'); ?>"></script>

  <script src="<?php echo base_url('assets/admin/js/components/asscrollable.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/components/animsition.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/components/slidepanel.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/components/switchery.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/components/peity.js'); ?>"></script>

  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;

      $(document).ready(function($) {
        Site.run();
      });

      // Example Peity Default
      // ---------------------
      (function() {
        /* dynamic example */
        var dynamicChart = $("#examplePeityDynamic").peity("line", {
          width: 64,
          fill: [$.colors("primary", 200)],
          stroke: $.colors("primary", 500),
          height: 22
        });

        setInterval(function() {
          var random = Math.round(Math.random() * 10);
          var values = dynamicChart.text().split(",");
          values.shift();
          values.push(random);

          dynamicChart
            .text(values.join(","))
            .change();
        }, 1000);
      })();

      // Example Peity Red
      // -------------------
      (function() {
        /* dynamic example */
        var dynamicRedChart = $("#examplePeityDynamicRed").peity("line", {
          width: 64,
          fill: [$.colors("red", 200)],
          stroke: $.colors("red", 500),
          height: 22
        });

        setInterval(function() {
          var random = Math.round(Math.random() * 10);
          var values = dynamicRedChart.text().split(",");
          values.shift();
          values.push(random);

          dynamicRedChart
            .text(values.join(","))
            .change();
        }, 1000);
      })();

      // Example Peity Green
      // -------------------
      (function() {
        /* dynamic example */
        var dynamicGreenChart = $("#examplePeityDynamicGreen").peity(
          "line", {
            width: 64,
            fill: [$.colors("green", 200)],
            stroke: $.colors("green", 500),
            height: 22
          });

        setInterval(function() {
          var random = Math.round(Math.random() * 10);
          var values = dynamicGreenChart.text().split(",");
          values.shift();
          values.push(random);

          dynamicGreenChart
            .text(values.join(","))
            .change();
        }, 1000);
      })();

      // Example Peity Orange
      // --------------------
      (function() {
        /* dynamic example */
        var dynamicOrangeChart = $("#examplePeityDynamicOrange").peity(
          "line", {
            width: 64,
            fill: [$.colors("orange", 200)],
            stroke: $.colors("orange", 500),
            height: 22
          });

        setInterval(function() {
          var random = Math.round(Math.random() * 10);
          var values = dynamicOrangeChart.text().split(",");
          values.shift();
          values.push(random);

          dynamicOrangeChart
            .text(values.join(","))
            .change();
        }, 1000);
      })();

    })(document, window, jQuery);
  </script>

</body>

</html>