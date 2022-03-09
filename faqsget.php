<?php
include 'connection.php';
$select_sql='SELECT * FROM faqs';

$result= $con->query($select_sql);

if($result->num_rows>0){
    while($row[]=$result->fetch_assoc()){
        $chinnar =$row;
        $jsonData = json_encode($chinnar);

        print_r($jsonData);
    }
    echo $jsonData;
}else{
    echo 'No Data Found' . $con->error;
}
$con->close();
?>