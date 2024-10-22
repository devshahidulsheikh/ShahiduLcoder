<?php

// Loading CSS file
function login_style_enqueue() {
  wp_enqueue_style("login-style",esc_url(get_stylesheet_directory_uri()) ."/css/login_enqueue.css",array(),"1.0.1","all");

}
add_action("login_enqueue_scripts","login_style_enqueue");


// Changing Login form logo
function login_logo_change(){
  ?>
  <style>
    #login h1 a,.login h1 a {
      background-image: url(<?php print get_stylesheet_directory_uri(); ?>../img/logo-sm.png);
      border-radius: 6px;
    }
  </style>

  <?php
}
add_action("login_enqueue_scripts","login_logo_change");

// Changing Login form logo url
function login_logo_url_change(){
  return home_url();
}
add_filter("login_headerurl","login_logo_url_change");