<?php
include('connexion_site.php');
//require_once("inc/fonction.inc.php");
$id=$_GET['id_produit'];

$sql="SELECT * FROM produit WHERE id_produit=$id";
$query= $db->prepare($sql);
$query->execute();
$res = $query->fetch();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body>
   

<h1>Fiche du produit </h1>

<div class="col-md-6 col-md-offset-3">
	<div class="panel-default border">
		<div class="panel-heading text-center"><h2><?= $res['titre'] ?></h2></div>
		<div class="panel-body">
			<img src="mes_photo/<?= $res['photo']?>" alt="" class="img-responsive"><hr>
			<p class="text-center">Description :<?= $res['description'] ?></p>
			<p class="text-center">Prix : <?= $res['prix'] ?>€</p><hr>
		<?php 	
		if ($res['stock']>0){
		?>
		<em>Nombre de produit(s) disponible : <?= $res['stock'] ?></em><hr>
		<form method="post" action="">	
			<label for="quantite">Quantité</label>
			<select class="form-control" id="quantite" name="quantite">
				
                    <!--8//ne commander plus que 8 je suis pas fournisseur
                    //si stock =0 repture de stock et masque boutton ajoupanier-->
					<?php 
						for($i=1;$i<=5;$i++):?>
					<option><?=$i?></option>
					<?php endfor;
					//echo "<div class='alert alert-danger text-center'>Rupture de stock!!!</div>"
					?>		
			</select><br>
			<input type="submit" name="ajout_panier" class="btn btn-primary col-md-12" value="ajout au panier">
		</form>
		<?php 
		}
		else{
		echo "<div class='alert alert-danger text-center'>Rupture de stock !!!</div>";	 
		}
		?>	
		</div>
	</div>
</div>


    
</body>
</html>