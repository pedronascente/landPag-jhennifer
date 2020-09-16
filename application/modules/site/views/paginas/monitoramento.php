<?= $this->load->view("layout/nav_monitoramento"); ?>
<div  id="banner-fale-conosco" class="row">
    <div class="col-md-12">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12"><h1 class="title-banner">ORÇAMENTO ON-LINE</h1></div>
            </div>
        </div>
    </div>
</div>
<div  class="container">
    <div class="row">
        <div class=" col-md-12">
            <div class="panel panel-default" style="margin-top: 50px"> 
                <div class="panel-body text-center"> 
                     <?= $this->load->view("formulario/formulario_monitoramento"); ?>  
                </div> 
            </div>
        </div>
        
    </div>
</div>
<div class="row _margin-bottom-70"> <div class="col-md-12"></div></div>
<?= $this->load->view("footer_monitoramento"); ?>