<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    
    <form method="post">
        Enter the first number: <input type="number" name="number1"><br>
        Enter the second number: <input type="number" name="number2"><br>
        <input type="submit" value="Compare">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        $largerNumber = ($number1 > $number2) ? $number1 : $number2;
        
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
