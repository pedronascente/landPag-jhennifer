<div id="body-home">
    <div id="logo-volpato-telefones" class="hidden-xs hidden-sm">
        <div class="container">
            <a id="logo-volpato" href="<?= base_url('site'); ?>" title="VOLPATO Em todo Brasil prote&ccedil;&atilde;o " style="float: left"></a>
            <ul>
                <li>Em caso de roubo, ligue:<h3 style="margin: 0">0800 646 5551</h3></li>
                <li>Cote agora pelo telefone:<h3  style="margin: 0; font-weight: bold">3004-5554</h3></li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <!--MENU DESKTOP-->
    <div id="menu-superior" class="hidden-xs hidden-sm">
        <div class="container">
            <ul>
                <li><a  href="<?= base_url('conheca-a-volpato'); ?>" title="A VOLPATO"><strong> A VOLPATO</strong></a></li>
                <li class="separador"></li>
                <li><a href="<?= base_url('leia-mais/2'); ?>" title="BLOG"><strong>BLOG</strong></a></li>
                <li class="separador"></li>
                <li><a href="<?= base_url('duvidas-frequentes'); ?>" title="FQA"><strong>FAQ</strong></a></li>
                <li class="separador"></li>
                <li><a href="<?= base_url('fale-conosco'); ?>" title="CONTATO"><strong>FALE CONOSCO</strong></a></li>
            </ul>
        </div>
    </div>
    <!--MENU MOBILE-->
    <section id="header-mobile" class="visible-xs visible-sm">
        <div class="linha-2 z-depth-5 container-fluid bg-white ">
            <div class="tabela">
                <div class="col-xs-9 pl-0">	
                    <a href="<?= base_url('site') ?>">
                        <img class="img-responsive py-2" width="180px" srcset="<?= base_url('assets/img/logo-volpato.png') ?>" alt="CargoPress" src="<?= base_url('assets/img/logo-volpato.png') ?>">
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
                <li class="list-item"><a href="<?= base_url('site'); ?>">HOME</a></li>
                <li class="list-item"><a href="<?= base_url('conheca-a-volpato'); ?>">CONHEÇA A VOLPATO</a></li>
                <li class="list-item"><a href="<?= base_url('leia-mais/2'); ?>">BLOG</a></li>
                <li class="list-item"><a href="<?= base_url("duvidas-frequentes"); ?>">DÚVIDAS FREQUENTES</a></li>
                <li class="list-item"><a href="<?= base_url("fale-conosco"); ?>">CONTATO</a></li>
            </ul>					
        </nav>
    </section>