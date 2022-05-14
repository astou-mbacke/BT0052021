<?php
include('connexion_site.php');
$id=$_GET['id_contact'];
$sql='DELETE FROM contact WHERE id_contact=:id_contact';
$preparation=$db->prepare($sql);
if($preparation->execute([':id_contact'=>$id])){
        header('location:indexAdmin.php');
}
?>

