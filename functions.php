<?php
// wp_get_theme()->get('Version'
function load_js(){
  wp_enqueue_script("bootstrap",get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array(),null);
  wp_enqueue_script('swiper',get_template_directory_uri().'/assets/swiper/swiper-bundle.min.js',array(),'1.0',true);
  wp_enqueue_script('main-script',get_template_directory_uri().'/assets/js/main.js',array(),'1.0',true);
  wp_enqueue_script('social-share',get_template_directory_uri().'/assets/social-share/js/social-share-kit.min.js',array(),'1.0',true);
}

function load_css(){

  wp_enqueue_style("bootstrap-style",get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',array(),null,'all');
  wp_enqueue_style("swiper",get_template_directory_uri().'/assets/swiper/swiper.min.css',array(),null,'all');

  wp_enqueue_style('social-share',get_template_directory_uri().'/assets/social-share/css/social-share-kit.css',array(),'1.0',true);
  wp_enqueue_style("style",get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
}

add_action('wp_enqueue_scripts','load_css');
add_action('wp_enqueue_scripts','load_js');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// custom image sizes
add_image_size('blog-large',800,400,false);
add_image_size('blog-small',300,200,true);