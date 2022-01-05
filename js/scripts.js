$(document).ready(function () {
    // Fixed form on scroll
    $(window).scroll(function(){
        var formFixed = $('#formFixed'),
            scroll = $(window).scrollTop();
        if (scroll >= 500 && scroll <= 3900) formFixed.addClass('sticky');
        else formFixed.removeClass('sticky');
    });
    // Validation form
    $('#contactForm').on("submit", function (event) {
        event.preventDefault();
        if ($('#name').val() === "") {
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
            $('.codigoCadLP').removeClass('d-none');
            var nome = $("#nome");
            var nomePost = nome.val(); 
            var email = $("#email");
            var emailPost = email.val(); 
            var telefone = $("#telefone");
            var telefonePost = telefone.val(); 	
            $.post("insert.php", {nome: nomePost, email: emailPost, telefone: telefonePost}, function(){
                $("#msg").html('<div class="alert alert-success">Mensagem enviada com sucesso!</div>').delay(5000).fadeOut('slow');
            }, "html");
            $('#contactForm')[0].reset();
        }
    });
    //form mobile
    var windowView = window.innerWidth;
    if (windowView <= 560){
        $('.bt-form-float').addClass('active');
    }
    $('#bt-form-fixed').on("click", function (e) {
        e.preventDefault();
        $('#formFixed').addClass('formFloat');
    });
    $('#bt-fechar-mobile').on("click", function (e) {
        e.preventDefault();
        $('#formFixed').removeClass('formFloat');
    });
    // Link anchor
    $('.link-anchor').click(function(){
        $('html, body').animate({
            scrollTop: $( $(this).attr('href') ).offset().top
        }, 500);
        return false;
    });
});