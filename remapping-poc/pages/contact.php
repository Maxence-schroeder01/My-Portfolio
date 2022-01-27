<?php include_once 'config.php'; 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style-navbar.css">
        <link rel="stylesheet" href="../css/style-contact.css">
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
<section class="home-area element-cover-bg">

<section id="contact">
  
  <h1 class="section-header">Contact</h1>
  
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 
    
    <form id="contact-form" action="tools/send-mail.php" method="post" enctype="multipart/form-data" class="form-horizontal" role="form">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>
      </div>

      <textarea class="form-control message" rows="10" placeholder="MESSAGE" name="message" required></textarea>
      <br>
      
      <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
        </div>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

      <hr>

        <ul class="contact-list">
          <li class="list-item"><i class="fas fa-map-marker fa-2x"><span class="contact-text place">Matane, Quebec</span></i></li>
          
          <li class="list-item"><i class="fas fa-phone fa-2x"><span class="contact-text phone"><a href="tel:+33613900037" title="Give me a call">+33613900037</a></span></i></li>
          
          <li class="list-item"><i class="fas fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:maxence.schroeder@gmail.com" title="Send me an email">maxence.schroeder@gmail.com</a></span></i></li>
          
        </ul>
        <hr>
      </div>
    
  </div>
  
</section>  
<?php include 'tools/footer.php'; ?>