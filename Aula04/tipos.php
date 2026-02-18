<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Página PHP</title>
</head>
<body>
    <div>
    <?php
        $n = 4;
        $nome = (string)"Gustavo";
        echo $nome;
        $n = 4.5;
        echo $n;
        $idade = 36;
        echo "<br>";
        echo $nome." tem ".$idade." anos.";

        $nome2 = "Maria";
        $idade2 = 18;

        echo "<br>$nome2 tem $idade2 anos."
    ?>
    </div>
</body>
</html>