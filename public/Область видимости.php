<?php

$country = 1;

$country += 3;

function greet () {
    global $country;

echo $country;
}
greet();




