<?php
include 'connection.php' ;

$insert="INSERT INTO profile( email,phone)
Values
('".$_POST["email"]."','".$_POST["phone"]."')";

if($con->query($insert)===True)
{
    echo"success";
}else{
    echo"fail" .$con->error;
}
$con->close();
