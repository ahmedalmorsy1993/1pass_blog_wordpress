(function ($) {
  $(document).ready(function () {
    const button = document.querySelector(".load-more");
    const blog_container = document.querySelector("#blogs-container");
    button.addEventListener("click", () => {
      let current_page = blog_container.getAttribute("data-page");
      let max_pages = blog_container.getAttribute("data-max");
      let params = new URLSearchParams();
      params.append("action", "load_more_posts");
      params.append("current_page", current_page);
      // params.append("max_pages", max_pages);
      fetch("/wordpress/wp-admin/admin-ajax.php", {
        method: "post",
        body: params
      })
        .then((res) => {
          return res.json();
        })
        .then((data) => {
          blog_container.innerHTML += data.data;
          console.log(data);
        });
    });
  });
})(jQuery);
