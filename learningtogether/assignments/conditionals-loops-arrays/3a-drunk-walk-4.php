<?php
require_once("coords.php");
// A drunkard begins walking aimlessly, starting at a lamp post. At each time step, the drunkard forgets where he or she is, and takes one step at random, either north, east, south, or west, with probability 25%. How far will the drunkard be from the lamp post after N steps?

// Write a program that
// (a) takes an integer command-line argument N and simulates the motion of a random walker for N steps.
// (b) After each step, print the location of the random walker, treating the lamp post as the origin (0, 0).
// (c) Also, print the square of the final distance from the origin.

//$steps = $argv[1];

$obj = new Coords();

while ($steps > 0) {
  $direction = mt_rand(1,4);
  // echo "$ direction = " . $direction  . "\n";

    switch ($direction) {
      case 1: // move north
        $obj->increment_y();
        break;
      case 2: // move south
        $obj->ycoord = $obj->ycoord - 1;
        break;
      case 3: // move east
        $obj->xcoord = $obj->xcoord + 1;
        break;
      case 4: // move west
        $obj->xcoord = $obj->xcoord - 1;
        break;
      default:
        echo "There's been an inexplicable error.";
    }

  echo "(" . $obj->xcoord . ", " .  $obj->ycoord . ")\n";
  --$steps;
}


$squareDist = pow($obj->xcoord,2) + pow($obj->ycoord,2);

echo "squared distance = " . $squareDist;

?>
