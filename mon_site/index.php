<?php 
    include('connexion_site.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON SITE</title>
    <link rel="stylesheet" href="index.css">
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
    <h2><img class="w3-hide-small w3-circle" src="logo.jpg" style="height:50px;">Mini MarKet.com</h2>

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
<div class="w3-content w3-section"  style="max-width:100%">
  <img class="mySlides" src="e-commerce.jpg" style="width:100%">
  <img class="mySlides" src="e-commerce.jpeg" style="width:100%">
  <img class="mySlides" src="e-commerce2.jpg" style="width:100%">
  <img class="mySlides" src="e-commerce3.jpg" style="width:100%">
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
    <img src="cosmetiques.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Produits cosmétique</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="chaussure.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Chaussures</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="habillement.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Vetements</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="fruits-et-legumes.jpeg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Fruits et Légumes</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="original.jpg" style="width:90%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Téléphone</h4>
    </div>
  </div>
</div>
<div class="w3-third">
  <div class="w3-card">
    <img src="meuble.jpg" style="width:95%">
    <div class="w3-container">
      <h4 class="w3-btn w3-black">Meubles et décoaration</h4>
    </div>
  </div>
</div>
</section>
</body>
<footer>
    <div  class=" w3-bar w3-green w3-xlarge w3-green">
    Copyright ©<?php echo date('Y')?> Astou & Ablaye||Tous droits réservés 
    <h1>contact:</h1> 
   <p> Tel:0022177184033 ou 00221781697486</p>
    <p> Mail:minimarket@gmail.sn</p>
    <p>Adresse:dakar,Sénégal</p>
    </div>
</footer>
</html>

