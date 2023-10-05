<?php
require_once("privateaccess.php");
$objBike=new vehicle("car");
echo "<p>Vehicle:".$objBike->getDescription()."<p>";
?>