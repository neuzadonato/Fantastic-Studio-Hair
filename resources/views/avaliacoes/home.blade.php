<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Cadastro</h2>


                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="ticket-form-name" id="ticket-form-name"
                                    class="form-control" placeholder="Nome Fantasia" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="email" name="ticket-form-email" id="ticket-form-email"
                                    pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email"
                                    required>
                            </div>
                        </div>

                            <div class="col-lg-15 col-md-15 col-12">
                                <input type="text" name="ticket-form-name" id="ticket-form-name"
                                    class="form-control" placeholder="Telefone" required>
                            </div>

                        <h6>Selecione uma opção:</h6>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Salão Feminino
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-check-radio form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Salão Masculino
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-check-radio form-control">
                                    <input class="form-check-input" type="radio" name="TicketForm"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Salão Unisex
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12"></div>
                        <input type="text" name="ticket-form-number" id="ticket-form-number"
                            class="form-control" placeholder="Razão Social" required>

                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="password" name="senha" id="senha"
                                   class="form-control" placeholder="Senha" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="password" name="" id="ConfirmarSenha"
                                    class="form-control" placeholder="Confirmar Senha" required>
                        </div>


                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" class="form-control">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
</main>