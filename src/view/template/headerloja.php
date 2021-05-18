<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adega livery</title>
    <link rel="shortcut icon" type="/image/x-icon" href="imagens/favicon.ico">
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loja.css">
    

</head>
<body>

<header class="topo" id="topo">
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a href="LojaControler.php" class="navbar-brand"><h1>Loja</h1></a>
                
                <a  href="CarrinhoControler.php" class="btn btn-default bg-primary">
                    <i class="fa fa-shopping-cart" aria-hidden="true">Compras <span class="badge badge-success"><?= $quantcar?></span> </i>
                </a>
            </div>
        </nav>
        <div class="container">
            <canvas id="beerCanvas"></canvas>
            <div class="coming_content">
                
                <div class="separator_container">
                    <div class="separator line_separator">
                       
                </div>
            </div>
            
        </div>
    </div>
</header>