<?php
$servername="localhost";
$username="root";
$password="";
$db="chinnar";

$con= new mysqli($servername,$username,$password,$db);

if($con->connect_error)
{
    die("coonection failed");
}
?>

