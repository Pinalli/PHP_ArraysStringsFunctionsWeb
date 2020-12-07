<?php
//Array Associativo
$contasCorrente = [
    '123.456.789-10' => [
    'titular' => 'Alberto',
    'saldo' => 1100
    ],
    
    '123.456.789-11' => [
    'titular' => 'Marina',
    'saldo' => 1600
    ],

    '123.456.789-01' => [
    'titular' => 'Lucas',
    'saldo' => 2300
    ]
];
//adicionando conta
$contasCorrente['321.654.981-23'] = [
    'titular' => 'Laura',
    'saldo' => 5200
];
$contasCorrente['321.654.981-23']['saldo'] -= 500;
//foreach = não importa o indice
//no foreach podemos acessar o índice e o valor do elemento da iteração
foreach($contasCorrente as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . " " . $conta['saldo'].  PHP_EOL;
}