(function ($) {
  $(document).ready(function () {
    const percent_element = document.querySelector(".percent-scroll");
    let per_page = Number(document.querySelector(".per_page").textContent);
    const total = Number(document.querySelector(".total").textContent);
    const button = document.querySelector(".load-more");
    const blog_container = document.querySelector("#blogs-container");
    const fixedPerPage = blog_container.dataset.perpage;
    function handlePercent() {
      let percent = (per_page / total) * 100;
      percent_element.style.width = `${percent}%`;
    }

    handlePercent();

    button.addEventListener("click", () => {
      let current_page = blog_container.dataset.page;
      let max_pages = blog_container.dataset.max;
      let params = new URLSearchParams();
      params.append("action", "load_more_posts");
      params.append("current_page", current_page);
      fetch("/wordpress/wp-admin/admin-ajax.php", {
        method: "post",
        body: params
      })
        .then((res) => {
          return res.json();
        })
        .then((data) => {
          if (total - per_page > fixedPerPage) {
            per_page += Number(fixedPerPage);
          } else {
            per_page += Number(total - per_page);
          }
          document.querySelector(".per_page").innerHTML = per_page;

          handlePercent();
          blog_container.innerHTML += data.data;
          if (current_page == max_pages) {
            document.querySelector("#pagination").remove();
          } else {
            blog_container.dataset.page++;
          }
        });
    });
  });
})(jQuery);
