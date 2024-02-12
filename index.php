<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:red;
            background-color:lightblue;
        }
    </style>
</head>
<body>
    hello this is php website
    <?php
    echo "hello this is written in php <br>";
    echo "<h1>this is a heading</h1>";
    $variable1 = 7;
    $variable2=5;
    echo "variable1=$variable1<br>variable2=$variable2<br>";
    echo "$variable1+$variable2=",$variable1+$variable2,"<br>";
    echo "$variable1-$variable2=",$variable1-$variable2,"<br>";
    echo "$variable1*$variable2=",$variable1*$variable2,"<br>";
    echo "$variable1/$variable2=",$variable1/$variable2,"<br>";
    
    ?>
</body>
</html>