<div>
    <div id="logo-volpato-telefones" class="hidden-xs hidden-sm">
        <div class="container">
            <a id="logo-volpato" href="javascript:void(0)" title="VOLPATO Em todo Brasil prote&ccedil;&atilde;o " style="float: left"></a>
            <ul>
                <li><a  href="<?= base_url('site'); ?>" title="IR PARA O SITE">IR PARA O SITE</a></li>
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
                <li><a  href="<?= base_url('site'); ?>" title="IR PARA O SITE">IR PARA O SITE</a></li>
            </ul>					
        </nav>
    </section>