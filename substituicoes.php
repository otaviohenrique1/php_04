<?php

$texto = 'Texto com qualquer coisa poxa e caramba';
echo str_replace(
  ['poxa', 'caramba'],
  // '***',
  ['p', 'c'],
  $texto
); // Substitui palavras

echo strtr($texto, 'poxa', '***@') . PHP_EOL; // Substitui caracteres
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']) . PHP_EOL; // Substitui caracteres