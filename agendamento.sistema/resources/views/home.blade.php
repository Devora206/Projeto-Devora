<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>DentalLux</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>

<!-- HEADER -->
<header class="header">
  <div class="logo">🦷 DentalLux</div>

  <nav>
    <a href="#">Home</a>
    <a href="#servicos">Serviços</a>
    <a href="#agendamento">Agenda</a>
    <a href="#contato">Contato</a>
    <a href="#agendamento" class="btn-topo">Agendar Consulta</a>
  </nav>
</header>
<section class="hero">
  <div class="hero-content">
    <h1>Cuide do seu Sorriso com Especialistas</h1>
    <p>Agende uma consulta e tenha um sorriso mais saudável e brilhante!</p>
    <a href="#agendamento" class="btn">Agendar</a>
  </div>
</section>
<section class="servicos" id="servicos">
  <h2>Nossos Tratamentos</h2>

  <div class="cards">
    <div class="card"><img src="https://i.pinimg.com/736x/2e/52/f1/2e52f1345b40db71984279d0bf40b5b5.jpg"><h3>Limpeza Dental</h3></div>
    <div class="card"><img src="https://i.pinimg.com/736x/2a/44/21/2a4421d7d0a64b0bec76cde15f84d092.jpg"><h3>Clareamento Dental</h3></div>
    <div class="card"><img src="https://i.pinimg.com/1200x/fc/fe/27/fcfe276bf9fd1af918f70f98642c0000.jpg"><h3>Restauração Dentária</h3></div>
    <div class="card"><img src="https://i.pinimg.com/1200x/48/05/40/480540f5cbc7d145dcaea7d566a7050b.jpg"><h3>Consulta Ortodôntica</h3></div>
    <div class="card"><img src="https://i.pinimg.com/736x/fc/aa/e2/fcaae24705143bbb13311c6d9acd3c33.jpg"><h3>Implante Dentário</h3></div>
    <div class="card"><img src="https://i.pinimg.com/736x/78/78/ba/7878badbe8f6d3fc00231cc8a92f2f60.jpg"><h3>Extração Dentária</h3></div>
  </div>
</section>
<section class="agendamento" id="agendamento">
  <h2>Agende sua Consulta</h2>

  <form id="formAgendamento">

  <div class="grupo">
    <input type="text" name="nome" placeholder="Nome completo" required>
    <input type="tel" name="telefone" placeholder="Telefone" required>
  </div>

  <div class="grupo">
    <input type="email" name="email" placeholder="Email" required>

    <select name="servico" required>
      <option value="">Serviço desejado</option>
      <option>Limpeza Dental</option>
      <option>Clareamento Dental</option>
      <option>Restauração Dentária</option>
      <option>Consulta Ortodôntica</option>
      <option>Implante Dentário</option>
      <option>Extração Dentária</option>
    </select>
  </div>

  <div class="grupo">
    <input type="date" name="data" required>

   <select name="hora" id="horario" required>
        <option value="">Selecione um horário</option>
        <option value="09:00">09:00</option>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
        <option value="17:00">17:00</option>
        <option value="18:00">18:00</option>
        <option value="19:00">19:00</option>
    </select>
  </div>

  <p id="mensagem-horarios"></p>

  <textarea name="observacoes" placeholder="Observações (opcional)"></textarea>

  <button type="submit" class="btn-agendar">
    Confirmar Agendamento
  </button>

    </form>
</section>

<!-- FOOTER -->
<footer class="footer" id="contato">

  <div class="footer-container">

    <div class="footer-col">
      <h2>DentalLux</h2>
      <p>Cuidando do seu sorriso com excelência e tecnologia de ponta.</p>
    </div>

    <div class="footer-col">
      <h3>Contato</h3>
      <p>📞 (11) 99999-9999</p>
      <p>✉️ contato@dentallux.com</p>
      <p>📍 Guarulhos - SP</p>
    </div>

    <div class="footer-col">
      <h3>Redes Sociais</h3>

      <div class="redes">
        <a href="https://instagram.com" target="_blank">
          <i class="fab fa-instagram"></i> Instagram
        </a>

        <a href="https://facebook.com" target="_blank">
          <i class="fab fa-facebook"></i> Facebook
        </a>
      </div>
    </div>

  </div>
</footer>

<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>