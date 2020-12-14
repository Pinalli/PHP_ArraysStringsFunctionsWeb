<?php

/*https://www.php.net/manual/en/language.types.string.php
https://www.php.net/manual/pt_BR/book.mbstring.php */
require_once 'funcoes.php';

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
    'saldo' => 480
    ]
];

$contasCorrente['123.456.789-11'] = sacar($contasCorrente['123.456.789-11' ], 312);
$contasCorrente['123.456.789-10'] = sacar($contasCorrente['123.456.789-10' ], 127);
$contasCorrente['123.456.789-01'] = sacar($contasCorrente['123.456.789-01' ], 385);

$contasCorrente['123.456.789-01'] = depositar($contasCorrente['123.456.789-01'], 1000);

// Remove um indice
// unset($contasCorrente['123.456.789-10']);


// titularLetrasMaiusculas($contasCorrente['123.456.789-01']); //LUCAS
/*
echo "<ul>";
foreach($contasCorrente as $cpf => $conta){
    exibeConta($conta);
}
echo "</ul>";  */

?> 
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
</head>
<body>
    <h1>Contas Corrente</h1>

    <d1>  <!--codigo php e html juntos -->
        <?php foreach($contasCorrente as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?=  $cpf;  ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </d1>
</body>
</html>
