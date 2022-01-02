<?php
$user="root";
$password="";
try {
    $db=new PDO('mysql:host=localhost;dbname=monsite',$user,$password);
} 
catch (PDOexeption $th) {
    echo $th->getmessage()."<br>";
}
?>
