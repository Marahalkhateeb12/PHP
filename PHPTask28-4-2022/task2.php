
<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
switch ($operator) {
case "+":
$CalculatorResult = $FirstNumber + $SecondNumber;
break;
case "-":
$CalculatorResult = $FirstNumber - $SecondNumber;
break;
case "*":
$CalculatorResult = $FirstNumber * $SecondNumber;
break;
case "/":
$CalculatorResult = $FirstNumber / $SecondNumber;
}
}
echo "the result = " . $CalculatorResult ;
?>

