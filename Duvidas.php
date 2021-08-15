<!-- Title -->
<title>Página de Dúvidas</title>

<!-- Header -->
<?php include('includes/header.php'); ?>
<!-- Navbar -->
<?php include('includes/design.php'); ?>

<!-- Modal -->
<?php include('includes/modal_via.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
    <div class="breadcrumb-perso-item">Sessão de Dúvidas</div>
    <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Seção de Dúvidas -->
<section id="duvidas" class="duvidas section-bg">
    <div class="container">
        <div class="index-titulo mb-4" data-aos="fade-left" data-aos-delay="100">
            <h2>Sessão Dúvidas</h2>
            <p>Perguntas Frequentes</p>
        </div>
        <div class="lista-duvidas" data-aos="fade-up" data-aos-delay="200">
            <ul>
                <li data-aos="fade-up">
                    <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#lista-duvidas-1">
                        Como retirar Segunda Via de seu Boleto/Carnê ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="lista-duvidas-1" class="collapse show" data-bs-parent=".lista-duvidas">
                        <p class="mt-1 col-lg-8">
                            Ao clicar em 2° via, desça a página e digite o código de barras (presente no boleto vencido) e seu CPF. <br><br>
                            Você será redirecionado para a página do banco correspondente ao seu Boleto/Carnê, caso precise digite novamente seus dados.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="100">
                    <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#lista-duvidas-2">
                        Como se cadastrar online? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="lista-duvidas-2" class="collapse" data-bs-parent=".lista-duvidas">
                        <p class="mt-1 col-lg-8">
                            Sua Instalação consiste em duas etapas: Cadastro no sistema e a Instalação. <br><br>
                            O Cadastro pode ser feito presencialmente no momento da instalação, mas caso queira agilizar faça-o em Cadastro, assim restará apenas agendar o dia de sua instalação.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="200">
                    <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#lista-duvidas-3">
                        Existe alguma diferença entre Fibra Ótica e Cabo UTP? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="lista-duvidas-3" class="collapse" data-bs-parent=".lista-duvidas">
                        <p class="mt-1 col-lg-8">
                            A Fibra Ótica é composta por uma série de tubos feitos de vidro que transportam dados através da luz, resultando em uma velocidade muito maior do que os cabos convencionais (UTP) feitos de cobre. <br><br>
                            Quando se trata de velocidades acima de 30 Megas utilizando cabos de cobre a conexão passa a sofrer bastante oscilação e perdas, sendo aí o destaque da Fibra Ótica, que suporta velocidades altíssimas sem que haja oscilações que comprometam sua velocidade.
                        </p>
                    </div>
                </li>
                <li data-aos="fade-up" data-aos-delay="300">
                    <i class="bx bx-help-circle icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#lista-duvidas-4">
                        Qual a diferença entre Velocidade de Download e Upload? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                    <div id="lista-duvidas-4" class="collapse" data-bs-parent=".lista-duvidas">
                        <p class="mt-1 col-lg-8">
                            Digamos que ambos sejam importantes e influenciam em sua navegação, pois trabalham em conjunto. <br> <br>
                            Quando, por exemplo, você manda mensagem para um amigo no WhatsApp acaba-se utilizando a
                            velocidade de 'Upload', e no momento em que recebe uma mensagem você faz 'Download' para
                            visualiza-la. <br><br> Geralmente só é utilizado cerca de 8-12% de velocidade de Upload, portanto caso
                            você tenha 50MBs de internet, seu download baixará numa média de 5-7Mb/s,
                            claro que também dependerá de seu equipamento e o serviço contratado.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- Aba de Serviços -->
<section id="servicos" class="servicos">
    <div class="container">
        <div class="index-titulo mb-5" data-aos="fade-left" data-aos-delay="300">
            <h2 class="pt-3">Serviços</h2>
            <p class="pt-2 pb-3">Links Úteis</p>
        </div>
        <div class="row pb-5 mb-5" data-aos="fade-up" data-aos-delay="400">
            <div class="col-lg-4 col-md-4 col-12 d-flex align-items-stretch">
                <div class="icon-box" data-toggle="modal" data-target="#modalVia">
                    <div class="icon"><a href="#!"><i class="bx bx-dollar"></i></a></div>
                    <h4><a href="#!">Segunda Via</a></h4>
                    <p>
                        Precisa tirar Segunda via? <br>
                        Acesse nossa Central do Assinante e retire rapidamente
                        ou caso prefira, acesse o Gerencianet!
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><a href="Cadastro.php"><i class="bx bx-file"></i></a></div>
                    <h4><a href="Cadastro.php">Cadastro</a></h4>
                    <p>Acesse nossa ficha de cadastro e agilize sua instalação.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-6 d-flex align-items-stretch mt-4 mt-md-0">
                <div class="icon-box">
                    <div class="icon"><a href="Teste.php"><i class="bx bx-tachometer"></i></a></div>
                    <h4><a href="Teste.php">Medidor</a></h4>
                    <p>Utilize nosso medidor de velocidade.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<!-- Footer -->
<?php include('includes/footer.php'); ?>