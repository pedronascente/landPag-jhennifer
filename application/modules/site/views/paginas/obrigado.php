<?= $this->load->view("layout/nav"); ?>
<div class="container-fluid _bg-azul" >     
    <div class="container">
        <div   class="row">
            <div class="col-md-12 col-xs-12 text-right">
                <a href="<?=base_url('site')?>" class=" _color_branco " style="padding: 15px 0;">
                    Home  /  Registrado com Sucesso!
                </a> 
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>
    <div class="row _margin-bottom-40">
        <div class="col-md-12  col-xs-12 ">
        
            <h2 class="_font_title_h3 "  style="font-size: 30px"> Recebemos seu contato com Sucesso!</h2>
            
            <p class="" style="font-size: 20px" >Entraremos em contato via telefone em até 24H.</p>
        </div>
    </div>    
    <div class="row _margin-bottom-70">
        <div class="col-md-2  col-xs-12" ></div>
        <div class="col-md-8  col-xs-12">
             <div class="embed-responsive embed-responsive-16by9  ">
                <iframe width="555"  height="412" src="https://www.youtube.com/embed/jujBT8TjICQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-2  col-xs-12"></div>
    </div>
    <div class="row">
        
        <div class="col-md-12">
            
<div class="fb-share-button" data-href="https://www.volpatorastreamento.com.br/" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.volpatorastreamento.com.br%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartilhar</a></div>
        </div>



    </div>

</div>


<!--
<section   class="espaco _margin-top-70" >
    <div class="container">
        <div class="row" >
            <div class="col-md-1  col-xs-12" ></div>
                <div class="col-md-10  col-xs-12">
                        <p class="text-center"  style="font-size: 20px; padding-bottom: 30px" >                
                            Conheça abaixo nosso time comercial, eles estão anciosos para falar com você para te ajudar a escoler a melhor forma de proteção para você e sua familia.
                            Por isso fique atento ao seu e-mail e telefone que eles são rápidos.
                        </p>
                        <br>
                </div>
            <div class="col-md-1  col-xs-12" > </div>
        </div>       
        <div id=""  class="row">
              <div class="col-md-12 col-xs-12">
                  <div class="owl-carousel owl-theme " >
                      

                    <?PHP   for($i = 1; $i<=10;$i++){ ?>

                        <div class="item text-center">
                            <div class="card " >
                                <div class="img">
                                     <img src="<?=base_url("assets/img/comercial/".$i.".jpg"); ?>"  title="" alt="" width="" style="width: 200px">
                               </div>
                            </div>
                       </div>


                    <?PHP } ?>

                      

                  </div>
              </div> 
          </div>
    </div>
</section>
-->


<hr class="_margin-bottom-70">    
<?= $this->load->view("footer-home"); ?>