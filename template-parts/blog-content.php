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