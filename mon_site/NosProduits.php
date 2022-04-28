<?php 
    include('connexion_site.php');
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/upgrade.png" type="">
      <title>Toutes les Produits</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <link href="css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="styles/produits.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   </head>
   <body>
      <?php include('includes/headerClient.php');?>
      <?php
   include('connexion_site.php');
 $sql="SELECT * FROM produit ";
$requete=$db->prepare($sql);
$requete->execute();
$res=$requete->fetchAll();
 ?>

 <!-- product section -->
 <section class="product_section layout_padding">
         <div class="container">
            <div class="row">
               <?php foreach($res as $req) {?>
                  <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                         
                           <a href="fichepro" class="option1">
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
</div>
</section>
<?php 
    include('includes/footer.php');
?>


