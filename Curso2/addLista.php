<?php

$listColab = [
  '1' => [
    'nome' => 'Gabriel Almeida',
    'cargo' => 'Gerente',
    'salario' => 10000
  ],
  '2' => [
    'nome' => 'Julia Oliveira',
    'cargo' => 'Gestora III',
    'salario' => 6500
  ],
  '3' => [
    'nome' => 'Jose Maria',
    'cargo' => 'Aprendiz',
    'salario' => 1200
  ],
];


/* ADICIONANDO UMA INFORMAÇÃO NA LISTA $listColab */

$listColab[] = [
  'nome' => 'Marcos Silva',
  'cargo' => 'Motorista',
  'salario' => 2300
];


foreach ($listColab as $matricula => $colaboradores) {
  echo $matricula . " - " . $colaboradores['nome'] . PHP_EOL;
}
