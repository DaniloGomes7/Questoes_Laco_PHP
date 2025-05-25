<?php

$valor1 = $_POST ['valor1'];
$valor2 = $_POST ['valor2'];

for ($i = $valor1 + 1; $i < $valor2; $i++) {
    echo $i . "<br>";
}

for ($i = $valor1 - 1; $i > $valor2; $i--) {
    echo $i . "<br>";
}

echo "Os numero e seus invervalos sao esses";

?>