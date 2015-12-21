<div class="site-menubar">
    <div class="site-menubar-body">
      <div>
        <div>
          <ul class="site-menu">
            <li class="site-menu-category">General</li>

            <li class="site-menu-item">
              <a href="<?php echo base_url('index.php/clientarea'); ?>" data-slug="dashboard">
                <i class="site-menu-icon wb-dashboard" aria-hidden="true"></i>
                <span class="site-menu-title">Dashboard</span>
                <div class="site-menu-badge">
                  <span class="badge badge-success">M</span>
                </div>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/clientarea/server'); ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon wb-layout" aria-hidden="true"></i>
                  <span class="site-menu-title">Server</span>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/clientarea/account') ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                  <span class="site-menu-title">Account</span>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/clientarea/deposit'); ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon icon wb-payment" aria-hidden="true"></i>
                  <span class="site-menu-title">Add Deposit</span>
              </a>
            </li>

            <li class="site-menu-item">
              <a class="animsition-link" href="<?php echo base_url('index.php/clientarea/invoice'); ?>" data-slug="uikit-buttons">
                <i class="site-menu-icon icon wb-order" aria-hidden="true"></i>
                  <span class="site-menu-title">Invoice</span>
              </a>
            </li>

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
      <a href="<?php echo base_url('index.php/clientarea/pengaturan'); ?>" class="fold-show" data-placement="top" data-toggle="tooltip"
      data-original-title="Settings">
        <span class="icon wb-settings" aria-hidden="true"></span>
      </a>
      <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
        <span class="icon wb-eye-close" aria-hidden="true"></span>
      </a>
      <a href="<?php echo base_url('index.php/auth/logout'); ?>" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
        <span class="icon wb-power" aria-hidden="true"></span>
      </a>
    </div>
  </div>
  
