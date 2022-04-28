<?php
include('connexion_site.php');
$id=$_GET['id_produit'];
$sql='DELETE FROM produit WHERE id_produit=:id_produit';
$preparation=$db->prepare($sql);
if($preparation->execute([':id_produit'=>$id])){
        header('location:produit.php');
}
?>

