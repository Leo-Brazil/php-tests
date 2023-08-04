<?php

require_once 'funcoes.php';

// Array de contas correntes
$contasCorrentes = [
    12903 => [
        "titular" => "Leo",
        "saldo" => 10000
    ],
    392039 => [
        "titular" => "Kaike",
        "saldo" => 8000
    ],
    293093340 => [
        "titular" => "Elon Musk",
        "saldo" =>  237200000000
    ]
];

// Realizando operações nas contas correntes
$contasCorrentes[392039] = depositar(
    $contasCorrentes[392039],
    valoradepositar: 500
);

$contasCorrentes[12903] = sacar($contasCorrentes[12903], valorSacar: 500);
$contasCorrentes[293093340] = sacar($contasCorrentes[293093340], valorSacar: 500);

// Função para a string ficar em uppercase
letrasm($contasCorrentes[293093340]);

// Removendo conta corrente da array
unset($contasCorrentes[392039]);

echo "<ul>";

// Exibindo o saldo das contas correntes
foreach ($contasCorrentes as $cpf => $conta) {
    //echo $conta["saldo"] . "<br>"

    // Comando "list()" = simplificado 
    // ['titular' => $titular, 'saldo' => $saldo] = $conta;

    exibeConta($conta);
}

echo "</ul>";
