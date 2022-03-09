<?php
include 'connection.php' ;

$insert="INSERT INTO chinnar( category_name, brand_id,dress_size,color,price)
Values
('".$_POST["Cat_name"]."', '".$_POST["Brand"]."','".$_POST["size"]."','".$_POST["color"]."','".$_POST["price"]."')";

if($con->query($insert)===True)
{
    echo"success";
}else{
    echo"fail" .$con->error;
}
$con->close();
