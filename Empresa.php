<!--Tittle-->
<title>Sobre Nós</title>

<!-- Header -->
<?php include('includes/header.php'); ?>
<!-- Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">Sobre a Empresa</div>
  <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Empresa -->
<section id="empresa" class="empresa">
    <div class="container">

        <div id="index-titulo mb-4" class="index-titulo" data-aos="fade-left" data-aos-delay="100">
            <h2>Sobre Nós</h2>
            <p>XXXXX</p>
        </div>

        <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">

            <div class="col-lg-3 col-4 mt-4 mt-lg-1">
                <ul class="nav nav-tabs flex-column">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" href="#nossaEmpresa">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#missao">Missão</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#valores">Valores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#visao">Visão</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 col-8 mt-4 mt-lg-0">
                <div class="tab-content">
                    <div class="tab-pane active show" id="nossaEmpresa">
                        <div class="row">
                            <div class="col-12 col-lg-8 details order-2 order-lg-1">
                                <h3>Empresa</h3>
                                <p class="fst-italic">
                                    A XXXXXX está á alguns anos na área tecnológica trazendo um novo conceito tanto em navegação casual quanto profissional,
                                    contamos com uma equipe técnica altamente qualificada estando preparada para quaisquer situações.<br><br>
                                    Estamos localizados em grande parte no Grajaú (Zona Sul de São Paulo), tendo cobertura por quase toda a região.<br><br>
                                    Entre em <a href="Contato.php"><strong>Contato</strong></a> conosco via e-mail ou telefone para saber se nossos planos estão disponiveis para sua residência.
                                    Prestamos suporte técnico todos os dias na semana em horário comercial, visando sempre solucionar problemas recorrentes, caso houver.
                                </p>
                            </div>
                            <div class="col-4 text-center order-1 order-lg-2">
                                <img src="assets/img/empresa/empresa1.jpg" alt="" class="d-none d-lg-block img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="missao">
                        <div class="row">
                            <div class="col-12 col-lg-8 details order-2 order-lg-1">
                                <h3>Missão</h3>
                                <p class="fst-italic">
                                    Nossa pretensão é promover internet com a maior qualidade possível para satisfazer nossos clientes com todo suporte técnico necessário de alto nível.
                                </p>
                            </div>
                            <div class="col-4 text-center order-1 order-lg-2">
                                <img src="assets/img/empresa/empresa2.jpg" alt="" class="d-none d-lg-block img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="valores">
                        <div class="row">
                            <div class="col-12 col-lg-8 details order-2 order-lg-1">
                                <h3>Valores</h3>
                                <p class="fst-italic">
                                    <i id="ic" class="bx bx-chevron-right-circle"></i>&nbsp Agir com ética frente aos clientes e colaboradores.<br><br>
                                    <i id="ic" class="bx bx-chevron-right-circle"></i>&nbsp Tornar a qualidade de navegação a melhor possível.<br><br>
                                    <i id="ic" class="bx bx-chevron-right-circle"></i>&nbsp Priorizar a qualidade e excelência do atendimento, valorizando e qualificando a equipe.<br><br>
                                </p>
                            </div>
                            <div class="col-4 text-center order-1 order-lg-2">
                                <img src="assets/img/empresa/empresa3.jpg" alt="" class="d-none d-lg-block img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="visao">
                        <div class="row">
                            <div class="col-12 col-lg-8 details order-2 order-lg-1">
                                <h3>Visão</h3>
                                <p class="fst-italic">
                                    Se tornar referência no cenário tecnológico estadual, com excelência em todos nossos serviços prestados.
                                </p>
                            </div>
                            <div class="col-4 text-center order-1 order-lg-2">
                                <img src="assets/img/empresa/empresa1.jpg" alt="" class="d-none d-lg-block img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<?php include('includes/footer.php'); ?>