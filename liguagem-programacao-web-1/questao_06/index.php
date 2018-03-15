<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculo Juros Simples</title>
</head>
<body>
    <h1>Calculo Juros Simples</h1>
    <form action="jurosSimples.php" method="post">
        <label for="valor">Valor: </label>
        <input type="text" name="valor" placeholder="00.00"><br>
        <label for="taxa">Taxa ao Mes: </label>
        <input type="text" name="taxa" placeholder="00.00"><br>
        <label for="tempo">Tempo em Meses: </label>
        <input type="text" name="tempo" ><br>
        <button type="submit">Calcular</button>
    </form>
    <?php if(isset($_SESSION['jurosTotal'])): ?>
        <p>O valor do Juros a pagar é: R$  <?php echo $_SESSION['jurosTotal']; ?></p>
    <?php elseif(isset($_SESSION['msg'])): ?>
        <p style="color: red;"><?php echo $_SESSION['msg']; ?></p> 
    <?php endif; ?>
    <?php unset($_SESSION['jurosTotal']); session_destroy(); ?>       
</body>
</html>