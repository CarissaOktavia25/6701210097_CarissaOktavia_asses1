<?php
$operator = $_POST['operator'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            $result = "Undefined";
        } else {
            $result = $num1 / $num2;
        }
        break;
    default:
        $result = "Invalid operator";
        break;
}

echo "Result: $result";

?>