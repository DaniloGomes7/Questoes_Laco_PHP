<?php

$nota = $_POST ['nota'];

while ($nota <1 || $nota > 10) {
    echo "<br> Nota inválida <br>";
    return;
}
    echo "<br>Nota válida $nota <br>";

?>
