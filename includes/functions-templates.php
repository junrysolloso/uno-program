<?php defined( 'ABSPATH' ) or exit();

/**
 * Fields template
 */
function uno_field_template( $data = [] ) {
  ?>
  <?php if ( is_array( $data ) && ! empty( $data )  ): ?>
    <div class="card mb-4">
      <div class="card-body form-fields p-0">

        <?php foreach ( $data as $table => $fields ): ?>
          <table class="table table-fields" id="<?php p_( uno_table_id( $table ) ); ?>">
            <thead>
              <tr>
                <th class="text-wrap table-fields-header" colspan="2">
                  <b class="table-fields-title"><?php p_( ucwords( implode( ' ', explode( '_', $table ) ) ) ); ?></b>
                  <?php p_( apply_filters( 'uno_table_header_right', '' ) ); ?>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ( $fields as $input ): ?>
                <?php $type = $input['type']; ?>
                <?php key_exists( 'meta', $input ) ? $meta = uno_input_meta_builder( $input['meta'] ) : $meta = ''; ?>

                <tr>
                  <td class="text-wrap">
                    <label>
                      <?php p_( $input['label'] ); ?>
                    </label>
                  </td>
                  <td>
                    <?php if ( $type == 'radio' || $type == 'checkbox' ): ?>
                      <?php if ( is_array( $input['options'] ) ): ?>
                        <?php for ( $i = 0; $i < count( $input['options']  ); $i++ ): ?>
                          <div class="mb-2">
                            <?php if ( $type == 'checkbox' ): ?>
                              <input type="hidden" name="<?php p_( $input['options'][$i]['name'] ); ?>" value="0" class ="<?php p_( $input['class'] ); ?>_shadow"  />
                            <?php endif; ?>
                    
                            <input 
                              name  ="<?php p_( $input['options'][$i]['name'] ); ?>"
                              type  ="<?php p_( $type ); ?>" 
                              value ="<?php p_( $input['options'][$i]['value'] ); ?>" 
                              class ="<?php p_( $input['class'] ); ?>" 
                              id    ="<?php p_( $input['options'][$i]['id'] ); ?>" 
                                      <?php p_( $meta ); ?> />

                            <?php if ( $input['class'] != 'true_false' ): ?>
                              <?php p_( $input['options'][$i]['label'] ); ?>
                            <?php endif; ?>
                          </div>
                        <?php endfor; ?>
                      <?php endif; ?>

                    <?php elseif ( $type == 'select' ): ?>
                      <select 
                        name  ="<?php p_( $input['name'] ); ?>" 
                        class ="<?php p_( $input['class'] ); ?>" 
                        id    ="<?php p_( $input['id'] ); ?>" 
                                <?php p_( $meta ); ?> >
                                
                        <?php unset( $input['options'][0] ); ?>
                        <?php foreach( $input['options'] as $option ): ?>
                          <option value="<?php p_( $option ); ?>">
                            <?php p_( $option ); ?>
                          </option>
                        <?php endforeach;?>
                      </select>

                    <?php else: ?>
                      <input 
                        name  ="<?php p_( $input['name'] ); ?>" 
                        type  ="<?php p_( $type ); ?>" 
                        value ="<?php p_( $input['value'] ); ?>" 
                        class ="<?php p_( $input['class'] ); ?>" 
                        id    ="<?php p_( $input['id'] ); ?>" 
                                <?php p_( $meta ); ?> />

                    <?php endif; ?>
                    <div class="input-helper"></div>
                  </td>
                </tr>

              <?php endforeach;?>
            </tbody>
          </table>
        <?php endforeach;?>
        
      </div>
    </div>
  <?php endif; ?>
  <?php
}

/**
 * List table template
 */
function uno_list_table_template( $args ) {
  global $wp;

  if ( is_array( $args ) ) {
    $query = new WP_Query( $args );

    ?>
    <div class="card">
      <div class="card-body table-responsive p-0">
        <table class="table table-hover bg-white data-table table-with-contextmenu">
          <thead>
            <tr class="my-auto">
              <th><i class="icon-user icon-sm align-self-center text-uno mr-2"></i>Uno ID</th>
              <th><i class="icon-info icon-sm align-self-center text-uno mr-2"></i>Name</th>
              <th><i class="icon-envelope icon-sm align-self-center text-uno mr-2"></i>Phone</th>
              <th><i class="icon-location-pin icon-sm align-self-center text-uno mr-2"></i>Municipality</th>
              <th><i class="icon-pie-chart icon-sm align-self-center text-uno mr-2"></i>Services</th>
              <th></th>
            </tr>
          </thead>
          <tbody>

            <?php if ( $query->have_posts() ): ?>
              <?php while ( $query->have_posts() ): $query->the_post(); ?>
                <?php
                  $categories = [
                    'aics'   => uno_get_the_meta( 'uno_beneficiary_category_aics' ),
                    'ched'   => uno_get_the_meta( 'uno_beneficiary_category_ched' ),
                    'deped'  => uno_get_the_meta( 'uno_beneficiary_category_deped' ),
                    'gip'    => uno_get_the_meta( 'uno_beneficiary_category_gip' ),
                    'health' => uno_get_the_meta( 'uno_beneficiary_category_health' ),
                    'legal'  => uno_get_the_meta( 'uno_beneficiary_category_legal' ),
                    'map'    => uno_get_the_meta( 'uno_beneficiary_category_map' ),
                    'tesda'  => uno_get_the_meta( 'uno_beneficiary_category_tesda' ),
                    'tupad'  => uno_get_the_meta( 'uno_beneficiary_category_tupad' ),
                    'youth'  => uno_get_the_meta( 'uno_beneficiary_category_youth' ),
                  ];

                  $categories         = uno_unset_empty_array( $categories );
                  $assitance_received = count( $categories ) ? count( $categories ) : 0;
                  $categories         = implode( ',', $categories );
                  $json_data          = '{"i":"'. get_the_ID() .'","c":"'. $categories .'","n":"'. uno_get_nonce() .'"}';
                ?>

                <tr data-uno='<?php p_( $json_data ); ?>'>
                  <td>
                    <?php if( uno_get_the_meta( 'uno_beneficiary_photo' ) ): ?>
                      <img src="<?php p_( uno_get_the_meta( 'uno_beneficiary_photo' ) ); ?>" class="mr-2">
                    <?php else: ?>
                      <img src="<?php p_( wp_upload_dir()['baseurl'] ); ?>/photos/avatar.jpg" class="mr-2">
                    <?php endif; ?>
                    <span>
                      <?php p_( uno_get_the_meta( 'uno_beneficiary_id' ) ); ?>
                    </span>
                  </td>
                  <td>
                    <span>
                      <?php p_( ucwords( uno_get_the_meta( 'uno_beneficiary_name_first' ) ) ); ?>
                      <?php p_( ucwords( uno_get_the_meta( 'uno_beneficiary_name_last' ) ) ); ?>
                    </span>
                  </td>
                  <td>
                    <span>+63<?php p_( uno_get_the_meta( 'uno_beneficiary_contact_phone_number' ) ); ?></span>
                  </td>
                  <td>
                    <span><?php p_( uno_get_the_meta( 'uno_beneficiary_permanent_address_municipality' ) ); ?></span>
                  </td>
                  <td>
                    <span><?php p_( $assitance_received ); ?></span>
                  </td>
                  <td class="text-right">
                    <?php if ( current_user_can( 'administrator' ) ): ?>
                      <form action="<?php p_( home_url( $wp->request ) ); ?>" method="post" class="deleteForm" style="display: inline-block;">
                        <input type="hidden" name="uno_id" value="<?php p_( get_the_ID() ); ?>" />
                        <input type="hidden" name="uno_action" value="delete">
                        <input type="hidden" name="uno_check" value="delete">
                        <input type="hidden" name="uno_nonce" value="<?php p_( uno_get_nonce() ); ?>" />
                        <button type="submit" class="btn"><i class="icon-trash text-danger"></i></button>
                      </form>
                    <?php endif; ?>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="pt-4 pb-4 text-center">No data found.</td>
              </tr>
            <?php endif; ?>

          </tbody>
        </table>
      </div>
    </div>

    <?php
    wp_reset_postdata();
  }
}

/**
 * Card widget template
 */
function uno_card_widget_template( $args ) {
  if ( is_array( $args ) ) {
    ?>
    <?php foreach( $args as $key ): ?>
      <div class="col-lg-4 col-md-6 col-sm-12 grid-margin stretch-card">
        <div class="card card-statistics">
          <div class="card-body">
            <div class="clearfix">
              <div class="icon-wrapper icon-wrapper-<?php p_( $key['color'] ); ?> float-left">
                <i class="<?php p_( $key['icon'] ); ?>"></i>
              </div>
              <div class="float-right">
                <p class="mb-0 text-right"><?php p_( $key['label'] ); ?></p>
                <div class="fluid-container">
                  <h3 class="text-font-medium text-right mb-0"><?php p_( $key['count'] ); ?> <small>beneficiaries</small></h3>
                </div>
              </div>
            </div>
            <p class="text-muted mt-3 mb-0">
              <a href="<?php uno_e_site_url(); ?><?php p_( $key['link'] ); ?>/" style="text-decoration: none;"><i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>View Details</a>
            </p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    <?php
  }
}

/**
 * Login form template
 */
function uno_login_template() {
  global $error;

  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php p_( get_the_title() ); ?> | Uno Program In The Province Of Dinagat Islands</title>

    <link rel="manifest" href="<?php uno_e_theme_uri(); ?>/manifest.json">
    <link rel="shortcut icon" href="<?php uno_e_theme_uri(); ?>/images/icons/icon-96.png" />
    <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/css/vendor.bundle.base.css" />
    <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/style-main.min.css" />
    <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/style.min.css" />
    <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/user.css?v=<?php uno_e_version(); ?>" />
  </head>
  <body>
    
    <input type="hidden" id="base_url" value="<?php uno_e_site_url(); ?>" />
    <div class="container-scroller login-page" id="login_page">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper auth p-0 theme-two">
          <div class="row d-flex align-items-stretch">
            <div class="col-lg-8 col-md-12 col-sm-12 banner-section d-none d-md-flex align-items-stretch justify-content-center">
              <div class="slide-content bg-login"></div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 bg-white shadow-sm pl-md-0 pl-sm-1">
              <div class="auto-form-wrapper d-flex align-items-center justify-content-center flex-column">
                <div class="card">
                  <div class="card-body">
  
                    <form action="" method="post">
                      <?php if ( $error ): ?>
                        <div class="alert alert-danger text-center" role="alert">Incorrect username or password</div>
                      <?php endif; ?>

                      <h2 class="mr-auto text-left text-font-light mb-3">Let's get started</h2>
                      <p class="mb-5 mr-auto text-left">Please fill-in your credentials in the form below.</p>

                      <div class="form-group">
                        <input type="text" name="username" class="form-control" required="true" placeholder="Username">
                      </div>
                      <div class="form-group">
                        <input type="password" name="userpass" class="form-control" required="true" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Login</button>
                      </div>

                      <div class="wrapper mt-5 text-gray text-left">
                        <p class="footer-text">
                          &copy; 2021 UNO <br />
                          <a class="text-muted">Powered by Dinagat Coder</a>
                        </p>
                      </div>
                    </form>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script type="text/javascript" src="<?php uno_e_theme_uri(); ?>assets/js/plugins.bundle.min.js?v=<?php uno_e_version(); ?>"></script>
    <script type="text/javascript" src="<?php uno_e_theme_uri(); ?>assets/js/helpers.bundle.js?v=<?php uno_e_version(); ?>"></script>

  </body>
  </html>
  <?php
}

/**
 * view single data
 */
function uno_view_single_data() {
  global $uno_global_data, $uno_global_id, $uno_global_cat;
  $count = 1;

  ?>
  <?php uno_get_header(); ?>
  <div class="row d-flex align-items-center justify-content-center flex-column">
    <div class="col-lg-10 col-md-12 pb-4">

      <div class="card mb-4">
        <div class="card-body profile-card-body">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="d-flex align-items-lg-end justify-content-lg-end">
                <img src="<?php p_( uno_create_qrcode() ); ?>" class="profile-image mb-2 mt-2" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="d-flex align-items-lg-center justify-content-lg-center mb-2 mt-2">
                <img src="<?php p_( uno_get_the_meta( 'uno_beneficiary_photo' ) ? uno_get_the_meta( 'uno_beneficiary_photo' ) : p_( uno_e_theme_uri() . '/images/avatar.jpg' ) ); ?>" class="profile-image" />
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="d-flex align-items-lg-start justify-content-lg-start mt-2">
                <img src="<?php uno_get_the_meta( 'uno_beneficiary_signature' ) ? p_( uno_get_the_meta( 'uno_beneficiary_signature' ) ) :  p_( uno_e_theme_uri() . '/images/sign-placeholder.png' ); ?>" class="profile-image" />
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-center">
          <h4 class="display-4 mt-3">
            <?php p_(  ucwords( uno_get_the_meta( 'uno_beneficiary_name_last' ) ) .', '. ucwords( uno_get_the_meta( 'uno_beneficiary_name_first' ) ) ); ?>
          </h4>
          <p>Manage Uno beneficiary personal information.</p>
          <div class="row">
            <div class="col d-flex align-items-center justify-content-center mb-4 mt-3">
              <a href="<?php uno_e_site_url(); ?>/beneficiary/edit/?uno_id=<?php p_( $uno_global_id ); ?>&uno_nonce=<?php p_( uno_get_nonce() ); ?>&uno_cat=<?php p_( $uno_global_cat ); ?>" class="btn btn-primary">Edit Profile</a>
            </div>
          </div>
          
        </div>
      </div>
    
      <?php foreach ( $uno_global_data as $table => $rows ): ?>
        <div class="card mb-4 uno_view_single_data">
          <div class="card-body table-responsive form-fields p-0">
            <table class="table table-fields">
              <thead>
                <tr>
                  <th class="text-wrap" colspan="2">
                    <b><?php p_( ucwords( implode( ' ', explode( '_', $table ) ) ) ); ?><b>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ( $rows as $row ): ?>
                  <?php if ( ! isset( $row['label'] ) ): ?>
                    <tr>
                      <td class="text-right">
                        <h3 class="display-5"><?php p_( $count++ ); ?></h3>
                      </td>
                      <td>
                        <table class="table table-sub">
                          <tbody>
                            <?php foreach ( $row as $td ): ?>
                              <tr>
                                <td class="text-wrap"><?php p_( $td['label'] ); ?></td>
                                <td class="text-wrap"><?php p_( $td['value'] ); ?></td>
                              </tr>
                            <?php endforeach; ?>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                  <?php else: ?>
                    <tr>
                      <td class="text-wrap"><?php p_( $row['label'] ); ?></td>
                      <td class="text-wrap">

                        <?php if ( is_array( $row['value'] ) ): ?>
                          <?php foreach ( $row['value'] as $key => $val ): ?>
                            <?php if ( $val ): ?>
                              <?php p_( ucfirst( $key ) ); ?>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        <?php else: ?>
                          <?php p_( $row['value'] ); ?>
                        <?php endif; ?>

                      </td>
                    </tr>
                  <?php endif; ?>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
  <?php uno_get_footer(); ?>
  <?php
}

/**
 * No access page template
 */
function uno_user_no_access() {
  ?>
  <?php uno_get_header(); ?>

  <div class="h-100 d-flex justify-content-center align-items-center flex-column">
    <div class="card">
      <div class="card-body text-center">
        <i class="icon-info icon-lg"></i>
        <h2>Access Error</h2>
        <h4 class="font-weight-light">
          <?php p_( apply_filters( 'uno_error_page_notice', '' ) ); ?>
          <small class="d-block mt-2">Contact your system administrator.</small>
        </h4>
      </div>
    </div>
  </div>

  <?php uno_get_footer(); ?>
  <?php
}
