<?php
//Buscamos o código que conecta no SGBD
require_once '../bancoDeDados/conecta.php';
//Apenas para ficar mais fácil de trabalhar
$id = $_GET['id'];

$id = preg_replace('/\D/', '', $id);