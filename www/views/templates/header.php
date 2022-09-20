<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="">

    <title> Programação web</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- css e js-->
    <script src="assets/js/script.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<header class="p-5 bg-primary text-white center">
    <h1> Header PW</h1>
</header>

<body>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 p-3">
            <h2>Menu</h2>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a id="btnHome" class="nav-link" href="?controller=site&action=home">Home</a>
                </li>
                 <li class="nav-item">
                    <a id="btnAbout" class="nav-link" href="?controller=site&action=about">Sobre</a>
                 </li>
                <li class="nav-item">
                     <a id="btnProducts" class="nav-link" href="?controller=site&action=products">Produtos e Servicos</a>
                </li>
                <li class="nav-item">
                    <a id="btnContacts" class="nav-link" href="?controller=site&action=contacts">Formulário de contato</a>
                </li>

                <h4> Clientes</h4>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=register">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a id="" class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
                </li>
                
                </ul>
        </nav>
        <section class="col-md-9 p-4">
            


     