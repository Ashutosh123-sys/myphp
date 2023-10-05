<?php
// $age=array("Posh"=>35,"Prasa"=>40,"Jasmine"=>43);
// $jsonobj=json_encode($age);
// echo json_encode($age);
$connection = mysqli_connect("localhost", "root", "Welcome@27356", "data") or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from data.orders";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;     
    }
    // echo json_encode($emparray);
?>