<?php
function barbers_scripts() {
	//google_fonts
	wp_enqueue_style( 'Kivi-Monserat',  'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800;900&display=swap');
	//style_own_carusel
	wp_enqueue_style( 'owl-carusel',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
	wp_enqueue_style( 'owl-carusel-dist',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
	
	//scripts_own_carusel
	
	
	
	
	//mail_js
	wp_enqueue_script( 'kivi-script-mainv', get_template_directory_uri() . '/js/jquery-2.1.1.js', true );
	wp_enqueue_script( 'kivi-script-mainxa', get_template_directory_uri() . '/js/modernizr.js', true );
	wp_enqueue_script( 'kivi-script-mainc', get_template_directory_uri() . '/js/jquery.mobile.custom.min.js', true );
	wp_enqueue_script( 'kivi-script-mainx', get_template_directory_uri() . '/js/main.js', true );
	
	
	wp_enqueue_script( 'kivi-script-main', get_template_directory_uri() . '/js/app.js', 2.6 );
	wp_enqueue_script( 'owl-carusel-jq',  'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
	wp_enqueue_script( 'owl-carusel-dist-js',  'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js');
	
	//main_css
	wp_enqueue_style( 'kivi-style', get_stylesheet_uri(), array(), 6.7 );
	wp_style_add_data( 'kivi-style', 'rtl', 'replace' );
}

add_action( 'wp_enqueue_scripts', 'barbers_scripts' );
//connecting reviews
add_action('init', 'register_post_home');
function register_post_home (){
$cptArgsHome = array(
	'labels'             => array(
		'name'               => 'Главная страница',
		'singular_name'      => 'Главная страница', 
		'add_new'            => 'Добавить страницу',
		'add_new_item'       => 'Добавить новую страницу',
		'edit_item'          => 'Редактировать страницу',
		'new_item'           => 'Новая страницу',
		'view_item'          => 'Посмотреть страницу',
		'search_items'       => 'Найти страницу',
		'not_found'          =>  'Страниц не найдено',
		'not_found_in_trash' => 'В корзине страниц не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Главная страница'
	  ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array('title')
	);
	register_post_type('home', $cptArgsHome );
}
add_theme_support ('post-thumbnails');


//connecting reviews
add_action('init', 'register_post_types');
function register_post_types(){
$cptArgsArray = array(
	'labels'             => array(
		'name'               => 'Отзывы',
		'singular_name'      => 'Отзыв', 
		'add_new'            => 'Добавить новый',
		'add_new_item'       => 'Добавить новый отзыв',
		'edit_item'          => 'Редактировать отзыв',
		'new_item'           => 'Новая отзыв',
		'view_item'          => 'Посмотреть отзыв',
		'search_items'       => 'Найти отзыв',
		'not_found'          =>  'Отзывов не найдено',
		'not_found_in_trash' => 'В корзине отзывов не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Отзывы'
	  ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array('title')
	);
	register_post_type('reviews', $cptArgsArray );
}
add_theme_support ('post-thumbnails');


//connecting 
add_action('init', 'register_post_services');
function register_post_services(){
$cptArgsServices = array(
	'labels'             => array(
		'name'               => 'Услуги',
		'singular_name'      => 'Услугу', 
		'add_new'            => 'Добавить услугу',
		'add_new_item'       => 'Добавить новую услугу',
		'edit_item'          => 'Редактировать услугу',
		'new_item'           => 'Новая услуга',
		'view_item'          => 'Посмотреть услугу',
		'search_items'       => 'Найти услугу',
		'not_found'          =>  'Услуги не найдено',
		'not_found_in_trash' => 'В корзине услуг не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Услуги слайдер'
	  ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array('title')
	);
	register_post_type('services', $cptArgsServices );
}
add_theme_support ('post-thumbnails');




//connecting 
add_action('init', 'register_post_ourservices');
function register_post_ourservices(){
$cptArgsOurservices = array(
	'labels'             => array(
		'name'               => 'Наши услуги',
		'singular_name'      => 'Услугу', 
		'add_new'            => 'Добавить услугу',
		'add_new_item'       => 'Добавить новую услугу',
		'edit_item'          => 'Редактировать услугу',
		'new_item'           => 'Новая услуга',
		'view_item'          => 'Посмотреть услугу',
		'search_items'       => 'Найти услугу',
		'not_found'          =>  'Услуги не найдено',
		'not_found_in_trash' => 'В корзине услуг не найдено',
		'parent_item_colon'  => '',
		'menu_name'          => 'Наши услуги'
	  ),
	'public'             => true,
	'publicly_queryable' => true,
	'show_ui'            => true,
	'show_in_menu'       => true,
	'query_var'          => true,
	'rewrite'            => true,
	'capability_type'    => 'post',
	'has_archive'        => true,
	'hierarchical'       => false,
	'menu_position'      => null,
	'supports'           => array('title')
	);
	register_post_type('ourservices', $cptArgsOurservices );
}
add_theme_support ('post-thumbnails');