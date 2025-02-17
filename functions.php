<?php

  // Add Styles
  function add_styles() {
    wp_enqueue_style("framework", get_template_directory_uri() . "/css/framework.css", array(), rand(111, 9999), "all");
    wp_enqueue_style("font-awesome", get_template_directory_uri() . "/css/all.min.css", array(), rand(111, 9999), "all");
    wp_enqueue_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.min.css");
    wp_enqueue_style("main", get_template_directory_uri() . "/css/main.css", array(),  rand(111, 9999), "all");


}

  // Add Scripts
  function add_scripts() {
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.bundle.min.js", array(), "1.0", true);
    wp_enqueue_script("main", get_template_directory_uri() . "/js/main.js", array(), "1.0", true);
 }

    // Add Actions
    add_action("wp_enqueue_scripts", "add_styles");
    add_action("wp_enqueue_scripts", "add_scripts");

    require_once("wp_nav_menu_walker.php");

    // Register Menus
    register_nav_menu("header", "Header Menu");
    

    function header_menu() {
        wp_nav_menu(array(
          'theme_location' => 'header',
          'container' => false,
          'menu_class' => '',
          'fallback_cb' => '__return_false',
          'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new bootstrap_5_wp_nav_menu_walker()
        ));
      }

  // Add Theme Support
  add_theme_support("post-thumbnails");
  add_theme_support("post-formats", array("video", "image", "gallery"));

  // after theme setup
  function custom_theme_setup() {
    add_theme_support('title-tag');
  }
  add_action('after_setup_theme', 'custom_theme_setup');
