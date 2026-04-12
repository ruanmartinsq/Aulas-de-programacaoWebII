<?php
$alunos = [
    ['nome' => 'Ruan', 'idade'=> 19],
    ['nome' => 'Fabio', 'idade'=> 12],
    ['nome' => 'aaa', 'idade'=> 13],
    ['nome' => 'ddd', 'idade'=> 12],
    ['nome' => 'eee', 'idade'=> 98],
    ['nome' => 'sss', 'idade'=> 34],
    ['nome' => 'bbb', 'idade'=> 49],
    ['nome' => 'nnn', 'idade'=> 33],
    ['nome' => 'kkk', 'idade'=> 2],
    ['nome' => 'ççç', 'idade'=> 1],
    ['nome' => 'lll', 'idade'=> 9],
    ['nome' => 'ppp', 'idade'=> 3],
];

$mediaIdades = 0;
$maiorIdade = $alunos[0];
$menorIdade = $alunos[0];

foreach($alunos as $aluno) {
    if ($aluno['idade'] > $maiorIdade['idade']) {
        $maiorIdade = $aluno;
    }

    if ($aluno['idade'] < $menorIdade['idade']) {
        $menorIdade = $aluno;
    }

    if ($aluno['idade'] >= 18) {
        echo 'Pessoa MAIOR ou IGUAL a 18 anos: ' . $aluno['nome'] . ' | '. $aluno['idade'] . '<br>';
    } else {
        echo 'Pessoa MENOR a 18 anos: ' . $aluno['nome'] . ' | ' . $aluno['idade'] . '<br>';
    }
    

    $mediaIdades += $aluno['idade'];
}

echo 'Média das idades dos 12 alunos: ' . $mediaIdades/12 . '<br>';
echo 'Menor idade: '. $menorIdade['idade'] . " | " . 'Nome: ' . $menorIdade['nome'] . '<br>';
echo 'Maior idade: '. $maiorIdade['idade'] . " | " . 'Nome: ' . $maiorIdade['nome'] . '<br>';


?>