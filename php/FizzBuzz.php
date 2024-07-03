<?php

function fizzBuzz($number) {
	for ($i = 1; $i <= $number; $i++) {
		if ($i % 3 == 0 and $i % 5 == 0) {
			echo "FizzBuzz\n";
		}

		elseif ($i % 3 == 0) {
			echo "Fizz\n";
		}

		elseif ($i % 5 == 0) {
			echo "Buzz\n";
		}

		else {
			echo $i . "\n";
		}
	}
}

fizzBuzz(100);
?>
