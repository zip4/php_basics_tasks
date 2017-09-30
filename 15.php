<?php
    $a = rand(0, 10);
    $b = rand(0, 10);

    $operatorArray = array("+", "-", "/", "*", "%");
    $operator = $operatorArray[rand(0, 4)];

    $result;

    switch ($operator){
        case "+":
            $result = $a + $b;
            break;
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "/":
            if ($b != 0) {
                $result = $a / $b;
            } else {
                echo "Деление на ноль.";
            }
            break;
        case "*":
            $result = $a * $b;
            break;
        case "%":
            if ($b != 0) {
                $result = $a % $b;
            } else {
                echo "Деление на ноль.";
            }
            break;
    }
    if($result) {
        echo $a . $operator . $b . "=" . $result;
    }
    $result=0;
    unset($result);