document.addEventListener('DOMContentLoaded', () => {

  console.log('Console la nuit')
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, {
    threshold: 0.15 // 30% du bloc visible avant d'ajouter la classe
  });

  document.querySelectorAll('.fade-in-section').forEach(el => {
    observer.observe(el);
  });

  const form = document.getElementById('form-avis');
  const modal = document.getElementById('modal-success');
  const closeBtn = document.getElementById('close-modal');

  form.addEventListener('submit', async (e) => {
    e.preventDefault(); // Empêche la redirection

    const formData = new FormData(form);

    try {
      const response = await fetch(form.action, {
        method: 'POST',
        body: formData
      });

      if (!response.ok) throw new Error('Erreur réseau');

      const text = await response.text();
      console.log('Réponse serveur:', text);

      modal.style.display = 'block'; // Affiche la modale
      form.reset(); // Vide le formulaire

    } catch (error) {
      alert('Erreur lors de l’envoi : ' + error.message);
    }
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
  });


});
