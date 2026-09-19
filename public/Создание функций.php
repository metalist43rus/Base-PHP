<?php

$name = 'Никита';
$name2 = 'Настя';

function greet ($name_in_function, $prefix=null) {
echo "Привет, {$name_in_function}{$prefix}<br>";
}


function price ($bestprice, $degreed = 0.2) {
return $bestprice * $degreed;

}

$bestsurprise = price (10);

var_dump ($bestsurprise);
