<div class="blogs-wrapper">

  <div class="container">
    <div class="row">
      <?php if(have_posts()):while(have_posts()):the_post();?>

      <div class="col-12 col-lg-4">

        <div class="blog-card">
          <div class="blog-img">
            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url();?>" alt="photo" class="img-fluid ">
            <?php endif;?>
            <div>
              <!-- <div class="d-flex flex-wrap gap-2">
                <?php
                 $tags = get_the_tags();
                foreach($tags as $tag):?>
                <span class="tag-post"> <?php echo $tag->name;?></span>


                <?php endforeach; ?>
              </div> -->
              <a href="<?php the_permalink()?>">
                <h3 class="post-title"><?php the_title();?></h3>
              </a>

              <div class="post-publish">
                <span>
                  <?php echo get_the_date();?>
                </span>
                <!-- <span>
                    <?php echo get_post_time();?>
                    read
                  </span> -->
              </div>

            </div>
          </div>
        </div>

      </div>
      <?php endwhile; else: endif;?>
    </div>
    <div class="row mt-5">
      <div class="col-12 col-lg-4 text-center mx-auto">
        <div class="blogs-preview">
          You’ve viewed <span class="per_page"></span> of <span class="total"></span> articles
        </div>
        <div class="progress-bar my-3">
          <span class="percent-scroll"></span>
        </div>
        <div class="d-grid">
          <button class="load-more">
            load more
          </button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <?php the_excerpt();?> -->