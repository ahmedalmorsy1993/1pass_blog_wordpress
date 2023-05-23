<div class="blogs-wrapper" style="margin-top: 0">
  <div class="container">
    <div class="row">
      <?php if(have_posts()):while(have_posts()):the_post();?>

      <div class="col-12 col-lg-4">
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
      <?php endwhile; else: endif;?>
    </div>
    <!-- <div class="row mt-5">
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
    </div> -->
  </div>
</div>

<!-- <?php the_excerpt();?> -->