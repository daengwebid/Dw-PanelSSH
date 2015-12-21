<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>

            <li class="site-menu-item">
              <a href="<?php echo base_url('index.php/dashboard'); ?>" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">M</span>
                </div>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="#" data-slug="layout">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                <span class="site-menu-title">Server</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('index.php/server'); ?>" data-slug="layout-grids">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Manage Server</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('index.php/server/add'); ?>" data-slug="layout-headers">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New Server</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="../layouts/bordered-header.html" data-slug="layout-bordered-header">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Restart Service</span>
                  </a>
                </li>
                
              </ul>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/dashboard/account') ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                  <span class="site-menu-title">Account</span>
              </a>
            </li>

            <li class="site-menu-item has-sub">
              <a href="#" data-slug="uikit">
                <i class="site-menu-icon icon wb-user" aria-hidden="true"></i>
                <span class="site-menu-title">User's</span>
                <span class="site-menu-arrow"></span>
              </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('index.php/user/'); ?>" data-slug="uikit-buttons">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Manage User</span>
                  </a>
                </li>
                <li class="site-menu-item">
                  <a class="animsition-link" href="<?php echo base_url('index.php/user/add'); ?>" data-slug="uikit-colors">
                    <i class="site-menu-icon " aria-hidden="true"></i>
                    <span class="site-menu-title">Add New User</span>
                  </a>
                </li>
              </ul>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/dashboard/invoice'); ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon icon wb-order" aria-hidden="true"></i>
                  <span class="site-menu-title">Invoice</span>
              </a>
            </li>
          </ul>

          <!--<div class="site-menubar-section">
            <h5>
              Milestone
              <span class="pull-right">30%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
            </div>
            <h5>
              Release
              <span class="pull-right">60%</span>
            </h5>
            <div class="progress progress-xs">
              <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
            </div>
          </div>-->
        </div>
      </div>
    </div>

    <div class="site-menubar-footer">
      <a href="<?php echo base_url('index.php/dashboard/pengaturan'); ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="<?php echo base_url('index.php/admin/logout'); ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  
