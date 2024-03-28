<!DOCTYPE html>
<html>
<head>
    <title>3x + 1 Function Calculator</title>
</head>
<body>
    <h2>Calculate 3x + 1 Function</h2>
    <form method="post">
        <label for="start">Start number:</label>
        <input type="number" name="start" id="start" required><br><br>
        
        <label for="finish">Finish Number:</label>
        <input type="number" name="finish" id="finish" required><br><br>

        <h2>Calculate Arithmetic progression</h2>
        <label for="start_number">Start number:</label>
        <input type="number" name="start_number" id="start_number" required><br><br>

        <label for="difference">Difference:</label>
        <input type="number" name="difference" id="difference" required><br><br>

        <label for="quantity">Quantity of numbers:</label>
        <input type="number" name="quantity" id="quantity" required><br><br>
        
        <input type="submit" value="Calculate">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $start = $_POST["start"];
    $finish = $_POST["finish"];
    $start_number = $_POST["start_number"];
    $difference = $_POST["difference"];
    $quantity = $_POST["quantity"];
     include 'function.php';
     $collatzSequence = new Values() ;
     $collatzSequence -> calculateValues($start, $finish);
     $max_iterations = $collatzSequence -> get_maximum_iteration (); 
     $min_iterations = $collatzSequence -> get_minimum_iteration ();
     
        echo "Maximum iteration number: " . $max_iterations['number'] . " : " . $max_iterations['count'] . " iterations". "<br>";
        echo "Minimum iteration number: " . $min_iterations['number'] . " : " . $min_iterations['count'] . " iterations" . "<br>";
echo "-----x------" . "<br>";
echo "Result of Arithmetic progression: " . "<br>";
echo "First number : " . $start_number . " | " . "Difference : " . $difference . " | " . "Quantity of numbers : " . $quantity . "<br>";
        $collatzSequence -> calculateArithmetic($start_number,$difference,$quantity);
    return 0;
}
?>