<?php

function sha_customizer_register($wp_customize) {
  // Header Area Function
  $wp_customize->add_section("sha_header_area",array(
    "title" => __("Header Area","shahidul"),
    "description" => "If you interested to update your header area,you can do it here.",
  ));
  $wp_customize->add_setting("sha_logo",array(
    "default" => get_template_directory_uri("template_directory") ."/img/logo.png"
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,"sha_logo",array(
    "label" => "Logo Upload",
    "setting" => "sha_logo",
    "section" => "sha_header_area",
    "description" => "If you interested to change or update your logo,you can do it here.",
  )));

  // Menu Position Option
  $wp_customize->add_section("sha_menu_option",array(
    "title" => __("Menu Position Option","shahidul"),
    "description" => "If you interested to change your menu position you can do it."
  ));

  $wp_customize->add_setting("sha_menu_position",array(
    "default" => "right_menu",
  ));

  $wp_customize-> add_control("sha_menu_position",array(
    "label" => "Menu Position",
    "description" => "Select your menu position",
    "setting" => "sha_menu_position",
    "section" => "sha_menu_option",
    "type" => "radio",
    "choices" => array(
      "left_menu" => "Left Menu",
      "right_menu" => "Right Menu",
      "center_menu" => "Center Menu",
    ),
  ));

  // Footer Option
  $wp_customize->add_section("sha_footer_option",array(
    "title" => __("Footer Option","shahidul"),
    "description" => "If you interested to change or update your footer settings you can do it."
  ));

  $wp_customize->add_setting("sha_copyright_section",array(
    "default" => "&copy; Copyright 2023 | Procoder BD",
  ));

  $wp_customize->add_control("sha_copyright_section",array(
    "label" => "Copyright Text",
    "description" => "If need you can update your copyright text from here",
    "setting" => "sha_copyright_section",
    "section" => "sha_footer_option",
  ));

  // Theme Color
  $wp_customize->add_section("sha_colors",array(
    "title" => __("Theme Color","shahidul"),
    "description" => "If need you can change your theme color.",
  ));

  $wp_customize->add_setting("sha_bg_color",array(
    "default" => "#fff",
  ));
  $wp_customize->add_control(new WP_Customize_color_control($wp_customize,"sha_bg_color",array(
    "label" => "Background Color",
    "section" => "sha_colors",
    "settings" => "sha_bg_color",
  )));
  $wp_customize->add_setting("sha_link_color",array(
    "default" => "#FF6600",
  ));
  $wp_customize->add_control(new WP_Customize_color_control($wp_customize,"sha_link_color",array(
    "label" => "Link Color",
    "section" => "sha_colors",
    "settings" => "sha_link_color",
  )));

  // Theme custom login page
  /* Logo */
  $wp_customize->add_section("sha_custom_login",array(
    "title" => __("Custom Login","shahidul"),
    "description" => "If need you can change your theme custom login info.",
  ));
  $wp_customize->add_setting("sha_login_logo",array(
    "default" => get_template_directory_uri("template_directory") ."/img/logo-sm.png"
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,"sha_login_logo",array(
    "label" => "Logo Upload",
    "setting" => "sha_login_logo",
    "section" => "sha_custom_login",
    "description" => "If you interested to change or update your login logo,you can do it here.",
  )));
  
  /* Background */
  $wp_customize->add_setting("sha_login_bg",array(
    "default" => get_template_directory_uri("template_directory") ."/img/login.jpg"
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,"sha_login_bg",array(
    "label" => "Background Upload",
    "setting" => "sha_login_bg",
    "section" => "sha_custom_login",
    "description" => "If you interested to change or update your background image, you can do it here.",
  )));

  /* Color */
  $wp_customize->add_setting("sha_login_color",array(
    "default" => "#FF6600",
  ));
  $wp_customize->add_control(new WP_Customize_color_control($wp_customize,"sha_login_color",array(
    "label" => "Login Page Color",
    "section" => "sha_custom_login",
    "settings" => "sha_login_color",
  )));
}
add_action("customize_register","sha_customizer_register");

// Theme Primary Color
function sha_theme_color_cus(){
  ?>
  <style>
    body { background: <?php print get_theme_mod("sha_bg_color"); ?>}
    :root { --link: <?php print get_theme_mod("sha_link_color"); ?>}
  </style>
  <?php 
}
add_action("wp_head","sha_theme_color_cus");

// Theme Custom Login Page Style
function sha_login_color_cus(){
  ?>
  <style>
    #login h1 a,.login h1 a {
      background-image: url(<?php print get_theme_mod("sha_login_logo"); ?>) !important;
    }
    body.login {
      background: url(<?php print get_theme_mod("sha_login_bg"); ?>) !important;
    }

    #login form p.submit input {
      background: <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    .login #login_error,
    .login .message,
    .login .success {
      border-left: 4px solid <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    input#user_login,
    input#user_pass {
      border-left: 4px solid <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    input[type=text]:focus,input[type=password]:focus {
      box-shadow: 0 0 0 1px <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    .login .button.wp-hide-pw:focus {
      border-color: <?php print get_theme_mod("sha_login_color") ?> !important;
      box-shadow: 0 0 0 1px <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    .wp-core-ui .button-secondary {
    color: <?php print get_theme_mod("sha_login_color") ?> !important;
    }
    .wp-core-ui .button-secondary:hover,
    .wp-core-ui .button-secondary:focus {
      border-color: <?php print get_theme_mod("sha_login_color") ?> !important;
    }
  </style>
  <?php 
}
add_action("login_enqueue_scripts","sha_login_color_cus");
