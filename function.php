<?php
class Values {
	public $num = array();
	
	public $max_iterations_count = 0;
    public $max_iterations_number = 0;
    public $min_iterations_count = PHP_INT_MAX;
    public $min_iterations_number = 0;
public function calculateValues($start, $finish){
	echo "Start number: " . $start . "_" . "Finish number: " . $finish . "<br>";
	echo "results: " . "<br>";
//calculating values
for ($i = $start; $i <= $finish; $i++) {
    $number = $i;
    $max_number = $number;
    $iterated_number = 0;
    echo " number: " . $i . "<br>";
    while ($number != 1) {
        if ($number % 2 == 0) {
            $number = $number / 2;
        } else {
            $number = $number * 3 + 1;
        }

        if ($number > $max_number) {
            $max_number = $number;
        }
        echo $number . " "; // Output each iteration result separated by space
        $iterated_number++;

    }

    echo "<br>";
    $this->num[$i] = $iterated_number;
    echo "Iteration number: " . $iterated_number . "<br>";

    echo "Max number is " . $max_number . "<br>";
    echo "-------" . "<br>";

    if ($this->max_iterations_count < $iterated_number) {
        $this->max_iterations_count = $iterated_number;
        $this->max_iterations_number = $i;
    }
    if ($this->min_iterations_count > $iterated_number) {
        $this->min_iterations_count = $iterated_number;
        $this->min_iterations_number = $i;
    }
}
}

 public function get_maximum_iteration () {
	return [
'count'=> $this->max_iterations_count,
'number'=> $this->max_iterations_number
	];
}
 public function get_minimum_iteration () {
return [
	'count'=> $this->min_iterations_count,
	'number'=> $this->min_iterations_number
];
}
public function calculateArithmetic($start_number,$difference,$quantity){
for($n=1;$n<=$quantity;$n++){
    echo $start_number . " ";
	$start_number = $start_number + $difference;
}
}
}
