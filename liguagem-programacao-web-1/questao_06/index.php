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
</body>
</html>