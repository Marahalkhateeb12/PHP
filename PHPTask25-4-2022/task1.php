<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Task 1</title>
</head>
<body>
<?php
echo "<h3>Task 1</h3>";
      $year=2012;

      if ($year % 400 == 0)
         print("It is a leap year");
      else if ($year % 100 == 0)
         print("It is not a leap year");
         else if ($year % 4 == 0)
         print("It is a leap year");
      else
         print("It is not a leap year");



echo "<h3>Task 2</h3>";

$temp=30;
if($temp>20)
echo "It is Summer Time";
else
echo "It is Winter Time";


echo "<h3>Task 3</h3>";


$num1=3;
$num2=3;
if($num1==$num2)
echo "(". $num1 . "+" . $num2 . ") * 3 = " . ($num1+$num2)*3;


echo "<h3>Task 4</h3>";
$num1=10;
$num2=40;
if(($num1+$num2)==30)
echo $num1+$num2;
else 
echo "false";

echo "<h3>Task 5</h3>";
$num=27;
if($num%3==0)
echo  $num . " is a multiple of 3";
else
echo "false";


echo "<h3>Task 6</h3>";
$n=44;
if($n>=20 && $n<=50)
echo "true";
else
echo "false";

echo "<h3>Task 7</h3>";
$n=2;
$n2=6;
$n3=8;
if($n>$n2 && $n>$n3)
echo "The large is " . $n;
else if($n2>$n && $n2>$n3)
echo "The large is " . $n2;
else 
echo "The large is " . $n3;


echo "<h3>Task 8</h3>";
$unit_cost_first = 2.50;
$unit_cost_second = 5.00;
$unit_cost_third = 6.20;
$unit_cost_fourth = 7.50;
$units=120;
$bill;
if($units <= 50) {
    $bill = $units * $unit_cost_first;
}
else if($units > 50 && $units <= 100) {
    $temp = 50 * $unit_cost_first;
    $remaining_units = $units - 50;
    $bill = $temp + ($remaining_units * $unit_cost_second);
}
else if($units > 100 && $units <= 200) {
    $temp = (50 * 3.5) + (100 * $unit_cost_second);
    $remaining_units = $units - 150;
    $bill = $temp + ($remaining_units * $unit_cost_third);
}
else {
    $temp = (50 * 3.5) + (100 * $unit_cost_second) + (100 * $unit_cost_third);
    $remaining_units = $units - 250;
    $bill = $temp + ($remaining_units * $unit_cost_fourth);
}
echo $bill;



echo "<h3>Task 9</h3>";
$age=15;
if($age>=18)
echo "eligible to vote";
else 
echo "no eligible to vote";



echo "<h3>Task 10</h3>";
$n=-3;
if($n==0)
echo "Zero";
else if($n>0)
echo "Positive";
else 
echo "Nigative";

echo "<h3>Task 11</h3>";
$sign="-";
$N1=3;
$N2=7;
switch($sign){
    case '+':
        echo $N1 . " + " . $N2 . " = " . $N1+$N2;
        break;
    case '-':
        echo $N1 . " - " . $N2 . " = " . $N1-$N2;
        break;
        case '*':
            echo $N1 . " * " . $N2 . " = " . $N1*$N2;
            break;
            case '/':
                echo $N1 . " / " . $N2 . " = " . $N1/$N2;
                break;
}


echo "<h3>Task 12</h3>";
$m1=60;
$m2=95;
$m3=63;
$m4=55;
$m5=74;
$m6=79;
$m7=62;
$m8=50;
$m9=86;

$avg=($m9+$m8+$m7+$m6+$m5+$m4+$m3+$m2+$m1)/9;
if($avg<60)
echo 'F';
else if($avg<70)
echo 'D';
else if($avg<80)
echo 'C';
else if($avg<90)
echo 'B';
else
echo 'A';
?>
  
</body>
</html>