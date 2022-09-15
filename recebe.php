<?php

echo "Seja bem-vindo(a) " . $_POST['nomeUsuario'] . '!<br><br>';

echo "Voce tem {$_POST['idadeUsuario']} anos, CPF: {$_POST['cpfUsuario']}<br>";

echo "E o periodo escolhido foi o {$_POST['periodoUsuario']}";

$name = $_POST['nomeUsuario'];
$idade = $_POST['idadeUsuario'];
$cpf = $_POST['cpfUsuario'];
$periodo = $_POST['periodoUsuario'];

$arquivo = fopen('alunos.csv', 'a');//abro o arquivo para append
fwrite($arquivo, "$name,$idade,$cpf,$periodo\r\n");
fclose($arquivo);

