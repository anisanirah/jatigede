const hamburgerMenu = document.getElementById('hamburger-menu');
const menuList = document.getElementById('menuList');

// Toggle the menu when hamburger menu is clicked
hamburgerMenu.addEventListener('click', () => {
  menuList.classList.toggle('active');
});

const ham = document.querySelector(".hamburger-menu");
document.addEventListener("click", function (e) {
  if (!ham.contains(e.target) && !hamburgerMenu.contains(e.target)) {
    hamburgerMenu.classList.remove("active");
  }
});

// Get dropdown toggle elements
const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

dropdownToggles.forEach((toggle) => {
  toggle.addEventListener('click', (event) => {
    // Prevent default link behavior
    event.preventDefault();

    // Get the parent dropdown
    const dropdown = toggle.closest('.dropdown');

    // Toggle active class
    dropdown.classList.toggle('active');

    // Close other dropdowns if open
    document.querySelectorAll('.dropdown').forEach((item) => {
      if (item !== dropdown) {
        item.classList.remove('active');
      }
    });
  });
});

// Select the parallax background
const parallaxBg = document.querySelector('.beranda');

document.addEventListener('scroll', () => {
  // Get the scroll position of the page
  const scrollPosition = window.scrollY;

  // Adjust the background position based on scroll position
  const translateValue = Math.min(50, scrollPosition / 2); // Limit max movement
  document.querySelector('.beranda').style.setProperty('--bg-move', `${translateValue}px`);
});

const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
let currentIndex = 0;

function showSlide(index) {
    slides.forEach((slide, i) => {
        slide.classList.toggle("active", i === index);
        dots[i].classList.toggle("active", i === index);
    });
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
}

function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
}

dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
        currentIndex = index;
        showSlide(currentIndex);
    });
});

nextBtn.addEventListener("click", nextSlide);
prevBtn.addEventListener("click", prevSlide);

// Show the first slide initially
showSlide(currentIndex);
