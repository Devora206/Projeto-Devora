document.addEventListener("DOMContentLoaded", () => {

    const form = document.getElementById("formAgendamento");

    if (form) {
        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const formData = new FormData(form);

            fetch("/api/agendamentos", {
                method: "POST",
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                alert("Agendamento realizado com sucesso!");
                
                form.reset();

                console.log("Sucesso:", data);
            })
            .catch(error => {
                console.error("Erro:", error);
                alert("Erro ao enviar agendamento");
            });
        });
    }

});