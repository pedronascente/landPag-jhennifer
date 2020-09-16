<table border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td align="center" class="img-gatilho"><img src="<?= base_url('assets/img/tit-form-gatilho.webp') ?>"></td>
        </tr>
        <tr>
            <td class="result-gatilho">
                <form action="<?=base_url('save');?>"  method="post" id="formGatilho" class="formGatilho" name="formGatilho">
                   <input type="text" name="captacao_cliente" class="campos obrigatorio" id="CadNome" value="" placeholder="Nome" title="Nome" required="">
                    <input type="email" name="captacao_email" class="campos email" id="CadEmail"  value="" placeholder="E-mail" title="E-mail" required="">
                    <input type="text" name="captacao_ddd" class="campos ddd obrigatorio" id="CadDddCel" value="" maxlength="2" placeholder="DDD" title="DDD" required="">
                    <input type="text"   name="captacao_telefone"  class="campos celular obrigatorio" id="CadCel" value="" maxlength="10" placeholder="Celular" title="Celular" required="">
                    <input type="submit" name="bt-enviar-gatilho" value="Gerar Desconto »"  class="btn btn-danger  btn-lg" title="Gerar Desconto »" style="padding: 15px 70px; margin-left: 90px">
                    <input type="hidden"  name="origem" value="<?= "http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS'] == "on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>" >
                </form>
            </td>
        </tr>
    </tbody>
</table>