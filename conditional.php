<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $d=Date("D");
    if ($d=="Fri")
        echo "Have a nice Weakend!";
    
    elseif($d=="Sun")
        echo "have a nice sunday";
    
    else
        echo "have a nice day!";
    

    ?>
    
</body>
</html>