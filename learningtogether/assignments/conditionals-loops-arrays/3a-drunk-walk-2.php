<?php

$steps = $argv[1];

function print_location($x,$y) {
  static $x = 0;
  static $y = 0;
  $direction = mt_rand(1,4);
  echo "$ direction = " . $direction  . "\n";

  if ($direction == 1) {
    $x = ++$x;
  }

  elseif ($direction == 2) {
    $x = --$x;
  }

  elseif ($direction == 3) {
    $y = ++$y;
  }

  else {
    $y = --$y;
  }

  echo "(" . $x . ", " . $y . ")\n";

}

while ($steps>0) {
  print_location($x,$y);
  --$steps;
  }

// write something here to find the square

echo "squared distance = ";

?>
