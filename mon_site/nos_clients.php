<?php
session_start();
include('connexion_site.php');
$sql = 'SELECT * FROM membre';

$query = $db->prepare($sql);
$query->execute();
$result = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>listes des membres</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
include('includes/headerAdmin.php')
?>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="w3-text-green w3-center"><strong>LISTE DE NOS CLIENTS</strong></h1>
                <a href="inscription.php" class="w3-btn  w3-round w3-green w3-right"><i class="fa fa-plus"></i>Ajouter</a><br>
                <table class="w3-table w3-bordered w3-border">
                    <thead class='w3-green'>
                        <th>ID</th>
                        <th>IDENTIFIANT</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>EMAIL</th>
                        <th>SEXE</th>
                        <th>ADRESSE</th>
                        <th>ROLE</th>
                        <th>ACTIONS</th>
                    </thead>
                    <tbody>

                    <?php
                    foreach($result as $client){
                    ?>
                        <tr>
                        <td><?= $client['id_membre'] ?> </td>
                        <td><?= $client['identifiant'] ?> </td>
                        <td><?= $client['nom'] ?> </td>
                        <td><?= $client['prenom'] ?> </td>
                        <td><?= $client['email'] ?> </td>
                        <td><?= $client['sexe'] ?> </td>
                        <td><?= $client['adresse'] ?> </td>
                        <td><?= $client['role'] ?> </td>

                       <td> <a href="modifier.php?id_membre=<?= $client['id_membre']?>"  class="btn  btn-success"><i class="fa fa-edit" style="font-size:15px;" ></i></a>
                       <a  href="detailclient.php?id_membre=<?= $client['id_membre'];?>" class="btn  btn-info"  ><i class="fa fa-eye" style="font-size:15px;"></i></a>
                       <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimer.php?id_membre=<?= $client['id_membre'];?>" class="btn  btn-danger"><i class="fa fa-trash-o" style="font-size:15px;"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <?php

                    }
                    ?>
                    
                    </tbody>
                </table><br>
 
            </section>
        </div>
    </main>

</body>
</html>

