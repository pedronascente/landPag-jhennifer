<form action="<?= base_url("save-contato"); ?>" name="" method="POST" >
    <div class="form-group">
        <input type="text"  name="nome" class="form-control form-control_fale_conosco text-center"  placeholder="Nome" required="">
    </div>
    <div class="form-group">
        <input type="email"  name="email" class="form-control form-control_fale_conosco text-center" placeholder="E-mail"  required="">
    </div>
    <div class="form-group">
        <input type="text"  name="telefone" class="form-control form-control_fale_conosco text-center"  data-mask-type="telefone"  maxlength="20" placeholder="Telefone"  required="">
    </div>
    <div class="form-group">
        <select name="assunto" class="form-control form-control text-center" placeholder="Selecione um Assunto" required="">
            <option value="">SELECIONE ASSUNTO</option>
            <option value="sac">SAC</option>
        </select>
        <input type="hidden"  name="origem" value="<?="http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS']=="on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
    </div>
    <div class="form-group">
        <textarea  name="mensagem" class="form-control form-control_fale_conosco text-center" cols="5" rows="5"  placeholder="Deixe sua Mensagem" required=""></textarea>
    </div>                
    <div class=" text-center">
        <button type="submit" class="btn  btn-lg btn-danger " style="width: 100%">ENVIAR CONTATO</button>
    </div>                
</form>  