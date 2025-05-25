<?php

$valorMultiplicacao = $_POST['valor'];


for ($contador = 0; $contador <= 10; $contador++) {
    $produto = $valorMultiplicacao * $contador;
    echo "$contador x $valorMultiplicacao  = $produto  <br>";
}

?>
