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

$rightCounts = array_count_values($right);

foreach ($left as $number) {
    $count = isset($rightCounts[$number]) ? $rightCounts[$number] : 0;
    $sums[] = $number * $count;
}

print_r(array_sum($sums));