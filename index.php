<!doctype html>
<!-- Bruce Turner, IT 328, W2019 -->
<!-- https://bturner.greenriverdev.com/328/index.php -->
<!-- 01-09-19 Rev1.0 -->
<!-- Pair Programming #1 -->
<!-- 1.	Create an index.php file in your pp1 directory and give it a title 
        and header “Pair Program 1.” 
        
     2.	Define an array called $numbers, which contains 7, 9, 8, 9, 8, 8, 6. 
        Write a function printArr() that takes an array as a parameter and 
        prints the array, one item per line. 
        Print the array using your function.     
        
    3.	Move your print function into an include file called functions.php. 
        Add a function called largest() that takes an array as a parameter and 
        returns the largest value in the array. 
        Test the function from your index page.  
    4.	In your include file, define a function called average() that takes an 
        array as a parameter and returns the average of the values in the function. 
        Test the function from your index page.        
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

<?php # 1st things first. Let's set up error reporting !

// Flag variable for site status:
define('LIVE', FALSE);
include("includes/functions.php");
// Use my error handler:
set_error_handler('my_error_handler');
// start of the specific code
// 2.	Define an array called $numbers, which contains 7, 9, 8, 9, 8, 8, 6. 
$numbers = array(7,9,8,9,8,8,6);
//      Print the array using your function.   
printArr($numbers);
$biggest = largest($numbers);
echo "<br> Largest Value in array: $biggest";
$result = average($numbers);
echo "<br> Average of all Values in array: $result";
?>

</body>
</html>