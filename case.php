<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x=Date("D");
    switch($x){
    case "Mon":
        echo "Today is Monday";
        break;
    case "Tue":
        echo "Tuesday";
        break;
    case "Wed":
        echo "Wednesday";
    case "Thur":
        echo "Thirsday";
    case "Fri":
        echo "Friday";
    case "Sat":
        echo "Saturday";
    case "Sun":
        echo "Sunday";
    default:
        echo "Nothing";
    
        
    
    }
    
    ?>


    
</body>
</html>