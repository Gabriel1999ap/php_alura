/* Varias informações */

<?php

$conta1 = [
  'titular' => 'Gabriel',
  'saldo' => 2500
];
$conta2 = [
  'titular' => 'Joao',
  'saldo' => 3600
];
$conta3 = [
  'titular' => 'Miguel',
  'saldo' => 1500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
  echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

?>