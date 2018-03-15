<?php
    session_start();

    if(!isset($_SESSION['user'])== true){
        unset($_SESSION['user']);
        session_destroy();
        header("Location: ../index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <p style="color: green;">Sucesso. Usuairo: <?php echo $_SESSION['user'];?> você esta logado.</p>
        <form action="../controller/LoginController.php" method="post">
            <input type="hidden" name="sair">
            <button type="submit">Sair</button>
        </form>
    </div>
</body>
</html>