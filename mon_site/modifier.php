<?php  require('connexion_site.php'); 
include('head.php');
$id = $_GET['id_membre'];

$sql = 'SELECT * FROM membre WHERE id_membre=:id_membre';
$preparation = $db->prepare($sql);
$preparation->execute([':id_membre' => $id]);
$person = $preparation->fetchALL(PDO::FETCH_OBJ);


if (isset($_POST['identifiant']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['sexe']) && isset($_POST['adresse'])) {
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sexe = $_POST['sexe'];
    $adresse = $_POST['adresse'];
        $sql = 'UPDATE membre SET identifiant=:identifiant, mdp=:mdp, nom=:nom, prenom=:prenom, email=:email, sexe=:sexe, adresse=:adresse WHERE id_membre=:id_membre';
        $preparation = $db->prepare($sql);
        if ($preparation->execute([':identifiant' => $identifiant, ':mdp' => $mdp,':nom' => $nom, ':prenom' => $prenom, ':email' => $email, ':sexe' => $sexe, ':adresse' => $adresse, ':id_membre' => $id])) {
            header("location: nos_clients.php");
        }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>FORMULAIRE MODIFIER</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<h2>Mettre à jour client</h2>

 <form method="post" action="">
    <label for="identifiant">Identifiant</label><br>
    <input type="text" name="identifiant" placeholder="identifiant"><br>
    <label for="mdp">Mot de Passe</label><br>
    <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe"><br>
    <label for="des">Nom</label><br>
    <input type="text" name="nom" id="nom"  placeholder="votre nom"><br>
    <label for="prix">Prenom</label><br>
    <input type="text" name="prenom" id="prenom"  placeholder="votre prenom"><br>
    <label for="prix">email</label><br>
    <input type="emai" name="email" id="email"  placeholder="votre email"><br>
    <label for="sexe">Sexe</label><br><br>
    <input type="radio" name="sexe"  id="sexe" value="m" checked="" >homme
    <input type="radio" name="sexe" id="sexe" value="f" checked="" >femme<br><br>
    <label for="prix">Adresse</label><br>
    <input type="text" name="adresse" id="adresse"  placeholder="votre adresse"><br><br>
    <input type="submit" name="inscription" value="enrigister" id="button"><br><br>
   
