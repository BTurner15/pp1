<?php # functions.php
/* Bruce Turner, IT 328, W2019 -->
   https://bturner.greenriverdev.com/328/includes/functions.php -->
   01-09-19 Rev3.0
   3.	Move your print function into an include file called functions.php. 
        Add a function called largest() that takes an array as a parameter and 
        returns the largest value in the array. 
*/
//----------------------------------------------------------------------------------
//                          largest()
// Add a function called largest() that takes an array as a parameter and
// returns the largest value in the array. 
function largest($numbers){
    $largestInArray = -1000;
    $numElements = count($numbers);
    for ($i = 0; $i < $numElements; $i++) {
        if($numbers[$i] > $largestInArray) $largestInArray = $numbers[$i];
    } 
    return $largestInArray;
}// End of largest() definition.
//----------------------------------------------------------------------------------
//                          my_error_handler()
// Create the error handler:
function my_error_handler($e_number, $e_message, $e_file, $e_line, $e_vars) {

	// Build the error message:
	$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";

	// Append $e_vars to  $message:
	$message .= print_r ($e_vars, 1);

	if (!LIVE) { // Development (print the error).
		echo '<pre>' . $message . "\n";
		debug_print_backtrace();
		echo '</pre><br>';
	} else { // Don't show the error.
		echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br>';
	}

} // End of my_error_handler() definition.
//----------------------------------------------------------------------------------
//                          printArr()
//Write a function printArr() that takes an array as a parameter and 
//prints the array, one item per line. 
function printArr($numbers){
       $numElements = count($numbers);
       for ($i = 0; $i < $numElements; $i++) {
          echo "$numbers[$i] <br>";
       } 
} // End of printArr() definition.
//----------------------------------------------------------------------------------
?>