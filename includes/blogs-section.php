 <?php 
 global $wp_query;
 
 ?>
 <section class="blogs-wrapper">
   <div class="container">
     <div class="row" id="blogs-container" data-page="<?= get_query_var('paged') ? get_query_var('paged') : 1;?>"
       data-max="<?= $wp_query->max_num_pages;?>" data-perPage="<?=$posts_per_page?>">
       <!--  -->
       <?php
 
 $args = array(
    'post_type' => 'post',
    'category_name' => 'recent_releases',
    'posts_per_page' =>3
    
);
$arr_posts = new WP_Query( $args );
$post_counts = wp_count_posts();
$posts_per_page = get_option('posts_per_page');
$total_posts_count = $post_counts->publish;


if ( $arr_posts->have_posts() ) :
  
    while ( $arr_posts->have_posts() ) :
        $arr_posts->the_post();
        ?>
       <div class="col-12 col-lg-4 mb-2">
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

       <!--  -->
     </div>
     <div class="row mt-5" id="pagination">
       <div class="col-12 col-lg-4 text-center mx-auto">
         <div class="blogs-preview">

           <?php pll_e('you_viewed'); ?>
           <span class="per_page">
             <?php echo $posts_per_page ; ?>
           </span> <?php pll_e('of'); ?> <span class="total"><?php echo $total_posts_count;?></span>
           <?php pll_e('articles'); ?>
         </div>
         <div class="progress-bar my-3">
           <span class="percent-scroll"></span>
         </div>
         <div class="d-grid">
           <button class="load-more">

             <?php pll_e('load_more'); ?>

           </button>
         </div>
       </div>
     </div>
   </div>
 </section>