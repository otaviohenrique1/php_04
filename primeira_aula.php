<?php

$nome = 'Vinicius Dias';

// var_dump(str_contains($nome, 'Dias'));
$ehDaMinhaFamilia = str_contains($nome, 'Dias');

if ($ehDaMinhaFamilia) {
  echo "$nome é da minha familia" . PHP_EOL;
} else {
  echo "$nome não é da minha familia" . PHP_EOL;
}