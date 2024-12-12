<?php
require 'connexion.php' ;
$id = $_GET['id'];
$sql = "delete from allpackages where id = '$id'";
$query = mysqli_query($con,$sql);
if(isset($query)){
    echo 'hhhhhhhhhh';
}

?>