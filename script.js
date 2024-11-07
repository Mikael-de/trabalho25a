// Validação de formulário
document.getElementById('contact-form').addEventListener('submit', function (event) {
    const nome = document.getElementById('nome').value.trim();
    const email = document.getElementById('email').value.trim();
    const telefone = document.getElementById('telefone').value.trim();
    const duvida = document.getElementById('duvida').value.trim();

    if (!nome || !email || !telefone || !duvida) {
        alert('Por favor, preencha todos os campos antes de enviar.');
        event.preventDefault(); // Evita o envio do formulário
    }
});
