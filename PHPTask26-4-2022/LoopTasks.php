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
    echo "<h3> Task 1 </h3>";
    $total=0;
    for($i=0;$i<30;$i++){
$total+=$i;
    }  
    echo "The total of all number between 0 and 30 is " . $total;


    echo "<h3> Task 2</h3>";
    for($i=1;$i<=5;$i++){
        for($j=1;$j<=5;$j++)
        {
            if($i==1 && $j==1)
            echo 1 . " ";
            else if($i==2 && $j==2)
            echo 2 . " ";
            else if($i==3 && $j==3)
            echo 3 . " ";
            else if($i==4 && $j==4)
            echo 4 . " ";
            else if($i==5 && $j==5)
            echo 5 . " ";
            else
            echo 0 . " ";
            
        }
        echo "<br>";
    }

    echo "<h3> Task 3</h3>";
    $num=5;
    $f=1;
    for($i=1;$i<=$num;$i++){
        $f *= $i;
    }
    echo "the factorial of " . $num . " is " . $f;

    echo "<h3> Task 4</h3>";
    $n=8;
    $num1= 0;
$num2= 1;
for($counter=0;$counter<=$n;$counter++)
{
echo ' '.$num1;
$num3= $num2 + $num1;
$num1= $num2;
$num2= $num3;

}


echo "<h3> Task 5</h3>";

$count = 1;
for ($i = 5; $i > 0; $i--) 
{
  for ($j = $i; $j <5+ 1; $j++) 
   {
    echo $count . " ";
     $count++;
   } 
	echo "<br>";
   }
    ?>
</body>
</html>