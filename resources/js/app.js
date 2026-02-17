/**
 * Frontend custom JS (Fitnessign)
 * Loaded via Vite
 */

import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener("DOMContentLoaded", () => {
  // Init AOS
  AOS.init({
    once: true,
    duration: 800,
    easing: 'ease-out-cubic',
  });

  // Dynamic year
  const yearEl = document.getElementById("year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
});