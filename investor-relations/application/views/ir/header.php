<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo SEO_TITLE; ?></title>

  <meta charset="utf-8">
  <meta name="description" content="<?php echo SEO_DESCRIPTION; ?>">
  <meta property="og:url" content="<?php echo SEO_OG_URL; ?>" />
  <meta property="og:type" content="<?php echo SEO_OG_TYPE; ?>" />
  <meta property="og:title" content="<?php echo SEO_OG_TITLE; ?>" />
  <meta property="og:description" content="<?php echo SEO_OG_DESCRIPTION; ?>" />
  <meta property="og:image" content="<?php echo SEO_OG_IMAGE; ?>" />


  <link rel="shortcut icon" href="<?php echo BASE_URL . PATH_ICON; ?>" type="image/x-icon">

  <!-- Additional CSS -->
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,500&display=swap" rel="stylesheet">


  <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->

  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css">
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script> -->

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/ir.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/debug.css" type="text/css"> -->

  <!-- <script src="<?php echo BASE_URL; ?>assets/js/ckeditor.js"></script> -->

  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css"> -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css" type="text/css"> -->

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

  <!-- <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
      document.querySelectorAll('.dropdown-menu').forEach(function(element) {
        element.addEventListener('click', function(e) {
          e.stopPropagation();
        });
      })
    });
  </script> -->

  <!-- <link rel="stylesheet" href="assets/recaptcha.css"> -->
  <!-- <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"> -->
  <!-- <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css"> -->

  
  <!-- mobirise -->
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/icons-mind/style.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/icon54/style.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/icon54-v2/style.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/icon54/style.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrap-material-design-font/css/material.css">

  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrap/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/bootstrap/css/bootstrap-reboot.min.css">

  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/tether/tether.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/dropdown/css/style.css">

  <!-- data table -->
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/datatables/data-tables.bootstrap4.min.css">

  <!-- <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/theme/css/style.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/recaptcha.css"> -->

  <link rel="preload" as="style" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/mobirise/css/mbr-additional.css">
  <link rel="stylesheet" href="<?php echo BASE_URL . PATH_MOBIRISE;?>assets/mobirise/css/mbr-additional.css" type="text/css">

  <!-- vin -->
  <!-- <link rel="stylesheet" href="<?php echo BASE_URL;?>assets/ir/mega-menu/style.css" /> -->

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css">
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/footer.css" type="text/css">



  <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css"> -->
  <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->

  
</head>

</head>

<body>