<?php 
add_action( 'wp_enqueue_scripts', 'theme_name_styles' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_name_styles() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style( 'fa-viber', get_template_directory_uri() . '/css/fa-viber.css');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css');
  wp_enqueue_style( 'slick', get_template_directory_uri() . '/slick/slick.css');
  wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/slick/slick-theme.css');
  wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.css');
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css');
  // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function theme_scripts(){
wp_deregister_script( 'jquery');
wp_register_script( 'jquery', 'https://code.jquery.com/jquery-2.2.0.min.js');
wp_enqueue_script( 'jquery');
wp_enqueue_script( 'slick_js', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), null, true );
wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true );


};

add_action('after_setup_theme', function(){

  add_theme_support('menus');
  add_theme_support( 'custom-logo' );
  add_theme_support( 'post-thumbnails' );
  add_image_size('post-thumb', 180 , 180, true);
  register_nav_menu('nav', 'top_menu');
  register_nav_menu('footer-nav', 'footer_menu');
  register_nav_menu('polyclinic-menu', 'polyclinic_menu');
  register_nav_menu('clinic-menu', 'clinic_menu');
  add_filter( 'the_excerpt', 'wpautop' );
  add_filter( 'excerpt_length', function() {return 40;});
  add_filter('excerpt_more', function($more) {return '...';});
  
});

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => sprintf(__('Sidebar %d'), $i ),
		'id'            => "side1",
		'description'   => '',
		'class'         => 'sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle" style="display: none;">',
		'after_title'   => "</h2>\n",
	) );
}


  // задаем li элементам меню класс
      add_filter( 'nav_menu_css_class', 'special_nav_class', 10, 4 );
   function special_nav_class($classes, $item, $args, $depth ){
	if ( $args->theme_location === 'nav' ) {
		$classes = [ 'nav-wrap_elem' ];
	} else {
		$classes = [];
	}
	
	

  return $classes;
  };


?>