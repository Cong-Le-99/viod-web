document.addEventListener("DOMContentLoaded", function () {
  // Chỉ chạy trên desktop (768px+)
  function handleTrainingHover() {
    if (window.innerWidth < 768) return;

    const swiperSlides = document.querySelectorAll(
      ".ongoing-training-swiper .swiper-slide"
    );

    if (swiperSlides.length === 0) return;

    // Thêm class swiper-slide-active cho phần tử đầu tiên mặc định
    swiperSlides[0].classList.add("swiper-slide-active");

    swiperSlides.forEach((slide, index) => {
      slide.addEventListener("mouseenter", function () {
        // Xóa swiper-slide-active từ tất cả các slide
        swiperSlides.forEach((s) => s.classList.remove("swiper-slide-active"));

        // Thêm swiper-slide-active cho slide hiện tại
        this.classList.add("swiper-slide-active");

        swiperSlides.forEach((s, i) => {
          if (i === index) {
            s.style.zIndex = "10"; // Active slide có z-index cao nhất
          } else if (i === 0) {
            s.style.zIndex = "3";
          } else if (i === 1) {
            s.style.zIndex = "2";
          } else if (i === 2) {
            s.style.zIndex = "1";
          }
        });
      });
    });

    // Reset về trạng thái mặc định khi rời khỏi container
    const container = document.querySelector(".ongoing-training-swiper");
    if (container) {
      container.addEventListener("mouseleave", function () {
        // Xóa swiper-slide-active từ tất cả
        swiperSlides.forEach((s) => s.classList.remove("swiper-slide-active"));

        swiperSlides[0].classList.add("swiper-slide-active");

        swiperSlides.forEach((s, i) => {
          if (i === 0) {
            s.style.zIndex = "3";
          } else if (i === 1) {
            s.style.zIndex = "2";
          } else if (i === 2) {
            s.style.zIndex = "1";
          }
        });
      });
    }
  }

  // Khởi tạo
  handleTrainingHover();

  // Chạy lại khi resize window
  window.addEventListener("resize", function () {
    setTimeout(handleTrainingHover, 100);
  });
});
