<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Indice de Massa Corporal</title>
</head>
<body>
    <form action="imc.php" method="post">
        <label for="peso">Peso: </label>
        <input type="text" name="peso">
        <label for="altura">Altura: </label>
        <input type="text" name="altura">
        <button type="submit">Enviar</button>
    </form>
    <?php 
        if(isset($_GET['imc']) && !empty($_GET['imc'])){
            echo "<p>Seu Indice de Massa Corporal - IMC é: ".$_GET['imc']."</p>";
            unset($_GET['imc']);
        }
    ?>
</body>
</html>