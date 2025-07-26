const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, {
  threshold: 0.3 // 30% du bloc visible avant d'ajouter la classe
});

document.querySelectorAll('.fade-in-section').forEach(el => {
  observer.observe(el);
});