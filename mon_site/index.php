<?php 
    include('connexion_site.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON SITE</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
   </head>
    <body>
      <header>
     <nav>
<div class="w3-row w3-padding w3-green w3-xlarge">
  <div class="w3-quarter">
    <div class="w3-bar w3-cursive">
    <h2><img class="w3-hide-small w3-circle" src="mes_photo/logo.jpg" style="height:50px;">Mini MarKet.com</h2>

    </div>
  </div>

  <div class="w3-quarter">
    <input type="text" class="w3-white w3-border-1 w3-padding" style="width:100%" placeholder="recherche">
  </div>

  <div class="w3-half">
    <div class="w3-bar w3-xlarge">
      <a href="#" class="w3-bar-item w3-button w3-left"><i class="fa fa-search"></i></a>
      <a href="inscription.php"  class="w3-bar-item w3-button">M'inscrire</a>
        <a href="connexion.php" class="w3-bar-item w3-button "><i class="glyphicon glyphicon-user"></i>Me Connecter</a>
      <a href="nos_clients.php" class="w3-bar-item w3-button w3-right">Nos clients</a>
    </div>

  </div>
</div>
</nav>
</header>
<article>

<div class="w3-auto w3-section"  style="max-width:70%">
  <img class="mySlides" src="mes_photo/e-commerce.jpg" style="width:100%">
  <img class="mySlides" src="mes_photo/e-commerce.jpeg" style="width:100%">
  <img class="mySlides" src="mes_photo/e-commerce2.jpg" style="width:100%">
  <img class="mySlides" src="mes_photo/e-commerce3.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); 
}
</script>
    </div>
</article>
<section>
<div class="w3-container">
  <h1 class="w3-center w3-animate-fading w3-green ">Nos incroyables offres!</h1>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/cosmetiques.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Produits cosmétique</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/chaussure.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Chaussures</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/habillement.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Vetements</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/fruits-et-legumes.jpeg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Fruits et Légumes</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/original.jpg" style="width:90%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Téléphone</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="mes_photo/meuble.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-green">Meubles et décoaration</h4>
    </div>
  </div>
</div>
</section>
</body>
<div class="w3-container ">
<button onclick="myFunction('Demo1')" class="w3-button w3-blo w3-green w3-left-align">A Propos</button>
<div id="Demo1" class="w3-hide w3-animate-zoom">
<p> MINI MARKET est une entreprise de commerce en ligne présente sur le marché africain. Fondée en 2021 par Ablaye & Astou, mini market vend des produits électroniques, de cosmétiques, de l’alimentaire et des services.</p>
  </div>
</div>

<script>
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<footer>
    <div  class=" w3-bar w3-green w3-xlarge w3-green">
    Copyright ©<?php echo date('Y')?> Astou & Ablaye||Tous droits réservés 
    <h1>Contact:</h1> 
   <p> Tel:0022177184033 ou 00221781697486</p>
    <p> Mail:minimarket@gmail.sn</p>
    <p>Adresse:dakar,Sénégal</p>
<i class="fa fa-facebook-f" style="font-size:36px"></i>
<i class="fa fa-instagram" style="font-size:36px"></i>
<i class="fa fa-youtube" style="font-size:36px"></i>
<i class="fa fa-twitter" style="font-size:36px"></i>
<i class="fa fa-whatsapp" style="font-size:36px"></i>
    </div>
</footer>
</html>

