<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="page-shell">
        <main class="todo-app">
            <header class="top-page">
                <div class="title-wrap">
                    <div class="title-icon">
                        <svg viewBox="0 0 32 32" aria-hidden="true">
                            <path d="M10 6h-3a3 3 0 0 0-3 3v18a3 3 0 0 0 3 3h18a3 3 0 0 0 3-3V9a3 3 0 0 0-3-3h-3" fill="none" stroke="currentColor" stroke-width="2.5"/>
                            <path d="M11 4h10v5H11zM10 17l4 4 8-9" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                        </svg>
                    </div>
                        <?php
                        $totalTaches = 0;
                        $tachesTerminees = 0;

                        foreach ($taches as $tache) {
                        $totalTaches = $totalTaches + 1;
                        if ($tache['terminee']) {
                        $tachesTerminees = $tachesTerminees + 1;
                            }
                        }

                        $tachesNonTerminees = $totalTaches - $tachesTerminees;
                        ?>
                    <div class="title-group">
                        <h1>Ma Todo List</h1>
                        <p>Gérez et suivez vos tâches quotidiennes</p>
                    </div>
                </div>
            </header>

            <section class="dashboard">
                <div class="stats">
                    <div class="stat-card total-card">
                        <div class="stat-icon">
                            <svg viewBox="0 0 32 32" aria-hidden="true">
                                <path d="M16 3 3 10l13 7 13-7-13-7zM3 16l13 7 13-7M3 22l13 7 13-7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <span class="stat-label">Total</span>
                            <span class="stat-value"><?php echo $totalTaches; ?></span>
                            <span class="stat-note">tâches</span>
                        </div>
                    </div>
                    <div class="stat-card completed-card">
                        <div class="stat-icon completed-icon">✓</div>
                        <div class="stat-content">
                            <span class="stat-label">Terminées</span>
                            <span class="stat-value"><?php echo $tachesTerminees; ?></span>
                            <span class="stat-note">tâches</span>
                        </div>
                    </div>
                    <div class="stat-card pending-card">
                        <div class="stat-icon pending-icon"></div>
                        <div class="stat-content">
                            <span class="stat-label">Non terminées</span>
                            <span class="stat-value"><?php echo $tachesNonTerminees; ?></span>
                            <span class="stat-note">tâches</span>
                        </div>
                    </div>
                </div>

                <section class="task-panel">
                    <h2>Liste des tâches</h2>
                    <ul class="task-list">
                        <?php foreach ($taches as $tache) { ?>
                            <?php
                            $classePriorite = 'low';
                            if ($tache['priorite'] == 'Haute') {
                                $classePriorite = 'high';
                            } else if ($tache['priorite'] == 'Moyenne') {
                                $classePriorite = 'medium';
                            }
                            ?>
                            <?php if ($tache['terminee']) { ?>
                                <li class="task-item done">
                            <?php } else { ?>
                                <li class="task-item">
                            <?php } ?>
                                    <div class="task-main">
                                        <span class="task-check"></span>
                                        <div class="task-copy">
                                            <div class="task-title"><?php echo $tache['titre']; ?></div>
                                            <div class="task-desc"><?php echo $tache['description']; ?></div>
                                        </div>
                                    </div>
                                    <div class="task-meta">
                                        <span class="priority <?php echo $classePriorite; ?>"><?php echo $tache['priorite']; ?></span>
                                        <span class="date-pill">
                                            <span class="calendar-icon">
                                                <svg viewBox="0 0 20 20" aria-hidden="true">
                                                    <rect x="3" y="5" width="14" height="12" rx="2" fill="none" stroke="currentColor" stroke-width="1.5"/>
                                                    <path d="M6 3v4M14 3v4M3 9h14" fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5"/>
                                                </svg>
                                            </span>
                                            <?php echo $tache['date_limite']; ?>
                                        </span>
                                    </div>
                                </li>
                        <?php } ?>
                    </ul>
                </section>
            </section>
        </main>
    </div>
</body>
</html>
