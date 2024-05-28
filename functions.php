<?php 
  register_nav_menus(
    array('primary-menu'=>'Header Menu')
  );

  add_theme_support('post-thumbnails');
  add_theme_support('custom-header');

  register_sidebar(
    array(
      'name'=> 'Sidebar Location',
      'id'=> 'sidebar'
    )
  );

  register_sidebar(
    array(
      'name'=> 'Footer Menus',
      'id'=> 'footer_menus'
    )
  );

  register_sidebar(
    array(
      'name'=> 'Footer Categories Menus',
      'id'=> 'footer_categories_menus'
    )
  );

  function my_custom_theme_enqueue_elementor_css() {
      // Enqueue Elementor styles
      if ( did_action( 'elementor/loaded' ) ) {
          wp_enqueue_style( 'elementor-frontend' );
      }
  }
  add_action( 'wp_enqueue_scripts', 'my_custom_theme_enqueue_elementor_css' );

  // Ensure your theme supports Elementor
  function my_custom_theme_add_elementor_support() {
      // Add theme support for Elementor
      add_theme_support( 'elementor' );
      // Add theme support for Elementor Pro's custom header/footer locations
      add_theme_support( 'elementor-pro' );
  }
  add_action( 'after_setup_theme', 'my_custom_theme_add_elementor_support' );


?>