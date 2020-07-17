<section class="two-section padd-height">
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="col-lg-offset-2 col-lg-8 col-sm-offset-1 col-sm-10">
                    <h2 class="text-center title-sections">Cadastro</h2>

                    <form action="./validate.php" method="POST" class="form-home">  
                        <div class="box-fields">
                            <label class="field">
                                <input type="text" name="nome" required>
                                <b>Nome</b>
                            </label>
                            
                        </div>

                        <div class="box-fields">
                            <label class="field">
                                <input type="text" name="email" required>  
                                <b>E-mail</b>
                            </label>
                        </div>

                        <div class="box-fields">
                            <label class="field">
                                <input type="text" name="nascimento" class="date" required> 
                                <b>Nascimento</b>
                            </label>
                        </div>


                        <div class="box-fields">
                            <label class="field">
                                <input type="text" id="tel" name="telefone" class="phone" required> 
                                <b>Telefone</b>
                            </label> 
                        </div>

                        <div class="box-btn">
                            <button type="submit" class="btn-first-type">Cadastrar</button>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</section>