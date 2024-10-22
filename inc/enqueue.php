<?php

// Admin CSS Enqueue
function theme_option_custom_css() {
  wp_enqueue_style("theme_option_custom_css",get_template_directory_uri()."/css/theme_option_custom.css", array(),"1.0.0", "all");
}
add_action("admin_enqueue_scripts","theme_option_custom_css");

// Theme CSS JS Enqueue
function sha_css_js_file_calling() {
  wp_enqueue_style("sha-style",esc_url(get_stylesheet_uri()));

  wp_register_style("custom",esc_url(get_template_directory_uri()) ."/css/custom.css",array(),"1.0.1","all");
  wp_enqueue_style("custom");

  wp_register_style("bxslider",esc_url(get_template_directory_uri()) ."/css/bxslider.min.css",array(),"4.2.12","all");
  wp_enqueue_style("bxslider");

  wp_register_style("slicknav",esc_url(get_template_directory_uri()) ."/css/slicknav.css",array(),"1.0.1","all");
  wp_enqueue_style("slicknav");

  wp_register_style("owl_carousel",esc_url(get_template_directory_uri()) ."/css/owl.carousel.min.css",array(),"2.3.4","all");
  wp_enqueue_style("owl_carousel");

  wp_register_style("owl_theme_default",esc_url(get_template_directory_uri()) ."/css/owl.theme.default.min.css",array(),"2.3.4","all");
  wp_enqueue_style("owl_theme_default");

  wp_register_style("fontawesome","https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css",array(),"6.4.0","all");
  wp_enqueue_style("fontawesome");

  wp_register_style("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css",array(),"5.3.1","all");
  wp_enqueue_style("bootstrap");

  wp_register_style("responsive",esc_url(get_template_directory_uri()) ."/css/responsive.css",array(),"1.0.1","all");
  wp_enqueue_style("responsive");

  /* jQuery */
  wp_enqueue_script("jquery");
  wp_enqueue_script("bootstrap","https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js",array(),"5.3.1","true");
  wp_enqueue_script("bxslider",esc_url(get_template_directory_uri()) ."/js/bxslider.min.js",array(),"4.2.12","true");
  wp_enqueue_script("slicknav",esc_url(get_template_directory_uri()) ."/js/slicknav.js",array(),"4.2.12","true");
  wp_enqueue_script("owl_carousel",esc_url(get_template_directory_uri()) ."/js/owl.carousel.min.js",array(),"2.3.4","true");
  wp_enqueue_script("main",esc_url(get_template_directory_uri()) ."/js/main.js",array(),"1.0.1","true");

}
add_action("wp_enqueue_scripts","sha_css_js_file_calling");

// Google Fonts Enqueue
function sha_add_google_fonts(){
  wp_enqueue_style("sha_google_fonts","https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap",false);
}
add_action("wp_enqueue_scripts","sha_add_google_fonts");


/* // Dashicon Not Showing Fixing
function dashicon_load_issue() {
  wp_enqueue_style("dashicons");
}
add_action("wp_enqueue_scripts","dashicon_load_issue"); */