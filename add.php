<?php
require "connexion.php";
$author_name = $_POST['author_name'];
$package_name = $_POST['packagename'];
$package_descreption = $_POST['packagedescreption'];
$created_at = $_POST['created_at'];
$requete = "INSERT INTO allpackages (package_name, packages_descreption, created_at, author_name)
 VALUES ('$package_name', '$package_descreption', '$created_at', '$author_name')";
 $result = mysqli_query($con,$requete);
 if(isset($result)){
    header("location:index.php");
 }
 

?>

