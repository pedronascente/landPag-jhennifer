<?= $this->load->view("layout/nav_monitoramento"); ?>
<div  id="banner-obrigado-for-principal" class="row">
    <div class="col-md-12">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12"><h1 class="title-banner">Orçamento registrado com SUCESSO!</h1></div>                
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>
    <div class="row">
        <div class="col-md-12">
            <i class="fa fa-check" style="font-size: 30px ; color: seagreen" ></i>
            <h2 class="_font_title_h3"  style="font-size: 26px">cique abaixo para solicitar novos Orçamentos</h2>
            <br>
            <a href="<?php  echo base_url('abrir.captacao');?>" class="btn btn-danger">Solicitar Orçamento</a>
        </div>
    </div>    
    <div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>
    <div class="row _margin-bottom-70">  <div class="col-md-12"></div></div>
</div>
<?= $this->load->view("footer_monitoramento"); ?>