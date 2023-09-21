<?php session_start()?>
<html>
<body>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Ano</th>
        </tr>
        
            <?php
                if(isset($_SESSION['carNomInfo']) && isset($_SESSION['carMarInfo']) && isset($_SESSION['carModInfo']) && isset($_SESSION['carAnoInfo']))
                    $carNomInfo = $_SESSION['carNomInfo'];
                    $carMarInfo = $_SESSION['carMarInfo'];
                    $carModInfo = $_SESSION['carModInfo'];
                    $carAnoInfo = $_SESSION['carAnoInfo'];

                    for($i = 0; $i < count($carNomInfo); $i++){

            ?>        
                
            
        <tr>    
            <td><?=$carNomInfo[$i]?></td>
            <td><?=$carMarInfo[$i]?></td>
            <td><?=$carModInfo[$i]?></td>
            <td><?=$carAnoInfo[$i]?></td>
        </tr>
    <?php
        }
    ?>    
    </table>

    <a href="index.php">Retorna</a>
    <a href="sair.php">Sair</a>
</body>
</html>
