<?php 
session_start();
include('connexion_site.php');
if(isset($_GET['id_membre']) AND $_GET['id_membre']>0)
{
    $getid=intval($_GET['id_membre']);
    $requser=$db->prepare("SELECT * FROM membre WHERE id_membre=?");
    $requser->execute(array($getid));
    $userinfo=$requser->fetch();
    $_SESSION['identifiant']=$userinfo['identifiant'];
    $_SESSION['nom']=$userinfo['nom'];
    $_SESSION['prenom']=$userinfo['prenom'];
    $_SESSION['email']=$userinfo['email'];
    $_SESSION['sexe']=$userinfo['sexe'];
    $_SESSION['adresse']=$userinfo['adresse'];
}
       
 ?>
<!DOCTYPE html>
<html>
<head>
<title>MON PROFIL</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-amber.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="w3-row w3-padding w3-green w3-xlarge">
  <div class="w3-quarter">
    <div class="w3-bar">
    <h2><i class="glyphicon glyphicon-user"></i>Profil de <?php echo $_SESSION['identifiant']; ?></h2>
    </div>
  </div>

  <div class="w3-half">
    <input type="text" class="w3-white w3-border-0 w3-padding" style="width:100%" placeholder="recherche">
  </div>

  <div class="w3-quarter">
    <div class="w3-bar w3-xlarge">
      <a href="#" class="w3-bar-item w3-button w3-left"><i class="fa fa-search"></i></a>
      <a href="deconnexion.php" class="w3-bar-item w3-button w3-right">Se Déconnecter</a>
    </div>

  </div>
</div>
</nav>
</header>
<section>
<div class="w3-container w3-padding-64">

       <strong>Identifiant: </strong> <?php echo $_SESSION['identifiant']; ?><br><br>
       <strong>Nom:</strong> <?php echo $_SESSION['nom']; ?><br><br>
       <strong>Prenom:</strong> <?php echo $_SESSION['prenom']; ?><br><br>
      <strong>Email:</strong> <?php echo $_SESSION['email']; ?><br><br>
       <strong>Sexe:</strong> <?php echo $_SESSION['sexe']; ?><br><br>
      <strong>Adresse:</strong> <?php echo $_SESSION['adresse']; ?><br><br>
      <div >
     </div>
     </div>
     </section>
  <article>
  </article>
  </body>
  <footer>
</footer>
</html>