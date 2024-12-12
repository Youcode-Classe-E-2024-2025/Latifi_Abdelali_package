<?php
require "connexion.php";
$Package_Name = $_POST['Package_Name'];
$package_version = $_POST['version'];
$id_package = "SELECT id FROM allpackages WHERE Package_Name = '$Package_Name'";
$query = mysqli_query($con, $id_package);

if($rows = mysqli_fetch_assoc($query)) {
    $id_ref = $rows["id"];
$rqt = "INSERT INTO version (Package_Name, version, id_package)
VALUES ('$Package_Name', '$package_version',$id_ref)";
$res = mysqli_query($con,$rqt);
if(isset($res)){
    header("aff_version.php");
}
}