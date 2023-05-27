<?php
// wp_get_theme()->get('Version'
function load_js(){
  wp_enqueue_script('jquery');
  wp_enqueue_script("bootstrap",get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js',array(),null);
  wp_enqueue_script('swiper',get_template_directory_uri().'/assets/swiper/swiper-bundle.min.js',array(),'1.0',true);
  wp_enqueue_script('share-js-icon',get_template_directory_uri().'/assets/social-share/js/social-share-kit.min.js',array(),'1.0',true);

  wp_enqueue_script('main-script',get_template_directory_uri().'/assets/js/main.js',array(),'1.0',true);
  wp_enqueue_script('ajaxHandler',get_template_directory_uri().'/assets/js/ajaxHandler.js',array(),'1.0',true);
}

function load_css(){

  wp_enqueue_style("bootstrap-style",get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css',array(),null,'all');
  wp_enqueue_style("swiper",get_template_directory_uri().'/assets/swiper/swiper.min.css',array(),null,'all');
  wp_enqueue_style("share-icon",get_template_directory_uri().'/assets/social-share/css/social-share-kit.css',array(),null,'all');


  wp_enqueue_style("style",get_stylesheet_uri(),array(),filemtime(get_template_directory().'/style.css'),'all');
}

add_action('wp_enqueue_scripts','load_css');
add_action('wp_enqueue_scripts','load_js');
add_action('wp_ajax_nopriv_load_more_posts','load_more_posts');
add_action('wp_ajax_load_more_posts','load_more_posts');


// theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// custom image sizes
add_image_size('blog-large',800,400,false);
add_image_size('blog-small',300,200,true); 


function load_more_posts(){
  $next_page = $_POST['current_page'];
  $query = new WP_Query([
    'posts_per_page' => 3,
    'paged' => $next_page
  ]);

  if($query->have_posts()):
    ob_start();
    while($query->have_posts()):$query->the_post();
      get_template_part('template-parts/blog-content');
  endwhile;
  endif;

  wp_send_json_success(ob_get_clean());
};



function my_theme_setup() {
  load_theme_textdomain( '1pass-blog', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

add_action('init', function() {
  pll_register_string('1pass_blog', '1pass_blog');
  pll_register_string('No_charge_no_spam_you_can_unsubscribe_anytime', 'No_charge_no_spam_you_can_unsubscribe_anytime');
  pll_register_string('monthly_wellnes_newsletter', 'monthly_wellnes_newsletter');
  pll_register_string('email', 'email');
  pll_register_string('recent_releases', 'recent_releases');
  pll_register_string('hero_section_title', 'hero_section_title');
  pll_register_string('get_the_app', 'get_the_app');
  pll_register_string('you_viewed', 'you_viewed');
  pll_register_string('of', 'of');
  pll_register_string('articles', 'articles');
  pll_register_string('load_more', 'load_more');
  pll_register_string('You_may_also_like', 'You_may_also_like');
  pll_register_string('follow_us_on_social_media', 'follow_us_on_social_media');
  pll_register_string('share_on', 'share_on');
  pll_register_string('read_more', 'read_more');
  pll_register_string('start_your_workout', 'start_your_workout');
});