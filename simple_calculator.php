<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    
    <form method="post">
        Enter the first number: <input type="number" name="number1"><br>
        Enter the second number: <input type="number" name="number2"><br>
        Select operation:
        <select name="operation">
            <option value="add">Addition (+)</option>
            <option value="subtract">Subtraction (-)</option>
            <option value="multiply">Multiplication (*)</option>
            <option value="divide">Division (/)</option>
        </select><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_POST["number1"];
        $number2 = $_POST["number2"];
        $operation = $_POST["operation"];

        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 == 0) {
                    echo "<p>Division by zero is not allowed.</p>";
                } else {
                    $result = $number1 / $number2;
                }
                break;
            default:
                echo "<p>Invalid operation selected.</p>";
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
