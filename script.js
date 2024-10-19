document.addEventListener("DOMContentLoaded", function() {
    const fields = [
        { id: 'conjuge1', warningId: 'conjuge1-warning', pattern: /^[A-Za-zÀ-ÿ\s]+$/, message: 'Apenas letras e espaços são permitidos.' },
        { id: 'conjuge2', warningId: 'conjuge2-warning', pattern: /^[A-Za-zÀ-ÿ\s]+$/, message: 'Apenas letras e espaços são permitidos.' },
        { id: 'email', warningId: 'email-warning', pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: 'Insira um e-mail válido.' },
        { id: 'email2', warningId: 'email2-warning', pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/, message: 'Insira um e-mail válido.' },
        { id: 'phone1', warningId: 'phone1-warning', pattern: /^\d{10,15}$/, message: 'O telefone deve ter entre 10 a 15 dígitos.' },
        { id: 'phone2', warningId: 'phone2-warning', pattern: /^\d{10,15}$/, message: 'O telefone deve ter entre 10 a 15 dígitos.' },
    ];

    fields.forEach(field => {
        const input = document.getElementById(field.id);
        const warning = document.getElementById(field.warningId);

        input.addEventListener('input', function() {
            if (!field.pattern.test(input.value)) {
                warning.textContent = field.message;
            } else {
                warning.textContent = '';
            }
        });
    });
});
