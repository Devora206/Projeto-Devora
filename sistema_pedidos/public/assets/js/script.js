// ==========================
// ADICIONAR NA SACOLA
// ==========================

function addItem(nome, preco) {
    let sacola = JSON.parse(localStorage.getItem("sacola")) || [];

    sacola.push({ nome, preco });

    localStorage.setItem("sacola", JSON.stringify(sacola));

    alert("Item adicionado na sacola!");
}

// ==========================
// CARREGAR SACOLA
// ==========================

function removerItem(index) {
    let sacola = JSON.parse(localStorage.getItem("sacola")) || [];

    sacola.splice(index, 1);

    localStorage.setItem("sacola", JSON.stringify(sacola));

    carregarSacola();
}

function carregarSacola() {
    const lista = document.getElementById("lista-sacola");
    const total = document.getElementById("total");

    if (!lista) return;

    let sacola = JSON.parse(localStorage.getItem("sacola")) || [];

    lista.innerHTML = "";
    let soma = 0;

    sacola.forEach((item, index) => {
        lista.innerHTML += `
            <div class="card">
                <h3>${item.nome}</h3>
                <p class="price">R$ ${item.preco}</p>
                <button onclick="removerItem(${index})" style="margin-top:10px; background:red; color:white; border:none; padding:5px 10px;">
                    Remover
                </button>
            </div>
        `;
        soma += parseFloat(item.preco);
    });

    total.textContent = soma.toFixed(2);
}

window.onload = carregarSacola;

function finalizarPedido() {
    let sacola = JSON.parse(localStorage.getItem("sacola")) || [];

    if (sacola.length === 0) {
        alert("Sacola vazia!");
        return;
    }

    let total = sacola.reduce((soma, item) => soma + item.preco, 0);

    fetch('http://127.0.0.1:8000/pedidos', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            itens: sacola,
            total: total
        })
    })
    .then(res => res.json())
    .then(data => {
        alert("Pedido salvo no sistema!");

        localStorage.removeItem("sacola");
        carregarSacola();
    })
    .catch(err => {
        console.error(err);
        alert("Erro ao enviar pedido");
    });
}
