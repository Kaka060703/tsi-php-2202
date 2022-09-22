<?php

$dsn = 'msql:dbname=senac;host=localhost';
$user = 'root';
$pass = '';

$bd = new PDO($dsn, $user, $pass);

var_dump($bd);
 