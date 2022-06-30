<?php


/* O primeiro desafio será executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100 */


/* MINHA SOLUÇÃO */
for ($impar = 1; $impar <=100; $impar = $impar +2){
  echo "#$impar" . PHP_EOL;
}

/* SOLUÇÃO DO PROFESSOR */
for ($contador = 1; $contador <100; $contador++) {
  if ($contador % 2 != 0) {
      echo $contador . PHP_EOL;
  }
}