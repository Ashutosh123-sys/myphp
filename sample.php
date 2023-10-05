<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
*{
    box-sizing: border-box;
    margin:0;
    padding: 0;
}
.container{
    background-color: gray;
    margin:auto;
    padding:25px;
    
}
</style>
    

<body>
    <div class="container">
    <h1>this is  php</h1>
    <h2>this is container</h2>
    <?php
    $age=18;
    if($age>18){
        echo "party";
    }
    else{
        echo "cannot party";
    }
    $lang=array("1","2","3","4");
    echo count($lang);
    ?>
    </div>
    
</body>
</html>