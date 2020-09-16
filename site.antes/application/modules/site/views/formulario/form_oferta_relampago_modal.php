<div id="Evendo-oferta-relampago" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <img src="<?=  base_url('assets/img/tit-form-gatilho.png');?>" alt="Desbloqueie agora sua oferta Direta!" title="Desbloqueie agora sua oferta Direta!">
            </div>
            <div class="modal-body">
                <form action="<?= base_url("save"); ?>" name="" method="POST">
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
                    <button type="submit" class="btn  btn-danger" style="padding:10px 20px;text-align:center; margin: 10px 0 0 200px;">Gerar Desconto</button>
                </form>  
            </div>
        </div>
    </div>
</div>  