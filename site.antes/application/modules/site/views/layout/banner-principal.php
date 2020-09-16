<section class="banner texto-branco visible-md visible-lg" style="position: relative; background: #073361">
    <div  id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
        <?php
           for($i=1;$i<6;$i++){ ?>
                <div style=" background: url('assets/img/banners/desktop/<?=$i?>.png');background-position:center center;background-repeat:no-repeat;  background-size:cover; max-width:100%;  height:520px;" >
                    <div class="container p-0">
                        <div class="slider-content col-md-6 col-lg-6">
                             <div  class="   hidden-xs" style="display:table-cell; width:100px;">
                                <a class="prev"><i class="fa fa-angle-left"></i></a>
                                <a class="next"><i class="fa fa-angle-right"></i></a>
                             </div>
                        </div>
                    </div>
                </div>
        <?php }?>
    </div>
</section> 
<section class="visible-sm visible-xs responsivo text-center" style="position: relative;">
    <div   style="position: relative"  id="owl-main-slider" class="owl-carousel enable-owl-carousel" data-single-item="true" data-pagination="false" data-auto-play="true" data-main-slider="true" data-stop-on-hover="true">
        <div>
            <a href="javascript:void(0)" class=" btn  btn-danger btn__"  data-toggle="modal" data-target="#myModal">
               Fale Agora whatsApp
            </a>
            <img src="<?= base_url('assets/img/banners/mobie/3.png'); ?>" alt="" >
        </div>
        <div>
             <a href="javascript:void(0)" class="btn  btn-danger btn__"  data-toggle="modal" data-target="#myModal">
                  Fale Agora whatsApp
             </a>
             <img src="<?= base_url('assets/img/banners/mobie/2.png'); ?>" alt="" >
        </div>
        <div>
              <a href="javascript:void(0)" class="  btn btn-danger  btn__ "   data-toggle="modal" data-target="#myModal">
                 Fale Agora whatsApp
              </a>
              <img src="<?= base_url('assets/img/banners/mobie/1.png'); ?>" alt="imagem-rastreador-para-motorista-de-app" title="Rastreador para motorista de app">
        </div>
    </div>
</section> 

<style>
 .slider-content {    margin-top: 452px;    left: 550px;}
 .slider-content a.prev, .slider-content a.next {   opacity: 0.8;    display: block;  float: left; border: 2px solid;    padding: 7px 15px;   cursor: pointer;   margin-right: 5px; color: #FFF;}   
</style>