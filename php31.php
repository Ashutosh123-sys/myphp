<?php

$con=mysqli_connect("localhost", "root", "Welcome@27356", "data");

if(!$con){

    echo "DB not Connected...";

}

else{

$result=mysqli_query($con, "Select * from data.orders");

if($result>0){

$xml = new DOMDocument("1.0");

// It will format the output in xml format otherwise

// the output will be in a single row

$xml->formatOutput=true;

$fitness=$xml->createElement("data.orders");

$xml->appendChild($fitness);

while($row=mysqli_fetch_array($result)){

    $user=$xml->createElement("data.orders");

    $fitness->appendChild($user);

   

    $uid=$xml->createElement("ORD_NUM", $row['ORD_NUM']);

    $user->appendChild($uid);

   

    $uname=$xml->createElement("ORD_AMOUNT", $row['ORD_AMOUNT']);

    $user->appendChild($uname);

   

    $email=$xml->createElement("ADVANCE_AMOUNT", $row['ADVANCE_AMOUNT']);

    $user->appendChild($email);

   

    $password=$xml->createElement("ORD_DATE", $row['ORD_DATE"']);

    $user->appendChild($password);

   

    $description=$xml->createElement("CUST_CODE", $row['CUST_CODE']);

    $user->appendChild($description);

   

    $role=$xml->createElement("AGENT_CODE", $row['AGENT_CODE']);

    $user->appendChild($role);

   

    $pic=$xml->createElement("ORD_DESCRIPTION", $row['ORD_DESCRIPTION']);

    $user->appendChild($pic);

   

}

echo "<xmp>".$xml->saveXML()."</xmp>";

$xml->save("report1.xml");

}

else{

    echo "error";

}

}

?>