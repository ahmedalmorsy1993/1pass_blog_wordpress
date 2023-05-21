const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,
  // slidesPerView: "auto",
  // centeredSlides: true,
  breakpoints: {
    520: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    640: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 10
    },
    1024: {
      slidesPerView: 3,
      spaceBetween: 10
    }
  }
});

document.querySelector(".next-slide").addEventListener("click", () => {
  swiper.slidePrev();
});
document.querySelector(".prev-slide").addEventListener("click", () => {
  swiper.slideNext();
});

///////////////////////////////////////////////////////////////////////////////////////////////

const target = document.querySelector(".search-bar");
let options = {
  root: null,
  rootMargin: 0,
  threshold: 0.5
};
function handleIntersection(entries, options) {
  entries.map((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("sticky");
    } else {
      entry.target.classList.remove("sticky");
    }
  });
}

const observer = new IntersectionObserver(handleIntersection);

observer.observe(target);

let per_page = 3;
let total = 20;
const percent_element = document.querySelector(".percent-scroll");
const load_more_button = document.querySelector(".load-more");
const per_page_element = document.querySelector(".per_page");
const total_element = document.querySelector(".total");

function handlePercent() {
  let percent = (per_page / total) * 100;
  percent_element.style.width = `${percent}%`;
  per_page_element.textContent = per_page;
  total_element.textContent = total;
}
load_more_button.addEventListener("click", () => {
  if (per_page < total) {
    per_page += 1;
  }
  // else {
  //   document.querySelector(".scroll-bar").style.display = "none";
  //   document.querySelector(".show-page-count").style.display = "none";
  //   load_more_button.style.display = "none";
  // }

  handlePercent();
});
handlePercent();
SocialShareKit.init({ forceInit: true });
