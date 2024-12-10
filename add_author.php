<?php
require "connexion.php";
$author_name = $_POST['authorname'];
$author_email = $_POST['email'];
$rqt = "INSERT INTO authors (author_name, email)
VALUES ('$author_name', '$author_email')";
$res = mysqli_query($con,$rqt);
if(isset($res)){
    header("location:aff_authors.php");
}












?>