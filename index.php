<?php
    $titulos = ["Rainha das galaxias", "Suprema senhoria"];
    $qualidades = ["Ser invísivel"];
    $nome = "Julia";

?>

<!doctype html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    </head>

        <body>

            <h2>oiiii <?= $titulos[rand(0,2)]."$nome, ".$qualidades[rand(0,2)]; ?></h2>

        </body>

</html>