<?php

function sha_add_theme_page() {
  add_menu_page( 
    "Theme Option for Admin", // $page_title:string, 
    "Theme Option", // $menu_title:string, 
    "manage_options", // $capability:string, 
    "sha_theme_option", // $menu_slug:string, 
    "sha_theme_create_page", // $callback:callable, 
    get_template_directory_uri() ."/img/mini-logo.png", // $icon_url:string, 
    101, // $position:integer|float|null 
  );

  add_submenu_page(
    "sha_theme_option", // $parent_slug:string,
    "Theme Option", // $page_title:string,
    "General", // $menu_title:string,
    "manage_options", // $capability:string,
    "sha_theme_option", // $menu_slug:string,
    "sha_theme_create_page", // $callback:callable,
    // $position:integer|float|null
  );
  add_submenu_page(
    "sha_theme_option", // $parent_slug:string,
    "Theme Custom CSS", // $page_title:string,
    "Custom CSS", // $menu_title:string,
    "manage_options", // $capability:string,
    "sha_custom_css", // $menu_slug:string,
    "sha_theme_custom_css_page", // $callback:callable,
    // $position:integer|float|null
  );
  add_submenu_page(
    "sha_theme_option", // $parent_slug:string,
    "Theme Custom javaScript", // $page_title:string,
    "Custom JS", // $menu_title:string,
    "manage_options", // $capability:string,
    "sha_custom_js", // $menu_slug:string,
    "sha_theme_custom_js_page", // $callback:callable,
    // $position:integer|float|null
  );
}
add_action("admin_menu","sha_add_theme_page");

function sha_theme_create_page() {
  // Generating Theme option
  require_once(get_template_directory() ."/inc/theme-option/general.php");
}

function sha_theme_custom_css_page() {
  // Generating Theme option
  require_once(get_template_directory() ."/inc/theme-option/custom_css.php");
}
function sha_theme_custom_js_page() {
  // Generating Theme option
  require_once(get_template_directory() ."/inc/theme-option/custom_js.php");
}