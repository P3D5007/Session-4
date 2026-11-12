<?php

$taches = [
    [
        'id' => 1,
        'titre' => 'Créer la structure HTML',
        'description' => 'Réaliser la structure HTML de la page d\'accueil.',
        'date_limite' => '15/11/2026',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 2,
        'titre' => 'Intégrer les styles CSS',
        'description' => 'Appliquer les couleurs et les espacements.',
        'date_limite' => '17/11/2026',
        'priorite' => 'Moyenne',
        'terminee' => false
    ],
    [
        'id' => 3,
        'titre' => 'Créer les fonctions PHP',
        'description' => 'Organiser les traitements de la ToDo List.',
        'date_limite' => '10/11/2026',
        'priorite' => 'Haute',
        'terminee' => true
    ],
    [
        'id' => 4,
        'titre' => 'Tester l\'application',
        'description' => 'Vérifier le bon fonctionnement et corriger les erreurs.',
        'date_limite' => '20/11/2026',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 5,
        'titre' => 'Préparer la collection de tâches',
        'description' => 'Créer un tableau multidimensionnel avec 8 tâches.',
        'date_limite' => '12/11/2026',
        'priorite' => 'Moyenne',
        'terminee' => true
    ],
    [
        'id' => 6,
        'titre' => 'Afficher les statistiques',
        'description' => 'Calculer et afficher le total, les tâches terminées et non terminées.',
        'date_limite' => '21/11/2026',
        'priorite' => 'Haute',
        'terminee' => false
    ],
    [
        'id' => 7,
        'titre' => 'Organiser les fichiers du projet',
        'description' => 'Créer un dossier pour le projet et y placer les fichiers (index.php, style.css).',
        'date_limite' => '22/11/2026',
        'priorite' => 'Basse',
        'terminee' => false
    ],
    [
        'id' => 8,
        'titre' => 'Vérifier l\'affichage des tâches',
        'description' => 'Tester tous les cas (terminée et non terminée) et corriger le style.',
        'date_limite' => '24/11/2026',
        'priorite' => 'Moyenne',
        'terminee' => false
    ]
];

require 'index-template.php';
