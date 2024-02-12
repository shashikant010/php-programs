<?php
$str="this is a string and i am sky";

echo $str;
echo "<br>";

echo "the length of the string is ", strlen($str);
$intro="my name is ";
$name="sky";
echo "<br>";
echo $intro.$name;
echo "<br>";

//where . is a concatenation operator
echo "the number of word in string is ".str_word_count($str);
echo "<br>";
echo "the reverse of string is ".strrev($str);
echo "<br>";
echo "the position of sky in string is ".strpos($str,"sky");
echo "<br>";
echo "lets replace sky with shashikant <br>".str_replace("sky","shashi kant",$str);

?>