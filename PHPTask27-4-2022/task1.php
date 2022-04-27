<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task </title>
</head>
<body>
<?php

echo "<h3> Task 1</h3>";
function check_prime($num)
{
   if ($num == 1)
   echo "It is a non-prime number";

   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      echo "It is a non-prime number";

   }
   echo "It is a prime number";
}
$num = 47;
check_prime($num);


echo "<h3> Task 2</h3>";
$str="remove";
echo strrev($str);


echo "<h3> Task 3</h3>";
$str = "remove";

if (ctype_lower($str)) {
    echo 'Your String is Ok' ;
} else {
    echo 'Your String is Not Ok' ;
}

echo "<h3> Task 4</h3>";
function swap(&$x, &$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
$x=12;
$y=20;
echo 'x = ' . $x . '   y = ' . $y . '<br>';
swap($x,$y);
echo 'x = ' . $x . '   y = ' . $y . '<br>'; 


echo "<h3> Task 5</h3>";
function swap1(&$x, &$y) {
    $tmp=$x;
    $x=$y;
    $y=$tmp;
}
$x=12;
$y=20;
echo 'x = ' . $x . '   y = ' . $y . '<br>';
swap1($x,$y);
echo 'x = ' . $x . '   y = ' . $y . '<br>'; 


echo "<h3> Task 6</h3>";
function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
     
   
    if ($number == $sum)
       echo $number . ' is Armstrong Number ';
     
    else
       echo $number . ' is Not Armstrong Number '; 
}
 

$number = 407;
armstrongCheck($number);



echo "<h3> Task 7</h3>";
function check_palindrome($string) 
{
  if ($string == strrev($string))
      echo 'Yes it is a palindrome ';
  else
	  echo 'No it is Not palindrome ';
}
$str='Eva, can I see bees in a cave?';
check_palindrome($str);



echo "<h3> Task 8</h3>";

$arr = array(2, 4, 7, 4, 8, 4);
$arr=array_unique($arr);
echo '<pre>';
print_r($arr);



?>
  
</body>
</html>