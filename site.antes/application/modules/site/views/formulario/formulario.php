<img class="cotacao-online" src="<?=base_url('assets/img/transparente.png');?>" title="Fa&ccedil;a aqui sua cota&ccedil;&atilde;o Online VOLPATO" alt="Fa&ccedil;a aqui sua cota&ccedil;&atilde;o Online VOLPATO" />
<form action="<?= base_url("save"); ?>" name="" method="POST">
    <div class="form-group">
        <input type="text"  name="captacao_cliente" class="form-control form-control_fale_conosco"  placeholder="Deixe seu Nome" required="">
    </div>
     <div class="form-group">
        <input type="text"  name="captacao_telefone1"  data-mask-type="telefone" class="form-control form-control_fale_conosco"    maxlength="20" placeholder="Deixe Telefone"  required="">
    </div>
    <div class="form-group">
        <input type="email"  name="captacao_email" class="form-control form-control_fale_conosco" placeholder="Deixe seu E-mail"  required="">
    </div>
    <div class="form-group">
        <input type="hidden"  name="origem" value="<?= "http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS'] == "on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
    </div>
    <button type="submit" class="btn  btn-danger" style=" width: 100%;  padding: 15px 0;  font-size: 16px  ;  font-weight: bold;  border-radius: 5px ">
        Fale Agora whatsApp
    </button>
</form>  