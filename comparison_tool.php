<!DOCTYPE html>
<html>
<head>
    <title>Comparison Tool</title>
</head>
<body>
    <h1>Comparison Tool</h1>
    
    <!-- Form for user input -->
    <form method="post">
        Enter the first number: <input type="number" name="number1"><br>
        Enter the second number: <input type="number" name="number2"><br>
        <input type="submit" value="Compare">
    </form>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];

        // Use the ternary operator to determine the larger number
        $largerNumber = ($number1 > $number2) ? $number1 : $number2;

        // Display the result
        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
