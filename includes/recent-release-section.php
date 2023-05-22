<section class="recent-release">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div class="col-6">
            <h3>Recent Releases</h3>
          </div>
          <div class="col-6 d-flex justify-content-end">
            <div class="slider-action">

              <button class="left-arrow prev-slide">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.93974 13.779C5.81307 13.779 5.68641 13.7324 5.58641 13.6324C5.39307 13.439 5.39307 13.119 5.58641 12.9257L9.93307 8.57904C10.2531 8.25904 10.2531 7.73904 9.93307 7.41904L5.58641 3.07237C5.39307 2.87904 5.39307 2.55904 5.58641 2.3657C5.77974 2.17237 6.09974 2.17237 6.29307 2.3657L10.6397 6.71237C10.9797 7.05237 11.1731 7.51237 11.1731 7.99904C11.1731 8.4857 10.9864 8.9457 10.6397 9.2857L6.29307 13.6324C6.19307 13.7257 6.06641 13.779 5.93974 13.779Z" />
                </svg>
              </button>
              <button class="right-arrow next-slide"> <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M5.93974 13.779C5.81307 13.779 5.68641 13.7324 5.58641 13.6324C5.39307 13.439 5.39307 13.119 5.58641 12.9257L9.93307 8.57904C10.2531 8.25904 10.2531 7.73904 9.93307 7.41904L5.58641 3.07237C5.39307 2.87904 5.39307 2.55904 5.58641 2.3657C5.77974 2.17237 6.09974 2.17237 6.29307 2.3657L10.6397 6.71237C10.9797 7.05237 11.1731 7.51237 11.1731 7.99904C11.1731 8.4857 10.9864 8.9457 10.6397 9.2857L6.29307 13.6324C6.19307 13.7257 6.06641 13.779 5.93974 13.779Z" />
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 p-0">
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php
 
 $args = array(
    'post_type' => 'post',
    'category_name' => 'recent_releases',
    
);
$arr_posts = new WP_Query( $args );
  
if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
            <div class="swiper-slide">
              <div class="blog-card">
                <div class="blog-img">
                  <?php if(has_post_thumbnail()):?>
                  <img src="<?php the_post_thumbnail_url();?>" alt="photo">
                  <?php endif;?>
                </div>
                <div>
                  <?php
                $tags = get_the_tags();
                   if($tags):
                    foreach($tags as $tag):?>
                  <span class="tag-post"> <?php echo $tag->name;?></span>


                  <?php endforeach; endif; ?></span>
                  <h3 class="post-title">
                    <a href="<?php the_permalink(); ?>">
                      <?php the_title();?>
                    </a>

                  </h3>

                  <div class="post-publish">
                    <span>
                      <?php echo get_the_date();?>
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


          </div>

        </div>
      </div>
    </div>
  </div>
</section>