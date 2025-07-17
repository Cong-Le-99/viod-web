document.addEventListener("DOMContentLoaded", function () {
  const tabButtons = document.querySelectorAll(".tab-button");
  const postsContent = document.querySelector(".posts-tabs-content");

  tabButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const category = this.getAttribute("data-category");

      tabButtons.forEach((btn) => btn.classList.remove("active"));

      this.classList.add("active");

      postsContent.innerHTML = '<div class="loading">Đang tải...</div>';

      fetchPosts(category);
    });
  });

  function fetchPosts(category) {
    const url = new URL(window.location);
    url.searchParams.set("category", category);

    fetch(url.toString())
      .then((response) => response.text())
      .then((html) => {
        // Create a temporary div to parse the HTML
        const tempDiv = document.createElement("div");
        tempDiv.innerHTML = html;

        // Extract the posts content
        const newPostsContent = tempDiv.querySelector(".posts-tabs-content");

        if (newPostsContent) {
          postsContent.innerHTML = newPostsContent.innerHTML;
        } else {
          postsContent.innerHTML =
            '<div class="no-posts-message">Không có bài viết nào trong chuyên mục này.</div>';
        }
      })
      .catch((error) => {
        console.error("Error fetching posts:", error);
        postsContent.innerHTML =
          '<div class="no-posts-message">Có lỗi xảy ra khi tải bài viết.</div>';
      });
  }
});

// Add loading styles
const style = document.createElement("style");
style.textContent = `
    .loading {
        text-align: center;
        color: #666;
        font-size: 16px;
        padding: 40px 0;
    }
`;
document.head.appendChild(style);
