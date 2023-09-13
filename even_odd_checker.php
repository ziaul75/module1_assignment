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
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input
        $number = $_POST["number"];

        // Check if the input is empty
        if (empty($number)) {
            echo "<p>Please enter a number.</p>";
        } else {
            // Check if the number is even or odd
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
