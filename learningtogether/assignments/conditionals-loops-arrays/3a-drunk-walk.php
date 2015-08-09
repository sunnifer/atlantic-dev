<?php

// A drunkard begins walking aimlessly, starting at a lamp post. At each time step, the drunkard forgets where he or she is, and takes one step at random, either north, east, south, or west, with probability 25%. How far will the drunkard be from the lamp post after N steps?

// Write a program that
// (a) takes an integer command-line argument N and simulates the motion of a random walker for N steps.
// (b) After each step, print the location of the random walker, treating the lamp post as the origin (0, 0).
// (c) Also, print the square of the final distance from the origin.

// (a) create integer command-line arg N that dictates the number of steps taken; also create var $direction, $x, $y.

// set and print the current location

$steps = $argv[1];

$coordinates = array(
  "xcoord" => 0,
  "ycoord" => 0,
);

print_r($coordinates);

function print_location($coordinates) {
  $direction = mt_rand(1,4);
  echo "$ direction = " . $direction  . "\n";
  print_r($coordinates);

    switch ($direction) {
      case 1: // move north
        ++$y;
        break;
      case 2: // move south
        --$y;
        break;
      case 3: // move east
        ++$x;
        break;
      case 4: // move west
        --$x;
        break;
      default:
        echo "There's been an inexplicable error.";
    }
      print_r($coordinates);
  }

while ($steps > 0) {
    print_location($x,$y);
    --$steps;
}

//function squared_distance($x,$y) use (print_location($x,$y)) {
//  echo $x;
//}

//squared_distance($x,$y);


//$printy = function () use ($y) {
//  echo $y;
//};


//print_location($x,$y);

// (b) create while loop, where while $steps>0, repeat print_location

//while ($steps>0) {
//  print_location($x,$y);
//  $steps = --$steps;
//}

// when $steps=0, print the square of the final distance from origin

// $xSquare = $x*$x;
// echo $xSquare;

// echo "squared distance = ";

?>
