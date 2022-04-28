<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'monsite');

// Obtenez le nombre total d'enregistrements de notre table "étudiants".
$total_pages = $mysqli->query('SELECT * FROM produit')->num_rows;

// Vérifiez si le numéro de page est spécifié et vérifiez s'il s'agit d'un numéro, sinon retournez le numéro de page par défaut qui est 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;

//Nombre de résultats à afficher sur chaque page.
$num_results_on_page = 5;

if ($stmt = $mysqli->prepare('SELECT * FROM produit ORDER BY titre LIMIT ?,?')) {
	// Calculez la page pour obtenir les résultats dont nous avons besoin à partir de notre tableau
	$calc_page = ($page - 1) * $num_results_on_page;
	$stmt->bind_param('ii', $calc_page, $num_results_on_page);
	$stmt->execute(); 
	// Obtenez les résultats...
	$result = $stmt->get_result();

	@$titre=$_POST["titre"];
    @$prix=$_POST["prix"];
    @$des=$_POST["des"];
    @$ajout=$_POST['ajout'];
	$message="";
	if(isset($ajout)){
			include("connexion_site.php");
				$photo=$_FILES['image']['name'];
    $upload="mes_photo/".$photo;
    move_uploaded_file($_FILES['image']['tmp_name'],$upload);
				/*$sql = "INSERT INTO produit(image,titre,prix,description) VALUES ('$photo','$titre','$prix','$des')";
				$preparation = $db->prepare($sql);
   if ($preparation->execute([':image' => $photo,':titre' => $titre,':prix' => $prix,':description' => $des])) {
	 */
	$insert=$db->prepare("INSERT INTO produit(image,titre,prix,description) VALUES (?,?,?,?)");
	if($insert->execute(array($photo,$titre,$prix,$des)))	
	{
            $message="<div class='alert alert-success' role='alert'>
            <h4 class='alert-heading'>Succés!</h4>
            <p>Insertion réussie</p>
            <hr> 
          </div>";
          header('Refresh:3;url="produit.php"');
            
           }
    }
    else {
        $message = "une erreur s'est produite<br>";
    }

        
				
				
			}
		
	
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<title>PHP & MySQL Pagination by CodeShack</title>
			<meta charset="utf-8">
             <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/upgrade.png" type="">
      <title>Chez-Diallo</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
	  <link href="css/responsive.css" rel="stylesheet" />
	  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
	    <style>
         body {font-family: Arial, Helvetica, sans-serif;}

#myBtn{
    background-color:green;
    color: white;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  
}
#ajout{
   background-color: #ed823b;
}
#ajout:hover{
   background-color: #fa4343;
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
/*******style formulaire modification**** */
/*************************************** */
#myBtn2{
    background-color:green;
    color: white;
}

/* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content_form_modifie {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  
}
/* The Close Button */
.fermer {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.fermer:hover,
.fermer:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

			
			.pagination {
				list-style-type: none;
				padding: 10px 0;
				display: inline-flex;
				justify-content: center;
				box-sizing: border-box;
			}
			.pagination li {
				box-sizing: border-box;
				padding-right: 10px;
			}
			.pagination li a {
				box-sizing: border-box;
				background-color: #e2e6e6;
				padding: 8px;
				text-decoration: none;
				font-size: 12px;
				font-weight: bold;
				color: #616872;
				border-radius: 4px;
			}
			.pagination li a:hover {
				background-color: #d4dada;
			}
			.pagination .next a, .pagination .prev a {
				text-transform: uppercase;
				font-size: 12px;
			}
			.pagination .currentpage a {
				background-color: #518acb;
				color: #fff;
			}
			.pagination .currentpage a:hover {
				background-color: #518acb;
			}
            img{
                height:70px;
                width:80px;
            }
			</style> 
		</head>
		<body>
        <?php include('includes/headerAdmin.php');?>
	  <button id="myBtn"  class="btn btn-success float-right mb-3"><i class="fa fa-plus"></i> Ajouter</button>
             
	  <div id="myModal" class="modal">
                        
						<!-- Modal content -->
						<div class="modal-content">
							  <span class="close">&times;</span>
							  <form id="signup" method="POST" enctype="multipart/form-data">

    <div class="header">
    
        <h3>Ajouter des Produits</h3>
        
        <?php 
                           if (!empty($message)) {
                              echo $message;
                           }
                        ?>
    </div>
    
    <div class="sep"></div>

    <div class="inputs">
    
        <input type="file" name="image" placeholder="Image" required/><br><br>
    
        <input type="text" name="titre" placeholder="Titre" required/><br><br>
        <input type="number"name="prix" placeholder="Prix" required/><br><br>
        <input type="text" name="des" placeholder="Description" required/><br><br>
        
        
        <button id="submit" name="ajout" type="submit" >Ajouter</button>
    
    </div>

</form>

			   </div>
			   </div>
			   </div>


			</div>
		 </div>

	<section>   

<main class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="w3-text-green w3-center"><strong>LISTE DES PRODUITS</strong></h1>
                <table class="w3-table w3-bordered w3-border">
                    <thead class='w3-green'>
                        <th>Image</th>
                        <th>Titre</th>
                        <th>Prix</th>
                        <th>Description</th>
						<th>Actions</th>
        
				</tr>
                </thead>
                <tbody>
				<?php foreach ($result as $row ){ ?>
				<tr>
					<td><img src="mes_photo/<?php echo $row['image'];?> " alt=""></td>
					<td><?php echo $row['titre']; ?></td>
					<td><?php echo $row['prix']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                <td>
                          <a  href="detailpro.php?id=<?= $mess['id_contact'];?>" class="btn btn-info"><i class="fa fa-eye"  style="font-size:15px;"></i></a>
                          
                              <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimerprod.php?id=<?= $row['id_produit'];?>" class="btn btn-danger" ><i class="fa fa-trash"  style="font-size:15px;"></i></a>
                              
                          </td>
      </tr>
      <?php } ?>
                          
                  </tbody>
              </table>
          </div>
    </main> 
	</section>    
			<?php if (ceil($total_pages / $num_results_on_page) > 0): ?>
			<ul  class="pagination">
				<?php if ($page > 1): ?>
				<li class="prev"><a href="produit.php?page=<?php echo $page-1 ?>">Prev</a></li>
				<?php endif; ?>

				<?php if ($page > 3): ?>
				<li class="start"><a href="produit.php?page=1">1</a></li>
				<li class="dots">...</li>
				<?php endif; ?>

				<?php if ($page-2 > 0): ?><li class="page"><a href="produit.php?page=<?php echo $page-2 ?>"><?php echo $page-2 ?></a></li><?php endif; ?>
				<?php if ($page-1 > 0): ?><li class="page"><a href="produit.php?page=<?php echo $page-1 ?>"><?php echo $page-1 ?></a></li><?php endif; ?>

				<li class="currentpage"><a href="produit.php?page=<?php echo $page ?>"><?php echo $page ?></a></li>

				<?php if ($page+1 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="produit.php?page=<?php echo $page+1 ?>"><?php echo $page+1 ?></a></li><?php endif; ?>
				<?php if ($page+2 < ceil($total_pages / $num_results_on_page)+1): ?><li class="page"><a href="produit.php?page=<?php echo $page+2 ?>"><?php echo $page+2 ?></a></li><?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)-2): ?>
				<li class="dots">...</li>
				<li class="end"><a href="produit.php?page=<?php echo ceil($total_pages / $num_results_on_page) ?>"><?php echo ceil($total_pages / $num_results_on_page) ?></a></li>
				<?php endif; ?>

				<?php if ($page < ceil($total_pages / $num_results_on_page)): ?>
				<li class="next"><a href="produit.php?page=<?php echo $page+1 ?>">Next</a></li>
				<?php endif; ?>
			</ul>
			<?php endif; ?>
		</body>
	</html>
	<?php
	$stmt->close();

?>
 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("fermer")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal.style.display = "none";
  }
}
</script>
   </body>
</html>