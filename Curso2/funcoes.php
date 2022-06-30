<?php

function soma($a, $b)
{
  return $a + $b . PHP_EOL;
}
echo soma(100, 10);


function sub($c, $d)
{
  return $c - $d . PHP_EOL;
}

echo sub(500, 300);


function letrasMaisculas(array $conta)
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
};
