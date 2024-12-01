<?php

$input = fopen('input.txt', 'r') or die ('Cannot open file');

$left = [];
$right = [];

while (($line = fgets($input)) !== false) {
    $parts = preg_split('/\s+/', trim($line));
    $left[] = $parts[0];
    $right[] = $parts[1];
}


fclose($input);

sort($left);
sort($right);

$difference = [];
for ($i = 0; $i < count($left); $i++) {
    $difference[] = abs($left[$i] - $right[$i]);
}

print(array_sum($difference));