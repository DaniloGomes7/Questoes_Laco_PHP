<?php

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$salario = $_POST['salario'];
$estadoCivil = $_POST['estado'];


if ($nome <= 3) {
    echo "Nome inválido, por favor insira corretamente <br>";
} else if ($idade >! 0 && $idade <! 150) {
    echo "Idade inválida, por favor insira corretamente <br>";
} else if ($salario <= 0) {
    echo "Salário inválido, por favor insira corretamente <br>";
} else if ($sexo != 'f' && $sexo != 'm') {
    echo "Sexo inválido, por favor insira corretamente <br>";
} else if (
    $estadoCivil != 's' && $estadoCivil != 'c' &&
    $estadoCivil != 'v' && $estadoCivil != 'd'
) {
    echo "Estado civil inválido, por favor insira corretamente <br>";
} else {
    echo "Todos os campos estao válidos!<br>";
    echo "Seu Nome: $nome <br>";
    echo "Sua Idade: $idade<br>";
    echo "Seu Salário: R$ $salario<br>";
    echo "O Sexo: $sexo <br>";
    echo "Seu Estado civil: $estadoCivil<br>";
}
