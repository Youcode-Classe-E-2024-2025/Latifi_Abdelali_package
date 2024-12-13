<?php
require "connexion.php";
if(isset($_POST["submit2"]) ) {
$author_name = $_POST['authorname'];
$author_email = $_POST['email'];
if(empty($author_name) || empty($author_email)) {
    echo "tous les doivent étre remplis";
}else{
$rqt = "INSERT INTO authors (author_name, email)
VALUES ('$author_name', '$author_email')";
$res = mysqli_query($con,$rqt);
if(isset($res)){
    header("location:index.php");
}
}
}
?>