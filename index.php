<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <h1><?php echo "Simple Calculator"; ?></h1> 
    <form action="includes/operate.php" method="post">
        <input type="text" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="text" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    session_start();
    if (isset($_SESSION['result'])) {
        $result = $_SESSION['result'];
        echo "<p>Hasil perhitungan: $result</p>";
        // Menghapus hasil setelah ditampilkan
        unset($_SESSION['result']);
    }
    ?>
</body>
</html>