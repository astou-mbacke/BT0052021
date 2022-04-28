<?php

    require ('connexion_site.php');

    $id = $_GET['id_produit'];

    $sql = 'SELECT * FROM produit WHERE id_produit=:id_produit';

    $preparation = $db->prepare($sql);

    ?>

<?php if ($preparation->execute([':id_produit' => $id])) 

$message = $preparation->fetchAll(PDO::FETCH_OBJ);


?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/detailcss.css">
    
</head>
<body>
<div class="w3-container">
        <section>           
    <?php foreach ($message as $mess){ 
    
    echo " <h2>Titre</h2><strong>".$mess->titre."</strong><br><br>";
    echo " <h2>Prix</h2><strong>".$mess->prix."</strong><br><br>";
    echo "Voici la description : <strong>".$mess->description;
    
     } ?>
        </section> 
            
         </div>
         </body>
</html>