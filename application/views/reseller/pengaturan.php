<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Pengaturan | <?php echo $record['nama_perusahaan']; ?></title>

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

  <!-- Plugin -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/chartist-js/chartist.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/jvectormap/jquery-jvectormap.css'); ?>">

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/weather-icons/weather-icons.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/dashboard/v1.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/css/pages/profile.css'); ?>">

  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/web-icons/web-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/brand-icons/brand-icons.min.css'); ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>


  <!--[if lt IE 9]>
    <script src="../assets/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="../assets/vendor/media-match/media.match.min.js"></script>
    <script src="../assets/vendor/respond/respond.min.js"></script>
    <![endif]-->

  <!-- Scripts -->
  <script src="<?php echo base_url('assets/admin/vendor/modernizr/modernizr.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/breakpoints/breakpoints.js'); ?>"></script>
  <script>
    Breakpoints();
  </script>
</head>
<body class="page-profile">
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
            <ul class="dropdown-menu" role="menu">
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
            </ul>
          </li>
          <li class="dropdown">
            <a data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false"
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
  
  <?php include 'menu.php'; ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Page Widget -->
          <div class="widget widget-shadow text-center">
            <div class="widget-header">
              <div class="widget-header-content">
                <a class="avatar avatar-lg" href="javascript:void(0)">
                  <img src="<?php echo base_url('assets/admin/images/pengaturan.png'); ?>" alt="MakassarNetwork">
                </a>
                <div class="profile-user">MakassarNetwork</div>
                <div class="profile-job">Web Development</div>
                <p>Terima kasih telah menggunakan MakassarNetwork-Panel, Diharapkan partisipasinya baik berupa
                saran ataupun kritikan untuk pengembangan MakassarNetwork-Panel. </p>
                <div class="profile-social">
                  <a class="icon bd-twitter" href="https://twitter.com/makassarnetwork"></a>
                  <a class="icon bd-facebook" href="https://www.facebook.com/makassarnetwork"></a>
                  <a class="icon bd-github" href="https://github.com/makassarnetwork"></a>
                </div>
                <!--<button type="button" class="btn btn-primary">Follow</button>-->
              </div>
            </div>
            
          </div>
          <!-- End Page Widget -->
        </div>

        <?php
        echo form_open('clientarea/pengaturan');
        ?>

        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body">
              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#general" aria-controls="general"
                  role="tab">General <span class="badge badge-danger"></span></a></li>
                <li role="presentation"><a data-toggle="tab" href="#account" aria-controls="profile" role="tab">Account</a></li>
                <!--<li role="presentation"><a data-toggle="tab" href="#bankaccount" aria-controls="bankaccount"
                  role="tab">Bank Account</a></li>-->
              </ul>

              <div class="tab-content">
                <div class="tab-pane active" id="general" role="tabpanel">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media">
                        
                        <div class="media-body">

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">First Name
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="first_name" value="<?php echo $member['first_name']; ?>" required="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Last Name
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="last_name" value="<?php echo $member['last_name']; ?>" required="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Registration Date
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="tgl_registrasi" value="<?php echo $member['tgl_registrasi']; ?>" disabled />
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Last Login
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="last_login" value="<?php echo $member['last_login']; ?>" disabled />
                            </div>
                          </div>

                        </div>
                      </div>
                    </li>

                  </ul>
                  
                </div>

                <div class="tab-pane" id="account" role="tabpanel">
                  <ul class="list-group">
                    <li class="list-group-item">
                      <div class="media media-lg">
                        
                        <div class="media-body">
                          
                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Email
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="email" value="<?php echo $member['email']; ?>" required="">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Password
                              <span class="required"></span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="password" class="form-control" name="pass_admin" placeholder="New Password" >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">Balance
                              <span class="required">*</span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="text" class="form-control" name="saldo" value="<?php echo $member['saldo']; ?>" disabled >
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-12 col-sm-3 control-label">
                              <span class="required"></span>
                            </label>
                            <div class=" col-lg-12 col-sm-9">
                              <input type="hidden" class="form-control" name="member_id" value="<?php echo $member['member_id']; ?>" required >
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </li>

                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          Note : If You Don't Change, Leave Blank Password.
                    </div>
                    
                  </ul>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
        <?php 
        echo form_close();
        ?>
      </div>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 <?php echo $record['nama_perusahaan']; ?></span>
    <div class="site-footer-right">
      Powered By <a href="http://makassarnetwork.info/">MakassarNetwork</a>
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

  <script src="<?php echo base_url('assets/admin/vendor/skycons/skycons.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/chartist-js/chartist.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/aspieprogress/jquery-asPieProgress.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/jvectormap/jquery-jvectormap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/jvectormap/maps/jquery-jvectormap-ca-lcc-en.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/matchheight/jquery.matchHeight-min.js'); ?>"></script>

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
  <script src="<?php echo base_url('assets/admin/js/components/matchheight.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/js/components/jvectormap.js'); ?>"></script>


  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>

</body>

</html>