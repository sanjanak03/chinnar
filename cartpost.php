<?php
include 'connection.php' ;

$insert="INSERT INTO add_to_cart( name,quantity,stock_available)
Values
('".$_POST["name"]."','".$_POST["quantity"]."','".$_POST["stock_available"]."')";

if($con->query($insert)===True)
{
    echo "success";
}else{
    echo"fail" .$con->error;
}
$con->close();
