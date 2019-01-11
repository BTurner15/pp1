<!doctype html>
<!-- Bruce Turner, IT 328, W2019 -->
<!-- https://bturner.greenriverdev.com/328/index.php -->
<!-- 01-09-19 Rev1.0 -->
<!-- Pair Programming #1 -->
<!-- 1.	Create an index.php file in your pp1 directory and give it a title and header 
        “Pair Program 1.” 
-->
<!-- -->
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pair Program 1</title>
	    <header>
	      	 <h2>Pair Programming 1</h2>
        </header>
</head>
<body>

<?php # set up error reporting

// Flag variable for site status:
define('LIVE', FALSE);
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
// use my error handler
set_error_handler('my_error_handler');
// start of file-specific code

?>

</body>
</html>