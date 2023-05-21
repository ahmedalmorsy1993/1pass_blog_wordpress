<?php get_header();?>

<div class="blogs-wrapper search-page">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="search-result">Search results for <?php echo get_search_query();?>:</h2>
      </div>
      <div class="col-12">
        <nav style="--bs-breadcrumb-divider: '<';" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">1Pass</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
            <li class="breadcrumb-item active" aria-current="page"> <?php echo get_search_query();?>:</li>
          </ol>
        </nav>
      </div>
      <?php if(have_posts()):while(have_posts()):the_post();?>
      <div class="col-12 col-lg-4">
        <div class="blog-card">
          <div class="blog-img">
            <?php if(has_post_thumbnail()):?>
            <img src="<?php the_post_thumbnail_url();?>" alt="photo">
            <?php endif;?>


          </div>
          <div class="mt-2">
            <span class="tag-post">Nutrition</span>
            <a href="<?php the_permalink()?>">
              <h3 class="post-title"><?php the_title();?></h3>
            </a>
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
  </div>

</div>
</div>

<?php get_footer();?>