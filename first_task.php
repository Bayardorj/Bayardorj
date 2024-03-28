<!DOCTYPE html>
<html>
<head>
    <title>3x + 1 Function Calculator</title>
</head>
<body>
    <h2>Calculate 3x + 1 Function</h2>
    <form method="post">
        <label for="main">Please enter number:</label>
        <input type="number" name="main" id="main" required><br><br>
        <input type="submit" value="Calculate">
    </form>
   <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["main"];
		echo "Number : " . $number . "<br>";
        echo "results: " . "<br>";
        while ($number != 1) {
           if ($number% 2 == 0) {
            $number = $number / 2;
           } else {
            $number = $number * 3 + 1;
           } 
           echo $number . " "; // Output each iteration result separated by space
        }
        return 0;
    }
    ?>
</body>
</html>
