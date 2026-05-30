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


// Personal Training WhatsApp Session Sync
const waInput = document.getElementById('waTextInput');
const sessionRadios = document.querySelectorAll('.session-radio');

if (waInput && sessionRadios.length) {

  const baseText = waInput.dataset.baseText;

  const updateMessage = () => {

    const selected = document.querySelector('.session-radio:checked');

    if (!selected) return;

    const sessionText = `${selected.value} Session${selected.value > 1 ? 's' : ''}`;

    waInput.value = baseText.replace('__SESSION__', sessionText);
  };

  sessionRadios.forEach(radio => {
    radio.addEventListener('change', updateMessage);
  });

  updateMessage();
}