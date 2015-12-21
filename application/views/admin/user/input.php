<!DOCTYPE html>
<html class="no-js before-run" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">

  <title>Add New User | <?php echo $record['nama_perusahaan']; ?></title>

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
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/vendor/formvalidation/formValidation.css'); ?>">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/web-icons/web-icons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/fonts/brand-icons/brand-icons.min.css'); ?>">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

  <!-- Inline -->
  <style>
    .has-feedback .form-control-feedback {
      right: 15px;
    }
    
    .summary-errors p,
    .summary-errors ul li a {
      color: inherit;
    }
    
    .summary-errors ul li a:hover {
      text-decoration: none;
    }
    
    @media (min-width: 768px) {
      #exampleFullForm .form-horizontal .control-label {
        text-align: inherit;
      }
    }
  </style>

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
            <a data-toggle="dropdown" href="javascript:void(0)" title="Balance" aria-expanded="false"
            data-animation="slide-bottom" role="button">
              <i class="icon icon wb-payment" aria-hidden="true"> <?php echo $record['mata_uang']; ?>. </i>
              <span class="badge badge-danger up"></span>
            </a>
          </li>
          <li id="toggleChat">
            <a data-toggle="site-sidebar" href="javascript:void(0)" title="Chat" data-url="<?php echo base_url('assets/admin/site-sidebar.tpl'); ?>">
              <i class="icon wb-chat" aria-hidden="true"></i>
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
  <?php 
  $this->load->view('admin/menu.php');
  ?>

  <!-- Page -->
  <div class="page animsition">
    <div class="page-header">
      <h1 class="page-title">User</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('index.php/dashboard'); ?>">Home</a></li>
        <li><a href="<?php echo base_url('index.php/user'); ?>">User</a></li>
        <li class="active">Add</li>
      </ol>
      
    </div>
    <div class="page-content container-fluid">

      <!-- End Panel Full Example -->

      <!-- Panel Constraints -->
      <div class="panel">
        <div class="panel-body">
          <div class="row row-lg">

            <div class="col-md-12">
              <!-- Example Type -->
              <div class="example-wrap">
                <div class="example">
                  <?php echo form_open('user/add', 'class="form-horizontal" autocomplete="off"'); ?>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">First Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="first_name" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Last Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="last_name" required >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" required >
                      </div>
                    </div>
                    <?php if (!empty($error)) {?>
                    <div class="form-group">
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-9">
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          <?php echo $error; ?>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="no_hp" required >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Balance</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="saldo" >
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Registration Date</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="tgl_registrasi" value="<?php $tgl_registrasi = date('Y-m-d'); echo $tgl_registrasi; ?>" readonly />
                      </div>
                    </div>

                    <div class="form-group col-lg-12 text-right padding-top-m">
                      <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                    
                  </form>
                </div>
              </div>
              <!-- End Example Type -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Panel Constraints -->
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <span class="site-footer-legal">© 2015 <?php echo $record['nama_perusahaan']; ?></span>
    <div class="site-footer-right">
      Powered By <a href="http://makassarnetwork.info/">MakassarNetwork.Info</a>
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

  <script src="<?php echo base_url('assets/admin/vendor/formvalidation/formValidation.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/admin/vendor/formvalidation/framework/bootstrap.min.js'); ?>"></script>

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


  <script>
    (function(document, window, $) {
      'use strict';
      var Site = window.Site;
      $(document).ready(function($) {
        Site.run();
      });

      // Example Validataion Full
      // ------------------------
      (function() {
        $('#exampleFullForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton1',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            username: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                stringLength: {
                  min: 6,
                  max: 30
                },
                regexp: {
                  regexp: /^[a-zA-Z0-9]+$/
                }
              }
            },
            email: {
              validators: {
                notEmpty: {
                  message: 'The username is required'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            password: {
              validators: {
                notEmpty: {
                  message: 'The password is required'
                },
                stringLength: {
                  min: 6
                }
              }
            },
            birthday: {
              validators: {
                notEmpty: {
                  message: 'The birthday is required'
                },
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            github: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            skills: {
              validators: {
                notEmpty: {
                  message: 'The skills is required'
                },
                stringLength: {
                  max: 300
                }
              }
            },
            porto_is: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            'for[]': {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one'
                }
              }
            },
            company: {
              validators: {
                notEmpty: {
                  message: 'Please company'
                }
              }
            },
            browsers: {
              validators: {
                notEmpty: {
                  message: 'Please specify at least one browser you use daily for development'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Constraints
      // -------------------------------
      (function() {
        $('#exampleConstraintsForm, #exampleConstraintsFormTypes').formValidation({
          framework: "bootstrap",
          icon: null,
          fields: {
            type_email: {
              validators: {
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            type_url: {
              validators: {
                url: {
                  message: 'The url is not valid'
                }
              }
            },
            type_digits: {
              validators: {
                digits: {
                  message: 'The value is not digits'
                }
              }
            },
            kapasitas: {
              validators: {
                integer: {
                  message: 'The value is not an number'
                }
              }
            },
            harga: {
              validators: {
                integer: {
                  message: 'The value is not an number'
                }
              }
            },
            type_phone: {
              validators: {
                phone: {
                  message: 'The value is not an phone(US)'
                }
              }
            },
            type_credit_card: {
              validators: {
                creditCard: {
                  message: 'The credit card number is not valid'
                }
              }
            },
            type_date: {
              validators: {
                date: {
                  format: 'YYYY/MM/DD'
                }
              }
            },
            type_color: {
              validators: {
                color: {
                  type: ['hex', 'hsl', 'hsla', 'keyword', 'rgb',
                    'rgba'
                  ], // The default value for type
                  message: 'The value is not valid color'
                }
              }
            },
            host: {
              validators: {
                ip: {
                  ipv4: true,
                  ipv6: true,
                  message: 'The value is not valid ip(v4 or v6)'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Standard Mode
      // ---------------------------------
      (function() {
        $('#exampleStandardForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton2',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            standard_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            standard_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            standard_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        });
      })();

      // Example Validataion Summary Mode
      // -------------------------------
      (function() {
        $('.summary-errors').hide();

        $('#exampleSummaryForm').formValidation({
          framework: "bootstrap",
          button: {
            selector: '#validateButton3',
            disabled: 'disabled'
          },
          icon: null,
          fields: {
            summary_fullName: {
              validators: {
                notEmpty: {
                  message: 'The full name is required and cannot be empty'
                }
              }
            },
            summary_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required and cannot be empty'
                },
                emailAddress: {
                  message: 'The email address is not valid'
                }
              }
            },
            summary_content: {
              validators: {
                notEmpty: {
                  message: 'The content is required and cannot be empty'
                },
                stringLength: {
                  max: 500,
                  message: 'The content must be less than 500 characters long'
                }
              }
            }
          }
        })

        .on('success.form.fv', function(e) {
          // Reset the message element when the form is valid
          $('.summary-errors').html('');
        })

        .on('err.field.fv', function(e, data) {
          // data.fv     --> The FormValidation instance
          // data.field  --> The field name
          // data.element --> The field element
          $('.summary-errors').show();

          // Get the messages of field
          var messages = data.fv.getMessages(data.element);

          // Remove the field messages if they're already available
          $('.summary-errors').find('li[data-field="' + data.field +
            '"]').remove();

          // Loop over the messages
          for (var i in messages) {
            // Create new 'li' element to show the message
            $('<li/>')
              .attr('data-field', data.field)
              .wrapInner(
                $('<a/>')
                .attr('href', 'javascript: void(0);')
                // .addClass('alert alert-danger alert-dismissible')
                .html(messages[i])
                .on('click', function(e) {
                  // Focus on the invalid field
                  data.element.focus();
                })
              ).appendTo('.summary-errors > ul');
          }

          // Hide the default message
          // $field.data('fv.messages') returns the default element containing the messages
          data.element
            .data('fv.messages')
            .find('.help-block[data-fv-for="' + data.field + '"]')
            .hide();
        })

        .on('success.field.fv', function(e, data) {
          // Remove the field messages
          $('.summary-errors > ul').find('li[data-field="' + data.field +
            '"]').remove();
          if ($('#exampleSummaryForm').data('formValidation').isValid()) {
            $('.summary-errors').hide();
          }
        });
      })();
    })(document, window, jQuery);
  </script>

</body>

</html>