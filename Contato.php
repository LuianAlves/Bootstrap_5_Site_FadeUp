<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">Formulário de Contato</div>
  <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Formulário de Contato -->
<section id="forml" class="forml section-bg">
    <div class="container">
        <!-- Titulo -->
        <div class="index-titulo mb-4" data-aos="fade-left" data-aos-delay="100">
            <h2>Fale Conosco</h2>
            <p>Formulário de Contato</p>
        </div>
        <div class="row mt-5 justify-content-center">
            <!-- Informações -->
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
                <div class="informacoes">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 info">
                            <i class="bi bi-geo-alt mt-1"></i>
                            <h4>Localização</h4>
                            <p>Grajaú, Zona Sul - SP</p>
                        </div>
                        <div class="col-lg-3 col-md-6 info mt-lg-0 mt-md-0 mt-4">
                            <i class="bi bi-phone mt-1"></i>
                            <h4>Telefone</h4>
                            <p>(11) 9 5723-4497</p>
                        </div>
                        <div class="col-lg-4 info mt-lg-0 mt-4">
                            <i class="bi bi-envelope mt-1"></i>
                            <h4>E-mail</h4>
                            <p>suporte@luianalves.com.br</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Formulário -->
            <div class="col-lg-6 col-md-7 mt-4" data-aos="fade-up" data-aos-delay="300">
                <form action="zcontato.php" method="post" role="form" class="email-form">
                    <!-- Nome - Email -->
                    <div class="row">
                        <div class="col-6 form-gruop">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required />
                        </div>
                        <div class="col-6 form-gruop">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" />
                        </div>
                    </div>
                    <!-- Telefone - CEP -->
                    <div class="row">
                        <div class="col-6 form-gruop">
                            <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefone" required />
                        </div>
                        <div class="col-6 form-gruop">
                            <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP" />
                        </div>
                    </div>
                    <!-- Mensagem -->
                    <div class="row">
                        <div class="col-12">
                            <textarea class="form-control" name="message" rows="5" placeholder="Digite aqui sua Mensagem (Opcional)"></textarea>
                        </div>
                    </div>
                    <!-- Botão Enviar -->
                    <div class="text-center my-3"><button type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Include Footer -->
<?php include('includes/footer.php'); ?>