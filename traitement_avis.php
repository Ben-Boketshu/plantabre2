<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $avis = $_POST['avis'] ?? '';

    // Ici tu peux stocker l'avis en base ou fichier (optionnel)

    echo "Merci pour votre avis, $email.";  // Réponse envoyée au JS
} else {
    echo "Aucun avis soumis.";
}
?>
    