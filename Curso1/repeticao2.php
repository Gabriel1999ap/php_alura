<?php

/* for significa PARA em portugues 

$contador = $contador + 1;
$contador += 1;
$contador++;
mesmo significado

break - Encerra o loop
continue - Continua o loop

*/

for ($contador = 1; $contador <= 40; $contador ++){
  if($contador == 13){
    break;
  }
  echo "#$contador" . PHP_EOL;
} 