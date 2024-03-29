<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
    <title><?= $data['title']; ?></title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="index.html" class="navbar-brand">DONATE ID</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/home" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/home/kampanye" class="nav-link">Kampanye</a>
                </li>
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/about" class="nav-link">Tentang Kami</a>
                </li>
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/about/contact" class="nav-link">Kontak</a>
                </li>
                
                <?php if(!isset($_SESSION['id_akun'])) { ?>
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/home/register" class="nav-link">Register/Login</a>
                </li>
                <?php } else { ?>
                <li class="nav-item">
                <a href="<?= BASEURL; ?>/home/logout" class="nav-link">Logout</a>
                </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>