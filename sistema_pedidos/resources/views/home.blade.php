<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeBistrô - Cuisine Française</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
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

    <a href="/sacola">
        <button class="cart-btn">Sacola</button>
    </a>
</header>

<nav>
    <div class="nav-tabs">
        <button class="nav-tab active">Pratos Principais</button>
        <button class="nav-tab">Bebidas</button>
        <button class="nav-tab">Sobremesas</button>
    </div>
</nav>

<main>
    <div class="menu-grid">

        <div class="card">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=400&h=300&fit=crop" class="card-image">
            <h3>Entrecot au poivre</h3>
            <div class="divider"></div>
            <p class="price">R$ 45,90</p>
            <button class="add-btn"
                onclick="addItem('Entrecot au poivre', 45.90)">
                Adicionar na sacola
            </button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=400&h=300&fit=crop" class="card-image">
            <h3>Confit de Pato</h3>
            <div class="divider"></div>
            <p class="price">R$ 59,90</p>
            <button class="add-btn"
                onclick="addItem('Confit de Pato', 59.90)">
                Adicionar na sacola
            </button>
        </div>

        <div class="card">
            <img src="https://images.unsplash.com/photo-1572453800999-e8d2d1589b7c?w=400&h=300&fit=crop" class="card-image">
            <h3>Ratatouille</h3>
            <div class="divider"></div>
            <p class="price">R$ 39,90</p>
            <button class="add-btn"
                onclick="addItem('Ratatouille', 39.90)">
                Adicionar na sacola
            </button>
        </div>

    </div>
</main>

<!-- IMPORTANTE -->
<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>