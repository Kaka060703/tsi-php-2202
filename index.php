<?php
//$nome = 'Karina';

//echo "Olá $nome";

//Comentário de linha

#Comentário de linha

/*
Comentário
de 
bloco


//Documentação do php fica em: https://www.php.ne


for ($i = 1; $i <= 10; $i++ ){
    echo "Karina <br>";
}

$i = 1;
while ($i <= 10){
    echo "Karina <br>";
}

$i = 1;
do {
    echo "Karina <br>";
    $i++;
} while ($i < 10);

if ( 5 > 10){
    echo "Cinco é maior que dez";
}
else
     echo "Cinco não é maior que dez";
*/
  $i = 0;
switch ($i){
        case 0:
            echo "Segunda";
            break;
        case 1:
            echo "Terça";
            break;
        case 2:
            echo "Quarta";
            break;
        case 3:
            echo "Quinta";
            break;
        case 4:
            echo "Sexta";
             break;
        case 5:
            echo "Sabado";
            break;
        case 6:
            echo "Domingo";
            break;
        default:
        echo "Número invalido";
}