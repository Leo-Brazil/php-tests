<?php 

// Função para sacar dinheiro de uma conta
function sacar($conta, $valorSacar)
{
    if ($valorSacar > $conta["saldo"]) {
        exibeMensagem(mensagem: "Você não pode sacar esse valor");
    } else {
        $conta["saldo"] -= $valorSacar;
    }

    return $conta;
}

// Função para exibir mensagens
function exibeMensagem($mensagem)
{
    echo $mensagem . "<br>";
}

// Função para depositar dinheiro em uma conta
function depositar($conta, $valoradepositar)
{
    if ($valoradepositar > 0) {
        $conta['saldo'] += $valoradepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos.");
    }
    return $conta;
}

function letrasm(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

