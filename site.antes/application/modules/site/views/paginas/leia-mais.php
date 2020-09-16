<?= $this->load->view("layout/nav"); ?>      
    <?= $this->load->view("formulario/form_principal_blog"); ?>        
    <div  id="banner-blog" class="row">
        <div class="col-md-12">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-banner">BLOG</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="leia-mais">
        <div class="row">
            <div class="col-md-7">
                <h1 class="_font_title_blog visible-lg visible-md"><?= $_noticia['_titulo']; ?><br><span style="font-size: 12px"><?= $_noticia['_data_publicacao']; ?> por <?= $_noticia['_autor']; ?></span></h1>
                <h1 class="_title_padding-top-10  visible-xs visible-md" style="padding-bottom:  10px"><?= $_noticia['_titulo']; ?><br><span style="font-size: 12px"><?= $_noticia['_data_publicacao']; ?> por <?= $_noticia['_autor']; ?></span></h1>
                <img src="<?= base_url('assets/img/blog/' . $_noticia['_imagem']); ?>"  title="<?= $_noticia['_titulo']; ?>" style="max-width: 100%"  >
                <?= $_noticia['_texto']; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=<?="http" . (isset($_SERVER['HTTPS']) ? (($_SERVER['HTTPS']=="on") ? "s" : "") : "") . "://" . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}"; ?>&layout=button_count&size=large&width=157&height=28&appId" width="157" height="28" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
            </div>      
        </div>   
    </div>
<div class="row _margin-bottom-70">  <div class="col-md-12"></div></div>
<?= $this->load->view("ultimas-do-blog", $_noticias); ?> 
<?= $this->load->view("footer"); ?>