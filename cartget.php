<?php
include 'connection.php';
$select_sql='SELECT * FROM add_to_cart';

$result= $con->query($select_sql);

if($result->num_rows>0){
    while($row[]=$result->fetch_assoc()){
        $add_to_cart =$row;
        $jsonData = json_encode($add_to_cart);

        print_r($jsonData);
    }
    echo $jsonData;
}else{
    echo 'No Data Found' . $con->error;
}
$con->close();
?>