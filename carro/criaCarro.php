<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
    <body>
        <?php
        include 'menu.php';
        
        ?>
        <h2>cadastro de produtos</h2>
    <form action="processaCarro.php" method="POST">
        <input type="text" name="carroNome"/>
        <input type="text" name="carroMarca"/>
        <input type="text" name="carroModelo"/>
        <input type="text" name="carroAno"/>
        <input type="submit" value="cadastrar"/>
    </form>

    </body>
</html>