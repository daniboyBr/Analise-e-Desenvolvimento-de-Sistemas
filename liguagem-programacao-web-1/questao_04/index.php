<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questao 04 - Login</title>
</head>
<body>
    <h1 style="text-align: center;">Login</h1>
    <div style="text-align: center;">
        <form action="controller/LoginController.php" method="POST">   
            <label for="username">Username: </label>
            <input type="text" name="username"><br><br>
            <label for="password">Password: </label>
            <input type="password" name="password"><br><br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>
</html>