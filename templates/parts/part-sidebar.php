<?php defined( 'ABSPATH' ) or exit(); ?>

<!-- start sidebar -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item" id="dashboard">
      <a class="nav-link" href="<?php uno_e_site_url(); ?>dashboard/">
      <i class="icon-grid icon-sm mr-3"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item" id="analytics">
      <a class="nav-link" href="<?php uno_e_site_url(); ?>analytics/">
        <i class="icon-chart icon-sm mr-3"></i>
        <span class="menu-title">Analytics</span>
      </a>
    </li>
    <li class="nav-item" id="uno-trabaho">
      <a class="nav-link" data-toggle="collapse" href="#uno-trabaho-dropdown" aria-expanded="false" aria-controls="uno-trabaho-dropdown">
        <i class="icon-briefcase icon-sm mr-3"></i>
        <span class="menu-title">Uno Trabaho</span>
      </a>
      <div class="collapse" id="uno-trabaho-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>trabaho/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=trabaho&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-iskolar">
      <a class="nav-link" data-toggle="collapse" href="#uno-iskolar-dropdown" aria-expanded="false" aria-controls="uno-iskolar-dropdown">
        <i class="icon-graduation icon-sm mr-3"></i>
        <span class="menu-title">Uno Iskolar</span>
      </a>
      <div class="collapse" id="uno-iskolar-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>iskolar/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=iskolar&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-ayuda">
      <a class="nav-link" data-toggle="collapse" href="#uno-ayuda-dropdown" aria-expanded="false" aria-controls="uno-ayuda-dropdown">
        <i class="icon-share-alt icon-sm mr-3"></i>
        <span class="menu-title">Uno Ayuda</span>
      </a>
      <div class="collapse" id="uno-ayuda-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>ayuda/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=ayuda&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-legal">
      <a class="nav-link" data-toggle="collapse" href="#uno-legal-dropdown" aria-expanded="false" aria-controls="uno-legal-dropdown">
        <i class="icon-hourglass icon-sm mr-3"></i>
        <span class="menu-title">Uno Legal</span>
      </a>
      <div class="collapse" id="uno-legal-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>legal/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=legal&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-health">
      <a class="nav-link" data-toggle="collapse" href="#uno-health-dropdown" aria-expanded="false" aria-controls="uno-health-dropdown">
        <i class="icon-heart icon-sm mr-3"></i>
        <span class="menu-title">Uno Health</span>
      </a>
      <div class="collapse" id="uno-health-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>health/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=health&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-youth-movement">
      <a class="nav-link" data-toggle="collapse" href="#uno-youth-dropdown" aria-expanded="false" aria-controls="uno-youth-dropdown">
        <i class="icon-direction icon-sm mr-3"></i>
        <span class="menu-title">Uno Youth Movement</span>
      </a>
      <div class="collapse" id="uno-youth-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>youth/">All Beneficiaries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>beneficiary/new/?form=youth&uno_nonce=<?php p_( uno_get_nonce() ); ?>">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="uno-other-movement">
      <a class="nav-link" data-toggle="collapse" href="#uno-other-dropdown" aria-expanded="false" aria-controls="uno-other-dropdown">
        <i class="icon-puzzle icon-sm mr-3"></i>
        <span class="menu-title">Other Forms</span>
      </a>
      <div class="collapse" id="uno-other-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="https://kpmaco.com/" target="_blank">KPMACO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="https://kpmaco.com/" target="_blank">Lakas CMD</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="users">
      <a class="nav-link" data-toggle="collapse" href="#users-dropdown" aria-expanded="false" aria-controls="users-dropdown">
        <i class="icon-people icon-sm mr-3"></i>
        <span class="menu-title">Users</span>
      </a>
      <div class="collapse" id="users-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>users/">All Users</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>users/new/">Add New</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="settings">
      <a class="nav-link" data-toggle="collapse" href="#settings-dropdown" aria-expanded="false" aria-controls="settings-dropdown">
        <i class="icon-settings icon-sm mr-3"></i>
        <span class="menu-title">Settings</span>
      </a>
      <div class="collapse" id="settings-dropdown">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link"  href="<?php uno_e_site_url(); ?>logs/">System logs</a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item" id="logout">
      <a class="nav-link" href="<?php p_( wp_logout_url( home_url() ) ); ?>">
        <i class="icon-logout icon-sm mr-3"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
    <?php if ( current_user_can( 'administrator' ) ): ?>
      <li class="nav-item" id="admin">
        <a class="nav-link" href="<?php uno_e_site_url(); ?>wp-admin">
          <i class="icon-lock-open icon-sm mr-3"></i>
          <span class="menu-title">Super Admin</span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</nav>
<!-- end sidebar -->

<!-- start main panel -->
<div class="main-panel" id="main_panel">

<div class="pt-3 pb-3" id="context-menu--container">
  <a href="#" class="dropdown-item text-uno" id="context-menu--reload"><i class="icon-reload mr-2"></i> Reload Page</a>
</div>
  
  <!-- start content wrapper -->
  <div class="content-wrapper pt-5">
    <div class="row d-flex align-items-center justify-content-center flex-column">
      <div class="col-lg-12 col-md-12 pb-4">
    