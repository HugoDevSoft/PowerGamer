document.addEventListener('DOMContentLoaded', function() {
    const botaoCadastro = document.getElementById('botaoCadastro');
    if (botaoCadastro) {
        botaoCadastro.addEventListener('click', function() {
            window.location.href = 'cadastro.html';
        });
    }
});