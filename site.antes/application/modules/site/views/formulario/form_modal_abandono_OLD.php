<body class="vsc-initialized">
    <div id="modal-abandono">
        <img src="<?=base_url('assets/img/bg-modal-abandono-2.png');?>">
        <form action="<?=base_url('save');?>"  method="post" id="formAbandono" class="formAbandono" name="formAbandono">
            <input type="text" name="CadNome" class="campos obrigatorio" id="CadNome" value="" placeholder="Nome" title="Nome" required="">
            <input type="email" name="CadEmail" class="campos email" id="CadEmail" value="" placeholder="E-mail" title="E-mail" required="">
            <input type="text" name="CadDddCel"  class="campos ddd obrigatorio" id="CadDddCel" value="" maxlength="2" placeholder="DDD" title="DDD" required="">
            <input type="text" name="CadCel" class="campos celular obrigatorio" id="CadCel" value="" maxlength="10" placeholder="Celular" title="Celular" required="">
            <input type="hidden" name="origem"  value="form_abandono_site_novo" >
            <input  type="submit" name="bt-enviar-abandono" value="Desbloquear Desconto »"  class="btn btn-danger bnt-lg" style="padding: 15px 55px; font-size: 18px; margin-top: 10px">
        </form>
    </div>
</body>