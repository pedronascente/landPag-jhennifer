<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Vamos fazer negócio?</h4>
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
                    <button type="submit" class="btn  btn-danger" style="padding: 12px ; width: 100%; font-size: 26px  ; border-radius: 20px ">ENVIAR</button>
                </form>  
            </div>
            <div class="modal-footer text-center">
                <b>OU Ligue agora : </b><br>
                <a href="tel:3004-5554" style="font-size: 40px; font-weight: bold">3004-5554</a>
            </div>
        </div>
    </div>
</div>  