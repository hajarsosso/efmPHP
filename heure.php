<?php
// Heure actuelle
$heure = date('H');

// Définir le nom et le prénom de l'administrateur
$nom = 'NOM';
$prenom = 'PRENOM';

// Afficher le message en fonction de l'heure
if ($heure >= 5 && $heure <= 11) {
    echo "Bonjour $prenom $nom, bienvenue sur notre site !";
} elseif ($heure >= 12 && $heure <= 18) {
    echo "Bonjour $prenom $nom, bienvenue sur notre site !";
} else {
    echo "Bonsoir $prenom $nom, bienvenue sur notre site !";
}
?>