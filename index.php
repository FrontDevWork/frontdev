<?php include "header.php"?>

<section class="banner">
    <div class="container-fluid">
        <div class="row">

            <div class="principal">
                <h1 class="titulo-banner">
                    Criação de sites e plataformas e-commerce
                </h1>

                <div class="buttons">
                    <button class="btn btn-conhecer  radius scroll" href="#servicos"> Mais Informações</button>

                </div>
            </div>
        </div>
    </div>
    </div>


</section>

<div class="container-fluid" id="servicos">
    <div class="row">
        <div class="col-sm-12">
            <h4 class="text-center mb-5" id="title_service">Serviços</h4>
        </div>
    </div>
    <div class="card-grupo">
        <div class="row">

            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">
                        <img src="img/idea.png">
                    </div>
                    <div class="card-content">

                        <h5 class="card-title">Identidade visual</h5>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">
                        <img src="img/multimedia.png">
                    </div>
                    <div class="card-content">
                        <h5 class="card-title">Marketing digital</h5>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">

                        <img src="img/code.png">
                    </div>
                    <div class="card-content">

                        <h5 class="card-title">Desenvolvimento sob medida</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">

                        <img src="img/computer.png">
                    </div>
                    <div class="card-content">

                        <h5 class="card-title">Design responsivo</h5>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">

                        <img src="img/growth.png">
                    </div>
                    <div class="card-content">

                        <h5 class="card-title">Relatorios online</h5>
                    </div>

                </div>
            </div>
            <div class="col-sm-4">
                <div class="card-servico">
                    <div class="card-img">

                        <img src="img/settings.png">
                    </div>
                    <div class="card-content">

                        <h5 class="card-title">Painel administrativo</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sobre-nos" id="sobre-nos">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text_about" >
                <p>A CenterDev é uma agência especializada em encontrar a melhor solução
                    para o seu negócio seja ela, uma loja virtual completamente gerenciável ou apenas um site
                    profissional que dê resultados.</p>
                <p>Nós projetamos, desenvolvemos e gerenciamos sites de alto
                    impacto que geram leads, vendem produtos e contam histórias, sempre se atentando as tecnologias mais
                    atuais</p>
                <p>Com um planejamento estratégico e um equipe coordenada, buscamos entregar aos nosso clientes soluções
                    que proporcionam economia, competitividade e principalmente retorno financeiro</p>

            </div>
        </div>
    </div>
</div>
<div class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="text-center m-5" id="title_portfolio">Conheça um de nossos projetos</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="card-portfolio">
                    <div class="texto-portfolio text-center">
                        <h4>ImobPro</h4>
                        <a href="http://centerdev.com.br/imobpro" class="see-project" target="_blank">Ver Projeto</a>
                    </div>
                </div>
            </div>
            <!-- <div class="col-sm-6">
                <div class="card-portfolio">
                    <div class="texto-portfolio text-center">
                        <h4>Fotografia Max</h4>
                        <a href="#">Ver Projeto</a>

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<section class="box-contato" id="contato">

    <div class="container-fluid">

        <div class="contato">
            <h2 class="ajuda-contato">Fale com a gente </h2>
            <h4 class="subtitle-contato">Seu contato é muito importante</h4>
        </div>
        <div class="form-row">
            <div class="row">
                <div class="col-sm-6">

                    <form id="formContato" method="post" action="enviar.php">

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-container">
                                        <input type="text" class="input" name="name" id="name" pattern=".+" required>
                                        <label for="name" class="label"> Nome</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-container">
                                        <input type="email" class="input" name="email" id="email" pattern=".+" required>
                                        <label for="email" class="label"> E-mail</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-container">
                                        <input type="text" class="input" name="phone" id="phone" pattern=".+" required>
                                        <label for="phone" class="label"> Telefone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="input-container">
                                        <input type="text" class="input" name="about" id="about" pattern=".+" required>
                                        <label for="about" class="label"> Assunto</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="textarea-container">
                                        <label for="content" class="textarea"> Sua mensagem</label>
                                        <textarea rows="5" name="content" id="content"></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <button class="btn btn-conhecer" id="send">Enviar</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-sm-6">
                    <div id="data-contato">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="phone_title"><i class="fas fa-phone"></i> Telefones</h4>
                                <p class="attendance">Atendimento: (11) 97797-3346</p>
                                <p>WhatsApp: +55 (11) 97797-3346</p>
                                <p></p>
                            </div>
                            <div class="col-sm-12">
                                <h4 class="att_hour"><i class="fas fa-clock"></i> Horário de atendimento</h4>
                                <p class="days">De segunda à sexta-feira</p>
                                <p class="hour">Das 9h às 18h </p>
                            </div>
                            <!-- <div class="col-sm-12">
                                <h4><i class="fas fa-map-marker-alt"></i> Endereço</h4>
                                <p>Rua Sestílio Melani, 620</p>
                                <p>São Paulo, São Paulo | CEP 08225-485 </p>
                            </div> -->
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>


<?php include "footer.php"?>