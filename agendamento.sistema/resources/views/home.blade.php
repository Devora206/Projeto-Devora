<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <title>DentalLux</title>
</head>
<body>

<nav>
    <div><strong>DentalLux</strong></div>

    <div>
        <a href="#home">Home</a>
        <a href="#servicos">Serviços</a>
        <a href="#agenda">Agenda</a>
        <a href="#contato">Contato</a>
        <a href="#agenda" class="btn">Agendar Consulta</a>
    </div>
</nav>

<section id="home">
    <h1>Home</h1>
    <p>Bem-vindo ao sistema odontológico</p>
</section>

<section id="servicos">
    <h1>Serviços</h1>
    <p>Limpeza, consultas, tratamentos...</p>
</section>

<section id="agenda">
    <h1>Agendamento</h1>

    <form id="formAgendamento">
        <input type="text" name="nome" placeholder="Nome Completo" required>

        <input type="text" name="telefone" placeholder="Telefone" required>

        <input type="email" name="email" placeholder="Email" required>

        <select name="servico">
            <option value="Limpeza">Limpeza</option>
            <option value="Consulta">Consulta</option>
        </select>

        <input type="date" name="data" required>

        <input type="text" name="hora" placeholder="14:00" required>

        <textarea name="observacoes" placeholder="Observações"></textarea>

        <button type="submit">Confirmar Agendamento</button>
    </form>
</section>

<section id="contato">
    <h1>Contato</h1>
    <p>Email, telefone, etc</p>
</section>

<script src="{{ asset('assets/js/script.js') }}"></script>

</body>
</html>