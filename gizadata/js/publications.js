// Function có thể tái sử dụng cho publication items
function initializePublicationItems(containerSelector = null) {
  // Nếu có containerSelector, tìm publication items trong container đó
  // Nếu không, tìm tất cả publication items trên trang
  const container = containerSelector
    ? document.querySelector(containerSelector)
    : document.body;

  if (!container) return;

  const publicationItems = container.querySelectorAll(".publication-item");
  const publicationImage = container.querySelector(
    ".publications-and-research-img"
  );

  if (!publicationItems || !publicationItems.length || !publicationImage)
    return;

  // Xử lý hover cho từng item
  publicationItems.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      // Xóa active class chỉ từ items trong cùng container
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
      // Kiểm tra active item chỉ trong container hiện tại
      const activeItem = container.querySelector(".publication-item.active");

      if (!activeItem) {
        publicationItems[0].classList.add("active");
        publicationImage.src = publicationItems[0].getAttribute("data-image");
      }
    });

    // Xử lý click để mở URL trong tab mới
    item.addEventListener("click", function () {
      const link = this.getAttribute("data-link");
      if (link && link !== "#") {
        // window.open(link, "_blank");
        window.location.href = link;
      }
    });
  });

  // Set active cho item đầu tiên
  publicationItems[0].classList.add("active");
}

// Khởi tạo khi DOM loaded
document.addEventListener("DOMContentLoaded", function () {
  // Khởi tạo cho từng section riêng biệt
  initializePublicationItems(".publications-and-research");
  initializePublicationItems(".library-governance");

  // Hoặc khởi tạo cho tất cả publication items trên trang (nếu không có container cụ thể)
  // initializePublicationItems();
});
