<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sacola - WeBistrô</title>
    <link rel="stylesheet" href="{{ asset('assets/css/sacola.css') }}">
</head>
<body>

<header>
    <div class="logo">
        <div class="logo-circle"></div>
        <div class="logo-text">
            <h1>WeBistrô</h1>
            <span>Cuisine Française</span>
        </div>
    </div>

    <a href="/">
        <button class="cart-btn">⬅ Voltar</button>
    </a>
</header>

<main>
    <h1 class="titulo">Sua Sacola</h1>

    <div id="lista-sacola" class="menu-grid">
        <!-- JS vai preencher -->
    </div>

    <div class="total-box">
        <span>Total:</span>
        <span id="total">R$ 0,00</span>
    </div>

    <button class="finalizar-btn" onclick="finalizarPedido()">
        Finalizar Pedido
    </button>
</main>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>