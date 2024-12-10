<?php
$con = mysqli_connect("localhost","root","","packages");
if($con->connect_error){
    die("connection faild".$con->connect_error);
}

?>