<?php
include "jsonencode.php";

$obj=json_encode($emparray);
var_dump(json_decode($obj));
?>