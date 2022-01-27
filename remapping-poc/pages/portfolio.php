<?php include_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style-navbar.css">
        <link rel="stylesheet" href="../css/style-general.css">
        <link rel="stylesheet" href="../css/style-portfolio.css">
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
<section class="home-area element-cover-bg" style="background-image: url(../img/home_portfolio.jpg);">
  <div id="ghapidata" class="home-name container"></div>
<?php include 'tools/footer.php'; ?>