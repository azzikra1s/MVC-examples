<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link href="<?= BASE_URL; ?>/css/bootstrap.css" rel="stylesheet" crossorigin="anonymous">    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL; ?>/home">GoBlog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="<?= BASE_URL; ?>/home">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/blog">Blog</a>
                <a class="nav-item nav-link" href="<?= BASE_URL; ?>/user">User</a>
            </div>
        </div>
    </div>
</nav>

    
