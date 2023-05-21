<?php get_header();?>

<main class="single-blog">
  <div class="container">
    <div class="row">


      <div class="col-12 col-lg-8">
        <?php get_template_part('includes/single-blog','content')?>
      </div>
      <div class="col-12 col-lg-4">
        <div class="row">
          <div class="col-12">
            <div class="single-blog__sidebar">
              <div class="col-12">
                <h2>
                  You may also like
                </h2>
              </div>
              <div class="col-12">

                <div class="single-blog__sidebar__widget__card mb-2">
                  <span class="single-blog__tag">
                    Nutrition
                  </span>
                  <h2>
                    The advantages for mental well-being that come from physical activity.
                  </h2>
                  <div class="col-12 single-blog__sidebar__widget__card__publish ">
                    <span>
                      Dec 01, 2022
                    </span>
                    <span>
                      11 min read
                    </span>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-12 mt-4">
            <div class="single-blog__banner">
              <div class="row">
                <div class="col-12">
                  <img height="64" src="<?php echo get_template_directory_uri().'/assets/img/black_dumbel.svg'?>"
                    alt="logo" />
                </div>
                <div class="col-12">
                  <h2>
                    Start Your Workout Today.
                  </h2>
                </div>
                <div class="col-12">
                  <div class=" d-flex flex-wrap gap-4">

                    <img height="48" src="<?php echo get_template_directory_uri().'/assets/img/app_store.svg'?>"
                      alt="logo" />
                    <img height="48" src="<?php echo get_template_directory_uri().'/assets/img/google_store.svg'?>"
                      alt="logo" />
                    <img height="48" src="<?php echo get_template_directory_uri().'/assets/img/gallary_store.svg'?>"
                      alt="logo" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-12">
        <?php get_template_part('includes/read-more','section')?>

      </div>
    </div>
  </div>


</main>

<?php get_footer();?>