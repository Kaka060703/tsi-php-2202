<?php

//Vetores
/*
$diaSemana = [0 => 'Domingo', 1 => 'Segunda', 2 => 'Terça', 3 => 'Quarta', 4 => 'Quinta', 5 => 'Sexta', 6 => 'Sabado',];

//Muito importante para depuração do código.

$hoje = date('w');

echo "Hoje é {$diaSemana[$hoje]}"; //interpolação com vetor precisa das {}
*/

$aluno = [ 0 => ['matricula' => 563457, 'nome' => 'Karina', 'semestre' => 2], 
           1 => ['matricula' => 767547, 'nome' => 'João', 'semestre' => 3],
           2 => ['matricula' => 987642, 'nome' => 'Maria', 'semestre' => 1]];

echo '<table border = "1">
        <tr>
            <td>Matrícula</td>
            <td>Nomes</td>
            <td>Semestre</td>
        </tr>';

for ($i = 0 ; $i < count($aluno) ; $i++){

    echo " <tr>
                <td> {$aluno[$i]['matricula']} </td>
                <td> {$aluno[$i]['nome']} </td>
                <td> {$aluno[$i]['semestre']} </td>
           </tr>";

}

echo '</table>';