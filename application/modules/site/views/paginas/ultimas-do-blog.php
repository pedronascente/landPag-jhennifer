<section   class="espaco" >
    <div class="container">
        <hr class="_margin-bottom-40">
        <div class="row">
            <div class="col-md-12">
                <h2 class="_h22  text-center scrollrevealtitle">ULTIMAS DO BLOG</h2>
            </div>
        </div>
        <div id="" class="row">
            <?php
                for ($i = 0; $i < count($_noticias); $i++) {
                $imagem = $_noticias[$i]["_imagem"];
                $titulo = $_noticias[$i]["_titulo"];
                $texto = $_noticias[$i]["_texto"];
                $id = $_noticias[$i]["_url"];
                $introducao = $_noticias[$i]["_paragrafo_introducao"];
                $Regiao = $_noticias[$i]["_cidade"].' '.$_noticias[$i]["_uf"];
                ?>
            <div class="col-md-4 col-xs-12">
                <div class="card scrollrevealright" >
                     <br>
                      <div class="img">
                         <img src="<?=base_url("assets/img/blog/".$imagem); ?>"  title="<?=$titulo;?>" alt="<?=$imagem;?>" width="100%" >
                      </div>
                      <div class="card-block">
                            <h4 class="card-title"><b><?=$titulo;?></b></h4>
                            <p class="card-text _font_paragrafo"><?=mb_strimwidth($introducao, 0, 100, "...");?></p>
                            <a href="<?= base_url('blog/'.$id) ?>" class="btn btn-primary" style="padding: 10px ; width: 100%">[+] Ler mais</a>
                      </div>
                </div>
           </div>
            <?php  } ?>
        </div>
         <hr class="_margin-bottom-100">
    </div>
</section>