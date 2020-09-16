<?php
$_rota ='sem-permissao'; 
$_rota_explode = null;
$paginas_sem_permissao = [
    'site',
    'leia-mais',
    'duvidas-frequentes',
    'sem-permissao',
    'obrigado-1',
    'conheca-a-volpato',
    'fale-conosco',
];
$path_info = isset($_SERVER['PATH_INFO'])? $_SERVER['PATH_INFO']:null;
if($path_info!=null){
     $_rota_explode = explode('/', $path_info);
     $_rota = $_rota_explode[1];
}  

if(!in_array($_rota, $paginas_sem_permissao)){ 
?>
<div class="container-fluid be-a-client hidden-xs hidden-sm">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-7">
                <p class="be-a-client-text aos-init aos-animate" data-aos="fade-down">Seja um cliente VOLPATO </p>
            </div>
            <div class="col-md-5 text-center">
                <a href="javascript:void(0)" class="btn-white aos-init aos-animate"  data-toggle="modal" data-target="#myModal">Solicite um orçamento</a>
            </div>
        </div>
    </div>
</div>
<?php } 

if(isset($_SERVER['PATH_INFO'])&& $_SERVER['PATH_INFO']!="/obrigado-1"){  ?>
<div class="container-fluid be-a-client visible-sm visible-xs">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="javascript:void(0)" class="btn-white aos-init aos-animate"  data-toggle="modal" data-target="#myModal">Solicite um orçamento</a>
            </div>
        </div>
    </div>
</div>

<?php   }?>
