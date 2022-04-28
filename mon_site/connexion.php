<?php 
/*session_start();
    include('connexion_site.php');
    include('head.php');
    if(isset($_POST['connecter'])){
        $email=htmlspecialchars($_POST['email']);
        $mdp=sha1($_POST['mdp']);

        if (!empty($_POST['email']) AND !empty($_POST['mdp']))  
        {
            $requser=$db->prepare("SELECT * FROM membre where email=? AND mdp=?");
            $requser->execute(array($email,$mdp));
            $userexist=$requser->rowCount();
            if($userexist==1)
            {
                $userinfo=$requser->fetch();
                $_SESSION['id_membre']=$userinfo['id_membre'];
                $_SESSION['identifiant']=$userinfo['identifiant'];
                $_SESSION['email']=$userinfo['email'];
                $_SESSION['nom']=$userinfo['nom'];
                $_SESSION['prenom']=$userinfo['prenom'];
                $_SESSION['sexe']=$userinfo['sexe'];
                $_SESSION['adresse']=$userinfo['adresse'];
                header('location:profil.php?id='.$_SESSION['id_membre']);
        
}
    
         else
            {
                $erreur="mail ou mot de passe incorrect!";
            }
        }
        else{
            $erreur="Tous les champs doivent etres completés!";
        }
    } */
    
    session_start();
include('connexion_site.php');
@$email=$_POST['email'];
@$mdp=sha1($_POST['mdp']);
@$bouton=$_POST['connecter'];
if(isset($bouton)){
    $req="SELECT * FROM membre WHERE email=? AND mdp=? LIMIT 1";
    //$req->setFetchMode(PDO::FETCH_ASSOC);
    $preparation=$db->prepare($req);
    $preparation->execute(array($email,$mdp));
    $tab=$preparation->fetchAll();
    if(count($tab)==0){
        $message="Mauvais login ou mot de passe...";
    }
    else
    {
        $preparation=$db->query("SELECT * FROM membre");
            //$res->setFetchMode(PDO::FETCH_ASSOC);
            $tab=$preparation->fetchAll();
            foreach ($tab as $role) {
        
             if($role['role']=='admin' AND $role['email']==$email AND $role['mdp']==$mdp)
                {
                    header("location:indexAdmin.php");

                }
                if($role['role']=='utilisateur' AND $role['email']==$email AND $role['mdp']==$mdp)
                {
                    $preparation=$db->prepare("SELECT * FROM membre WHERE email=? AND mdp=?");
                    $preparation->execute(array($email,$mdp));
                    $userclient=$preparation->fetch();
                    $_SESSION['id_membre']=$userclient['id_membre'];
                $_SESSION['identifiant']=$userclient['identifiant'];
                $_SESSION['email']=$userclient['email'];
                $_SESSION['nom']=$userclient['nom'];
                $_SESSION['prenom']=$userclient['prenom'];
                $_SESSION['sexe']=$userclient['sexe'];
                $_SESSION['adresse']=$userclient['adresse'];

                    header("location:profil.php");
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
    <link rel="stylesheet" href="styles/form.css">
    <title>formulaire Connexion</title>
</head>
<body>
<h2>LOGIN</h2>
<?php
if(isset($message))
{
   echo '<font color="red">'.$message."</font>"; 
}
?>
    <form method="post" action="">
    <label for="email">Email</label><br>
    <input type="email" name="email" placeholder="votre email"><br><br>
    <label for="mdp">Mot de Passe</label><br>
    <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe"><br><br>
    <input type="submit" name="connecter" value="Se Connecter" id="button">
    <a href="recup_mdp.php">Mot de passe oublié?</a>
    </form>
    
</body>
</html>
