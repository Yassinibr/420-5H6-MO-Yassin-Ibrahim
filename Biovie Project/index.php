<?php
// Variables de configuration et informations du projet
$nomProjet  = 'Biovie Coiffure & Soins';
$auteur     = 'Yassin Ibrahim';
$versionPhp = PHP_VERSION;

// Description de la problématique adaptée au salon et à la boutique
$descriptionProbleme = "L'application Biovie permet de résoudre le manque de coordination entre la prise de rendez-vous en salon de coiffure et la gestion de l'inventaire des produits capillaires. Elle s'adresse aux clients cherchant à réserver des soins adaptés et à acheter leurs produits spécialisés en ligne, tout en aidant l'équipe du salon à gérer l'agenda et le stock. Grâce à ce suivi centralisé, les utilisateurs bénéficient de conseils sur mesure et d'un accès rapide à leurs produits préférés.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($nomProjet); ?> - Accueil</title>
</head>
<body>

    <header>
        <h1><?php echo htmlspecialchars($nomProjet); ?></h1>
        <p>Auteur(s) : <strong><?php echo htmlspecialchars($auteur); ?></strong></p>
        <p>Version PHP active : <code><?php echo htmlspecialchars($versionPhp); ?></code></p>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="recits.php">Récits Utilisateurs</a></li>
            <li><a href="rendezvous.php">Réservation de Rendez-vous</a></li>
            <li><a href="boutique.php">Boutique de Produits Capillaires</a></li>
        </ul>
    </nav>

    <main>
        <section>
            <h2>À propos du projet</h2>
            <p><?php echo htmlspecialchars($descriptionProbleme); ?></p>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - <?php echo htmlspecialchars($nomProjet); ?></p>
    </footer>

</body>
</html>