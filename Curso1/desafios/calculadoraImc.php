<?php

$altura = 1.90;
$peso = 70.5;
$imc =  $peso / ($altura * $altura);
$word = "O resultado do seu IMC é $imc, você está ";




if ($imc <= 18.5) {
  echo "$word Abaixo do peso normal" . PHP_EOL;
} else if ($imc > 18.5 && $imc <= 24.9) {
  echo "$word com o peso normal" . PHP_EOL;
} else if ($imc > 24.9 && $imc <= 29.9){
  echo "$word sobre peso" . PHP_EOL;
}else if ($imc > 29.9 && $imc <= 34.9){
  echo "$word com obesidade classe I" . PHP_EOL;
}else if ($imc > 34.9 && $imc <= 39.9){
  echo "$word com obesidade classe II".PHP_EOL;
}else{
  echo "$word com obesidade classe III".PHP_EOL;
}