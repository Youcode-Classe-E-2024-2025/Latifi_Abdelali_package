<?php
require "connexion.php";
$package_name = $_POST['packagename'];
$package_descreption = $_POST['packagedescreption'];
$created_at = $_POST['created_at'];
$requete = "INSERT INTO allpackages (package_name, packages_descreption, created_at)
 VALUES ('$package_name', '$package_descreption', '$created_at')";
 $result = mysqli_query($con,$requete);
 if(isset($result)){
    echo"<h1>insertion avec succes</h1>";
 }else{
    echo "<h1>erreur<h1>";
 }
?>

