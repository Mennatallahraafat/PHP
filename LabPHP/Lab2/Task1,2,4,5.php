<?php
echo "TASK ONE </br>";
echo nl2br("First line \n Second line \r\n Third line ");
 
echo("<br>---------------------------------------------------------------------------------</br>");

echo "TASK TWO</br>";
//1.chunk_split()	Splits a string into a series of smaller parts

$str = "Hello world!";
echo chunk_split($str,1,"/");

echo("<br>---</br>");


// 2.nl2br()  Inserts HTML line breaks in front of each newline in a string
//echo nl2br("FIRST LINE \n SECOND LINE \r\n THIRD LINE ");

// 3.substr()  Returns a part of a string
echo substr("Welcome PHP",8);
// the output is: PHP
echo("<br>---</br>");
// 4.strtoupper()  Returns UPPER case string
echo strtoupper("welcome PHP");
// The output is: WELCOME PHP
echo("<br>---------------------------------------------------------------------------------</br>");

// Task THREE in another file


echo "TASK FOUR</br>";
$num = [12,45,10,25];
print_r($num);
print_r("</br> SUM: ".array_sum($num));
print_r("</br> AVERAGE: ".array_sum($num)/count($num));
echo "</br>";
echo "REVERSE SORTING: </br>";
rsort($num);
foreach($num as $value){
    
    echo "$value </br>";
} 

echo("<br>---------------------------------------------------------------------------------</br>");


echo "TASK FIVE</br>";
$newArr = array("Sara"=>31, "John"=>41 , "Walaa"=>39 , "Ramy"=> 40);
print_r("</br> Ascending by VALUE </br>");
asort($newArr);
foreach($newArr as $key => $value ){
  print_r("$key => $value </br>");
}

print_r("</br> Ascending by KEY </br>");
ksort($newArr);
foreach($newArr as $key => $value ){
  print_r("$key => $value </br>");
}

print_r("</br> Descending by VALUE </br>");
arsort($newArr);
foreach($newArr as $key => $value ){
  print_r("$key => $value </br>");
}

print_r("</br> Descending by KEY </br>");
krsort($newArr);
foreach($newArr as $key => $value ){
  print_r("$key => $value </br>");
}