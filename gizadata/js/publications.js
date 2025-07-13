document.addEventListener("DOMContentLoaded", function () {
  const publicationItems = document.querySelectorAll(".publication-item");
  const publicationImage = document.querySelector(
    ".publications-and-research-img"
  );

  if (!publicationItems.length || !publicationImage) return;

  // Xử lý hover cho từng item
  publicationItems.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      // Xóa active class từ tất cả items
      publicationItems.forEach((i) => i.classList.remove("active"));

      // Thêm active class cho item hiện tại
      this.classList.add("active");

      // Thay đổi hình ảnh
      const imageSrc = this.getAttribute("data-image");
      if (imageSrc) {
        publicationImage.src = imageSrc;
      }
    });

    item.addEventListener("mouseleave", function () {
      const activeItem = document.querySelector(".publication-item.active");
      if (!activeItem) {
        publicationItems[0].classList.add("active");
        publicationImage.src = publicationItems[0].getAttribute("data-image");
      }
    });

    // Xử lý click để mở URL trong tab mới
    item.addEventListener("click", function () {
      const link = this.getAttribute("data-link");
      if (link && link !== "#") {
        window.open(link, "_blank");
      }
    });
  });
  publicationItems[0].classList.add("active");
});
