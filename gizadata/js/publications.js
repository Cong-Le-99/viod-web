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

  // Function để thay đổi hình ảnh với hiệu ứng fade
  function changeImageWithFade(newImageSrc) {
    // Thêm class fade-out
    publicationImage.classList.add("fade-out");

    // Đợi animation fade-out hoàn thành rồi thay đổi src
    setTimeout(() => {
      publicationImage.src = newImageSrc;
      // Thêm class fade-in
      publicationImage.classList.remove("fade-out");
      publicationImage.classList.add("fade-in");

      // Xóa class fade-in sau khi animation hoàn thành
      setTimeout(() => {
        publicationImage.classList.remove("fade-in");
      }, 400);
    }, 200);
  }

  // Xử lý hover cho từng item
  publicationItems.forEach((item) => {
    item.addEventListener("mouseenter", function () {
      // Xóa active class chỉ từ items trong cùng container
      publicationItems.forEach((i) => i.classList.remove("active"));

      // Thêm active class cho item hiện tại
      this.classList.add("active");

      // Thay đổi hình ảnh với hiệu ứng fade
      const imageSrc = this.getAttribute("data-image");
      if (imageSrc) {
        changeImageWithFade(imageSrc);
      }
    });

    item.addEventListener("mouseleave", function () {
      // Kiểm tra active item chỉ trong container hiện tại
      const activeItem = container.querySelector(".publication-item.active");

      if (!activeItem) {
        publicationItems[0].classList.add("active");
        const firstImageSrc = publicationItems[0].getAttribute("data-image");
        if (firstImageSrc) {
          changeImageWithFade(firstImageSrc);
        }
      }
    });

    // Xử lý click để mở URL trong tab mới
    item.addEventListener("click", function () {
      const link = this.getAttribute("data-link");
      const hasPdf = this.getAttribute("data-has-pdf") === "true";

      if (link && link !== "#" && hasPdf) {
        window.open(link, "_blank");
      }
      // Nếu không có PDF, không làm gì cả
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
