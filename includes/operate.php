<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = htmlspecialchars(trim($_POST['num1']));
    $num2 = htmlspecialchars(trim($_POST['num2']));
    $operator = htmlspecialchars(trim($_POST['operator']));

    if (empty($num1) || empty($num2)) {
        $result = "Error: Semua field harus diisi.";
    } elseif (!is_numeric($num1) || !is_numeric($num2)) {
        $result = "Error: Masukkan harus berupa angka.";
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
                $result = "Error: Operasi tidak valid.";
                break;
        }
    }

    $_SESSION['result'] = $result;
    header("Location: ../index.php");
    exit();
}