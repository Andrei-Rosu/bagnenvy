<?php

function bag_files(){
	wp_enqueue_style('bootstrap', get_theme_file_uri('/lib/bootstrap/css/bootstrap.min.css'));
	wp_enqueue_style('font-awesome', get_theme_file_uri('/lib/font-awesome/css/font-awesome.min.css'));
	wp_enqueue_style('animate', get_theme_file_uri('/lib/animate/animate.min.css'));
	wp_enqueue_style('ionicons', get_theme_file_uri('/lib/ionicons/css/ionicons.min.css'));
	wp_enqueue_style('carousel', get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('main_styles', get_stylesheet_uri(), NULL, microtime());
	wp_enqueue_script('jqueryjs', get_theme_file_uri('/lib/jquery/jquery.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jquerymigratejs', get_theme_file_uri('/lib/jquery/jquery-migrate.min.js'), null, '1.0', true);
	wp_enqueue_script('popperjs', get_theme_file_uri('/lib/popper/popper.min.js'), null, '1.0', true);
	wp_enqueue_script('bootstrapjs', get_theme_file_uri('/lib/bootstrap/js/bootstrap.min.js'), null, '1.0', true);
	wp_enqueue_script('easingjs', get_theme_file_uri('/lib/easing/easing.min.js'), null, '1.0', true);
	wp_enqueue_script('owljs', get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'), null,'1.0', true);
	wp_enqueue_script('scrollrevealjs', get_theme_file_uri('lib/scrollreveal/scrollreveal.min.js'), null, '1.0', true);
	wp_enqueue_script('contactjs', get_theme_file_uri('/contactform/contactform.js'), null,'1.0', true);

    wp_enqueue_script('main', get_theme_file_uri('js/main.js'), null, '1.0', true);
	wp_enqueue_script('pic', get_theme_file_uri('js/pic.js'), null, '1.0', true);
	wp_enqueue_script('script', get_theme_file_uri('js/script.js'), null, '1.0', true);
}
add_action('wp_enqueue_scripts', 'bag_files');

function bag_features(){
	add_theme_support('title-tag');
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 50, 50);
	add_image_size( 'single-post-thumbnail', 590, 180 );
}
add_action('after_setup_theme', 'bag_features');
function catch_that_image() {
	global $post, $posts;
	$first_img = '';
	ob_start();
	ob_end_clean();
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];

	if(empty($first_img)){ //Defines a default image
		$first_img = "/img/bees.png";
	}
	return $first_img;
}
add_filter('the_content', 'strip_images',2);

function strip_images($content){
	return preg_replace('/<img[^>]+./','',$content);
}



add_filter('widget_text', 'do_shortcode');




