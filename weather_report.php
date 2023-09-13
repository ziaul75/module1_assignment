<!-- <!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <?php
    // Define the temperature variable (you can change this value)
    $temperature = 20; // Change this value to the current temperature

    // Check temperature range and display appropriate message
    if ($temperature <= 0) {
        echo "<p>It's freezing!</p>";
    } elseif ($temperature > 0 && $temperature <= 15) {
        echo "<p>It's cool.</p>";
    } elseif ($temperature > 15) {
        echo "<p>It's warm.</p>";
    }
    ?>
</body>
</html> -->

<?php

$temperature = -5;
if($temperature < 0){
    echo "It's Freezing";
}
else if($temperature >= 0 && $temperature <= 15){
    echo "It's Cool";
}
else if($temperature > 15){
    echo "It's Warm";
}
