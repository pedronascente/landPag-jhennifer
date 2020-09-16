<form action="<?= base_url("save-contato"); ?>" name="" method="POST">
    <div class="form-group">
        <label>Nome:</label>
        <input type="text"  name="nome" class="form-control form-control_fale_conosco"  placeholder="Deixe seu Nome" required="">
    </div>
    <div class="form-group">
        <label>Email:</label>
        <input type="email"  name="email" class="form-control form-control_fale_conosco" placeholder="Deixe seu E-mail"  required="">
    </div>
    <div class="form-group">
        <label>Telefone:</label>
        <input type="text"  name="telefone" class="form-control form-control_fale_conosco"    maxlength="20" placeholder="Deixe Telefone"  required="">
    </div>
    <div class="form-group">
        <label>Assunto: </label>
        <input type="text"  name="assunto" class="form-control form-control_fale_conosco" placeholder="Deixe seu Assunto" required="">
        <input type="hidden"  name="origem" value="<?="http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS']=="on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
    </div>
    <div class="form-group">
        <label>Mensagem:</label>
        <textarea  name="mensagem" class="form-control form-control_fale_conosco" cols="5" rows="5"  placeholder="Deixe sua Mensagem" required=""></textarea>
    </div>                
    <button type="submit" class="btn  btn-danger" style="padding: 12px ; width: 100%; font-size: 26px  ; border-radius: 20px ">ENVIAR</button>
</form>  