<?php
require "connexion.php";
$Package_Name = $_POST['Package_Name'];
$package_version = $_POST['version'];
$rqt = "INSERT INTO version (Package_Name, version)
VALUES ('$Package_Name', '$package_version')";
$res = mysqli_query($con,$rqt);
if(isset($res)){
    header("aff_version.php");
}