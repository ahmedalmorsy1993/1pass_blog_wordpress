<?php
 
 $args = array(
    'post_type' => 'post',
    'category_name' => 'recent_releases',
    'posts_per_page' => 10,
    
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
<div class="col-12 col-lg-4">
  <div class="blog-card">
    <div class="blog-img">
      <img src="<?php echo get_template_directory_uri().'/assets/img/blog-img.svg'?>" alt="logo" />

    </div>
    <div>
      <span class="tag-post">Nutrition</span>
      <h3 class="post-title">The advantages for mental well-being that come from physical activity.</h3>

      <div class="post-publish">
        <span>
          Dec 01, 2022
        </span>
        <span>
          12min read
        </span>
      </div>

    </div>
  </div>
</div>


<?php
    endwhile;
    wp_reset_postdata();
endif;
 ?>