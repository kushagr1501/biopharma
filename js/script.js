window.onload = function (e) {
  $("body").css("margin-top", $("#header").outerHeight() + "px");
};

$(document).ready(function () {
  let hoverTimeout;
  let scrollTimeout;

  // Scroll effect for header and hide submenus on scroll
  $(window).scroll(function () {
    // Add scrolling class to hide submenus
    $("body").addClass("scrolling");
    $(".submenu").stop(true, true).fadeOut(100).removeClass("show");

    // Clear existing timeout
    clearTimeout(scrollTimeout);

    // Remove scrolling class after scroll ends
    scrollTimeout = setTimeout(function () {
      $("body").removeClass("scrolling");
    }, 150);

    // Header background change
    if ($(this).scrollTop() > 50) {
      $("#header").addClass("scrolled");
    } else {
      $("#header").removeClass("scrolled");
    }
  });

  // Function to hide all submenus
  function hideAllSubmenus() {
    $(".submenu").stop(true, true).fadeOut(200).removeClass("show");
  }

  // About dropdown functionality
  $(".about-dropdown").on("mouseenter", function () {
    if ($("body").hasClass("scrolling")) return;

    clearTimeout(hoverTimeout);
    hideAllSubmenus();

    setTimeout(function () {
      $(".about-submenu").stop(true, true).fadeIn(300).addClass("show");
    }, 50);
  });

  $(".about-dropdown").on("mouseleave", function () {
    hoverTimeout = setTimeout(function () {
      $(".about-submenu").stop(true, true).fadeOut(200).removeClass("show");
    }, 200);
  });

  $(".about-submenu").on("mouseenter", function () {
    clearTimeout(hoverTimeout);
  });

  $(".about-submenu").on("mouseleave", function () {
    hoverTimeout = setTimeout(function () {
      $(".about-submenu").stop(true, true).fadeOut(200).removeClass("show");
    }, 200);
  });

  // Services dropdown functionality
  $(".service-dropdown").on("mouseenter", function () {
    if ($("body").hasClass("scrolling")) return;

    clearTimeout(hoverTimeout);
    hideAllSubmenus();

    setTimeout(function () {
      $(".service-submenu").stop(true, true).fadeIn(300).addClass("show");
    }, 50);
  });

  $(".service-dropdown").on("mouseleave", function () {
    hoverTimeout = setTimeout(function () {
      $(".service-submenu").stop(true, true).fadeOut(200).removeClass("show");
    }, 200);
  });

  $(".service-submenu").on("mouseenter", function () {
    clearTimeout(hoverTimeout);
  });

  $(".service-submenu").on("mouseleave", function () {
    hoverTimeout = setTimeout(function () {
      $(".service-submenu").stop(true, true).fadeOut(200).removeClass("show");
    }, 200);
  });

  // About submenu image switching
  $("#about01").hover(
    function () {
      $(".about-img01").stop(true, true).addClass("active").fadeIn(200);
      $(".about-img02").stop(true, true).removeClass("active").fadeOut(200);
    },
    function () {
      $(".about-img01").stop(true, true).removeClass("active").fadeOut(200);
    },
  );

  $("#about02").hover(
    function () {
      $(".about-img02").stop(true, true).addClass("active").fadeIn(200);
      $(".about-img01").stop(true, true).removeClass("active").fadeOut(200);
    },
    function () {
      $(".about-img02").stop(true, true).removeClass("active").fadeOut(200);
    },
  );

  // Services submenu image switching
  const serviceItems = [
    "service01",
    "service02",
    "service03",
    "service04",
    "service05",
    "service06",
    "service07",
  ];

  serviceItems.forEach((serviceId, index) => {
    const imgClass = `.service-img0${index + 1}`;

    $(`#${serviceId}`).hover(
      function () {
        $(".submenuimg > div")
          .stop(true, true)
          .removeClass("active")
          .fadeOut(150);
        $(imgClass).stop(true, true).addClass("active").fadeIn(200);
      },
      function () {
        $(imgClass).stop(true, true).removeClass("active").fadeOut(150);
      },
    );
  });
});

document.addEventListener("DOMContentLoaded", function () {
  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobileMenuToggle");
  const mobileSidenav = document.getElementById("mobileSidenav");
  const mobileOverlay = document.getElementById("mobileOverlay");
  const closeSidenav = document.getElementById("closeSidenav");

  function openMobileMenu() {
    mobileMenuToggle.classList.add("active");
    mobileSidenav.classList.add("active");
    mobileOverlay.classList.add("active");
    document.body.style.overflow = "hidden";
  }

  function closeMobileMenu() {
    mobileMenuToggle.classList.remove("active");
    mobileSidenav.classList.remove("active");
    mobileOverlay.classList.remove("active");
    document.body.style.overflow = "";
  }

  mobileMenuToggle.addEventListener("click", function () {
    if (mobileSidenav.classList.contains("active")) {
      closeMobileMenu();
    } else {
      openMobileMenu();
    }
  });

  closeSidenav.addEventListener("click", closeMobileMenu);
  mobileOverlay.addEventListener("click", closeMobileMenu);

  // Mobile dropdown functionality
  const mobileDropdowns = document.querySelectorAll(".mobile-dropdown-toggle");

  mobileDropdowns.forEach(function (dropdown) {
    dropdown.addEventListener("click", function (e) {
      e.preventDefault();
      const parent = this.parentNode;
      const isActive = parent.classList.contains("active");

      // Close all other dropdowns
      document
        .querySelectorAll(".mobile-dropdown.active")
        .forEach(function (activeDropdown) {
          if (activeDropdown !== parent) {
            activeDropdown.classList.remove("active");
          }
        });

      // Toggle current dropdown
      parent.classList.toggle("active", !isActive);
    });
  });

  // Close mobile menu on window resize to desktop
  window.addEventListener("resize", function () {
    if (window.innerWidth > 991) {
      closeMobileMenu();
    }
  });

  // Prevent body scroll when mobile menu is open
  let startY = 0;

  mobileSidenav.addEventListener("touchstart", function (e) {
    startY = e.touches[0].clientY;
  });

  mobileSidenav.addEventListener("touchmove", function (e) {
    const currentY = e.touches[0].clientY;
    const scrollTop = this.scrollTop;
    const scrollHeight = this.scrollHeight;
    const clientHeight = this.clientHeight;

    if (
      (scrollTop === 0 && currentY > startY) ||
      (scrollTop + clientHeight >= scrollHeight && currentY < startY)
    ) {
      e.preventDefault();
    }
  });
});

// ==========================
// ELEMENTS
// ==========================
const cards = document.querySelectorAll(".pillar-card");
const backgrounds = document.querySelectorAll(".background-image");
const dots = document.querySelectorAll(".dot");
const imageContainer = document.querySelector(".image-container");
const cardsContainer = document.querySelector(".cards-container");

// ==========================
// STATE
// ==========================
let currentIndex = 0;
let autoRotateInterval = null;
let isHovering = false;
let isMobile = window.innerWidth <= 768;

// Touch
let touchStartX = 0;
let touchEndX = 0;
let isDragging = false;

// ==========================
// MOBILE CAROUSEL SETUP
// ==========================
function setupMobileCarousel() {
  if (isMobile && !cardsContainer.querySelector('.cards-wrapper')) {
    // Wrap cards in a carousel wrapper
    const wrapper = document.createElement('div');
    wrapper.className = 'cards-wrapper';
    
    // Move all cards into wrapper
    while (cardsContainer.firstChild) {
      wrapper.appendChild(cardsContainer.firstChild);
    }
    
    cardsContainer.appendChild(wrapper);
  }
}

// ==========================
// CORE FUNCTION
// ==========================
function changeBackground(index) {
  if (index === currentIndex) return;

  currentIndex = index;

  // Backgrounds
  backgrounds.forEach(bg => bg.classList.remove("active"));
  backgrounds[index].classList.add("active");

  // Cards
  cards.forEach(card => card.classList.remove("active-card"));
  cards[index].classList.add("active-card");

  // Mobile carousel slide
  if (isMobile) {
    const wrapper = cardsContainer.querySelector('.cards-wrapper');
    if (wrapper) {
      wrapper.style.transform = `translateX(-${index * 100}%)`;
    }
  }

  // Dots
  if (dots.length) {
    dots.forEach(dot => dot.classList.remove("active"));
    dots[index].classList.add("active");
  }
}

// ==========================
// AUTO ROTATE
// ==========================
function startAutoRotate() {
  stopAutoRotate();
  autoRotateInterval = setInterval(() => {
    if (!isHovering) {
      const nextIndex = (currentIndex + 1) % cards.length;
      changeBackground(nextIndex);
    }
  }, 5000); // slower, more comfortable timing
}

function stopAutoRotate() {
  if (autoRotateInterval) {
    clearInterval(autoRotateInterval);
    autoRotateInterval = null;
  }
}

// ==========================
// DESKTOP HOVER
// ==========================
if (!isMobile) {
  cards.forEach((card, index) => {
    card.addEventListener("mouseenter", () => {
      isHovering = true;
      changeBackground(index);
    });

    card.addEventListener("mouseleave", () => {
      isHovering = false;
    });
  });
}

// ==========================
// MOBILE INTERACTIONS
// ==========================
if (isMobile) {
  // Card tap
  cards.forEach((card, index) => {
    card.addEventListener("click", (e) => {
      if (!isDragging) {
        changeBackground(index);
        stopAutoRotate();
        setTimeout(startAutoRotate, 5000);
      }
    });
  });

  // Dot tap
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      changeBackground(index);
      stopAutoRotate();
      setTimeout(startAutoRotate, 5000);
    });
  });

  // Swipe on cards container for carousel
  cardsContainer.addEventListener("touchstart", e => {
    touchStartX = e.changedTouches[0].screenX;
    isDragging = false;
  }, { passive: true });

  cardsContainer.addEventListener("touchmove", e => {
    isDragging = true;
  }, { passive: true });

  cardsContainer.addEventListener("touchend", e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, { passive: true });

  // Swipe on image container
  imageContainer.addEventListener("touchstart", e => {
    touchStartX = e.changedTouches[0].screenX;
    isDragging = false;
  }, { passive: true });

  imageContainer.addEventListener("touchmove", e => {
    isDragging = true;
  }, { passive: true });

  imageContainer.addEventListener("touchend", e => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  }, { passive: true });

  function handleSwipe() {
    const threshold = 50;
    const diff = touchStartX - touchEndX;

    if (Math.abs(diff) < threshold) {
      isDragging = false;
      return;
    }

    if (diff > 0) {
      // Swipe left - next
      changeBackground((currentIndex + 1) % cards.length);
    } else {
      // Swipe right - previous
      changeBackground((currentIndex - 1 + cards.length) % cards.length);
    }

    stopAutoRotate();
    setTimeout(startAutoRotate, 5000);
    
    setTimeout(() => {
      isDragging = false;
    }, 100);
  }
}

// ==========================
// RESIZE (NO PAGE RELOAD 🔥)
// ==========================
window.addEventListener("resize", () => {
  const wasMobile = isMobile;
  isMobile = window.innerWidth <= 768;
  
  // If switching between mobile and desktop, reinitialize
  if (wasMobile !== isMobile) {
    if (isMobile) {
      setupMobileCarousel();
      changeBackground(currentIndex);
    } else {
      // Remove carousel wrapper for desktop
      const wrapper = cardsContainer.querySelector('.cards-wrapper');
      if (wrapper) {
        while (wrapper.firstChild) {
          cardsContainer.appendChild(wrapper.firstChild);
        }
        wrapper.remove();
      }
    }
  }
});

// ==========================
// INIT
// ==========================
window.addEventListener("load", () => {
  // Setup mobile carousel if needed
  if (isMobile) {
    setupMobileCarousel();
  }
  
  backgrounds[0].classList.add("active");
  cards[0].classList.add("active-card");

  if (dots.length) dots[0].classList.add("active");

  startAutoRotate();
});
