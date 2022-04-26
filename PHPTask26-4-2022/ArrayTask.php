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
 $colors = array('white', 'green', 'red') ;
 sort($color);
for($i=0;$i<count($colors);$i++) {
    echo '<ul>';
    echo '<li>' . $colors[$i] . '</li>';
    echo '</ul>';
}


echo "<h3> Task 2</h3>";
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach($cities as $capital => $country ){
    echo "The capital of " . $capital . " is " . $country . "<br>";
}



echo "<h3> Task 3</h3>";
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color[4];

echo "<h3> Task 4</h3>";
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach($fruits as $key => $value ){
    echo $key . " = " . $value . "<br>";
}

echo "<h3> Task 5</h3>";
$words =  array("abcd","abc","de","hjjj","g","wer");
$short=$words[0];
$long=$words[0];

for($i=1;$i<count($words);$i++){
    if(strlen($words[$i])<strlen($short))
    $short=$words[$i];
    if(strlen($words[$i])>strlen($long))
    $long=$words[$i];
}
echo "The shortest array length is " . strlen($short) . "<br>The longest array length is " . strlen($long);
    ?>
</body>
</html>