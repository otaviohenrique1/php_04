<?php

function geraEmail($nome): void
{
  // Heredoc
  $conteudoEmail = <<<FINAL
  Olá, $nome!
  
  Estamos entrando em contato para
  {motivo do contato}
  
  {assinatura}';
  FINAL;

  echo $conteudoEmail;
}
geraEmail('Vinicius Dias');