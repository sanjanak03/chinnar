<?php 

include 'connection.php';

$select_cat = "SELECT * FROM products WHERE cat_id = '".$_POST["id"]."'";

$result = $con->query($select_cat);

if($result->num_rows >0 ){
    while($row[]=$result->fetch_assoc()){
        $chinnar =$row;
        $jsonData = json_encode($chinnar);
    }
    echo $jsonData;
}else{
    echo 'No Data Found' . $con->error;
}

$con->close();

?>