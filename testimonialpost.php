<?php
include 'connection.php' ;

$insert="INSERT INTO testimonial( username,reviews,ask_any_questions)
Values
('".$_POST["username"]."','".$_POST["reviews"]."','".$_POST["ask_any_questions"]."')";

if($con->query($insert)===True)
{
    echo"success";
}else{
    echo"fail" .$con->error;
}
$con->close();
