$(window).scroll(function(){
    var formFixed = $('#formFixed'),
        scroll = $(window).scrollTop();
  
        console.log(scroll)
    if (scroll >= 500 && scroll <= 3900) formFixed.addClass('sticky');
    else formFixed.removeClass('sticky');
});

$(document).ready(function () {
    $('#contactForm').on("submit", function (event) {
        event.preventDefault();
        if ($('#nome').val() === "") {
            $("#msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo nome!</div>');
        } else if ($('#email').val() === "") {
            $("#msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo e-mail!</div>');
        } else if ($('#telefone').val() === "") {
            $("#msg").html('<div class="alert alert-danger">Erro: Necessário preencher o campo telefone!</div>');
        } else {
            $("#msg").html(' ')
            $('#tituloForm').text('CADASTRO ENVIADO');
            $('#descriptionForm').text('Anote seu código e informe ao ​agendar sua consulta:');
            $('#bloc-form, #boxBtGerarCodigo').addClass('d-none');
            $('.codigoCadLP').removeClass('d-none')
            alert('teste');
            //Receber os dados do formulário
            // var dados = $("#contactForm").serialize();

            // var url = $('#url').val();

            // $.post(url, dados, function (retorno) {
            //     if (retorno) {
            //         //Limpar os campos
            //         $('#contactForm')[0].reset();
            //         $("#msg").html('<div class="alert alert-success">Mensagem enviada com sucesso!</div>');
            //     } else {
            //         $("#msg").html('<div class="alert alert-danger">Erro: Mensagem não enviada com sucesso!</div>');
            //     }
            // });
        }
    });
});