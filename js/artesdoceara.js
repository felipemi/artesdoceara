$(document).ready(function() {
    $('#form').validate({
        rules: {
            nome: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            assunto: {
                required: true
            },
            mensagem: {
                required: true,
            }
        },
        messages: {
            nome: {
                required: "O campo nome é obrigatório."
            },
            email: {
                required: "O campo E-mail é obrigatório.",
                email: "O campo e-mail é inválido."
            },
            assunto: {
                required: "O campo Assunto é obrigatório."
            },
             mensagem: {
                required: "O campo Mensagem é obrigatório."
            }
        }
    });
});