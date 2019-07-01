<?php
// PHP program print numbers
// from 1 to 100 without
// using loop

// Prints numbers from 1 to n
function printNos($n)
{
   for ($i=0 ; $i<=100 ; $i++) {
	switch ($i) {
		case ($i%3==0 && $i%5==0):
			echo "Linianos<br>";
			break;
		case ($i%3==0):
			echo "Linio<br>";
			break;
		case ($i%5==0):
			echo "IT<br>";
			break;
		default:
			echo $i."<br>";
	}
   }
   return;
}

// Driver code
printNos(100);

// This code is contributed by vt_m
?>