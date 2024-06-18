<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    if (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "Masukkan harus berupa angka.";
    } else {
        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 == 0) {
                    $result = "Error: Pembagian dengan nol tidak bisa dilakukan.";
                } else {
                    $result = $num1 / $num2;
                }
                break;
            default:
                $result = "Operasi tidak valid.";
                break;
        }
    }

    $_SESSION['result'] = $result;
    header("Location: ../index.php");
    exit();
}