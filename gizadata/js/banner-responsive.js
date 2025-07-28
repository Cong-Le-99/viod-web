/**
 * Responsive Banner Image Handler
 * Tự động chuyển đổi banner image giữa desktop và mobile dựa trên kích thước màn hình
 */
document.addEventListener("DOMContentLoaded", function () {
  const bannerElements = document.querySelectorAll(
    ".banner[data-desktop][data-mobile]"
  );

  function updateBannerImages() {
    bannerElements.forEach(function (banner) {
      const desktopImage = banner.getAttribute("data-desktop");
      const mobileImage = banner.getAttribute("data-mobile");

      if (!desktopImage || !mobileImage) return;

      // Thiết lập CSS variables cho desktop và mobile
      banner.style.setProperty(
        "--desktop-banner",
        `url('${desktopImage}?v=${Date.now()}')`
      );
      banner.style.setProperty(
        "--mobile-banner",
        `url('${mobileImage}?v=${Date.now()}')`
      );
    });
  }

  // Chạy lần đầu khi trang load
  updateBannerImages();

  // Chạy lại khi resize window
  let resizeTimer;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(updateBannerImages, 250); // Debounce để tránh chạy quá nhiều lần
  });

  // Chạy khi orientation change (cho mobile)
  window.addEventListener("orientationchange", function () {
    setTimeout(updateBannerImages, 100);
  });
});
