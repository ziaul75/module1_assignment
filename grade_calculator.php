<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <h1>Grade Calculator</h1>
    
    <form method="post">
        Enter Test Score 1: <input type="number" name="score1" min="0" max="100"><br>
        Enter Test Score 2: <input type="number" name="score2" min="0" max="100"><br>
        Enter Test Score 3: <input type="number" name="score3" min="0" max="100"><br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];
        $score3 = $_POST["score3"];

        $average = ($score1 + $score2 + $score3) / 3;

        if ($average >= 75) {
            $grade = 'A';
        } elseif ($average >= 60) {
            $grade = 'B';
        } elseif ($average >= 45) {
            $grade = 'C';
        } elseif ($average >= 40) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>
</html>
