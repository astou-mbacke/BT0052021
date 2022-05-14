<?php
require_once('connexion_site.php');
$sql="SELECT COUNT(*) from membre";
$query=$db->prepare($sql);
$a=$query->execute();
$count=$query->fetchColumn(); 


$sql="SELECT COUNT(*) from produit";
$query=$db->prepare($sql);
$a=$query->execute();
$count=$query->fetchColumn(); 


$sql="SELECT COUNT(*) from contact";
$query=$db->prepare($sql);
$a=$query->execute();
$count=$query->fetchColumn(); 
    


?>