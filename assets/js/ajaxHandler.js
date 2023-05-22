(function ($) {
  $(document).ready(function () {
    var page = 1; // Set the initial page number
    var postType = "post"; // Set the post type (replace with your own custom post type if needed)
    var ajaxUrl = '<?php echo admin_url( "admin-ajax.php" ); ?>'; // Set the AJAX URL

    // Handle click events on the pagination links
    $(".load-more").on("click", function (e) {
      e.preventDefault();
      var $link = $(this);

      // Get the page number from the link's data attribute
      page = $link.data("page");

      // Send an AJAX request to get the posts for the current page
      $.ajax({
        type: "POST",
        url: ajaxUrl,
        data: {
          action: "load_posts",
          page: page,
          post_type: postType
        },
        success: function (response) {
          // Update the results container with the new posts
          $("#results-container").html(response);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          console.log("Error: " + errorThrown);
        }
      });
    });
  });
})(jQuery);
