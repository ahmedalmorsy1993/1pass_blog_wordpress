 <section class="search-bar">
   <div class="container">
     <div class="row">
       <div class="col-12 col-lg-8 mb-2 align-self-center">
         <div class="filter-action d-flex gap-4 align-items-center">
           <?php echo do_shortcode( '[searchandfilter fields="category,post_tag"  ]' ); ?>

         </div>
       </div>
       <div class="col-12 col-lg-4">
         <?php get_search_form();?>
       </div>
     </div>
   </div>
 </section>