<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
    <div class="breadcrumb-perso-item">Medidor de Velocidade</div>
    <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Iframe SpeedTest -->
<section id="teste" class="teste section-bg">
    <div class="container">
        <div class="index-titulo mb-4" data-aos="fade-left" data-aos-delay="100">
            <h2>Medidor</h2>
            <p>Teste Agora</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 d-flex align-items-stretch">
                <div class="frame">
                    <iframe width="100%" height="650px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Aba de Serviços -->
<section id="servicos" class="servicos">
    <div class="container">
        <div class="index-titulo mb-5" data-aos="fade-left" data-aos-delay="600">
            <h2 class="pt-3">Serviços</h2>
            <p class="pt-2 pb-3">Links Úteis</p>
        </div>
        <div class="row pb-5 mb-5" data-aos="fade-left" data-aos-delay="800">
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
                    <div class="icon"><a href="Duvidas.php"><i class="bx bx-help-circle icon-help"></i></a></div>
                    <h4><a href="Duvidas.php">Sessão de Dúvidas</a></h4>
                    <p>Acesse nossa página projetada com algumas das dúvidas feitas frequentemente.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Modals -->
<?php include('includes/modal_via.php'); ?>

<!-- Include Footer -->
<?php include('includes/footer.php'); ?>