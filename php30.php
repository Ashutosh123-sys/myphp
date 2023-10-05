<?php

$con=mysqli_connect("localhost", "root", "Welcome@27356", "data");

if(!$con){

    echo "DB not Connected...";

}

else{

$result=mysqli_query($con, "Select * from data.foods");

if($result>0){

$xml = new DOMDocument("1.0");

// It will format the output in xml format otherwise

// the output will be in a single row

$xml->formatOutput=true;

$fitness=$xml->createElement("data.foods");

$xml->appendChild($fitness);

while($row=mysqli_fetch_array($result)){

    $user=$xml->createElement("data.foods");

    $fitness->appendChild($user);

   

    $uid=$xml->createElement("ITEM_ID", $row['ITEM_ID']);

    $user->appendChild($uid);

   

    $uname=$xml->createElement("ITEM_NAME", $row['ITEM_NAME']);

    $user->appendChild($uname);

   

    $email=$xml->createElement("ITEM_UNIT", $row['ITEM_UNIT']);

    $user->appendChild($email);

   

    $password=$xml->createElement("COMPANY_ID", $row['COMPANY_ID']);

    $user->appendChild($password);

   

    // $description=$xml->createElement("description", $row['description']);

    // $user->appendChild($description);

   

    // $role=$xml->createElement("role", $row['role']);

    // $user->appendChild($role);

   

    // $pic=$xml->createElement("pic", $row['pic']);

    // $user->appendChild($pic);

   

}

echo "<xmp>".$xml->saveXML()."</xmp>";

$xml->save("report.xml");

}

else{

    echo "error";

}

}

?>