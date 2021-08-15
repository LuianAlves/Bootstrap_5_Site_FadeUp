<!--Tittle-->

<title>Página de Inicial</title>



<!-- Header -->

<?php include('includes/header.php'); ?>

<!-- Navbar -->

<?php include('includes/design.php'); ?>

<!-- Modal Planos -->

<?php include('includes/modal_via.php'); ?>





<!-- Identificação de Página -->

<div class="container breadcrumb-perso">

  <div class="breadcrumb-perso-item">/</div>

  <a href="#" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>

</div>



<!-- Carousel Index - Primeira Section -->

<section id="index-carousel">

  <div class="index-container">

    <div id="indexCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicador" id="index-carousel-indicador"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Primeiro slide -->

        <div class="carousel-item active" style="background-image: url(assets/img/carousel/slide01.jpg);">

          <div class="carousel-container" data-aos="fade-up" data-aos-delay="100">

            <div class="carousel-content">

              <h1 class="animate__animated animate__fadeInDown">Bem Vindo á <span>XXXXX</span>.</h1>

              <h2 class="animate__animated animate__fadeInUp">

                Há alguns anos na área tecnológica trazendo

                um novo conceito tanto em navegação casual quanto profissional.

              </h2>

              <div class="d-flex justify-content-center">

                <a href="Empresa.php" class="btn-empresa scrollto animate__animated animate__fadeInUp">Sobre Nós</a>

                <a href="Planos.php" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bx-chevron-right-square"></i><span>Nossos Planos</span></a>

              </div>

            </div>

          </div>

        </div>

        <!-- Segundo Slide -->

        <div class="carousel-item" style="background-image: url(assets/img/carousel/slide02.jpg);">

          <div class="carousel-container">

            <div class="carousel-content">

              <h1 class="animate_animated animate_fadeInDown">Teste sua <span>Velocidade</span></h1>

              <h2 class="animate_animated animate_fadeInUp">Veja sua velocidade de internet em tempo real com nosso medidor de velocidade</h2>

              <div class="d-flex justify-content-center">

                <a href="Teste.php" class="btn-planos scrollto animate__animated animate__fadeInUp"><i class="bx bxs-tachometer"></i><span>Medidor</span></a>

              </div>

            </div>

          </div>

        </div>

        <!-- Terceiro Slide -->



        <!-- Troca de Slides -->

        <button class="carousel-control-prev" type="button" data-bs-target="#indexCarousel" data-bs-slide="prev">

          <span class="carousel-control-prev-icon" aria-hidden="true"></span>

          <span class="visually-hidden">Previous</span>

        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#indexCarousel" data-bs-slide="next">

          <span class="carousel-control-next-icon" aria-hidden="true"></span>

          <span class="visually-hidden">Next</span>

        </button>

      </div>

    </div>

  </div>

</section>



<!-- Cards Index - Segunda Section -->

<section id="icon-index" class="icon-index">

  <div class="container">

    <div class="row">

      <!-- Primeiro card -->

      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#modalFibra" data-aos="fade-up" data-aos-delay="200">

        <div class="icon-index-box">

          <div class="icon"><i class="bx bx-cast"></i></div>

          <h4 class="titulo-icon-box"><a href="#">Fibra Ótica</a></h4>

          <p class="texto-box">Veja nossos melhores Planos acima de 100 Megas ...</p>

          <div class="icon-footer"><a href=".php"><i class="bx bx-chevron-right-circle"></i></a></div>

        </div>

      </div>

      <!-- Segundo Card -->

      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#modalVia" data-aos="fade-up" data-aos-delay="300">

        <div class="icon-index-box">

          <div class="icon"><i class="bx bx-dollar"></i></div>

          <h4 class="titulo-icon-box"><a href="#">Segunda Via</a></h4>

          <p class="texto-box">

            Tire Sua 2 Via pela Nossa Central do Assinante ...

          </p>

          <div class="icon-footer"><a href="#" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>

        </div>

      </div>

      <!-- Terceiro Card -->

      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-toggle="modal" data-target="#modalPersonalizado" data-aos="fade-up" data-aos-delay="400">

        <div class="icon-index-box">

          <div class="icon"><i class="bx bx-abacus"></i></div>

          <h4 class="titulo-icon-box"><a href="#">Personalize</a></h4>

          <p class="texto-box">

            Monte agora mesmo o Plano que mais lhe Agrade ...

          </p>

          <div class="icon-footer"><a href="#" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>

        </div>

      </div>

      <!-- Quarto Card -->

      <div class="col-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="500">

        <div class="icon-index-box">

          <div class="icon"><i class="bx bx-file"></i></div>

          <h4 class="titulo-icon-box"><a href="#forml">Cadastro</a></h4>

          <p class="texto-box">

            Faça seu Cadastro online e agilize sua instalação ...

          </p>

          <div class="icon-footer"><a href="#forml" class="d-flex"><i class="bx bx-chevron-right-circle"></i></a></div>

        </div>

      </div>

    </div>

  </div>

</section>



<!-- Preços Index - Terceira Section -->

<section id="precos-index" class="precos-index">

  <div class="container">

    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">

      <h2>Preços</h2>

      <p>Nossos Preços</p>

    </div>

    <div class="row mt-5" data-aos="fade-down">

      <!-- Preços Economico -->

      <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3">

        <div class="box" data-toggle="modal" data-target="#modalEconomico" data-aos="zoom-in" data-aos-delay="200">

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

      <div class="col-lg-4 col-md-6 col-12 mt-lg-0 mt-3">

        <div class="box cabo" data-toggle="modal" data-target="#modalCabo" data-aos="zoom-in" data-aos-delay="300">

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

      <div class="col-lg-4 col-md-6 col-12 align-items-center mt-lg-0 mt-3">

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

<!-- Modal Planos -->

<?php include('includes/modal_planos.php'); ?>



<!--- Teste de Velocidade - Quarta Section -->

<section id="teste" class="teste">

  <div class="container">

    <!-- Titulo Index -->

    <div class="index-titulo mb-5" data-aos="fade-left" data-aos-delay="100">

      <h2>Medidor</h2>

      <p class="mt-2">Faça o Teste</p>

    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-12 d-flex align-items-stretch" >

        <div class="frame" data-aos-delay="200">

          <iframe width="100%" height="650px" frameborder="0" src="https://jrnetcomunicacao.speedtestcustom.com"></iframe>

        </div>

      </div>

    </div>



  </div>

</section>



<!-- Formulário de Cadastro -->

<section id="forml" class="forml section-bg">

  <div class="container">

    <div class="index-titulo" data-aos="fade-left" data-aos-delay="100">

      <h2>Cadastre-se</h2>

      <p>Formulário de Cadastro</p>

    </div>

    <div class="row mt-5 justify-content-center">

      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">

        <!-- Informações -->

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

      <div class="row">

        <!-- Valores -->

        <div class="col-lg-6 col-md-5 mt-3" data-aos="fade-up" data-aos-delay="300">

          <div id="duvidas" class="duvidas">

            <div class="container">

              <div class="lista-duvidas">

                <ul>

                  <!-- Fibra Ótica -->

                  <li>

                    <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#planos-fibra">

                      Fibra Ótica<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                    <div id="planos-fibra" class="collapse" data-bs-parent=".lista-duvidas">

                      <p>

                      <table class="table table-sm table-bordered">

                        <thead class="thead-light">

                          <tr>

                            <th scope="col">Planos</th>

                            <th scope="col">Valores</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td class="font-weight-bold">20 Megas</td>

                            <td>R$ 69,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">40 Megas</td>

                            <td>R$ 79,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">60 Megas</td>

                            <td>R$ 99,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">80 Megas</td>

                            <td>R$ 109,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">100 Megas</td>

                            <td>R$ 119,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">130 Megas</td>

                            <td>R$ 139,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">160 Megas</td>

                            <td>R$ 169,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">180 Megas</td>

                            <td>R$ 179,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">200 Megas</td>

                            <td>R$ 199,99</td>

                          </tr>

                        </tbody>

                      </table>

                      </p>

                    </div>

                  </li>

                  <!-- Cabo UTP -->

                  <li>

                    <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#planos-cabo">

                      Cabo UTP<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                    <div id="planos-cabo" class="collapse" data-bs-parent=".lista-duvidas">

                      <p>

                      <table class="table table-sm table-bordered">

                        <thead class="thead-light">

                          <tr>

                            <th scope="col">Planos</th>

                            <th scope="col">Valores</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td class="font-weight-bold">10 Megas</td>

                            <td>R$ 59,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">15 Megas</td>

                            <td>R$ 69,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">20 Megas</td>

                            <td>R$ 79,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">25 Megas</td>

                            <td>R$ 89,99</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">30 Megas</td>

                            <td>R$ 99,99</td>

                          </tr>

                        </tbody>

                      </table>

                      </p>

                    </div>

                  </li>

                  <!-- Econômicos -->

                  <li>

                    <i class="bx bx-dollar icon-help"></i><a data-bs-toggle="collapse" class="collapse" data-bs-target="#planos-economicos">

                      Economicos<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>

                    <div id="planos-economicos" class="collapse" data-bs-parent=".lista-duvidas">

                      <p>

                      <table class="table table-sm table-bordered">

                        <thead class="thead-light">

                          <tr>

                            <th scope="col">Planos</th>

                            <th scope="col">Valores</th>

                          </tr>

                        </thead>

                        <tbody>

                          <tr>

                            <td class="font-weight-bold">5 Megas</td>

                            <td>R$ 42,80</td>

                          </tr>

                          <tr>

                            <td class="font-weight-bold">8 Megas</td>

                            <td>R$ 49,99</td>

                          </tr>

                        </tbody>

                      </table>

                      </p>

                    </div>

                  </li>

                </ul>

              </div>

            </div>

          </div>

        </div>

        <!-- Formulário -->

        <div class="col-lg-6 col-md-7 mt-3" data-aos="fade-up" data-aos-delay="500">

          <form action="zcadastro.php" method="post" role="form" class="email-form">

            <!-- Nome - Email -->

            <div class="row">

              <div class="col-6 form-gruop">

                <input type="text" class="form-control" name="name" id="name" placeholder="Nome" required />

              </div>

              <div class="col-6 form-gruop">

                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" />

              </div>

            </div>

            <!-- RG - CPF -->

            <div class="row">

              <div class="col-6 form-gruop">

                <input type="number" class="form-control" name="rg" id="rg" placeholder="RG" required />

              </div>

              <div class="col-6 form-gruop">

                <input type="number" class="form-control" name="cpf" id="cpf" placeholder="CPF" required />

              </div>

            </div>

            <!-- Telefone - CEP -->

            <div class="row">

              <div class="col-6 form-gruop">

                <input type="number" class="form-control" name="phone" id="phone" placeholder="Telefone" required />

              </div>

              <div class="col-6 form-gruop">

                <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Endereço/CEP" required />

              </div>

            </div>

            <!-- Planos -->

            <div class="row">

              <div class="col-6 form-gruop">

                <select class="form-select" name="plano" id="plano">

                  <option selected>Plano</option>

                  <option value="1">Fibra Ótica</option>

                  <option value="2">Cabo UTP</option>

                  <option value="3">Economicos</option>

                </select>

              </div>

              <div class="col-6 form-gruop">

                <input type="number" class="form-control" name="megas" id="megas" placeholder="Quantidade - Mbs" required />

              </div>

            </div>

            <!-- Mensagem -->

            <div class="row">

              <div class="col-12 form-group">

                <textarea class="form-control" name="message" rows="5" placeholder="Digite sua Mensagem (Opcional)"></textarea>

              </div>

            </div>

            <!-- Botão Enviar -->

            <div class="text-center my-3"><button type="submit">Enviar Cadastro</button></div>

          </form>

        </div>

      </div>

    </div>

</section>



<!-- Footer -->

<?php include('includes/footer.php'); ?>