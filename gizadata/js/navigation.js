document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.querySelector(".menu-toggle");
  const mainNavigation = document.querySelector(".main-navigation");

  if (menuToggle && mainNavigation) {
    menuToggle.addEventListener("click", function () {
      menuToggle.classList.toggle("toggled");
      mainNavigation.classList.toggle("toggled");

      // Update aria-expanded attribute
      const expanded = menuToggle.getAttribute("aria-expanded") === "true";
      menuToggle.setAttribute("aria-expanded", !expanded);
    });

    // Close menu when clicking outside
    document.addEventListener("click", function (event) {
      const isClickInside =
        mainNavigation.contains(event.target) ||
        menuToggle.contains(event.target);

      if (!isClickInside && mainNavigation.classList.contains("toggled")) {
        menuToggle.classList.remove("toggled");
        mainNavigation.classList.remove("toggled");
        menuToggle.setAttribute("aria-expanded", "false");
      }
    });

    // Close menu when window is resized above mobile breakpoint
    window.addEventListener("resize", function () {
      if (window.innerWidth > 700) {
        menuToggle.classList.remove("toggled");
        mainNavigation.classList.remove("toggled");
        menuToggle.setAttribute("aria-expanded", "false");
      }
    });
  }

  // Mobile menu logic
  const mobileMenu = document.getElementById("mobile-menu");
  const mobileOverlay = document.getElementById("mobile-menu-overlay");
  const mobileClose = document.querySelector(".mobile-menu-close");

  function openMobileMenu() {
    mobileMenu.classList.add("active");
    mobileOverlay.classList.add("active");
    document.body.style.overflow = "hidden";
    mobileMenu.setAttribute("aria-hidden", "false");
  }

  function closeMobileMenu() {
    mobileMenu.classList.remove("active");
    mobileOverlay.classList.remove("active");
    document.body.style.overflow = "";
    mobileMenu.setAttribute("aria-hidden", "true");
  }
  if (menuToggle && mobileMenu && mobileOverlay) {
    menuToggle.addEventListener("click", openMobileMenu);
    mobileOverlay.addEventListener("click", closeMobileMenu);
  }
  if (mobileClose) {
    mobileClose.addEventListener("click", closeMobileMenu);
  }

  // Accordion submenu for mobile
  const mobileMenuEl = document.getElementById("mobile-primary-menu");
  if (mobileMenuEl) {
    mobileMenuEl
      .querySelectorAll(".menu-item-has-children")
      .forEach(function (item) {
        // Add toggle button if not exists
        if (!item.querySelector(".submenu-toggle")) {
          const btn = document.createElement("button");
          btn.className = "submenu-toggle";
          btn.setAttribute("aria-label", "Mở submenu");
          btn.innerHTML =
            '<svg class="plus-icon" width="18" height="18" viewBox="0 0 18 18"><line x1="9" y1="4" x2="9" y2="14" stroke="#0A2536" stroke-width="2"/><line x1="4" y1="9" x2="14" y2="9" stroke="#0A2536" stroke-width="2"/></svg>';
          item.querySelector("a").after(btn);
        }
      });
    mobileMenuEl.addEventListener("click", function (e) {
      // Nếu bấm vào .submenu-toggle hoặc vào <a> của menu cha có submenu
      const btn = e.target.closest(".submenu-toggle");
      const a = e.target.closest("a");
      if (btn) {
        e.preventDefault();
        const li = btn.closest("li");
        li.classList.toggle("open");
        // Đổi icon +/–
        if (li.classList.contains("open")) {
          btn.innerHTML =
            '<svg class="minus-icon" width="18" height="18" viewBox="0 0 18 18"><line x1="4" y1="9" x2="14" y2="9" stroke="#0A2536" stroke-width="2"/></svg>';
        } else {
          btn.innerHTML =
            '<svg class="plus-icon" width="18" height="18" viewBox="0 0 18 18"><line x1="9" y1="4" x2="9" y2="14" stroke="#0A2536" stroke-width="2"/><line x1="4" y1="9" x2="14" y2="9" stroke="#0A2536" stroke-width="2"/></svg>';
        }
      } else if (
        a &&
        a.parentElement.classList.contains("menu-item-has-children")
      ) {
        // Nếu bấm vào <a> của menu cha có submenu
        e.preventDefault();
        const li = a.closest("li");
        const toggleBtn = li.querySelector(".submenu-toggle");
        li.classList.toggle("open");
        // Đổi icon +/–
        if (li.classList.contains("open")) {
          if (toggleBtn)
            toggleBtn.innerHTML =
              '<svg class="minus-icon" width="18" height="18" viewBox="0 0 18 18"><line x1="4" y1="9" x2="14" y2="9" stroke="#0A2536" stroke-width="2"/></svg>';
        } else {
          if (toggleBtn)
            toggleBtn.innerHTML =
              '<svg class="plus-icon" width="18" height="18" viewBox="0 0 18 18"><line x1="9" y1="4" x2="9" y2="14" stroke="#0A2536" stroke-width="2"/><line x1="4" y1="9" x2="14" y2="9" stroke="#0A2536" stroke-width="2"/></svg>';
        }
      }
    });
  }

  // Đóng menu khi resize lên desktop
  window.addEventListener("resize", function () {
    if (window.innerWidth > 900) {
      closeMobileMenu();
    }
  });

  // Desktop search dropdown (>=768px)
  const searchToggleBtn = document.querySelector(".search-toggle");
  const searchDropdown = document.querySelector(".header-search-dropdown");
  if (searchToggleBtn && searchDropdown) {
    function closeSearchDropdown() {
      searchDropdown.classList.remove("active");
      searchDropdown.setAttribute("aria-hidden", "true");
    }
    function openSearchDropdown() {
      searchDropdown.classList.add("active");
      searchDropdown.setAttribute("aria-hidden", "false");
      const input = searchDropdown.querySelector('input[type="search"]');
      if (input) setTimeout(() => input.focus(), 0);
    }

    searchToggleBtn.addEventListener("click", function (e) {
      if (window.innerWidth >= 768) {
        e.preventDefault();
        if (searchDropdown.classList.contains("active")) {
          closeSearchDropdown();
        } else {
          openSearchDropdown();
        }
      }
    });

    document.addEventListener("click", function (e) {
      if (window.innerWidth < 768) return;
      const isInside =
        searchDropdown.contains(e.target) || searchToggleBtn.contains(e.target);
      if (!isInside) closeSearchDropdown();
    });

    window.addEventListener("resize", function () {
      if (window.innerWidth < 768) {
        closeSearchDropdown();
      }
    });
  }
});
