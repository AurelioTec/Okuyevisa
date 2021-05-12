<?php
session_start();
?>
<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página para realizar o Login dos Fornecedores">
    <meta name="author" content="AurelioTec">
    <meta name="generator" content="AurelioTec V 0.1">
    <link rel="icon" href="dist/images/ico.png">
    <title>Okuyevisa-Login</title>

    <link rel="canonical" href="https://www.okuyevisa.com">



    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="dist/css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

    <form class="form-signin" method="POST" action="controller/validalogin.php">
        <img class="mb-4" src="dist/images/ico.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Área restrita para Fornecedores </h1>
        <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
        <div class="alert alert-danger" role="alert">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
                 endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
        <label for="Telf" class="sr-only">Número de Telefone</label>
        <input formControlName="sGPTypeDeliveryId" type="text" pattern="[0-9]+$" name="Telf" class="form-control"
            placeholder="Número de Telefone" required autofocus><br />
        <label for="Senha" class="sr-only">Senha</label>
        <input type="password" name="Senha" class="form-control" placeholder="Senha no minimo 5 carateres" required
            pattern=".{5,}">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; Okuyevisa-2021</p>
    </form>
</body>

</html>