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
        <input type="number" name="num1" placeholder="Enter first number" required>
        <select name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter second number" required>
        <button type="submit" name="submit">Hitung</button>
    </form>

    <?php
    // Cek apakah ada parameter result yang dikirimkan dari operate.php
    if (isset($_GET['result'])) {
        $result = $_GET['result'];
        echo "<p>Hasil perhitungan: $result</p>";
    }
    ?>
</body>
</html>
