<?= $this->load->view("layout/nav"); ?>      
<div class="container-fluid _bg-azul" >     
    <div class="container">
        <div   class="row">
            <div class="col-md-12 col-xs-12 text-right">
                <a href="<?=base_url()?>" class=" _color_branco " style="padding: 15px 0;">
                    Home  /  Blog
                </a>                 
            </div>
        </div>
    </div>
</div>

<!--desktop-->

<div class="visible-lg visible-md "  >
    <div class="container content" id="leia-mais">
        <hr class="_margin-top-50">
        <div class="row ">
            <div class="col-md-9">
                <h2 class=" _text-ce_justify"><b><?=$_noticia['_titulo']; ?></b></h1>
                <p><?= $_noticia['_data_publicacao']; ?> por <?= $_noticia['_autor']; ?></p> 
                <img src="<?= base_url('assets/img/blog/' . $_noticia['_imagem']); ?>"  title="<?= $_noticia['_titulo']; ?>" style="width: 100%">
                <?= $_noticia['_texto']; ?>
            </div>
            <div class="col-md-3">
                <div class="row "style="margin-top: 30px" >
                    <?= $this->load->view("formulario/form_principal_blog"); ?> 
                </div>
                <div class="row">                   
                     <div class="col-md-12 _widgeds_blog" >
                            <h2 class="_font_title_h3 ">Rede Social</h2>
                            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FVolpato.se%2F&tabs=timeline&width=325&height=240&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=904556509599711" width="100%" height="240" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                     </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 _widgeds_blog">
                        <h2 class="_font_title_h3">Ultimas Noticias</h2>
                        <?php
                            for ($i = 0; $i < count($_noticias); $i++) {
                            $imagem = $_noticias[$i]["_imagem"];
                            $titulo = $_noticias[$i]["_titulo"];
                            $texto = $_noticias[$i]["_texto"];
                            $id = $_noticias[$i]["_url"];
                            $introducao = $_noticias[$i]["_paragrafo_introducao"];
                            $Regiao = $_noticias[$i]["_cidade"].' '.$_noticias[$i]["_uf"];
                            ?>      
                                <div class="row" >
                                    <a href="<?= base_url('blog/'.$id) ?>"   title="<?=$titulo;?>" alt="<?=$imagem;?>" style="cursor:pointer;" >
                                        <div class="col-md-3" > <img src="<?=base_url("assets/img/blog/".$imagem); ?>" ></div>
                                        <div class="col-md-9" style="padding: 0;margin: 0; margin-top: 10px; color: #757373"><?=$titulo;?></div>
                                    </a>
                                </div>
                        <?php  } ?>
                    </div>
                </div>               
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
                                        <h2 class="_font_title_h3 ">Rescentes</h2>
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
                                        <a href="<?= base_url('blog/'.$id) ?>"  title="<?=$titulo;?>" alt="<?=$imagem;?>" style="cursor:pointer;" >
                                            <img src="<?=base_url("assets/img/blog/".$imagem); ?>"  "  >
                                            <p> <b><?=$titulo;?></b></p>
                                        </a>  
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/Social-Share-Bar/dist/jquery.floating-social-share.min.css');?>" />
<script type="text/javascript" src="https://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/Social-Share-Bar/dist/jquery.floating-social-share.min.js');?>"></script>
<script>
/*
 $("body").floatingSocialShare({
    buttons: [
      "facebook", "twitter",  "whatsapp"
    ],
    text: "share with: ",
    url: "https://www.facebook.com/Volpato.se/"
  });
*/
</script>
<?php  echo $this->load->view("footer-home"); ?>
