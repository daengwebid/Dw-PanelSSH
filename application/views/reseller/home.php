<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Client Area | <?php echo $record['nama_perusahaan']; ?></title>

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
<body class="dashboard">
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
            <a data-toggle="dropdown" href="<?php echo base_url('index.php/clientarea/deposit'); ?>" title="Balance" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon icon wb-payment" aria-hidden="true"> <?php echo $record['mata_uang']; ?>. <?php echo $profil['saldo']; ?> </i>
              <span class="badge badge-danger up"></span>
            </a>
          </li>

          <!--<li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="<?php echo base_url('assets/admin/site-sidebar.tpl'); ?>">
              <i class="icon wb-chat" aria-hidden="true"></i>
            </a>
          </li>-->
          
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
  <div class="page">
    <div class="page-content padding-30 container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xlg-3 col-md-12">
          <div class="row height-full">
            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Overall Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-blue-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>SERVER AVAILABLE</div>
                    </div>
                    <div class="counter-number-group margin-bottom-15">
                      <span class="counter-number-related"></span>
                      <span class="counter-number"><?php echo $server->num_rows(); ?></span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-blue-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="42" role="progressbar">
                          <span class="sr-only">42%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14"></span>
                          <a href="clientarea/server"><button type="button" class="btn btn-primary padding-horizontal-40">View All Server</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>

            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today's Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-red-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>INVOICE</div>
                    </div>
                    <div class="counter-number-group margin-bottom-10">
                      <span class="counter-number-related"></span>
                      <span class="counter-number"><?php echo $invoice->num_rows(); ?></span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-red-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="70" role="progressbar">
                          <span class="sr-only">70%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14"></span>
                          <a href="clientarea/invoice"><button type="button" class="btn btn-danger padding-horizontal-40">View All Invoice</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Today's Sales -->
            </div>
          </div>
        </div>

        <div class="col-xlg-3 col-md-12">
          <div class="row height-full">

          <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Today's Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-green-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>ACCOUNT ACTIVE</div>
                    </div>
                    <div class="counter-number-group margin-bottom-10">
                      <span class="counter-number-related"></span>
                      <span class="counter-number"><?php echo $account->num_rows(); ?></span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-green-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 70%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="70" role="progressbar">
                          <span class="sr-only">70%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14"></span>
                          <a href="clientarea/account"><button type="button" class="btn btn-success padding-horizontal-40">View All Account</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Today's Sales -->
            </div>

            <div class="col-xlg-12 col-md-6" style="height:50%;">
              <!-- Panel Overall Sales -->
              <div class="widget widget-shadow">
                <div class="widget-content widget-radius padding-30 bg-yellow-600 white">
                  <div class="counter counter-lg counter-inverse text-left">
                    <div class="counter-label margin-bottom-20">
                      <div>ADD DEPOSIT</div>
                    </div>
                    <div class="counter-number-group margin-bottom-15">
                      <span class="counter-number-related"></span>
                      <span class="counter-number"></span>
                    </div>
                    <div class="counter-label">
                      <div class="progress progress-xs margin-bottom-10 bg-yellow-800">
                        <div class="progress-bar progress-bar-info bg-white" style="width: 42%" aria-valuemax="100"
                        aria-valuemin="0" aria-valuenow="42" role="progressbar">
                          <span class="sr-only">42%</span>
                        </div>
                      </div>
                      <div class="counter counter-sm text-left">
                        <div class="counter-number-group">
                          <span class="counter-number font-size-14"></span>
                          <a href="clientarea/deposit"><button type="button" class="btn btn-warning padding-horizontal-40">Add Deposit Now</button></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Panel Overall Sales -->
            </div>

            
          </div>
        </div>

      </div>
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
    $(document).ready(function($) {
      Site.run();

      (function() {
        var snow = new Skycons({
          "color": $.colors("blue-grey", 500)
        });
        snow.set(document.getElementById("widgetSnow"), "snow");
        snow.play();

        var sunny = new Skycons({
          "color": $.colors("blue-grey", 700)
        });
        sunny.set(document.getElementById("widgetSunny"), "clear-day");
        sunny.play();
      })();

      (function() {
        var lineareaColor = new Chartist.Line(
          '#widgetLineareaColor .ct-chart', {
            labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
            series: [
              [4, 4.5, 4.3, 4, 5, 6, 5.5],
              [3, 2.5, 3, 3.5, 4.2, 4, 5],
              [1, 2, 2.5, 2, 3, 2.8, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            showPoint: false,
            showLine: false,
            fullWidth: true,
            chartPadding: {
              top: 0,
              right: 0,
              bottom: 0,
              left: 0
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      (function() {
        var stacked_bar = new Chartist.Bar(
          '#widgetStackedBar .ct-chart', {
            labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J',
              'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U',
              'V', 'W', 'X', 'Y', 'Z'
            ],
            series: [
              [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
                100, 140, 130, 120, 135, 110, 120, 105, 100, 105,
                90, 110, 100, 60
              ],
              [150, 190, 200, 190, 210, 200, 220, 230, 215, 195,
                180, 185, 200, 240, 230, 220, 235, 210, 220, 205,
                200, 205, 190, 210, 200, 160
              ]
            ]
          }, {
            stackBars: true,
            fullWidth: true,
            seriesBarDistance: 0,
            chartPadding: {
              top: 0,
              right: 30,
              bottom: 30,
              left: 20
            },
            axisX: {
              showLabel: false,
              showGrid: false,
              offset: 0
            },
            axisY: {
              showLabel: false,
              showGrid: false,
              offset: 0
            }
          });
      })();

      // timeline
      // --------
      (function() {
        var timeline_labels = [];
        var timeline_data1 = [];
        var timeline_data2 = [];
        var totalPoints = 20;
        var updateInterval = 1000;
        var now = new Date().getTime();

        function GetData() {
          timeline_labels.shift();
          timeline_data1.shift();
          timeline_data2.shift();

          while (timeline_data1.length < totalPoints) {
            var x = Math.random() * 100 + 800;
            var y = Math.random() * 100 + 400;
            timeline_labels.push(now += updateInterval);
            timeline_data1.push(x);
            timeline_data2.push(y);
          }
        }

        var timlelineData = {
          labels: timeline_labels,
          series: [
            timeline_data1,
            timeline_data2
          ]
        };

        var timelineOptions = {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 0,
            bottom: 0,
            left: 0
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        };
        new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
          timelineOptions);

        function update() {
          GetData();

          new Chartist.Line("#widgetTimeline .ct-chart", timlelineData,
            timelineOptions);
          setTimeout(update, updateInterval);
        }

        update();

      })();

      (function() {
        new Chartist.Line("#widgetLinepoint .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: -10,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetSaleBar .ct-chart", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'K',
            'L', 'M', 'N', 'O', 'P', 'Q'
          ],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130, 115, 95, 80, 85,
              100, 140, 130, 120
            ]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 20,
            bottom: 30,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });
      })();

      (function() {
        new Chartist.Bar("#widgetWatchList .small-bar-one", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 130]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Bar("#widgetWatchList .small-bar-two", {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'],
          series: [
            [50, 90, 100, 90, 110, 100, 120, 120]
          ]
        }, {
          low: 0,
          fullWidth: true,
          chartPadding: {
            top: -10,
            right: 0,
            bottom: 0,
            left: 20
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

        new Chartist.Line("#widgetWatchList .line-chart", {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
            [20, 50, 70, 110, 100, 200, 230],
            [50, 80, 140, 130, 150, 110, 160]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: false,
          showLine: true,
          lineSmooth: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 10
          },
          axisX: {
            showLabel: true,
            showGrid: false,
            offset: 30
          },
          axisY: {
            showLabel: true,
            showGrid: true,
            offset: 30
          }
        });
      })();

      (function() {
        new Chartist.Line("#widgetLinepointDate .ct-chart", {
          labels: ['1', '2', '3', '4', '5', '6'],
          series: [
            [1, 1.5, 0.5, 2, 2.5, 1.5]
          ]
        }, {
          low: 0,
          showArea: false,
          showPoint: true,
          showLine: true,
          fullWidth: true,
          lineSmooth: false,
          chartPadding: {
            top: 0,
            right: -4,
            bottom: 10,
            left: -4
          },
          axisX: {
            showLabel: false,
            showGrid: false,
            offset: 0
          },
          axisY: {
            showLabel: false,
            showGrid: false,
            offset: 0
          }
        });

      })();

    });
  </script>

</body>

</html>