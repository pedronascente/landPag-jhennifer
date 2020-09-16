<?= $this->load->view("layout/nav"); ?>
<div  id="banner-fale-conosco" class="row" >
    <div class="col-md-12">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12"><h1 class="title-banner">ATENÇÃO ERROR: </h1></div>
            </div>
        </div>
    </div>
</div>
<div  class="container">
    <div class="row">
        <div class="col-md-6">
            
            <h2 class="_font_title  visible-md visible-lg" title="Seja bem-vindo a VOLPATO">Seguem nossos canais de atendimento SAC e Suporte Técnico.</h2>
            
            
            <article class="">
                <h3>Horário de Atendimento:</h3>
                <p class="_font_paragrafo"><strong>Seg. a Sex. -</strong> 08:00 às 20:00 | Sábado - 09:00 às 14:00</p>
                <p class="_font_paragrafo"><strong>Email:</strong> volpato@grupovolpato.com</p>
                <p class="_font_paragrafo"><strong>Telefone:</strong> 3004-5554</p>
            </article>
        </div>   
        <div class="   col-md-6">
            <div class="panel panel-default" style="margin-top: 50px"> 
                <div class="panel-heading">
                    <h3 class="panel-title"><span style="font-size: 16px;  padding-top: 5px">A Volpato tem o prazer em falar com você e tirar todas as suas dúvidas .</span></h3> 
                </div> 
                <div class="panel-body"> 
                    <?=$this->load->view("formulario/form_contato"); ?>  
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="row _margin-bottom-70"> <div class="col-md-12"></div></div>
<?= $this->load->view("footer"); ?>