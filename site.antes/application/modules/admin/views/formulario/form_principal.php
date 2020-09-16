<div id="form" class="hidden-xs hidden-sm">
    <img class="cotacao-online" src="<?=base_url('assets/img/transparente.webp');?>" title="Fa&ccedil;a aqui sua cota&ccedil;&atilde;o Online VOLPATO" alt="Fa&ccedil;a aqui sua cota&ccedil;&atilde;o Online VOLPATO" />
    <form action="<?=base_url('save');?>"  method="post" id="formHome" class="formHome" name="formHome">
        <input type="text" class="campos obrigatorio" id="CadNome" name="CadNome" value="" placeholder="Nome" title="Nome" />
        <input type="text" class="campos email" id="CadEmail" name="CadEmail" value="" placeholder="Email" title="E-mail" />
        <input type="text" class="campos ddd obrigatorio" id="CadDddCel" name="CadDddCel" value="" placeholder="DDD" title="DDD" /><input type="text" class="campos celular obrigatorio" id="CadCel" name="CadCel" value="" placeholder="Celular" title="Celular" />
        <input value="ENVIAR" type="button" name="bt-enviar" id="bt-enviar" class="bt-enviar" title="ENVIAR" />
        <input value="ENVIAR" type="hidden" id="Submit" />
        <input type="hidden"  name="origem" value="form_princ_home_site_novo"/>
   </form>
</div>