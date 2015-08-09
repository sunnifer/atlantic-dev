<?php

// Write a program Bits.java that takes an integer command-line argument N and uses a while loop to compute the number of times you need to divide N by 2 until it is strictly less than 1. Print out the error message "Illegal input" if N is negative.

$N = $argv[1];

if ($N<0) {
  echo "Illegal input\n";
}

else {
$count = 0;

while ($N>=1) {
  $N = $N/2;
  $count++;
}

echo $count . "\n";
}

?>
