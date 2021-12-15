<?php defined( 'ABSPATH' ) or exit(); ?>

<!-- start container scroller -->
<div class="container-scroller auth theme-one" id="container_scroller">
  <!-- start form wrapper -->
  <div class="auto-form-wrapper">
    <!-- start topbar -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php uno_e_site_url(); ?>">
          <img src="<?php uno_e_theme_uri(); ?>/images/uno-logo.svg">
        </a>
        <a class="navbar-brand brand-logo-mini" href="index.html"> 
          <img src="<?php uno_e_theme_uri(); ?>/images/logo-mini.svg">
        </a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <i class="icon-menu"></i>
        </button>

        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="mailto:junry.s.solloso@gmail.com" class="text-uno"><i class="icon-envelope icon-sm"></i></a>
          </li>
          <li class="nav-item">
            <a href="tel:+639108973533" class="text-uno"><i class="icon-phone icon-sm"></i></a>
          </li>
        </ul>

        <div class="ml-auto d-none d-md-block">
          <div class="form-group m-0">
            <input type="hidden" name="search_nonce_top" id="search_nonce_top" value="<?php p_( uno_get_nonce() ); ?>">
            <input type="hidden" name="search_check_top" id="search_check_top" value="read">
            <input type="text" name="search_field_top" onmouseover="this.focus();" id="search_field_top" class="form-control" placeholder="Search by ID, Firstname, Lastname or Address">
            <div id="search_results_top"></div> 
          </div>
        </div>

        <ul class="navbar-nav">
          <li class="nav-item dropdown d-none d-xl-inline-flex user-nav">
            <a class="nav-link dropdown-toggle pl-4 d-flex align-items-center text-uno" id="UserDropdown" href="#"
              data-toggle="dropdown" aria-expanded="false">
              <div class="count-indicator d-inline-flex mr-2">
                <i class="icon-user"></i>
              </div>
              <span class="profile-text font-weight-medium">My Account</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a href="<?php uno_e_site_url() . 'users/edit/?id='. 2; ?>" class="dropdown-item mt-3 text-uno"><i class="icon-note mr-2"></i> Update Profile </a>
              <a href="<?php uno_e_site_url() . 'users/edit/?id='. 2; ?>" class="dropdown-item text-uno"><i class="icon-key mr-2"></i> Change Password </a>
              <a href="<?php p_( wp_logout_url( home_url() ) ); ?>" class="dropdown-item text-uno"><i class="icon-logout mr-2"></i> Sign Out </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- end topbar -->

    <!-- start page body wrapper -->
    <div class="container-fluid page-body-wrapper">
    