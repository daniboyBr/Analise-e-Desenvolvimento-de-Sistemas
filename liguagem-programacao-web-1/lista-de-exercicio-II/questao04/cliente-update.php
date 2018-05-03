<?php
require_once "src/ClienteDAO.php";

$cliente = load_cliente($_GET['id']);

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Questao 04 - Editar Cliente</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <h1 class="text-center">Alterar Clientes</h1>
                <form action="src/Cliente.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $cliente->id;?>">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $cliente->nome;?>" />
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF: </label>
                        <input type="text" class="form-control" name="cpf" value="<?php echo $cliente->cpf;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" id="dataNascimento" value="<?php echo $cliente->dataNascimento;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo: </label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="M" <?php echo ($cliente->sexo == 'M')? 'checked' : '';?>> Masculino</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="F" <?php echo ($cliente->sexo == 'F')? 'checked' : '';?>> Feminino</label>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $cliente->email;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone: </label>
                        <input type="text" class="form-control" name="telefone" value="<?php echo $cliente->telefone;?>"/>
                    </div>

                    <button name="atualizar" type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    <div>


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>