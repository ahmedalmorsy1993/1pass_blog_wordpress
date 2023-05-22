<?php
// Get the current post's tags
$post_tags = wp_get_post_tags( get_the_ID() );

if ( $post_tags ) {
    // Build an array of tag IDs
    $tag_ids = array();
    foreach ( $post_tags as $tag ) {
        $tag_ids[] = $tag->term_id;
    }

    // Set up a query for related posts
    $args = array(
        'tag__in' => $tag_ids,
        'post__not_in' => array( get_the_ID() ),
        'posts_per_page' => 3, // Change this to control how many related posts are displayed
        'ignore_sticky_posts' => true,
    );
    $related_query = new WP_Query( $args );

    // Display the related posts
    if ( $related_query->have_posts() ) {
     
   
        while ( $related_query->have_posts() ) {
            $related_query->the_post();

            echo'
             <div class="col-12">
            <div class="single-blog__sidebar__widget__card mb-2">
                  <span class="single-blog__tag">
                  Nutrition
                  </span>
                  <h2>
                  <a href="' . get_permalink() . '">' . get_the_title() . '</a>
                  </h2>
                  <div class="col-12 single-blog__sidebar__widget__card__publish ">
                    <span>
                     ' . the_date() . '
                    </span>
                  </div>
                </div></div>';
           
        }
   
        wp_reset_postdata();
    }
}
?>