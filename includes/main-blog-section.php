<?php
 
 $args = array(
    'post_type' => 'post',
    'category_name' => 'main_blog',
    'posts_per_page' => 1,
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
<section class="block-post">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-5 col-lg-6 align-self-center pb-2">
        <span class="tag-post">
          <?php
          $tags = get_the_tags();
            if($tags):
                    foreach($tags as $tag):?>
          <span class="tag-post"> <?php echo $tag->name;?></span>


          <?php endforeach; endif; ?></span>
        <h3 class="post-title"> <?php the_title();?></h3>
        <p class="post-description"><?php the_excerpt(); ?></p>
        <div class="post-publish">
          <span>
            <?php the_date()?>
          </span>
          <!-- <span>
            12min read
          </span> -->
        </div>
        <a href="<?php the_permalink(); ?>" class="post-action mt-5">
          <span>
            Read Now
          </span>
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M5.93974 13.779C5.81307 13.779 5.68641 13.7324 5.58641 13.6324C5.39307 13.439 5.39307 13.119 5.58641 12.9257L9.93307 8.57904C10.2531 8.25904 10.2531 7.73904 9.93307 7.41904L5.58641 3.07237C5.39307 2.87904 5.39307 2.55904 5.58641 2.3657C5.77974 2.17237 6.09974 2.17237 6.29307 2.3657L10.6397 6.71237C10.9797 7.05237 11.1731 7.51237 11.1731 7.99904C11.1731 8.4857 10.9864 8.9457 10.6397 9.2857L6.29307 13.6324C6.19307 13.7257 6.06641 13.779 5.93974 13.779Z" />
          </svg>

        </a>
      </div>
      <div class="col-12 col-md-7 col-lg-6">
        <div class="blog-img text-center">
          <?php if(has_post_thumbnail()):?>
          <img src="<?php the_post_thumbnail_url();?>" alt="photo">
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
    endwhile;
    wp_reset_postdata();
endif;
 ?>