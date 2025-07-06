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

  // Data for each lecturer - sử dụng dữ liệu từ PHP
  const lecturersData = {};

  // Chuyển đổi dữ liệu từ PHP sang format JavaScript
  if (typeof teamMembersData !== "undefined") {
    teamMembersData.forEach(function (member) {
      lecturersData[member.image] = {
        gender: member.gender,
        name: member.name.toUpperCase(),
        positions: member.position_more,
        biography: member.biography,
      };
    });
  }

  // Function to show lecturer modal
  function showLecturerModal(lecturerImage) {
    const filename = lecturerImage.split("/").pop();
    const lecturer = lecturersData[filename];

    if (!lecturer) return;

    // Update modal content
    document.getElementById("lecturerImage").src = lecturerImage;
    document.getElementById("lecturerPrefix").textContent =
      lecturer.gender === "male" ? "Ông" : "Bà";
    document.getElementById("lecturerName").textContent = lecturer.name;

    // Update positions
    const positionsHtml = lecturer.positions
      .map((pos) => `<p>${pos}</p>`)
      .join("");
    document.getElementById("lecturerPositions").innerHTML = positionsHtml;

    // Update biography
    const biographyParagraphs = lecturer.biography.split("<br><br>");
    const biographyHtml = biographyParagraphs
      .map((paragraph) => `<p>${paragraph}</p>`)
      .join("");
    document.getElementById("lecturerBiography").innerHTML = biographyHtml;

    // Show modal
    const modal = new bootstrap.Modal(document.getElementById("lecturerModal"));
    modal.show();
  }

  // Add click event to all team member images
  document
    .querySelectorAll(".team-member .member-image")
    .forEach(function (memberImage) {
      memberImage.addEventListener("click", function () {
        const imgSrc = this.querySelector("img").src;
        showLecturerModal(imgSrc);
      });
    });
});
