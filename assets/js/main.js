"use strict";

function toggleMobileMenu() {
  const mobileMenu = document.querySelector('#mobile-menu');
  mobileMenu.classList.toggle('hidden');
}

(function () {

  const ava = document.getElementById('header-ava');
  if (!ava) {
    return;
  }

  ava.style.scale = 3;
  ava.style.translate = '0 100px';


  let lastKnownScrollPosition = 0;
  let ticking = false;

  document.addEventListener("scroll", (event) => {
    lastKnownScrollPosition = window.scrollY;

    if (!ticking) {
      window.requestAnimationFrame(() => {
        narrowHeaderOnScroll(lastKnownScrollPosition);
        ticking = false;
      });

      ticking = true;
    }
  });

  function narrowHeaderOnScroll(scrollPos) {

    const headerHeight = document.querySelector('header').offsetHeight;
    const header = document.querySelector('header');

    if (window.scrollY > headerHeight) {
      ava.style.scale = 1;
      ava.style.translate = '0 0';
    } else {
      ava.style.scale = 3;
      ava.style.translate = '0 100px';
    }
  }
})()