<?php
    require "carro.php";
    require "criaCarro.php";

    $passat = new Carro();

    $passat -> setNome("Passat");
    $passat -> setMarca("Wolksvagen");
    $passat -> setModelo("Sedan");
    $passat -> setAno(1973);
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monta Carro</title>
</head>
<body>
    <table border="4">
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
        </tr>
        <tr>
            <td><?=$passat -> getNome()?></td>
            <td><?=$passat -> getMarca()?></td>
            <td><?=$passat -> getModelo()?></td>
            <td><?=$passat -> getAno()?></td>
        </tr>
    </table>
</body>
</html>