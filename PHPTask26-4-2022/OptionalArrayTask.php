<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops Tasks</title>
</head>
<body>
    <?php


echo "<br><h3> Task 1</h3>";
$month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',', $month_temp);
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."
"; 
sort($temp_array);
echo " List of seven lowest temperatures :";
for ($i=0; $i< 5; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "List of seven highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}

echo "<br><h3> Task 2</h3>";
$array1 =  array("color" => "red", 2, 4);;
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
echo '<pre>';
print_r(array_merge($array1,$array2));

?>
<?php
echo "<h3> Task 3</h3>";
echo implode(",",range(200,250,4))."\n";

echo "<h3> Task 4</h3>";
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n";



echo "<h3> Task 5</h3>";
$array1 = array( 2, 0, 10, 12, 6) ;
$min=$array1[0];
for($i=1;$i<count($array1);$i++){
    if($array1[$i]<$min && $array1[$i]!=0)
    $min=$array1[$i];
}
echo "the lowest integer in the array is " . $min;
    ?>
</body>
</html>