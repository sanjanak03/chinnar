<?php
include 'connection.php' ;

$insert="INSERT INTO faqs( return_request,cancel_order,reasons)
Values
('".$_POST["return_request"]."', '".$_POST["cancel_order"]."','".$_POST["reasons"]."')";

if($con->query($insert)===True)
{
    echo"success";
}else{
    echo"fail" .$con->error;
}
$con->close();
