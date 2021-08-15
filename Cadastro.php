<!-- Include Header -->
<?php include('includes/header.php'); ?>
<!-- Include Navbar -->
<?php include('includes/design.php'); ?>

<!-- Identificação de Página -->
<div class="container breadcrumb-perso">
  <div class="breadcrumb-perso-item">Ficha de Cadastro</div>
  <a href="Planos.php" class="breadcrumb-perso-item">Planos</a>
  <a href="Index.php" class="breadcrumb-perso-item"><i class="bi bi-house-fill"></i>Início</a>
</div>

<!-- Formulário de Cadastro -->
<section id="forml" class="forml section-bg">
    <div class="container">
        <div class="titulo" data-aos="fade-left" data-aos-delay="100">
            <h2>Formulário de Cadastro</h2>
            <p></p>
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
                                    <li data-aos="fade-up">
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
                                    <li data-aos="fade-up" data-aos-delay="100">
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
                                    <li data-aos="fade-up" data-aos-delay="200">
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
                <div class="col-lg-6 col-md-7 mt-3" data-aos="fade-up" data-aos-delay="300">
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
                                    <option class="font-weight-bolder text-muted">--</option>
                                    <option class="">Fibra 20Mbs</option>
                                    <option class="">Fibra 40Mbs</option>
                                    <option class="">Fibra 60Mbs</option>
                                    <option class="">Fibra 80Mbs</option>
                                    <option class="">Fibra 100Mbs</option>
                                    <option class="">Fibra 130Mbs</option>
                                    <option class="">Fibra 160Mbs</option>
                                    <option class="">Fibra 180Mbs</option>
                                    <option class="">Fibra 200Mbs</option>
                                    <option class="font-weight-bolder text-muted">--</option>
                                    <option class="">Cabo 10Mbs</option>
                                    <option class="">Cabo 15Mbs</option>
                                    <option class="">Cabo 20Mbs</option>
                                    <option class="">Cabo 25Mbs</option>
                                    <option class="">Cabo 30Mbs</option>
                                    <option class="font-weight-bolder text-muted">--</option>
                                    <option class="">Econômico 5Mbs</option>
                                    <option class="">Econômico 8Mbs</option>
                                </select>
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


<!-- Include Footer -->
<?php include('includes/footer.php'); ?>