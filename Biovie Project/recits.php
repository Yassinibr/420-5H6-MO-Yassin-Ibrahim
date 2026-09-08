<?php
$nomProjet  = 'Biovie Coiffure & Soins';
$auteur     = 'Yassin Ibrahim';

// Récits utilisateurs adaptés au salon de coiffure et à la boutique de produits
$recitsUtilisateurs = [
    [
        'id' => 'US-01',
        'en_tant_que' => 'Client du salon',
        'je_veux' => 'réserver un créneau de coiffure en choisissant le coiffeur et le type de soin',
        'afin_de' => 'planifier mon rendez-vous rapidement sans avoir à téléphoner au salon.',
        'criteres' => [
            'Le système affiche uniquement les créneaux horaires réellement disponibles.',
            'L’utilisateur reçoit une confirmation visuelle de sa réservation avec la date et le tarif estimé.',
            'Un formulaire permet de saisir son nom, téléphone et adresse courriel.'
        ]
    ],
    [
        'id' => 'US-02',
        'en_tant_que' => 'Acheteur en ligne',
        'je_veux' => 'filtrer la boutique de produits par type de cheveux (secs, bouclés, colorés)',
        'afin_de' => 'trouver rapidement le shampooing ou le traitement adapté à mes besoins.',
        'criteres' => [
            'Un menu de filtrage dynamique met à jour la liste des produits affichés.',
            'Chaque fiche produit présente une photo, une description, le prix et l’état du stock.',
            'Un bouton "Ajouter au panier" est disponible pour chaque article en stock.'
        ]
    ],
    [
        'id' => 'US-03',
        'en_tant_que' => 'Gestionnaire du salon',
        'je_veux' => 'mettre à jour la quantité en stock d’un produit capillaire',
        'afin_de' => 'éviter de vendre en ligne des articles qui sont en rupture de stock au magasin.',
        'criteres' => [
            'Un écran d’administration permet de modifier la quantité en stock de chaque produit.',
            'Si le stock atteint zéro, le produit est automatiquement marqué "Rupture de stock" sur la boutique.',
            'Une alerte visuelle prévient le gestionnaire lorsque le niveau de stock est faible.'
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($nomProjet); ?> - Récits Utilisateurs</title>
</head>
<body>

    <header>
        <h1>Récits Utilisateurs - <?php echo htmlspecialchars($nomProjet); ?></h1>
        <p>Développé par : <?php echo htmlspecialchars($auteur); ?></p>
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
            <h2>Liste des Récits Utilisateurs (User Stories)</h2>

            <?php foreach ($recitsUtilisateurs as $recit): ?>
                <article style="border: 1px solid #ccc; margin-bottom: 20px; padding: 15px; border-radius: 5px;">
                    <h3>
                        [<?php echo htmlspecialchars($recit['id']); ?>] 
                        En tant que <?php echo htmlspecialchars($recit['en_tant_que']); ?>
                    </h3>
                    <p>
                        <strong>Je veux :</strong> <?php echo htmlspecialchars($recit['je_veux']); ?><br>
                        <strong>Afin de :</strong> <?php echo htmlspecialchars($recit['afin_de']); ?>
                    </p>
                    
                    <h4>Critères d'acceptation :</h4>
                    <ul>
                        <?php foreach ($recit['criteres'] as $critere): ?>
                            <li><?php echo htmlspecialchars($critere); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </article>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - <?php echo htmlspecialchars($nomProjet); ?></p>
    </footer>

</body>
</html>