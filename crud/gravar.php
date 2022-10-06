<?php
//Buscamos o codigo que conecta no SGBD
require_once 'conecta.php';
//Include_once(); não gera erro fatal se não existir

//Dados provenientes do formulario HTML
$nome  = $_POST['nome'];
$turno  = $_POST['turno'];
$inicio  = $_POST['inicio'];

$objStmt = $bd ->prepare(' INSERT INTO alunos
                    (nome, turno, inicio)
                    VALUE
                        ( :nome, :turno, :inicio)');

/*
A função $bd->prepare() retorna outra variável (objeto), 
essa outra variável consegue juntar os dados 
do usuário com a consulta SQL
*/                          

$consulta ->bindParam('nome', $nome);
$consulta ->bindParam('turno', $turno);
$consulta ->bindParam('inicio', $inicio);


//A função $consulta -> bindParam() substitui os rotulos (ex.:"nome") pelos dados inseguros

if( $consulta->execute()){
    echo "gravou com sucesso!";
}else{
    echo "ERRO ao gravar no banco de dados";
}
//Finalmente executamos o SGBD