<section id="formulario-lateral" >
    <i id="formularioClose" class="fa fa-times"></i>
    <h1>Vamos fazer negócio?</h1>
    <h2>Entre em contato conosco e torne-se nosso cliente.</h2>
    <form id="formContato2" action="<?=  base_url("save");?>" method="POST">
        <input type="hidden" name="origem" value="form_lateral_site_novo">
        <div class="row">
            <div>
                <div class="field-wrapper">
                    <input type="text" tabindex="4" name="captacao_cliente" class="form-fname form-element large color-white" placeholder="Nome Completo" required>
                    <span class="border"></span>
                </div>
            </div>
            <div>
                <div class="field-wrapper">
                    <input type="email" tabindex="5" name="captacao_email" class="form-lname form-element large color-white" placeholder="Email" >
                    <span class="border"></span>
                </div>
            </div>
            <div>
                <div class="field-wrapper">
                    <input type="text" tabindex="6" name="captacao_telefone1" class="form-website form-element large color-white form-phone" data-mask-type="telefone" placeholder="Telefone" style="" required>
                    <span class="border"></span>
                </div>
            </div>
        </div>
        <input type="submit" value="Enviar" id="send-message2" class="form-submit button rounded border-hover-teste font-montserrat">
    </form>
    <div class="form-response hidden alert" style="margin-top:20px;"></div>
</section>
