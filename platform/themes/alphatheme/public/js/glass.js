// Native <details> keeps its keyboard and no-script behavior.
if (!matchMedia('(prefers-reduced-motion: reduce)').matches) {
  document.querySelectorAll('.ck-content details').forEach(details => {
    details.addEventListener('toggle', () => {
      const answer = details.querySelector('p');
      if (details.open && answer && typeof answer.animate === 'function') {
        answer.animate([{opacity: 0, transform: 'translateY(-3px)'}, {opacity: 1, transform: 'none'}], {duration: 180});
      }
    });
  });
}
