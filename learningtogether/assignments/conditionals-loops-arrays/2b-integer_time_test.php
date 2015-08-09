<?php

date_default_timezone_set('America/New_York');

$date = new DateTime($argv[1]);
$delta = $argv[2];
$delta_string = "+" . $delta . " minute";

$date->modify($delta_string);
echo $date->format("h:i a") . "\n";

?>
