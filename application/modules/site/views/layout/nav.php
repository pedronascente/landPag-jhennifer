    <div id="logo-volpato-telefones" class="hidden-xs hidden-sm">
           <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a id="logo-volpato" href="<?= base_url('site'); ?>" title="VOLPATO Em todo Brasil prote&ccedil;&atilde;o " style="float: left"></a>
                </div>
                <div class="col-md-4 text-right  ">
                   <p style="color:#c9c9c9;margin:o; margin-top: 10px "> Em caso de roubo, ligue:<br><b style="font-size:30px">0800 646 5551</b></p>
                </div>
                <div class="col-md-2 text-right  ">
                    <p style="margin:o; margin-top: 10px "> Cote agora pelo telefone:<br><b style="font-size:30px">3004-5554</b></p>
                </div>
            </div>
        </div>
    </div>
    <!--MENU DESKTOP-->
    <div id="menu-superior" class="hidden-xs hidden-sm text-right">
        <div class="container">
            <ul style="float: right;margin-bottom: 0">
                <li><a  href="<?= base_url('site'); ?>" title="Página Principal"><strong>HOME</strong></a></li>
                 <li class="separador"></li>
                <li><a  href="<?= base_url('conheca-a-volpato'); ?>" title="conhe&ccedil;a a VOLPATO"><strong>EMPRESA</strong></a></li>
                <li class="separador"></li>
                <li><a href="<?= base_url('blog/2'); ?>" title="Ultimas do Blog "><strong>BLOG</strong></a></li>
            </ul>
        </div>
    </div>
    <!--MENU MOBILE-->
    <section id="header-mobile" class="visible-xs visible-sm">
        <div class="linha-2 z-depth-5 container-fluid bg-white ">
            <div class="tabela">
                <div class="col-xs-9 pl-0">	
                    <a href="<?= base_url('site') ?>">
                        <img class="img-responsive py-2" width="180px" srcset="<?= base_url('assets/img/logo-volpato.jpg') ?>" alt="CargoPress" src="<?= base_url('assets/img/logo-volpato.jpg') ?>">
                    </a>
                </div>
                <div class="col-xs-3 pr-0 pull-right">
                    <button data-target="#menu-xs" data-toggle="collapse" class="navbar-toggle collapsed" type="button" aria-expanded="false">
                        <span class="navbar-toggle__icon-bar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </span>
                    </button>
                </div>
            </div>			
        </div>
        <nav class="hidden-md nav-mobile collapse" id="menu-xs" aria-expanded="false" style="height: 0px;">					
            <ul class="nav">
                <li class="list-item"><a href="<?=base_url('site');?>"  title="Página Principal">HOME</a></li>
                <li class="list-item"><a href="<?=base_url('conheca-a-volpato'); ?>" title="conhe&ccedil;a a VOLPATO"><strong>EMPRESA</strong></a></li>
               <li class="list-item"><a href="<?=base_url('blog/2'); ?>" title="Ultimas do Blog">BLOG</a></li>
            </ul>					
        </nav>
    </section>