<!doctype html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pagina 1</title>

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
    <div class="card custom-card shadow">
        <div class="card-body">
            <h1 class="fw-bold">Pagina 1</h1>
            <p>
                In questa pagina mostro il collegamento tra una rotta Laravel e una view Blade.
                La rotta <strong>/pagina1</strong> restituisce questa pagina.
            </p>

            <a href="/" class="btn btn-secondary">Torna alla Homepage</a>
            <a href="/pagina2" class="btn btn-primary">Vai alla Pagina 2</a>
        </div>
    </div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>