<table border="0" cellpadding="0" cellspacing="0">
    <tbody>
        <tr>
            <td align="center" class="img-gatilho"><img src="<?= base_url('assets/img/tit-form-gatilho.png'); ?>"></td>
        </tr>
        <tr>
            <td class="result-gatilho">
                <form action="<?=base_url('save');?>"  method="post" id="formGatilho" class="formGatilho" name="formGatilho">
                   <input type="text" name="CadNome" class="campos obrigatorio" id="CadNome" value="" placeholder="Nome" title="Nome" required="">
                    <input type="email" name="CadEmail" class="campos email" id="CadEmail"  value="" placeholder="E-mail" title="E-mail" required="">
                    <input type="text" name="CadDddCel" class="campos ddd obrigatorio" id="CadDddCel" value="" maxlength="2" placeholder="DDD" title="DDD" required="">
                    <input type="text"   name="CadCel"  class="campos celular obrigatorio" id="CadCel" value="" maxlength="10" placeholder="Celular" title="Celular" required="">
                    <input type="submit" name="bt-enviar-gatilho" value="Gerar Desconto »"  class="btn btn-danger  btn-lg" title="Gerar Desconto »" style="padding: 15px 70px; margin-left: 90px">
                    <input type="hidden"  name="origem" value="form_oferta_relampago_home_site_novo"/>
                </form>
            </td>
        </tr>
    </tbody>
</table>