<?= $this->load->view('layout/nav'); ?>
<div class="row">
    <div class="col-md-12">
        <img src="<?= base_url("assets/img/demo.png") ?>">
    </div>
</div> 
<div id="home">
<div id="produtos">
    <div class="container">
        <h1>Rastreador para Carros - VOLPATO</h1>
        <p>Na CARSYSTEM você encontra os melhores <strong>rastreadores para carros</strong><br> 
            do Brasil. <strong>O rastreador para carros VOLPATO</strong> funciona em todos<br>
            as marcas, anos e modelos de veículos.</p>
        <p>Além do <strong>rastreador para carros</strong>, você pode estender sua<br>
            proteção com o CARSYSTEM PLUS, que paga até<br>
            R$40 mil por seu carro, em caso de roubo sem<br>
            recuperação.</p>
        <p>PARA SABER O PREÇO DO RASTREADOR PARA<br>CARROS DA CARSYSTEM, PREENCHA AO LADO.</p>
        <img class="carros" src="<?= base_url('assets/img/transparente.png'); ?>" height="262" width="600" title="A CARSYSTEM possui os mais eficientes rastreadores para carros do mercado." alt="A CARSYSTEM possui os mais eficientes rastreadores para carros do mercado.">
        <ul class="carros">
            <li>
                <img src="<?= base_url('assets/img/transparente.png'); ?>" height="78" width="75" title="Funciona em todo o BRASIL" alt="Funciona em todo o BRASIL">
                <p>Funciona<br>em todo o<br><b>BRASIL</b></p>
            </li>
            <li>
                <img src="<?= base_url('assets/img/transparente.png'); ?>" height="78" width="75" title="Central de atendimento 24 HORAS" alt="Central de atendimento 24 HORAS">
                <p>Central de<br>atendimento<br><b>24 HORAS</b></p>
            </li>
            <li>
                <img src="<?= base_url('assets/img/transparente.png'); ?>" height="78" width="75" title="Para todos anos, marcas e MODELOS" alt="Para todos anos, marcas e MODELOS">
                <p>Para todos<br>anos, marcas e<br><b>MODELOS</b></p>
            </li>
            <li>
                <img src="<?= base_url('assets/img/transparente.png'); ?>" height="78" width="75" title="Rastreie seu carro pelo CELULAR" alt="Rastreie seu carro pelo CELULAR">
                <p>Rastreie seu<br>carro pelo<br><b>CELULAR</b></p>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
</div>
<?php  echo  $this->load->view("formulario/form_principal"); ?>
<?php  echo  $this->load->view("numeros_estimativa"); ?>
<?php  echo  $this->load->view("certificacoes"); ?>
<?php  echo  $this->load->view('footer'); ?>