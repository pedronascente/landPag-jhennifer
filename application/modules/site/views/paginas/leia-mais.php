<?= $this->load->view("layout/nav"); ?>      
<div  id="banner-blog" class="row">
    <div class="col-md-12">
        <h1 class="title-banner text-center">BLOG</h1>
    </div>
</div>
<!--desktop-->
<div class="visible-lg visible-md">
    <hr class="_margin-bottom-40 ">
    <div class="container" id="leia-mais">
        <div class="row ">
            <div class="col-md-4 ">
                <div class="row " >
                    <?= $this->load->view("formulario/form_principal_blog"); ?> 
                </div>

                <div class="row " style="margin-top: 480px">
                     <div class="col-md-12">
                            <h2 class="_font_title_h3 ">Redes Sociais</h2>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FVolpato.se%2F&tabs=timeline&width=325&height=240&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=904556509599711" width="325" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
                <hr class="_margin-bottom-40 ">
                <div class="row" >
                    <div class="col-xs-12 col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <h2 class="_font_title_h3 ">Ultimas Postagens</h2>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    for ($i = 0; $i < count($_noticias); $i++) {
                                    $imagem = $_noticias[$i]["_imagem"];
                                    $titulo = $_noticias[$i]["_titulo"];
                                    $texto = $_noticias[$i]["_texto"];
                                    $id = $_noticias[$i]["_url"];
                                    $introducao = $_noticias[$i]["_paragrafo_introducao"];
                                    $Regiao = $_noticias[$i]["_cidade"].' '.$_noticias[$i]["_uf"];
                                ?>      
                                <tr>
                                    <td>
                                        <a href="<?= base_url('leia-mais/'.$id) ?>">
                                            <img src="<?=base_url("assets/img/blog/".$imagem); ?>"  title="<?=$titulo;?>" alt="<?=$imagem;?>"  >
                                        </a>    
                                        <p>
                                            <?=$titulo;?><br>   
                                            <a href="<?= base_url('leia-mais/'.$id) ?>" class=""   title="Leia mais" style=""> 
                                                Leia mais 
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                                <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <img src="<?= base_url('assets/img/blog/' . $_noticia['_imagem']); ?>"  title="<?= $_noticia['_titulo']; ?>" style="max-width: 100%">
                <h1 class="_font_title _text-ce_justify"><?= $_noticia['_titulo']; ?></h1>
                <p><?= $_noticia['_data_publicacao']; ?> por <?= $_noticia['_autor']; ?></p>  
                <?= $_noticia['_texto']; ?>
            </div>
        </div>
    </div>
    <div class="row _margin-bottom-70">  <div class="col-md-12"></div></div>
</div>


<!--mobile-->      
<div class="visible-sm visible-xs">
    <div class="container" id="leia-mais">
        <div class="row ">
            <div class="col-md-4">
                <div class="row" >
                    <div class="col-sm-12" >
                        <img src="<?= base_url('assets/img/blog/' . $_noticia['_imagem']); ?>"  title="<?= $_noticia['_titulo']; ?>" style="max-width: 100%"  >
                        <h1 class="_font_title _text-ce_justify"><?= $_noticia['_titulo']; ?></h1>
                        <p><?= $_noticia['_data_publicacao']; ?> por <?= $_noticia['_autor']; ?></p>
                        <?= $_noticia['_texto']; ?>
                    </div>
                    <div class="col-sm-12 col-xs">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>
                                        <h2 class="_font_title_h3 ">Ultimas Postagens</h2>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php
                                    for ($i = 0; $i < count($_noticias); $i++) {
                                    $imagem = $_noticias[$i]["_imagem"];
                                    $titulo = $_noticias[$i]["_titulo"];
                                    $texto = $_noticias[$i]["_texto"];
                                    $id = $_noticias[$i]["_url"];
                                    $introducao = $_noticias[$i]["_paragrafo_introducao"];
                                    $Regiao = $_noticias[$i]["_cidade"].' '.$_noticias[$i]["_uf"];
                                    ?>      
                                <tr>
                                    <td>
                                        <a href="<?= base_url('leia-mais/'.$id) ?>">
                                            <img src="<?=base_url("assets/img/blog/".$imagem); ?>"  title="<?=$titulo;?>" alt="<?=$imagem;?>"  >
                                        </a>    
                                         <p>
                                            <?=$titulo;?><br>   
                                             <a href="<?= base_url('leia-mais/'.$id) ?>" class=""   title="Leia mais" style=""> 
                                                 Leia mais 
                                            </a>
                                        </p>
                                    </td>
                                </tr>
                            <?php  } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->load->view("footer-home"); ?>