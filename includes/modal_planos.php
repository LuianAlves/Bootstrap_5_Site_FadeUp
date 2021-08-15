<section id="mplanos" class="mplanos">
    <div class="container">

        <!-- Modal Plano Economico -->
        <div class="modal fade" id="modalEconomico" tabindex="-1" role="dialog" aria-labelledby="modalPlanosEconomico" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano" class="nav-link active" data-toggle="tab" role="tab">
                                    Planos Econômicos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
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
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">
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
                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
                                                        <option selected>Plano</option>
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Plano Cabo -->
        <div class="modal fade" id="modalCabo" tabindex="-1" role="dialog" aria-labelledby="modalPlanosCabo" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano1" class="nav-link active" data-toggle="tab" role="tab">
                                    Planos Cabo UTP
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano1" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano1" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
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
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano1" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">
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
                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
                                                        <option selected>Plano</option>
                                                        <option class="">Cabo 10Mbs</option>
                                                        <option class="">Cabo 15Mbs</option>
                                                        <option class="">Cabo 20Mbs</option>
                                                        <option class="">Cabo 25Mbs</option>
                                                        <option class="">Cabo 30Mbs</option>
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Plano Fibra -->
        <div class="modal fade" id="modalFibra" tabindex="-1" role="dialog" aria-labelledby="modalPlanosFibra" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano2" class="nav-link active" data-toggle="tab" role="tab">
                                    Planos Fibra Ótica
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contratarPlano2" class="nav-link" data-toggle="tab" role="tab">
                                    Contratar Agora
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano2" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
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
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contratar Plano -->
                            <div class="tab-pane fade" id="contratarPlano2" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="modal-body mb-1">
                                    <!-- Formulário -->
                                    <div class="col-12 mt-3">
                                        <form action="zcontratar.php" method="post" role="form" class="email-form">
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
                                            <!-- Planos -->
                                            <div class="row">
                                                <div class="col-6 form-gruop">
                                                    <select class="form-select" name="plano" id="plano">
                                                        <option selected>Plano</option>
                                                        <option class="">Fibra 20Mbs</option>
                                                        <option class="">Fibra 40Mbs</option>
                                                        <option class="">Fibra 60Mbs</option>
                                                        <option class="">Fibra 80Mbs</option>
                                                        <option class="">Fibra 100Mbs</option>
                                                        <option class="">Fibra 130Mbs</option>
                                                        <option class="">Fibra 160Mbs</option>
                                                        <option class="">Fibra 180Mbs</option>
                                                        <option class="">Fibra 200Mbs</option>
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
                                            <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Footer do Modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Personalizado -->
        <div class="modal fade" id="modalPersonalizado" tabindex="-1" role="dialog" aria-labelledby="modalPlanosPersonalizado" aria-hidden="true">
            <div class="modal-dialog cascading-modal" role="document">
                <div class="modal-content">
                    <!-- Menu do Modal -->
                    <div class="modal-c-tabs">
                        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                            <li class="nav-item">
                                <a href="#precosPlano3" class="nav-link active" data-toggle="tab" role="tab">
                                    Faça seu Plano
                                </a>
                            </li>
                        </ul>
                        <!-- Aba do Modal -->
                        <div class="tab-content">
                            <!-- Preços do Plano -->
                            <div class="tab-pane fade in show active" id="precosPlano3" role="tabpanel">
                                <!-- Body do Modal -->
                                <div class="col-11 mt-4" style="margin-left: 20px;">
                                    <form action="zpersonalizado.php" method="post" role="form" class="email-form">
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
                                        <!-- Planos -->
                                        <div class="row">
                                            <div class="col-6 form-gruop">
                                                <select class="form-select" name="download" id="download">
                                                    <option selected>Download</option>
                                                    <option class="">10 Megas</option>
                                                    <option class="">20 Megas</option>
                                                    <option class="">30 Megas</option>
                                                    <option class="">40 Megas</option>
                                                    <option class="">50 Megas</option>
                                                    <option class="">60 Megas</option>
                                                    <option class="">80 Megas</option>
                                                    <option class="">100 Megas</option>
                                                    <option class="">130 Megas</option>
                                                    <option class="">160 Megas</option>
                                                    <option class="">180 Megas</option>
                                                    <option class="">200 Megas</option>
                                                </select>
                                            </div>
                                            <div class="col-6 form-gruop">
                                                <select class="form-select" name="upload" id="upload">
                                                    <option selected>Upload</option>
                                                    <option class="">10 Megas</option>
                                                    <option class="">20 Megas</option>
                                                    <option class="">30 Megas</option>
                                                    <option class="">40 Megas</option>
                                                    <option class="">50 Megas</option>
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
                                        <div class="text-center my-3"><button type="submit">Enviar</button></div>
                                    </form>
                                </div>
                                <!-- Footer do modal -->
                                <div class="modal-footer">
                                    <div class="options text-center text-center mt-1">
                                        <p> Não está conseguindo?
                                            <a href="Contato.php" class="blue-text">Entre em Contato</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>