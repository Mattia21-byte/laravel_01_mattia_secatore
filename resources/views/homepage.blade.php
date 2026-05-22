<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-lg custom-nav">
    <div class="container">
        <a class="navbar-brand fw-bold text-white" href="/">Selfwork Laravel</a>

        <div class="navbar-nav">
            <a class="nav-link text-white fw-bold" href="/">Home</a>
            <a class="nav-link text-white fw-bold" href="/pagina1">Pagina 1</a>
            <a class="nav-link text-white fw-bold" href="/pagina2">Pagina 2</a>
        </div>
    </div>
</nav>

<main class="container my-5">
    <section class="hero-box text-center">
        <h1 class="display-4 fw-bold">Benvenuti nel mio progetto Laravel</h1>
        <p class="lead">
            Questo sito è stato realizzato usando rotte, viste Blade, Bootstrap e CSS personalizzato.
        </p>

        <a href="/pagina1" class="btn btn-primary m-2">Vai alla Pagina 1</a>
        <a href="/pagina2" class="btn btn-outline-dark m-2">Vai alla Pagina 2</a>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>