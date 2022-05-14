<?php
    include('connexion_site.php');
    $message = "";
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
       $username = $_POST['name'];
       $email = $_POST['email'];
       $subject = $_POST['subject'];
       $mess = $_POST['message'];
      
        $sql="INSERT INTO contact(username, email, sujet, message) VALUES (?,?,?,?)";
        if ($db->prepare($sql)->execute(array($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['message']))) 
        {
         $message="<div class='alert alert-success' role='alert'>
         <h4 class='alert-heading'>Succés!</h4>
         <p>Envoi du message réussi</p>
         <hr>
       </div>";
       header('Refresh:5;url="contact.php"');
         
        }
    }
        // $user=$db->fetch('name');
        //echo "Vous avez envoyez un message a l'administrateur";

?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/upgrade.png" type="">
      <title>CONCTACTS</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="css/responsive.css" rel="stylesheet" />
      <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body >
     
      <?php include('includes/headerClient.php');?>
      <div>
          <h2></h2>
      </div>
     <section>      
      <div class="w3-container w3-green">
             <h2>CONTACT</h2>
     </div>

<form class="w3-container"  action="" method="POST">
                        <?php 
                           if (!empty($message)) {
                              echo $message;
                           }
                        ?>
  <label class="w3-text-green"><b>Username</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Enter your full name" name="name" required />

  <label class="w3-text-green"><b>Email</b></label>
  <input class="w3-input w3-border w3-light-grey" type="email" placeholder="Entrer votre addresse email " name="email" required >
  <label class="w3-text-green"><b>Sujet</b></label>
  <input class="w3-input w3-border w3-light-grey" type="text" placeholder="Entrer votre sujet" name="subject" required />
  <label class="w3-text-green"><b>Message</b></label>
  <textarea class="w3-input w3-border w3-light-grey" placeholder="Entrer votre message" name="message" required></textarea><br>
  <button class="w3-btn w3-green" value="Envoyer">Envoyer</button>
</form>
</section>  
   </body>
</html>

