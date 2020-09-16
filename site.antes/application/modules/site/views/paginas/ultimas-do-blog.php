<section   class="espaco" style="background: #eeedf3; padding-bottom: 90px">
    <div class="container">
        <div class="hgroup">
            <h2  class="_font_title"> Ultimas  do BLOG</h2>
        </div>
        <div id="testimonials2" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-auto-play="true" data-min450="1" data-min600="2" data-min768="3">
            <?php
                for ($i = 0; $i < count($_noticias); $i++) {
                $imagem = $_noticias[$i]["_imagem"];
                $titulo = $_noticias[$i]["_titulo"];
                $texto = $_noticias[$i]["_texto"];
                $id = $_noticias[$i]["_url"];
                $introducao = $_noticias[$i]["_paragrafo_introducao"];
                ?>
            <div>
                <div class="testimonial-content">
                    <a href="<?= base_url('leia-mais/'.$id) ?>">
                        <img src="<?=base_url("assets/img/blog/".$imagem); ?>"  title="<?=$titulo;?>" alt="<?=$imagem;?>" width="330" >
                    </a>    
                    <h3 class="_font_title_h3"><?=$titulo;?></h3>
                    <p class="_font_paragrafo"><?=$introducao;?> <br><a href="<?= base_url('leia-mais/'.$id) ?>" class="_font_title_h3"   title="Leia mais" >  Leia mais </a></p>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
</section>


