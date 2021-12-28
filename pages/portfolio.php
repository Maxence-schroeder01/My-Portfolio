<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style-navbar.css">
        <link rel="stylesheet" href="../css/style-general.css">
        <script src="https://kit.fontawesome.com/2b4b8ea570.js" crossorigin="anonymous"></script>
        <title>Maxence-Schroeder</title>
</head>
<body>
<nav class="navbar fixed-top">
  <div class="logo">
      <h3>Maxence-Schroeder</h3>
  </div>
  <div class="burger">
    <div class="line1"></div>
    <div class="line2"></div>
    <div class="line3"></div>
  </div>
  <ul class="nav-links ml-auto">
  <li><a class="acceuil-s">Acceuil</a></li>
    <li><a class="About-s">A_Propos</a></li>
    <li><a class="portfolio-s">Portfolio</a></li>
    <li><a class="contact-s">Contact</a></li>
  </ul>
</nav>
<section class="home-area element-cover-bg" style="background-image: url(img/home_page.jpg);">
<div class="center h-100">
  <h1 class="home-name">Maxence Schroeder</h1>
  <h3 class="cd-headline slide">
      <span>Je suis</span>
      <span class="cd-words-wrapper">
         <b class="is-visible">Developpeur</b>
         <b>Etudiant</b>
         <b>Programmeur</b>
</div>
<div class="fixed-block blockright">
  <ul class="social-icons">
    <li><a href="https://github.com/Maxence-schroeder01" aria-label="Github"><i class="fa fa-github fa-2x"></i></a></li>
    <li><a href="https://www.linkedin.com/in/maxence-schroeder-64056a197/" aria-label="Linkedin"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
    <li><a href="https://www.instagram.com/prime.max/" aria-label="instagram"><i class="fa fa-instagram fa-2x"></i></a></li>
    <li><a href="https://twitter.com/MaxPrime__" aria-label="Twitter"><i class="fa fa-twitter fa-2x"></i></a></li>
  </ul>
</div>
<div class="fixed-block blockleft">
  <ul class="lang-panel">
  <li><a href="?lang=en" aria-label="Anglais">ENG</a></li>
    <li><a href="?lang=fr" aria-label="French">FR</a></li>
  </ul>
</div>
</section>
<script src="../js/jquery-2.1.1.js"></script>
<script src="../js/navbar.js"></script>
<script src="../js/transition.js"></script>
<script src="../js/home-text.js"></script>
</body>
</html>