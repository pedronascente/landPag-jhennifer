<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><b>Solicitar orçamento</b>, Preencha o formulário abaixo que em breve um de nossos colaboradores entrará em contato.</h4>
            </div>
            <form action="<?= base_url("save"); ?>" name="" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input type="text"  name="captacao_cliente" class="form-control form-control_fale_conosco"  placeholder="Deixe seu Nome" required="">
                    </div>
                    <div class="form-group">
                        <label>Telefone:</label>
                        <input type="text"  name="captacao_telefone1"  data-mask-type="telefone" class="form-control form-control_fale_conosco"    maxlength="20" placeholder="Deixe Telefone"  required="">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="email"  name="captacao_email" class="form-control form-control_fale_conosco" placeholder="Deixe seu E-mail"  required="">
                    </div>
                    <div class="form-group">
                        <input type="hidden"  name="origem" value="<?= "http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS'] == "on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
                    </div>
                </div>
                <div class="modal-footer ">
                    <div class="form-group text-center">
                        <button type="submit" class="btn  btn-danger" style="padding: 12px 25px;  font-size: 16px  ; border-radius: 5px; ">
                            Fale Agora whatsApp
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>  
