<?php

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];

$soma = 0;

for ($i = $valor1 + 1 ; $i < $valor2; $i++) {
    echo $i . "<br>";
    $soma += $i;
}

for ($i = $valor1 - 1; $i > $valor2; $i--) {
    echo $i . "<br>";
    $soma += $i;
}
echo" A soma dos números do intervalo é = $soma"
?>