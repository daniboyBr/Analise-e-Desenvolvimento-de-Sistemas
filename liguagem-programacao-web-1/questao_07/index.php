<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calcular Consumo de Combustivel</title>
</head>
<body>
    <h1>Calcular Consumo de Conbustivel</h1>
    <form action="calcularConsumo.php" method="POST">
        <label for="km_rodados">Km Rodados: </label>
        <input type="text" name="km_rodados">
        <label for="litros_rodados">Litros Cosumidos: </label>
        <input type="text" name="litros_rodados">
        <button type="submit">Calcular</button>
    </form>
    <?php if(isset($_SESSION['media_consumo'])): ?>
        <p>A media de consumo é: <?php echo $_SESSION['media_consumo'];?> Km por Litro</p>
    <?php elseif(isset($_SESSION['msg'])): ?>
        <p style="color:red"><?php echo $_SESSION['msg'];?></p>
    <?php endif;?>
    <?php session_destroy();?>
</body>
</html>