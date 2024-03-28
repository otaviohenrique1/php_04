<?php
 
$csv = ', Vinicius Dias,24,';
echo trim($csv, ',.') . PHP_EOL;
echo ltrim($csv, ',.') . PHP_EOL;
echo rtrim($csv, ',.') . PHP_EOL;

// trim => Remove espaços e caracteres das pontas da string
// ltrim => Remove espaços e caracteres do lado esquerdo da string
// rtrim => Remove espaços e caracteres do lado direito da string