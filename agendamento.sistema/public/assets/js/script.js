document.getElementById('formAgendamento')
.addEventListener('submit', function(e) {
    e.preventDefault();

    const form = this;
    const formData = new FormData(form);

    fetch('/api/agendamentos', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        alert('Agendamento enviado com sucesso!');
        form.reset();

        console.log(data);
    })
    .catch(err => {
        console.error('Erro:', err);
    });
});