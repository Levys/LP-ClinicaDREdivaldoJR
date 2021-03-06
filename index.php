<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Levy Buarque - Front-end Developer" />
        <title>Clínica Dr. Edivaldo Junior - Endocrinologia e Nutrologia<</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="assets/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <div class="col-2 col-md-4"></div>
                <div class="col-8 col-md-4">
                    <a class="navbar-brand" href="#!">
                        <img class="img-fluid" src="assets/img/marca_horizontal.png" alt="marca Clinica Dr. Edivaldo Jr." title="Clinica Dr. Edivaldo Jr.">
                    </a>
                </div>
                <div class="col-2 col-md-4"></div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <h1 class="">Qual é a sua meta?</h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col box-services-top">
                        <div class="text-center text-white">
                            <a href="#bg-emagrecimento" rel="" class="link-anchor">
                                <span class="img-icon"></span>
                                <p>Emagrecimento e obesidade</p>
                            </a>
                        </div>
                    </div>
                    <!-- <div class="col-md-auto ms-3 me-3"></div> -->
                    <div class="col box-services-top">
                        <div class="text-center text-white">
                            <a href="#bg-medicina-esporte" rel="" class="link-anchor">
                            <span class="img-icon2"></span>
                                <p>Medicina do <br>esporte</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="showcase">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col"></div>
                    <div class="col-lg-5 my-auto showcase-text">
                        <h2>Dr. Edivaldo Junior​ <br> <small>Nutrologia e Endocrinologia</small></h2>
                        <p class="lead mb-0">Com mais de 20 anos de formação, título de especialista e pós-graduação em universidades tradicionais como a UNIFESP (Universidade Federal de SP), o Dr. Edivaldo trata seus pacientes com profissionalismo, seriedade e humanização. Acredita que cada paciente é único e deve ser estudado e compreendido de forma individualizada e cuidadosa.</p>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="" id="formFixed">
                <div class="posRelative">
                    <span id="bt-fechar-mobile">Fechar</span>
                </div>
                <h2 class="text-center" id="tituloForm">Cadastre-se,​</h2>
                <p class="text-center" id="descriptionForm">gere o código e inclua o exame de <strong>bioimpedância</strong> na sua primeira consulta!</p>
                <form class="form-subscribe" id="contactForm"  method="post">
                    <div class="row">
                        <div class="col-12">
                            <span id="msg"></span>
                        </div>
                    </div>
                    <div class="row" id="bloc-form">
                        <div class="col-12">
                            <label for="nome">Nome</label>
                            <input class="form-control form-control-md" type="text" name="nome" id="nome" required>
                        </div>
                        <div class="col-12">
                            <label for="email">E-mail</label>
                            <input class="form-control form-control-md" type="email" name="email" id="email" required>
                        </div>
                        <div class="col-12">
                            <label for="telefone">Telefone</label>
                            <input class="form-control form-control-md" type="text" name="telefone" id="telefone" required>
                        </div>
                        <div class="col-12">
                            <p id="collapseText">
                                <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    O que é bioimpedância?
                                </a>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    A bioimpedância é um exame destinado à avaliação da composição corporal, estimando a massa magra, gordura corporal, taxa metabólica basal, entre outros dados que proporcionam informações mais precisas sobre o estado nutricional do paciente.
                                </div>
                              </div>
                        </div>
                    </div>
                    <div id="boxBtGerarCodigo">
                        <input class="btn btn-primary btn-lg" id="enviar" value="GERAR CÓDIGO" type="submit">
                    </div>
                    <div class="codigoCadLP d-none">
                        <p class="codCad">BIOEJR21</p>
                        <p class="txt">Fale com a gente através do whatsapp ou Instagram:​</p>
                        <p class="wts"><a href="https://wa.me/5511972632233" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i> AGENDAR CONSULTA</a></p>
                        <p class="inst"><a target="_blank" href="https://www.instagram.com/dr.edivaldojunior/" style="color: #ffffff;"><i class="fa fa-instagram" aria-hidden="true"></i> Dr.Edivaldo Junior</a></p>
                    </div>
                </form>
            </div>
        </section>
        <section class="bg-emagrecimento" id="bg-emagrecimento">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-8 my-auto showcase-text">
                        <h2>Emagrecimento e obesidade</h2>
                        <p class="lead mb-3">O sobrepeso não pode ser combatido com fórmulas milagrosas, chás e dietas da moda. Sobrepeso é fator de risco para o surgimento de doenças como diabetes, colesterol e triglicerídeos altos, doenças cardiovasculares, AVC e alguns tipos de câncer. A obesidade é uma das doenças mais críticas dos dias atuais e necessita de tratamento multidisciplinar.​</p>
                        <p class="lead mb-1">Seguir uma alimentação equilibrada com o suporte de um médico nutrólogo e endocrinologista e praticar atividade física são essenciais no processo de emagrecimento. Alterações nas taxas hormonais, vitaminas e nutrientes muitas vezes dificultam a perda de peso, e nestes casos, o especialista poderá entrar com intervenção medicamentosa ou suplementação..</p>
                        
                    </div>
                    <div class="box-video-click">
                        <iframe src="https://player.vimeo.com/video/647004474?h=17ffe7c5ab&title=0&byline=0" style="width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        </section>
        <section class="bg-medicina-esporte" id="bg-medicina-esporte">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-12 my-auto showcase-text">
                        <h2>Medicina do esporte</h2>
                        <p class="lead mb-3">Associada à Medicina do Esporte, a Nutrologia pode aumentar o desempenho aeróbico, bem como proporcionar maior ganho de massa muscular ao indivíduo.O nutrólogo, junto ao nutricionista, poderá desenhar uma dieta orientada pelo objetivo do paciente. Os grupos de alimentos (carboidrato, proteína, gordura), as quantidades consumidas e os horários das refeições são fatores que impactam no resultado desejado. Por isso, é muito comum que indivíduos tentem fazer dieta sem acompanhamento médico e nutricional e não tenham resultados satisfatórios. É preciso disciplina e orientação profissional.</p>
                    </div>
                    <div class="box-video-click">
                        <iframe src="https://player.vimeo.com/video/647004474?h=17ffe7c5ab&title=0&byline=0" style="width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                    </div>
                </div>
            </div>
        </section>
        <section class="bg-depoimentos">
            <div class="container-fluid">
                <div class="row g-0">
                    <div class="col-lg-12 my-auto showcase-text">
                        <h2>Depoimentos de pacientes</h2>
                    </div>
                    <div class="col-lg-9 my-auto showcase-text">
                        <div class="box-depoimentos">
                            <p>Profissional sensacional, atendimento impecável, pontual, atencioso, tirou todas as minhas dúvidas, explicou... Super recomendo e seguirei tratamento com ele!!</p>
                            <p class="text-end">Priscila</p>
                        </div>
                        <div class="box-depoimentos">
                            <p>O Doutor Edivaldo é de longe o melhor endócrino que já passei na vida. Simpático, atencioso, atendeu no horário, esclareceu todas as minhas dúvidas e propôs um tratamento coerente para minha doença. Não largo mais!</p>
                            <p class="text-end">Julio</p>
                        </div>
                        <div class="box-depoimentos">
                            <p>Dr Edivaldo conseguiu fazer o que outros médicos não conseguiram. Emagreci sem passar fome e sem privações, nada de dieta restritiva e sim a combinação correta dos alimentos para emagrecer sem perder saúde. Chega do efeito sanfona. Indico Dr Edivaldo pelo seu profissionalismo e método de emagrecimento muito eficaz. Muito satisfeita!</p>
                            <p class="text-end">Silvia R</p>
                        </div>
                        <div class="box-depoimentos">
                            <p>Dr Edivaldo é um médico muito competente, explica detalhadamente o funcionamento do corpo e o porquê dos tratamentos indicados, passando muita confiança. Estou adorando os resultados, e as mudanças na minha saúde e no meu físico com certeza serão definitivas. Recomento muito!
                            </p>
                            <p class="text-end">Marina</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer id="footer" class="footer container-fluid">
            <div id="footer-inner-top" class="row">
                <div class="col-lg-4 col-xs-12 text-center">
                    <div id="media_image-2" class="widget widget_media_image">
                        <img
                            src="assets/img/marca_monocromatica_branca_vertical-500x497.png"
                            class="img-fluid" width="300" height="298"
                        />
                    </div>
                </div>
    
                <div class="marg col-lg-4 col-xs-12 text-center">
                    <div id="custom_html-2" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <address class="txt-center">
                                Avenida República do Líbano, 2123
                                <br />
                                Ibirapuera <br />
                                <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+551150521087" target="_blank" rel="noopener noreferrer">11 5052-1087</a> |
                                <a href="tel:+551150534596" target="_blank" rel="noopener noreferrer">11 5053-4596</a>
                                <br />
                                <i class="fa fa-whatsapp" aria-hidden="true"></i> <a href="https://api.whatsapp.com/send?phone=5511972632233" target="_blank" rel="noopener noreferrer">11 97263-2233</a>
                                <br />
                                Cep: 04501-003 | São Paulo - SP
                            </address>
                        </div>
                    </div>
                </div>
    
                <div class="marg col-lg-4 col-xs-12 text-center">
                    <div id="custom_html-3" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <iframe
                                id="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.173347529558!2d-46.663220685021436!3d-23.598115284664672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5a032ba0116f%3A0x59ff3b6f5febd89f!2sAv.+Rep%C3%BAblica+do+L%C3%ADbano%2C+2123+-+Moema%2C+S%C3%A3o+Paulo+-+SP%2C+04501-002!5e0!3m2!1sen!2sbr!4v1557842077577!5m2!1sen!2sbr"
                                style="border: 0;"
                                allowfullscreen=""
                                width="100%"
                                height="350"
                                frameborder="0"
                            ></iframe>
                        </div>
                    </div>
                </div>
            </div>
        
            <div id="footer-inner-bottom" class="row">
                <div class="col-xl-12 col-lg-10 text-center">
                    <div id="copyright" style="color: #ffffff;">
                        <p>
                            © Copyright 2021. Todos os direitos reservados. | <span class="doctor-info">Dr. Edivaldo Rodrigues dos Santos Junior | CRM-SP: 90.127</span>
                            <a class="credits" href="https://www.instagram.com/moa.marketing/" target="_blank" title="Desenvolvido por: MOA Marketing Optimization Agency" alt="Desenvolvido por: MOA Marketing Optimization Agency">Desenvolvido por: MOA Marketing Optimization Agency</a>
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-2 col-last">
                    <div id="footer-social">
                        <a target="_blank" href="https://www.instagram.com/dr.edivaldojunior/" style="color: #ffffff;">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a target="_blank" href="https://www.facebook.com/Cl%C3%ADnica-Dr-Edivaldo-Junior-103944831412296" style="color: #ffffff;">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <div class="bt-form-float">
            <a type="button" class="btn btn-primary btn-lg" id="bt-form-fixed">CADASTRE-SE</a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
