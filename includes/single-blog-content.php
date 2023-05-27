<?php if(have_posts()):while(have_posts()):the_post();?>
<div class="row">
  <div class="col-12">
    <nav style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">1Pass</a></li>
        <li class="breadcrumb-item active" aria-current="page">Blog</li>
      </ol>
    </nav>
  </div>
  <div class="col-12">
    <div class="single-blog__img">
      <?php if(has_post_thumbnail()):?>
      <img src="<?php the_post_thumbnail_url('blog-large');?>" alt="photo">
      <?php endif;?>
    </div>
  </div>
  <div class="col-12 my-4">
    <div class="row">
      <div class="col-12 col-sm-4 d-flex align-items-center gap-4 mb-2">
        <?php
          $tags = get_the_tags();
            if($tags):
                    foreach($tags as $tag):?>
        <span class="single-blog__tag"> <?php echo $tag->name;?></span>


        <?php endforeach; endif; ?></span>

        <span class="single-blog__publish">
          <?php the_date()?>
        </span>
      </div>
      <div class="col-12 col-sm-8 d-flex align-items-center justify-content-lg-end gap-4 share">
        <span>
          <?php pll_e('share_on'); ?>

        </span>
        <div class="ssk-group ssk-count d-flex align-items-center gap-3">
          <a href="" class="ssk ">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/twitter.svg'?>" alt="logo" />
          </a>
          <a href="" class="ssk ">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/linkedin.svg'?>" alt="logo" />
          </a>
          <a href="" class="ssk ">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/facebook.svg'?>" alt="logo" />
          </a>

          <a href="" class="ssk ">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/twitter.svg'?>" alt="logo" />
          </a>
          <a href="" class="ssk ">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/whtsapp.svg'?>" alt="logo" />
          </a>
          <a href="" class="ssk ssk-telegram">
            <img src="<?php echo get_template_directory_uri().'/assets/share-icons/telegram.svg'?>" alt="logo" />
          </a>


        </div>
      </div>
    </div>
  </div>
  <div class="col-12">
    <h1 class="single-blog__title">
      <?php the_title();?>
    </h1>
    <div class="single-blog__content">
      <?php the_content();?>
    </div>
  </div>
  <div class="single-blog__follow_us">
    <div class="col-12">
      <div class="row">
        <div class="col-12 col-sm-4 d-flex align-items-center gap-4 mb-2">
          <h3> <?php pll_e('follow_us_on_social_media'); ?>
          </h3>
        </div>
        <div class="col-12 col-sm-8 d-flex align-items-center justify-content-lg-end gap-4 share">

          <div class="ssk-group ssk-count d-flex align-items-center gap-3">
            <a href="" class="ssk ">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/twitter.svg'?>" alt="logo" />
            </a>
            <a href="" class="ssk ">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/linkedin.svg'?>" alt="logo" />
            </a>
            <a href="" class="ssk ">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/facebook.svg'?>" alt="logo" />
            </a>

            <a href="" class="ssk ">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/twitter.svg'?>" alt="logo" />
            </a>
            <a href="" class="ssk ">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/whtsapp.svg'?>" alt="logo" />
            </a>
            <a href="" class="ssk ssk-telegram">
              <img src="<?php echo get_template_directory_uri().'/assets/share-icons/telegram.svg'?>" alt="logo" />
            </a>


          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<?php endwhile; else: endif;?>