<?php

$color = 'Зеленый';

//switch($color){
  //  case 'Красный':
    //case 'Желтый':
      //  echo 'Ехать нельзя';
        //break;
    //case 'Зеленый':
      //  echo 'Ехать можно';
        //break;
//}
$result = match($color) {
    'Красный' => 'Ехать нельзя',
    'Желтый' => 'Подожди',
    'Зеленый' => 'Ехать можно',
};
var_dump($result);