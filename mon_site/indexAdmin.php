<?php
         include("connexion_site.php");
        
        $affiche = "SELECT * FROM contact";
        $res = $db->prepare($affiche);
        $res->execute();
        $message= $res->fetchAll();

      
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MON SITE</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <link href="css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
   <body >
      <?php include('includes/headeradmin.php');?>
      <main class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="w3-text-green w3-center"><strong>LISTE DES CONTACTS</strong></h1>
                <table class="w3-table w3-bordered w3-border">
                    <thead class='w3-green'>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>E-mail</th>
                    <th>Sujet</th>
                    <th>Message</th>
                    <th>Actions</th>
                    </thead>
                      <tbody>
      <?php foreach ($message as $mess){ ?>
      <tr>
      <td><?= $mess['id_contact'] ?> </td>
      <td><?= $mess['username'] ?> </td>
      <td><?= $mess['email'] ?> </td>
      <td><?= $mess['sujet'] ?> </td>
      <td><?= $mess['message'] ?></td>
  
      <td>
                          <a  href="detailcontact.php?id=<?= $mess['id_contact'];?>" class="btn  btn-info"   href="show.php?id="><i class="fa fa-eye" style="font-size:15px;"></i></a>
                          
                              <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimermes.php?id_contact=<?= $mess['id_contact'];?>" class="btn btn-danger" ><i class="fa fa-trash" style="font-size:15px;"></i></a>
                              
                          </td>
                      
             
      </tr>
      <?php } ?>
                          
                  </tbody>
              </table>
          </div>
      
        <main>
   </body>
</html>

