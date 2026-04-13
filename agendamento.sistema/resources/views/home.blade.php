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
    <p>Aqui vai ficar o formulário depois</p>
</section>

<section id="contato">
    <h1>Contato</h1>
    <p>Email, telefone, etc</p>
</section>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>