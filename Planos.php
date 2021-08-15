<!-- Title -->
<title>Planos</title>

<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>


<!-- Identificação de Página -->

<div class="container breadcrumb-perso mb-4">
  <div class="breadcrumb-perso-item">Planos</div>
  <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Home</a>
</div>

<!-- Preços Index - Terceira Section -->
<section id="precos-index" class="precos-index">
  <div class="container">
    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">
      <h2>Preços</h2>
      <p>Nossos Preços</p>
    </div>
    <div class="row mt-5" data-aos="fade-down">
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
      <!-- Preços - Cabo -->
      <div class="col-lg-4 col-11">
        <div class="box cabo" data-toggle="modal" data-target="#modalCabo" data-aos="zoom-in" data-aos-delay="200">
          <h3>Cabo UTP</h3>
          <h4><sup>R$</sup>59,99<span>/ mês</span></h4>
          <ul>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
            <li class="na">Melhores Preços</li>
            <li class="na">Planos acima de 100 Megas</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>
      <!-- Preços - Fibra -->
      <div class="col-lg-4 col-11">
        <div class="box" data-toggle="modal" data-target="#modalFibra" data-aos="zoom-in" data-aos="400">
          <span class="fibra">Avançado</span>
          <h3>Fibra Ótica</h3>
          <h4><sup>R$</sup>69,99<span>/ mês</span></h4>
          <ul>
            <li>Qualidade de Navegação</li>
            <li>Rapidez no Suporte Técnico</li>
            <li>Melhores Preços</li>
            <li>Planos acima de 100 Megas</li>
          </ul>
          <div class="btn-precos">
            <a href="#" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-chevrons-right"></i><span>Visualize</span></a>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- Modal -->
<?php include('includes/modal_planos.php'); ?>

<!-- Footer -->
<?php include('includes/footer.php'); ?>