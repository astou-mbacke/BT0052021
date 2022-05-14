<?php 
    include('connexion_site.php');
    include('includes/headerClient.php');
    if(isset($_POST['inscription'])){
        $identifiant=htmlspecialchars($_POST['identifiant']);
        $mdp=sha1($_POST['mdp']);
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $email=htmlspecialchars($_POST['email']);
        $sexe=htmlspecialchars($_POST['sexe']);
        $adresse=htmlspecialchars($_POST['adresse']);
        $role=htmlspecialchars($_POST['role']);

        if (!empty($_POST['identifiant']) AND !empty($_POST['mdp']) AND !empty($_POST['nom']) AND !empty($_POST['prenom'])  AND !empty($_POST['email'])  AND !empty($_POST['sexe'])  AND !empty($_POST['adresse']) AND !empty($_POST['role'])) 
        {
       
            $identifiantlenght=strlen($identifiant);
            if($identifiantlenght<=255) 
            {
                if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                        $reqmail=$db->prepare("SELECT * FROM membre where email=?");
                        $reqmail->execute(array($email));
                        $mailexist=$reqmail->rowCount();
                        if($mailexist==0)
                        {
                   $insert=$db->prepare("INSERT INTO membre(identifiant,mdp,nom,prenom,email,sexe,adresse,role) VALUES (?,?,?,?,?,?,?,?)");
                   $insert->execute(array($identifiant,$mdp,$nom,$prenom,$email,$sexe,$adresse,$role));
                   echo "<div class='w3-panel w3-green w3-round-xxlarge'>
                            <h1>Inscription avec succes!</h1>
                            <a href='connexion.php'>cliquer ici pour vous connecter</a>
                   </div>";
                }
                else {
                    $erreur="votre mail existe déja!";
                    }
                }
                 else {
                    $erreur="votre adresse mail n'est pas valide!";
                }
            }
            else
            {
                $erreur="votre identifiant ne doit pas dépassé 255 caractéres!";
            }

        }
        else{
            $erreur="Tous les champs doivent etres completés!";
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
    <title>INSCRIPTION</title>
    <link rel="stylesheet" href="styles/form.css">
</head>
<body>
<form method="post" action="">
    <label for="identifiant">Identifiant</label><br>
    <input type="text" name="identifiant" placeholder="identifiant" class="w3-input w3-border"><br>
    <label for="mdp">Mot de Passe</label><br>
    <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe" class="w3-input w3-border"><br>
    <label for="des">Nom</label><br>
    <input type="text" name="nom" id="nom"  placeholder="votre nom" class="w3-input w3-border"><br>
    <label for="prix">Prenom</label><br>
    <input type="text" name="prenom" id="prenom"  placeholder="votre prenom" class="w3-input w3-border"><br>
    <label for="prix">Email</label><br>
    <input type="emai" name="email" id="email"  placeholder="votre email" class="w3-input w3-border"><br>
    <label for="sexe">Sexe</label><br><br>
    <input type="radio" name="sexe" id="sexe" value="m" checked="" >Masculin
    <input type="radio" name="sexe" id="sexe" value="f" checked="" >Féminin<br>
    <label for="prix">Adresse</label><br>
    <input type="text" name="adresse" id="adresse"  placeholder="votre adresse" class="w3-input w3-border"><br>
    <label for="prix">Role</label><br>
    <input type="text" name="role" id="role"  placeholder="votre role" class="w3-input w3-border"><br>
    <input type="submit" name="inscription" value="S'inscrire" id="button"><br>
</form>
</body>
<?php
if(isset($erreur))
{
   echo '<font color="red" size="20px">'.$erreur."</font>"."<br>"; 
}
?>
</html>