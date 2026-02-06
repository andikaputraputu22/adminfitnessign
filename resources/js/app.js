/**
 * Frontend custom JS (Fitnessign)
 * - Loaded via Vite
 * - No vendor or template logic here
 */


document.addEventListener("DOMContentLoaded", () => {
  const yearEl = document.getElementById("year");
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }
});