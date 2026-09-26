<?php

$string = 'Привет, мир';
$str = mb_substr($string, 2, 1, 'utf-8');

echo $str;