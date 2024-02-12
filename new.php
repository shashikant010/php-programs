<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is your party status<br></h1>
    <?php
    $age=19;
    if($age>=18){echo "yay you can go to party" ;}
    if($age<18){ echo "you can not go to party" ;}
    echo "<br>";
    $arr=array(1,2,3,4);
    echo $arr[1]; 
    echo "<br>";
    echo "your array has ",count($arr)," elements";
    echo "<br>";
    echo "the elements of your array is ";
    $i=0;
    while($i<count($arr)){
        echo $arr[$i]," ";
    $i++;}
    echo "<br>";

    ?>
</body>
</html>