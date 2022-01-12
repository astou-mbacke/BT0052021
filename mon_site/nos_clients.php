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
</head>
<body>
    <main class="container">
        <div class="row">
            <section class="col-12">
                <h1 class="w3-text-green"><strong>LISTE DE NOS CLIENTS</strong></h1>
                <table class="w3-table w3-bordered w3-border">
                    <thead class='w3-green'>
                        <th>ID</th>
                        <th>IDENTIFIANT</th>
                        <th>NOM</th>
                        <th>PRENOM</th>
                        <th>EMAIL</th>
                        <th>SEXE</th>
                        <th>ADRESSE</th>
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
                       <td> <a href="modifier.php?id_membre=<?= $client['id_membre']?>"><i class="fa fa-edit" style="font-size:48px;color:green" ></i></a>
                        <a onclick="return confirm('Voulez-vous vraiment supprimer cet enrégistrement?')" href="supprimer.php?id_membre=<?= $client['id_membre'];?>"><i class="fa fa-trash-o" style="font-size:48px;color:red"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    </tr>
                    <?php

                    }
                    ?>
                    
                    </tbody>
                </table><br>
                <a href="inscription.php" class="w-3-button w3-round w3-xxxlarge w3-green">Ajouter un client</a><br>
                <a href="index.php" class="w-3-button w3-round w3-xlarge w3-green">Retour</a>
            </section>
        </div>
    </main>

</body>
</html>

