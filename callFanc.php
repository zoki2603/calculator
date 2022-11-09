<?php
include "calculator.php";

if (isset($_POST["submit"])) {
    $operator = $_POST["operator"];
    $num1 = floatval($_POST["num1"]);
    $num2 = floatval($_POST["num2"]);
    $calc = new Calculator($operator, $num1, $num2);
    $calc->setName();
    $cal1 = new Calculator($operator, $num1, $num2);
    $cal1->setName();
}
