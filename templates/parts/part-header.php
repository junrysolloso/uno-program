<?php defined( 'ABSPATH' ) or exit(); ?>
<?php uno_user_check_cap( 'read' ); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="theme-color" content="#0E3355" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title><?php p_( get_the_title() ); ?> | Uno Program In The Province Of Dinagat Islands</title>

  <link rel="manifest" href="<?php uno_e_theme_uri(); ?>/manifest.json">
  <link rel="shortcut icon" href="<?php uno_e_theme_uri(); ?>/images/icons/icon-96.png" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/simple-line-icons/css/simple-line-icons.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/css/vendor.bundle.base.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/select2/css/select2.min.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/icheck/all.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/style-main.min.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/style.min.css" />
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/vendors/css/microtip.css" />

  <?php apply_filters( 'uno_custom_css', 'css' ); ?>
  <link rel="stylesheet" href="<?php uno_e_theme_uri(); ?>assets/css/user.css?v=<?php uno_e_version(); ?>" />
</head>
<body>

  <input type="hidden" id="base_url" value="<?php uno_e_site_url(); ?>" />
  <input type="hidden" id="ajax_url" value="<?php uno_e_site_url(); ?>wp-admin/admin-ajax.php" />

  <?php uno_get_topbar(); ?>
  <?php uno_get_sidebar(); ?>
