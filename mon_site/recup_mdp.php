<?php
session_start();
include('connexion_site.php');
if(isset($_SESSION['id_membre'])){
    header('locaion:connexion.php');
    exit;
}
if(!empty($_POST)){
    extract($_POST);
    $valide=true;
    if(isset($_POST['envoi'])){
        if(!empty($_POST['email'])){
            $valide=false;
        }
        if($valide){
            $verif_mail=$db->query('SELECT email, nouveau_mdp FROM membre WHERE mail=?', array($_POST['email']));
            $verif_mail=$verif_mail->fetch();
            if(isset($verif_mail['email'])){
                if($verif_mail['nouveau_mdp']==0){
                    $n_mdp=rand(1996, 2022);
                    $db->insert("UPDATE membre SET mdp=?, nouveau_mdp=1 WHERE email=?",array($n_mdp, $verif_mail['email']));
                    echo $n_mdp;
                }
            }
        }
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
    <link rel="stylesheet" href="form.css">
    <title>formulaire</title>
</head>
<body>
<h2>Réinitialisation du mot de passe</h2>
    <form method="post" action="">
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="votre email"><br><br>
    <input type="submit" name="envoi" value="Envoyer" id="button">
    
    </form>
    <?php
if(isset($valide))
{
?>
  <? $valide?>
<?php
}
?>
</body>
</html>
