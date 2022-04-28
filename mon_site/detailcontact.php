<?php

    require ('connexion_site.php');

    $id = $_GET['id'];

    $sql = 'SELECT * FROM contact WHERE id_contact=:id_contact';

    $preparation = $db->prepare($sql);

    ?>

<?php if ($preparation->execute([':id_contact' => $id])) 

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
    echo "Bonjour, <strong>".$mess->username."</strong> vous a envoyé Un message: <br><br>";
    echo "Son message a pour sujet : <strong>".$mess->sujet." </strong>. <br><br>";
    echo "<div class='mess'>".$mess->message." </div> <br>";
    
    
     } ?>
        </section> 
            
         </div>
         </body>
</html>