<body class="vsc-initialized">
    <div id="modal-abandono">
        <img src="<?=base_url('assets/img/bg-modal-abandono-2.png');?>">
        <form action="<?=base_url('save');?>"  method="post" id="formAbandono" class="formAbandono" name="formAbandono">
            <input type="text" name="captacao_cliente" class="campos obrigatorio" id="CadNome" value="" placeholder="Nome" title="Nome" required="">
            <input type="email" name="captacao_email" class="campos email" id="CadEmail" value="" placeholder="E-mail" title="E-mail" required="">
            <input type="text" name="captacao_ddd"  class="campos ddd obrigatorio" id="CadDddCel" value="" maxlength="2" placeholder="DDD" title="DDD" required="">
            <input type="text" name="captacao_telefone1" class="campos celular obrigatorio" id="CadCel" value="" maxlength="10" placeholder="Celular" title="Celular" required="">
            <input type="hidden"  name="origem" value="<?= "http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS'] == "on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
            <input  type="submit" name="bt-enviar-abandono" value="Desbloquear Desconto »"  class="btn btn-danger bnt-lg" style="padding: 15px 55px; font-size: 18px; margin-top: 10px">
        </form>
    </div>
</body>