<?php
include('connexion_site.php');
$id=$_GET['id_membre'];
$sql='DELETE FROM membre WHERE id_membre=:id_membre';
$preparation=$db->prepare($sql);
if($preparation->execute([':id_membre'=>$id])){
        header('location:nos_clients.php');
}
?>