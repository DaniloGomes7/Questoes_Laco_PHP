<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex1</title>
</head>

<body>
    <form method="POST">

        Informe uma nota entre (0 - 10): <input type="number" name="nota" required>
        <br>
        <input type="submit" value="Verificar" /><br>

    </form>
</body>

<?php

$nota = $_POST ['nota'];

while ($nota <1 || $nota > 10) {
    echo "<br>Nota inválida <br>";
    return;
}
    echo "<br>Nota válida $nota <br>";

?>
</html>