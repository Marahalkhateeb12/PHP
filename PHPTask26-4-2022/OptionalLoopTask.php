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


echo "<h3> Task 1</h3>";
for($i=1;$i<6;$i++){
    for($j=1;$j<6;$j++){
        if($i==1)
        echo " A ";
        else if($i==2 && $j>=4)
        echo " B ";
        else if($i==3 && $j>=3)
        echo " C ";
        else if($i==4 && $j>=2)
        echo " D ";
        else if($i==5 && $j>=1)
        echo " E ";
        else 
        echo " A ";
    }
    echo "<br>";
}

echo "<h3> Task 2</h3>";
for($i=1;$i<6;$i++){
    for($j=1;$j<6;$j++){
        if($i==1)
        echo " 1 ";
        else if($i==2 && $j>=4)
        echo " 2 ";
        else if($i==3 && $j>=3)
        echo " 3 ";
        else if($i==4 && $j>=2)
        echo " 4 ";
        else if($i==5 && $j>=1)
        echo " 5 ";
        else 
        echo " 1 ";
    }
    echo "<br>";
}

echo "<h3> Task 3</h3>";
echo "<table align='left' border='1' cellpadding='3' cellspacing='0'>";
for($i=1;$i<=6;$i++)
{
echo "<tr>";
for ($j=1;$j<=5;$j++)
  {
  echo "<td>$i * $j = ".$i*$j."</td>";
  }
  echo "</tr>";
  }
  echo "</table><br><br><br><br><br><br><br><br>";


  echo "<br><h3> Task 4</h3>";
  for ($i = 1; $i <= 50; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo " FizzBuzz " ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo  " Fizz ";
   }
     else if ( $i%5 == 0 ) 
   {
     echo " Buzz ";
   }
     else
   {
     echo  $i . " ";
   }
 }


    ?>
</body>
</html>