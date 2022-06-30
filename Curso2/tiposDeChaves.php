<?php

/* O MAIS CORRETO É SEMPRE USAR CHAVES DO TIPO INTEIRO OU STRING PARA UMA ARRAY */

$array = [
  1 => 'a',
  '1' => 'b',
  1.5 => 'c',
  true => 'd'


];

foreach ($array as $item) {
  echo $item;
};
