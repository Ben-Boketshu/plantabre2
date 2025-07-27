document.addEventListener('DOMContentLoaded', () => {
    const input = document.getElementById('recherche');
    const cartes = document.querySelectorAll('.carte-variete');

    if (!input) {
        console.error("⚠️ L'élément avec l'id 'recherche' est introuvable !");
        return;
    }

    input.addEventListener('input', () => {
        const valeur = input.value.toLowerCase().trim();

        cartes.forEach(carte => {
            const nom = carte.querySelector('h3').textContent.toLowerCase();
            if (nom.includes(valeur)) {
                carte.classList.remove('hide');
            } else {
                carte.classList.add('hide');
            }
        });
    });

    const modal = document.getElementById('modal-description');
    const modalTitle = document.getElementById('modal-title');
    const modalText = document.getElementById('modal-text');
    const modalImage = document.getElementById('modal-image');
    const closeModal = document.getElementById('close-modal');

    document.querySelectorAll('.btn-detail').forEach(btn => {
        btn.addEventListener('click', () => {
            const nom = btn.getAttribute('data-nom');
            const description = btn.getAttribute('data-description');
            const image = btn.getAttribute('data-image');

            modalTitle.textContent = nom;
            modalText.textContent = description;
            modalImage.src = image;
            modalImage.alt = nom;

            modal.style.display = 'flex';
        });
    });

    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });

});
