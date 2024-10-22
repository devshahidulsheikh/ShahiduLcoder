<?php
/*
* This template for displaying the header
*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="header_area" class="<?php print get_theme_mod("sha_menu_position") ?>">
  <div class="top_header_area p-2 mb-2">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <a class=" text-white text-decoration-none" href="#"><i class="fa-sharp fa-solid fa-location-dot"></i> <?php print get_option("address-info"); ?></a>
        </div>
        <div class="col-md-4 text-center">
          <a class=" text-white text-decoration-none" href="mailto: <?php print get_option("email-info"); ?>"><i class="fa-solid fa-envelope"></i> <?php print get_option("email-info"); ?></a>
        </div>
        <div class="col-md-4 text-end">
          <a class=" text-white text-decoration-none" href="tel: <?php print get_option("phone-number"); ?>"><i class="fa-solid fa-phone"></i> <?php print get_option("phone-number"); ?></a>
        </div>
      </div>
    </div>
  </div>
  <div class="container py-2">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php print home_url() ?>"><img src="<?php print get_theme_mod("sha_logo") ?>" alt=""></a>
      </div>
      <div class="col-md-9">
        <?php wp_nav_menu(array(
          "theme_location" => "main_menu",
          "menu_id" => "nav"
        )) ?>
      </div>
    </div>
  </div>
</header>