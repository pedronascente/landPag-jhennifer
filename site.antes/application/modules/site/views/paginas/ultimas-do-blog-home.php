<div class="container" id="ultimas-blog">
    <div class="row">
        <div class="col-xs-12   col-md-12  text-center">
            <h2 class="_font_title text-center">MAIS DE  60 MIL VEÍCULOS RECUPERADOS</h2>
        </div>
    </div><div class="row">
        <?php
        for ($i = 0; $i < count($_noticias); $i++) {
            $imagem = $_noticias[$i]["_imagem"];
            $titulo = $_noticias[$i]["_titulo"];
            $texto = $_noticias[$i]["_texto"];
            $id = $_noticias[$i]["_url"];
            $introducao = $_noticias[$i]["_paragrafo_introducao"];
            ?>
            <div class="col-xs-12  col-sm-4 col-md-4 col-lg-4">
                <blockquote>
                    <a href="<?= base_url("leia-mais/$id"); ?>" >
                        <img src="<?= base_url("assets/img/blog/$imagem"); ?>"  title="<?= $titulo ?>" alt="<?= $imagem ?>" width="100%" >
                    </a>    
                    <h3 class="_font_title_h3"><?= $titulo; ?></h3>
                    <p class="_font_paragrafo"><?= $introducao; ?></p>
                        <a href="<?= base_url("leia-mais/$id"); ?>" class="_font_title_h3"   title="Leia mais">  Leia mais </a>
                </blockquote>
            </div>
        <?php } ?>
    </div>
</div>