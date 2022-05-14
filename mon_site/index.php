<?php 
    include('connexion_site.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MON SITE</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="shortcut icon" href="images/upgrade.png" type="">
</head>
<body>
   <?php 
    include('includes/headerClient.php');
  ?>
<section class="slider_section ">
            <div class="slider_bg_box">
               <img src="mes_photo/image.jpg" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    BIENVENU 
                                    </span>
                                    <br>
                                    A OnelineMarket...!!!
                                 </h1>
                                 <p>
                                 OnelineMarket vous propose des produits de tout genres avec une meilleure qualite et des prix abodables!!!
                                 </p>
                              </div>
                           </div>                   
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item ">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                   BIENVENU
                                    </span>
                                    <br>
                                    A OnelineMarket...!!!
                                 </h1>
                                 <p>
                                 OnelineMarket vous propose des produits de tout genres avec une meilleure qualite et des prix abodables!!!
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-6 ">
                              <div class="detail-box">
                                 <h1>
                                    <span>
                                    BIENVENU
                                    </span>
                                    <br>
                                    OnelineMarket...!!!
                                 </h1>
                                 <p>
                                 OnelineMarket vous propose des produits de tout genres avec une meilleure qualite et des prix abodables!!!
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container">
                  <ol class="carousel-indicators">
                     <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                     <li data-target="#customCarousel1" data-slide-to="1"></li>
                     <li data-target="#customCarousel1" data-slide-to="2"></li>
                  </ol>
               </div>
            </div>
         </section>
<?php
   include('connexion_site.php');
 $sql="SELECT * FROM produit LIMIT 6";
$requete=$db->prepare($sql);
$requete->execute();
$res=$requete->fetchAll();
 ?>
 <!-- product section -->
 <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Nos <span>produits</span>
               </h2>
            </div>
            <div class="row">
               <?php foreach($res as $req) {?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="fichepro.php" class="option1">
                           Acheter 
                           </a>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="<?php echo 'mes_photo/'.$req['image'];?>" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                        <?php echo $req['titre'];?>
                        </h5>
                        <h6>
                        <?php echo "$".$req['prix'];?>
                        </h6>
                     </div>
                  </div>
            </div>
                  <?php }
                  ?>
</div>
           <div class="btn-box">
               <a href="NosProduits.php">
               Voir tous nos produits 
               </a>
            </div>
         </div>
      </section>
         <hr>
<?php 
    include('includes/footer.php');
?>


