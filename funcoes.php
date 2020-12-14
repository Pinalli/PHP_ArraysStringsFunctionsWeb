<?php
// https://www.php.net/manual/en/errorfunc.constants.php 


function depositar(array $conta, float $valorDeposito): array
{

    if($valorDeposito > 0){
        $conta ['saldo']  += $valorDeposito;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    
return $conta;
}

function sacar(array $conta, float $valorAsacar): array
{

    if ( $valorAsacar > $conta['saldo']) {
        exibeMensagem( "Você não pode sacar este valor");
    } else {
        $conta['saldo'] -=$valorAsacar;
    }
    return $conta;
}

function exibeMensagem (string $mensagem)
{ 
    echo $mensagem . '<br>';
}

function titularLetrasMaiusculas(array &$conta)
{

      $conta['titular'] = mb_strtoupper($conta['titular']); //letras maiusculas
      // echo $conta['titular'] . PHP_EOL;
}

function exibeConta(array $conta)
{

    echo  "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";

}