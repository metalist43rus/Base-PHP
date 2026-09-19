<?php

 $chislo = 90;
 $result = '';

 if(!is_numeric($chislo)) {
    $result = 'Введите число';

 } elseif ($chislo >=90) {
    $result = 'Отлично';

 } elseif ($chislo >=68 && $chislo <=89) {
    $result = 'Зачет';
 } else {
    $result = 'Не сдал';
 }
 echo "Балл: $chislo -> $result";