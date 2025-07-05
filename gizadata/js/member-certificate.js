document.addEventListener("DOMContentLoaded", function () {
  // YouTube iframe - no need for custom video controls
  // YouTube handles play/pause controls automatically

  const readMoreBtn = document.getElementById("readMoreBtn");
  const textContent = document.getElementById("textContent");

  if (readMoreBtn && textContent) {
    readMoreBtn.addEventListener("click", function (e) {
      e.preventDefault();

      if (textContent.classList.contains("expanded")) {
        // Collapse text
        textContent.classList.remove("expanded");
        readMoreBtn.textContent = "Đọc thêm";
      } else {
        // Expand text
        textContent.classList.add("expanded");
        readMoreBtn.textContent = "Thu gọn";
      }
    });
  }

  // Check if text needs read more button based on height
  function checkTextHeight() {
    const textContent = document.getElementById("textContent");
    const readMoreBtn = document.getElementById("readMoreBtn");

    if (textContent && readMoreBtn) {
      const originalMaxHeight = textContent.style.maxHeight;
      textContent.style.maxHeight = "none";
      textContent.style.overflow = "visible";

      const fullHeight = textContent.scrollHeight;

      textContent.style.maxHeight = originalMaxHeight;
      textContent.style.overflow = "";

      if (fullHeight > 300) {
        readMoreBtn.style.display = "inline-block";
        textContent.classList.add("has-read-more");
      } else {
        readMoreBtn.style.display = "none";
        textContent.classList.remove("has-read-more");
      }
    }
  }

  setTimeout(checkTextHeight, 100);
  window.addEventListener("resize", checkTextHeight);
});
