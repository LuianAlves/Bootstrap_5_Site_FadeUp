<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">Planos Econômicos</div>
  <a href="Planos.php" class="breadcrumb-perso-item">Planos</a>
  <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<section id="precos-index" class="precos-index">
  <div class="container">
    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">
      <h2>Preços</h2>
      <p>Nossos Preços</p>
    </div>
    <div class="row justify-content-center mt-5" data-aos="fade-down">
      <!-- Preços Economico -->
      <div class="col-lg-4 col-11">
        <div class="box" data-toggle="modal" data-target="#modalEconomico" data-aos="zoom-in" data-aos-delay="100">
          <h3>Econômico</h3>
          <h4><sup>R$</sup>42,80<span>/ mês</span></h4>
          <ul>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
            <li>Melhores Preços</li>
            <li class="na">Planos acima de 100 Megas</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Modal Planos -->
<?php include('includes/modal_planos.php'); ?>

<!-- Include Footer -->
<?php include('includes/footer.php'); ?>