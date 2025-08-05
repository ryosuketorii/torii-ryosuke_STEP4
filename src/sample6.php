<?php
$factor = 10;

$multiplier = function($number) use ($factor) {
    return $number * $factor;
};

echo $multiplier(5);
?>