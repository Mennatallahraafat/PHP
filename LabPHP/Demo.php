<?php



define("websitename", "Welcome to MyDemo.com!");
echo websitename ; 
echo "<br>";

echo "Your Server Name is: " , $_SERVER ['SERVER_NAME'],"<br>";
echo "Your Server Adress: ", $_SERVER ['SERVER_ADDR'],"<br>";
// echo "Your Host IP: ", $_SERVER ['HTTP_HOST'],"<br>";
ECHO "Your Server Port: " ,$_SERVER ['SERVER_PORT'],"<br>";
echo "Your File Name: " ,$_SERVER ['PHP_SELF'],"<br>";
echo " Your File Name to Script: " ,$_SERVER ['SCRIPT_FILENAME'],"<br>";

echo "<br>","<br>","<br>";

$age = 10;
switch ($age) {
    case $age < 5:
      print ("Stay at Home");
      break;
    case $age == 5 :
      print ("Go to Kindergarden");
      break;
    case $age > 6 && $age < 12 :
      print (" Go to grade 6");
      break;

  }





?> 







