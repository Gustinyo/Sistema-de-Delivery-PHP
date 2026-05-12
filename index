<?php
declare(strict_types=1);

require_once "classes/Cliente.php";
require_once "classes/Produto.php";
require_once "classes/Pedido.php";
require_once "classes/Entregador.php";
require_once "classes/ItemPedido.php";


$cliente1 = new Cliente(
    "João Victor Rocha Cândido",
    "(35) 12345-4321",
    "Rua 3 de fevereiro, 67"
);


$produto1 = new Produto("X-Burguer Artesanal", 28.90, "Lanche", 10);
$produto2 = new Produto("Batata Frita Especial", 16.50, "Porção", 8);
$produto3 = new Produto("Refrigerante 2L", 12.00, "Bebida", 5);
$produto4 = new Produto("Milk Shake Chocolate", 18.90, "Sobremesa", 4);


$entregador1 = new Entregador(
    "Fernando Dutra",
    "Moto",
    true
);


$pedido1 = new Pedido(
    $cliente1,
    "Em preparo"
);

$item1 = new ItemPedido($produto1, 2); // 2 X-Burguer
$item2 = new ItemPedido($produto2, 1); // 1 Batata
$item3 = new ItemPedido($produto3, 3); // 3 Refrigerantes

$pedido1->adicionarItem($item1);
$pedido1->adicionarItem($item2);
$pedido1->adicionarItem($item3);


$produtos = [
    $produto1,
    $produto2,
    $produto3,
    $produto4
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Papa-Léguas Delivery</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="style.css">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">

    <div class="container justify-content-center">

       <a class="navbar-brand fw-bold fs-3 text-center" href="#">

            <div class="logo-icon">
                <img src="img/papa-leguas.png" alt="Papa-Léguas" class="logo-img">
            </div>

            <div>
                Papa-Léguas Delivery
            </div>

        </a>

    </div>

</nav>

<section class="hero-section text-center text-light d-flex align-items-center">

    <div class="container">

        <h1 class="display-4 fw-bold">
            Bem-vindo ao Papa-Léguas Delivery
        </h1>

        <p class="lead mt-3">
            Sistema de controle de pedidos, clientes e entregas
        </p>

    </div>

</section>

<div class="container my-5">

    
    <section class="mb-5">

        <div class="d-flex align-items-center mb-4">

            <i class="bi bi-person-circle fs-2 text-danger me-2"></i>

            <h2 class="fw-bold m-0">Cliente</h2>

        </div>

        <?php echo $cliente1->exibirCliente(); ?>

    </section>

    
    <section class="mb-5">

        <div class="d-flex align-items-center mb-4">

            <i class="bi bi-bag-fill fs-2 text-danger me-2"></i>

            <h2 class="fw-bold m-0">Cardápio</h2>

        </div>

        <div class="row g-4">

            <?php foreach ($produtos as $produto): ?>

                <div class="col-md-6 col-lg-3">
                    <?= $produto->exibirProduto(); ?>
                </div>

            <?php endforeach; ?>

        </div>

    </section>

    
    <section class="mb-5">

        <div class="d-flex align-items-center mb-4">

            <i class="bi bi-bicycle fs-2 text-danger me-2"></i>

            <h2 class="fw-bold m-0">Entregador</h2>

        </div>

        <?php echo $entregador1->exibirEntregador(); ?>

    </section>

    
    <section class="mb-5">

        <div class="d-flex align-items-center mb-4">

            <i class="bi bi-receipt-cutoff fs-2 text-danger me-2"></i>

            <h2 class="fw-bold m-0">Pedido</h2>

        </div>

        <?php echo $pedido1->exibirPedido(); ?>

    </section>

</div>

<footer class="bg-dark text-light text-center p-4">

    <p class="mb-1 fw-bold">
        Papa-Léguas Delivery © 2026
    </p>

    <small>
        Projeto desenvolvido em PHP
    </small>

</footer>

</body>
</html>
