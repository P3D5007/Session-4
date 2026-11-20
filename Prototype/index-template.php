<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="site-header">
        <nav class="navigation">
            <a class="logo" href="index.php">Mon portfolio</a>
            <ul class="navigation-links">
                <li><a href="#accueil">Accueil</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="accueil">
        <h1>Bienvenue sur mon portfolio</h1>
        <p>Découvrez une sélection de mes projets et des technologies que j’utilise.</p>
        <a class="button" href="#projets">Voir mes projets</a>
    </section>

    <main>
        <section class="projects" id="projets">
            <div class="section-heading">
                <h2>Mes projets</h2>
                <p>Une sélection de projets réalisés ou en cours de réalisation.</p>
            </div>

            <div class="project-grid">
                <?php foreach ($projects ?? [] as $project) : ?>
                    <article class="project-card" id="projet-<?php echo $project['id']; ?>">
                        <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
                        <p class="project-category"><?php echo $project['category']; ?></p>
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <ul class="project-technologies">
                            <?php foreach ($project['technologies'] as $technology) : ?>
                                <li><?php echo $technology; ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php
                        if ($project['status'] === 'Terminé') {
                            $statusClass = 'status-done';
                        } else {
                            $statusClass = 'status-progress';
                        }
                        ?>
                        <p class="project-status <?php echo $statusClass; ?>">
                            Statut : <?php echo $project['status']; ?>
                        </p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="contact" id="contact">
            <h2>Contact</h2>
            <p>Vous souhaitez en savoir plus sur mes projets ? N’hésitez pas à me contacter.</p>
        </section>

    </main>

    <footer class="site-footer">
    </footer>

</body>

</html>