<!DOCTYPE html>
<html>
<head>
    <title>Even Odd Checker</title>
</head>
<body>
    <h1>Even Odd Checker</h1>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Check">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];

        if (empty($number)) {
            echo "<p>Please enter a number.</p>";
        } else {
            if ($number % 2 == 0) {
                echo "<p>{$number} is even.</p>";
            } else {
                echo "<p>{$number} is odd.</p>";
            }
        }
    }
    ?>
</body>
</html>
