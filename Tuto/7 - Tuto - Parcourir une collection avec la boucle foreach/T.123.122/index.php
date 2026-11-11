<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Comment structurer ses composants UI avec Atomic Design ?',
        'contenu' => 'Découvrez les concepts fondamentaux de la méthode Atomic Design pour organiser et réutiliser efficacement les composants de vos interfaces web.',
        'image' => 'article-atomic-design.png',
        'date_creation' => '2026-02-14',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu'
    ],
    [
        'id' => 2,
        'titre' => 'Maîtriser les micro-interactions UX',
        'contenu' => 'Une interface belle n\'est pas suffisante. Les micro-interactions permettent d\'améliorer l\'expérience utilisateur et de rendre une application plus intuitive.',
        'image' => 'article-micro-interactions.png',
        'date_creation' => '2026-02-10',
        'categorie_libelle' => 'Design UI/UX',
        'categorie_couleur' => 'rose'
    ],
    [
        'id' => 3,
        'titre' => 'Les tableaux JavaScript : les méthodes indispensables',
        'contenu' => 'Apprenez à manipuler les tableaux JavaScript avec les méthodes map(), filter(), find(), reduce() et forEach() à travers des exemples pratiques.',
        'image' => 'article-javascript.png',
        'date_creation' => '2026-02-08',
        'categorie_libelle' => 'JavaScript',
        'categorie_couleur' => 'jaune'
    ],
    [
        'id' => 4,
        'titre' => 'Débuter avec PHP : comprendre les bases du développement côté serveur',
        'contenu' => 'Découvrez comment PHP permet de créer des pages web dynamiques, manipuler des formulaires, gérer des tableaux et réutiliser du code avec les fichiers include et require.',
        'image' => 'article-php.png',
        'date_creation' => '2026-02-05',
        'categorie_libelle' => 'PHP',
        'categorie_couleur' => 'vert'
    ],
    [
        'id' => 5,
        'titre' => 'Git et GitHub : bien gérer ses projets en équipe',
        'contenu' => 'Découvrez les commandes essentielles de Git, la gestion des branches, les commits et le partage de vos projets sur GitHub pour faciliter le travail collaboratif.',
        'image' => 'article-git.png',
        'date_creation' => '2026-02-01',
        'categorie_libelle' => 'Outils',
        'categorie_couleur' => 'violet'
    ]
];

require('index-template.php');