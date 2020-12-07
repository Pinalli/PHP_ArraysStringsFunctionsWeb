<?php
// DOC https://www.php.net/manual/pt_BR/language.types.array.php

// chave valor em array somente int e string
$array = [
    1 => 'a',
];


foreach($array as $item){
    echo $item . PHP_EOL;
}