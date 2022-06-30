<?php

/* $conta1 = [
  'titular' => 'Gabriel',
  'saldo' => 2500
];
$conta2 = [
  'titular' => 'Joao',
  'saldo' => 3600
];
$conta3 = [
  'titular' => 'Miguedsdsdsl',
  'saldo' => 1500
]; */

$contasCorrentes = [
  '1132647899' => [
    'titular' => 'Gabriel',
    'saldo' => 2500
  ],
  '0234597895' => [
    'titular' => 'Joao',
    'saldo' => 3600
  ],
  '1234557893' => [
    'titular' => 'Miguel',
    'saldo' => 1500
  ],
];

$contasCorrentes[] = [
  'titular' => "Maria",
  'saldo' => 4900
];


foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
