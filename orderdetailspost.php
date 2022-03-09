<?php
include 'connection.php' ;

$insert="INSERT INTO order_details( shipped,packed,track,out_for_delivery,cancel_order,return_order)
Values
('".$_POST["shipped"]."','".$_POST["packed"]."','".$_POST["track"]."','".$_POST["out_for_delivery"]."','".$_POST["cancel_order"]."','".$_POST["return_order"]."')";

if($con->query($insert)===True)
{
    echo"success";
}else{
    echo"fail" .$con->error;
}
$con->close();
