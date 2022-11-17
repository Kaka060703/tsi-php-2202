<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Apenas para ficar mais fácil de trabalhar
$id = $_GET['id'];
//Evito que seja recebido em $id qualquer coisa que seja diferente de números (dígitos)
$id = preg_replace('/\D/', '', $id);

if ( $bd->exec("DELETE FROM alunos WHERE id = $id")){
    $gravou = true;
}else{
    $gravou = false;
}
//finalmente executamos a consulta no SGBD

include 'view/listar.php';