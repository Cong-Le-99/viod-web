// Function có thể tái sử dụng cho publication items
function initializePublicationItems(containerSelector = null) {
  // Nếu có containerSelector, tìm publication items trong container đó
  // Nếu không, tìm tất cả publication items trên trang
  const publicationItems = containerSelector
    ? document
        .querySelector(containerSelector)
        ?.querySelectorAll(".publication-item")
    : document.querySelectorAll(".publication-item");

  const publicationImage = containerSelector
    ? document
        .querySelector(containerSelector)
        ?.querySelector(".publications-and-research-img")
    : document.querySelector(".publications-and-research-img");

  if (!publicationItems || !publicationItems.length || !publicationImage)
    return;

  // Xử lý hover cho từng item
  publicationItems.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      // Xóa active class từ tất cả items trong cùng container
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
      const activeItem = containerSelector
        ? document
            .querySelector(containerSelector)
            ?.querySelector(".publication-item.active")
        : document.querySelector(".publication-item.active");

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

  // Set active cho item đầu tiên
  publicationItems[0].classList.add("active");
}

// Khởi tạo khi DOM loaded
document.addEventListener("DOMContentLoaded", function () {
  // Khởi tạo cho tất cả publication items trên trang
  initializePublicationItems();
});
