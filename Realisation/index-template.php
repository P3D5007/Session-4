<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CinéTrack</title>
    <link rel="stylesheet" href="css/CinéTrack-home.css">
</head>
<body>
    <header>
        <a href="CinéTrack-home.html" class="logo">Ciné<span>Track</span></a>
        <nav>
            <a href="CinéTrack-home.html">Home</a>
            <a href="ma-liste.html">My list</a>
        </nav>
    </header>

    <main>
        <div class="hero">
            <h1>All your movies, <span>in one place.</span></h1>
            <p>Rate what you have watched, keep a list of what you want to see, and find any movie in seconds.</p>
            <a href="ma-liste.html" class="button">Open my list</a>
        </div>

        <section>
            <h2>What you can do</h2>
            <div class="cards">
                <article class="card">
                    <h3>Add</h3>
                    <p>Add a movie to your list with its title, genre and year.</p>
                </article>
                <article class="card">
                    <h3>Track</h3>
                    <p>Mark a movie as watched, or keep it in your watchlist.</p>
                </article>
                <article class="card">
                    <h3>Rate</h3>
                    <p>Give each movie a rating from 1 to 5 stars.</p>
                </article>
                <article class="card">
                    <h3>Find</h3>
                    <p>Search by title and filter by genre or status.</p>
                </article>
            </div>
        </section>

        <section>
            <h2>A preview of your list</h2>
            <div class="cards movie-cards">
                <?php foreach ($movies as $movie): ?>
                <article class="card">
                    <img class="movie-cover-thumb" src="<?= $movie["poster"] ?>" alt="<?= $movie["title"] ?> movie poster">
                    <p class="movie-credit"><?= $movie["poster_credit"] ?></p>
                    <h3><a class="movie-link" href="<?= $movie["link"] ?>"><?= $movie["title"] ?></a></h3>
                    <p><?= $movie["genre"] ?>, <?= $movie["year"] ?></p>
                    <p class="<?= $movie["status"] ?>"><?= $movie["status"] === "watched" ? "Watched" : "To watch" ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

  <footer>
    <div class="footer-top">
        <div class="footer-brand">
            <a href="CinéTrack-home.html" class="logo">Ciné<span>Track</span></a>
            <p>© 2026 CinéTrack. Made with care.</p>
        </div>
    </div>
  </footer>

</body>
</html>