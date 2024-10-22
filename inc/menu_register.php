<?php
register_nav_menu("main_menu",__("Main Menu","shahidul"));

// Walker Menu Properties
function sha_nav_description($item_output,$item) {
  if(!empty($item->description)) {
    $item_output = str_replace($item->menu ."</a>","<p class='walker_nav m-0'>" .$item->description. "</p>" .$item->menu ."</a>",$item_output);
  }
  return $item_output;
}
add_filter("walker_nav_menu_start_el","sha_nav_description",10,2);