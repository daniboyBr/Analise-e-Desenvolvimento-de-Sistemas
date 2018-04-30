<?php
require_once "src/Cliente.php";
$clientes = buscar();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Questao 04 - Cadastro de Clientes</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 well">
                <h1 class="text-center">Cadatro de Clientes</h1>
                <form action="src/Cliente.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome: </label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF: </label>
                        <input type="text" class="form-control" name="cpf" >
                    </div>
                    <div class="form-group">
                        <label for="dataNascimento">Data de Nascimento</label>
                        <input type="date" class="form-control" name="dataNascimento" id="dataNascimento">
                    </div>
                    <div class="form-group">
                        <label for="">Sexo: </label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="M"> Masculino</label>
                        <label class="radio-inline"><input type="radio" name="sexo" value="F"> Feminino</label>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone: </label>
                        <input type="text" class="form-control" name="telefone">
                    </div>

                    <button name="cadastrar" type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Data de Nascimeto</th>
                            <th>Sexo</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if(!isset($clientes) && empty($clientes)):?>
                        <tr>
                            <td colspan="6" class="text-danger"><strong>Nenhum usuário cadastrao!</strong></td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($clientes as $cliente): ?>
                            <tr>
                                <td><?php echo $cliente->id;?></td>
                                <td><?php echo $cliente->nome;?></td>
                                <td><?php echo $cliente->cpf;?></td>
                                <td><?php echo date("d/m/Y",strtotime($cliente->dataNascimento));?></td>
                                <td><?php echo $cliente->sexo;?></td>
                                <td><?php echo $cliente->email;?></td>
                                <td><?php echo $cliente->telefone;?></td>
                                <td><a href="cliente-update.php?id=<?php echo $cliente->id?>" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a></td>
                                <td>
                                    <form action="src/Cliente.php" method="post">
                                        <input type="hidden" value="<?php echo $cliente->id;?>" name="id" />
                                        <button type="submit" class="btn btn-danger" name="remover"><span class="glyphicon glyphicon-trash"></span></button>
                                    </form>
                                </td>
                            <tr>
                        <?php endforeach;?>
                    <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>