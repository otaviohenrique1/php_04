<?php

$nome = 'Vinicius Dias';
$email = 'vinícius@alura.com.br ';
$senha = '123';

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha)) {
  echo 'Senha insegura' . PHP_EOL;
}

// echo $senha[0] . PHP_EOL;

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);
echo mb_strtoupper($usuario) . PHP_EOL;
// echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);
echo $nome . PHP_EOL;
echo $sobrenome . PHP_EOL;

echo trim($email) . PHP_EOL;

/*
substr => pega pedaço de uma string
strpos => pega a posicao de um pedaço de uma string
strlen => exibe o tamanho da string em bytes
strtoupper => transforma a string em maiusculo
strtolower => transforma a string em minusculo
*/
