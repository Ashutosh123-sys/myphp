<?php
$con=mysqli_connect("localhost","root","Welcome@27356","data");
if(!$con){
    echo "DB not connected..";
}
else{
    $result=mysqli_query($con,"Select * from data.foods");
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        echo $row['ITEM_NAME'].'</br>';
    }
}

// if($result>0){
//     $xml=new DOMDocument("1.0");
    
// }
// $xml=formatOutput=true;
// $fitness=$xml->createElement("users");
// $xml->appendChild($fitness);
// while($row=mysqli_fetch_array($result)){
//     $user=$xml->createElement("user");
//     $fitness->appendChild($user);

// }
?>