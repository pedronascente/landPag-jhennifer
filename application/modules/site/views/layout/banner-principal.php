<div class="container-fluid visible-md visible-lg" style="background: #073361">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php  
          $array_bassner = [
              1=>'Rastreador vicular com Proteção + ASSISTÊNCIA 24h.',
              2=>'Rastreador para CARROS.',
              3=>'LOCALIZE SUA MOTO ONDE ESTIVER.',
            ];
          for ($i=1; $i <=3 ; $i++) {    ?>
             <div class="item <?php  if($i==1){   echo 'active'; }?>">
              <img src="<?= base_url('assets/img/banners/desktop/'.$i.'.jpg'); ?>" 
                title="<?=$array_bassner[$i]?><?=$i?>" 
                alt="<?=$array_bassner[$i]?>" 
                style="max-width:100%;height: auto; background-position: center; ;">
            </div>
        <?php   } ?>  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!--mobie-->


<div class="container-fluid visible-sm visible-xs responsivo text-center" style="background: #073361">
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel1" data-slide-to="1"></li>
      <li data-target="#myCarousel1" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <?php  
          $array_bassner = [
              1=>'PORTARIA VIRTUAL : Reduz mais de 50% dos custos em portaria , e garante muito mais segurança. ',
              2=>'Tranquilidade , conforto e mais segurança para sua Familia.',
              3=>'VOLPATO SEGURANÇA : Lider em gestão de qualidade , Estrutura e Técnologia de ponta, Credibilidade a mais de 20 anos no mercado.',
            ];
          for ($i=1; $i <=3 ; $i++) {    ?>
             <div class="item <?php  if($i==1){   echo 'active'; }?>">
              <img src="<?= base_url('assets/img/banners/mobie/'.$i.'.jpg'); ?>" 
                title="<?=$array_bassner[$i]?><?=$i?>" 
                alt="<?=$array_bassner[$i]?>" 
                style="min-width:100%;height: auto; background-position: center; ;">
            </div>
        <?php   } ?>  
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
 <hr class="_margin-bottom-40 ">