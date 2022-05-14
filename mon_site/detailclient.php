<?php

    require ('connexion_site.php');

    $id = $_GET['id_membre'];

    $sql = 'SELECT * FROM membre WHERE id_membre=:id_membre';

    $preparation = $db->prepare($sql);

    ?>

<?php if ($preparation->execute([':id_membre' => $id])) 

$message = $preparation->fetchAll(PDO::FETCH_OBJ);


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/adminindex.css">
    
</head>
<body>
<div class="w3-container">
  
        <section>           
    <?php foreach ($message as $mess){ 
    echo "ID : <strong>".$mess->id_membre."</strong> <br><br>";
    echo "Identifiant : <strong>".$mess->identifiant." </strong> <br><br>";
    echo "Nom : <strong>".$mess->nom." </strong> <br><br>";
    echo "Prenom : <strong>".$mess->prenom." </strong> <br><br>";
    echo "Email : <strong>".$mess->email." </strong> <br><br>";
    echo "Sexe : <strong>".$mess->sexe." </strong> <br><br>";
    echo "Adresse : <strong>".$mess->adresse." </strong> <br><br>";
    echo "role : <strong>".$mess->role." </strong>. <br><br>";
     } ?>
        </section> 
            
         </div>
         </body>
</html>