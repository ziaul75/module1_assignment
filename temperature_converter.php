<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>

    <form method="POST" action="">
        <label for="temperature">Enter Temperature:</label>
        <input type="number" name="temperature" id="temperature" required>
        <br><br>
        <label for="conversionType">Select Conversion:</label>
        <select name="conversionType" id="conversionType" required>
            <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
            <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
        </select>
        <br><br>
        <input type="submit" value="Convert">
    </form>

    <?php

    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temperature = $_POST["temperature"];
        $conversionType = $_POST["conversionType"];

        if (!empty($temperature) && is_numeric($temperature)) {
            if ($conversionType == "celsiusToFahrenheit") {
                $result = celsiusToFahrenheit($temperature);
                echo "$temperature &deg;C is $result &deg;F";
            } elseif ($conversionType == "fahrenheitToCelsius") {
                $result = fahrenheitToCelsius($temperature);
                echo "Result: $temperature &deg;F is $result &deg;C";
            }
        } else {
            echo "Please enter a valid numeric temperature value.";
        }
    }
    ?>


</body>
</html>
