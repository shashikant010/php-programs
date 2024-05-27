
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hello
    <?php
    $sky=24;
    echo $sky;
    echo "hello Brother" ;
    $books=array(
       "WIT"=>4.5,
       "Math"=>4.7,
       "DAA"=> 5,

    );
    foreach($books as $subject=>$rating){
        echo"<table border><tr><td> $subject</td> <td> $rating</td></tr></table>";
    }
    for($i=0;$i<10;$i++~){
        echo $i+1 ," hello" ,"<br>" ;
    }
    ?>
</body>
</html>