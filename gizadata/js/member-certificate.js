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

  // Bỏ qua auto-layout trên trang Hội đồng quản trị
  if (document.querySelector(".board-of-directors")) {
    return;
  }

  // Logic hiển thị giảng viên - mặc định 7 người (hoặc 5 cho CSMP)
  // Chỉ lấy những team member không có class team-member-not-more
  const allTeamMembers = document.querySelectorAll(".team-member");
  const teamMembers = Array.from(allTeamMembers).filter(
    (member) => !member.classList.contains("team-member-not-more")
  );
  const viewMoreBtn = document.querySelector(".btn-view-more");
  let currentDisplayCount = teamMembers.length >= 7 ? 7 : teamMembers.length;

  // Ẩn tất cả giảng viên từ vị trí thứ 8 trở đi
  function hideExtraMembers() {
    teamMembers.forEach((member, index) => {
      if (index >= currentDisplayCount) {
        member.style.display = "none";
      } else {
        member.style.display = "block";
      }
    });

    // Cập nhật class layout ban đầu - chỉ áp dụng cho team grid chính
    const teamGrid = document.querySelector(".team-grid");
    if (teamGrid) {
      // Xóa tất cả class layout hiện tại
      teamGrid.classList.remove(
        "layout-5",
        "layout-7",
        "layout-8",
        "layout-10"
      );

      // Thêm class layout phù hợp
      if (currentDisplayCount <= 5) {
        teamGrid.classList.add("layout-5");
      } else if (currentDisplayCount <= 7) {
        teamGrid.classList.add("layout-7");
      } else if (currentDisplayCount <= 8) {
        teamGrid.classList.add("layout-8");
      } else {
        teamGrid.classList.add("layout-10");
      }
    }
  }

  // Hiển thị thêm giảng viên
  function showMoreMembers() {
    const nextBatch = Math.min(currentDisplayCount + 7, teamMembers.length);

    for (let i = currentDisplayCount; i < nextBatch; i++) {
      if (teamMembers[i]) {
        teamMembers[i].style.display = "block";
      }
    }

    currentDisplayCount = nextBatch;

    // Cập nhật class layout dựa trên số lượng giảng viên hiển thị - chỉ áp dụng cho team grid chính
    const teamGrid = document.querySelector(".team-grid");
    if (teamGrid) {
      // Xóa tất cả class layout hiện tại
      teamGrid.classList.remove(
        "layout-5",
        "layout-7",
        "layout-8",
        "layout-10"
      );

      // Thêm class layout phù hợp
      if (currentDisplayCount <= 5) {
        teamGrid.classList.add("layout-5");
      } else if (currentDisplayCount <= 7) {
        teamGrid.classList.add("layout-7");
      } else if (currentDisplayCount <= 8) {
        teamGrid.classList.add("layout-8");
      } else {
        teamGrid.classList.add("layout-10");
      }
    }

    // Ẩn nút "Xem thêm" nếu đã hiển thị hết
    if (currentDisplayCount >= teamMembers.length) {
      viewMoreBtn.style.display = "none";
    }
  }

  // Khởi tạo hiển thị
  hideExtraMembers();

  // Ẩn nút "Xem thêm" nếu không có giảng viên nào để hiển thị thêm
  if (currentDisplayCount >= teamMembers.length && viewMoreBtn) {
    viewMoreBtn.style.display = "none";
  }

  // Đảm bảo các team member có class team-member-not-more luôn hiển thị
  document
    .querySelectorAll(".team-member.team-member-not-more")
    .forEach((member) => {
      member.style.display = "block";
    });

  // Thêm event listener cho nút "Xem thêm giảng viên"
  if (viewMoreBtn) {
    viewMoreBtn.addEventListener("click", function (e) {
      e.preventDefault();
      showMoreMembers();
    });
  }

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

  // Hover effect for attendee items
  const attendeeItems = document.querySelectorAll(".attendee-item");

  attendeeItems.forEach(function (item) {
    // Tạo SVG icon element
    const svgIcon = document.createElement("div");
    svgIcon.className = "attendee-hover-icon";
    svgIcon.innerHTML = `
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="10" cy="10" r="9" fill="white"/>
        <path d="M13.7397 8.5364C14.0868 8.18492 14.0868 7.61508 13.7397 7.2636C13.3925 6.91213 12.8297 6.91213 12.4826 7.2636L8.96296 10.8272L7.51743 9.3636C7.1703 9.01213 6.60748 9.01213 6.26035 9.3636C5.91322 9.71508 5.91322 10.2849 6.26035 10.6364L8.33442 12.7364C8.68156 13.0879 9.24437 13.0879 9.5915 12.7364L13.7397 8.5364Z" fill="#3AA735"/>
      </svg>
    `;

    // Thêm icon vào item
    item.appendChild(svgIcon);

    // Xử lý hover events
    item.addEventListener("mouseenter", function () {
      this.style.backgroundColor = "#1769AB";

      // Kiểm tra xem có phải desktop layout không
      const isDesktop = window.innerWidth >= 768;
      const defaultPadding = isDesktop ? "24px" : "24px";
      this.style.paddingLeft = "54px";

      svgIcon.style.opacity = "1";
    });

    item.addEventListener("mouseleave", function () {
      this.style.backgroundColor = "#e0f5df";

      // Kiểm tra xem có phải desktop layout không
      const isDesktop = window.innerWidth >= 768;
      const defaultPadding = isDesktop ? "24px" : "24px";
      this.style.paddingLeft = defaultPadding;

      svgIcon.style.opacity = "0";
    });
  });
});
