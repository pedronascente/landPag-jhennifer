<?= $this->load->view("layout/nav"); ?>
<div  id="banner-fale-conosco" class="row">
    <div class="col-md-12">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12"><h1 class="title-banner">FALE CONOSCO</h1></div>
            </div>
        </div>
    </div>
</div>
<div  class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="_font_title  visible-md visible-lg" title="Seja bem-vindo a VOLPATO">   A Volpato tem o prazer em falar com você e tirar todas as suas dúvidas. </h2>
            <article class="_border-bottom" style="padding-bottom: 50px">
                <img src="<?= base_url('assets/img/fale-conosco.png'); ?>" style="max-width: 100%; text-align: center"  alt="imagem da central de monitomenro" title="base Volpato" >
            </article>
            <article class="">
                <h3>Horário de Atendimento:</h3>
                <p class="_font_paragrafo"><strong><i class="fa fa-mail-forward" aria-hidden="true"></i>  Seg. a Sex. -</strong> 08:00 às 20:00 | Sábado - 09:00 às 14:00</p>
                <p class="_font_paragrafo"><strong><i class="fa fa-envelope" aria-hidden="true"></i> Email:</strong> volpato@grupovolpato.com</p>
                <p class="_font_paragrafo"><strong><i class="fa fa-phone" aria-hidden="true"></i> Telefone:</strong> 3003-4003</p>
            </article>
            <article class="">
                <h3>Nossas Localizações:</h3><br>
                <div >
                    <ul>
                        <li>Rua Pereira Franco, 188 - São João, Porto Alegre - RS, 90240</li>
                        <li>Av. Amazonas, Nº 205 São Geraldo - Porto Alegre/RS</li>
                        <li>Av. Dorival Cândido Luz de Oliveira, 6963 - Parque Florido, Gravataí - RS, 94070</li>
                        <li>Rua: Dr Alexandre Gutierres, 80, Agua Verde – Curitiba - PR</li>
                        <li>R. Fernando Ferrari, 1231 - Centro, Esteio - RS, 93260-030</li>
                        <li>Av. Nestor de Moura Jardim, Nº 1725 - Nossa Sra. de Fatima, Guaíba - RS, 92500-000</li>
                    </ul>
                </div>
            </article>
        </div>   
        <div class=" col-md-6">
            <div class="panel panel-default" style="margin-top: 50px"> 
                
                <div class="panel-body"> 
                    <?= $this->load->view("formulario/form_contato"); ?>  
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="row _margin-bottom-70"> <div class="col-md-12"></div></div>
<?= $this->load->view("footer"); ?>