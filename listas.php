<?php

//Array
$idadeList = [12,56,78,34,21,35,61,18, 29];
//adicionando valor na ultima posição do array
$idadeList[] = 55;
for($i = 0; $i < count($idadeList); $i++){
    echo $idadeList[$i] . PHP_EOL;
}