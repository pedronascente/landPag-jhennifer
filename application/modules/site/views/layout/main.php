  
<?php    $base = base_url();?>

    <style type="text/css">
.container-fluid{margin: 0 !important;padding-left: 0; padding-right: 0}
._text-ce_justify{ text-align: justify !important; }
._font_title,
._font_title_h3 {
 font-family:"GothamBold" !important;
 font-size:30px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 padding-bottom:30px ;
  color:#757373; 
}
._font_title_h3 { font-size:20px; padding:0}
._font_paragrafo,
body {
 font-size:14px; font-style:normal; -webkit-font-smoothing:antialiased; -webkit-text-stroke-width:.2px; -moz-osx-font-smoothing:grayscale}
#session-pronto-atendimento h3 {
 font-family:Roboto !important;
 font-size:40px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 padding-bottom:20px
}
#session-pronto-atendimento p {
 font-family:Gotham !important;
 font-size:26px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale
}
.slider-content {
 padding:15px
}
.slider-content p,
.slider-content span {
 font-size:22px
}
.slider-content span {
 font-family:Roboto!important;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 color:#fff
}
.slider-content p,
.slider-content.btn {
 font-family:Roboto!important;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 color:#fff;
 line-height:1.5
}
.slider-content span {
 line-height:2.7
}
.slider-content h1 {
 display:inline-block;
 font-family:Roboto!important;
 font-size:40px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 color:#fff;
 margin-top:50px
}
._Gotham-Ultra {
 display:inline-block;
 font-family:Roboto!important;
 font-size:40px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale;
 color:#fff;
 margin-top:50px
}
._font_title_blog {
 font-family:"Roboto"!important;
 font-size:24px;
 font-style:normal;
 -webkit-font-smoothing:antialiased;
 -webkit-text-stroke-width:.2px;
 -moz-osx-font-smoothing:grayscale
}

._font_paragrafo {
 color:#545454;
 line-height:28px;
 text-align: justify;
}

._font_paragrafo.text-center {
 color:#545454;
 line-height:28px;
 text-align:center;
}
* {
 box-sizing:border-box;
 padding:0
}
a,
div#linha-superior ul li ul li a:hover {
 text-decoration:none
}
a {
 display:inline-block;
 cursor:pointer
}
p {
 margin:0;
 margin-bottom:15px
}
li {
 list-style:none
}
input,
textarea {
 border:none
}
.page-box__title a {
 color:#444
}
.container h2 span {
 font-size:18px;
 display:block
}
.espacamento-rodape {
 height:110px
}
.jquery-slider-selectors {
 right:calc((100% - 1115px)/ 2 + 12px);
 z-index:14
}
.jquery-slider-selector-current {
 background:#fff
}
#form {
    right: calc((100% - 1176px)/ 2 + 12px);
}

#auxiliar {
 position:fixed;
 width:950px;
 height:630px;
 display:none;
 background:#fff
}
#auxiliar .content-auxiliar {
 width:100%;
 height:602px;
 padding:0
}
#auxiliar a#bt-fechar { color:#fff; font-size:15px; float:right; margin:10px 10px 0 0}
#linha-superior ul li,
div#linha-superior ul li a,
div#linha-superior ul li span { color:#7e7e7e; font-size:12px}
#linha-superior { height:25px; background-color:#e9e9e9; padding-top:4px; width:100%; top:0; z-index:100}
#linha-superior ul { float:right; position:relative}
#linha-superior ul li { float:left; cursor:pointer}
#linha-superior ul li:nth-child(3) a { color:#7e7e7e}
#linha-superior ul li span { display:inline-block; margin:0 10px}
#linha-superior ul li ul { display:none; float:none; background-color:#e9e9e9; margin:6px 0 0; position:absolute; top:13px; left:-98px; z-index:1}
#linha-superior ul li ul li { float:none; padding:5px 10px}
#linha-superior ul li ul li a { float:none}
#linha-superior ul li:hover ul { display:block}
#logo-volpato-telefones a#logo-volpato { background:url(<?=$base;?>assets/img/logo-volpato.jpg) no-repeat; width:246px; height:60px; margin-top:10px}
#logo-volpato-telefones ul li:first-child { color:#c9c9c9; text-align:right; padding-right:15px;}
#logo-volpato-telefones ul li:last-child { color:#254068; text-align:center;}
.background-vermelho{background: #17345b;}
#menu-superior{	background: #c1383b;}
#menu-superior ul li:hover ul { display:block}
#menu-superior ul li { float:left; position:relative; padding:15px 0}
#menu-superior ul li a { color: #FFF; font-size:14px}
#menu-superior ul li a:hover { color:#99aab3}
#menu-superior ul li.separador { height:50px; width:58px;}
#menu-superior ul li ul {
 display:none; background:#213c67; position:absolute; top:62px; width:140px; left:-30px; z-index:20}
#menu-superior ul li ul li { float:none; padding:10px; border-bottom:2px solid #8ca8c5}
#menu-superior ul li ul li a { color:#fff}
#banners { width:100%; height:500px; overflow:hidden; background:#002b40; margin:0 auto}
#form {
    position: absolute;
    top: 138px;
    width: 328px;
    height: 330px;
    /*background: url(<?=$base;?>assets/img/bg-formulario-volpato.png);*/
    z-index: 99;
    padding: 10px 15px;
}
#form2 {width: 268px;  background: #ecebc585;   z-index: 99;  padding: 20px 15px;    border: 2px dashed red;}
#form2 h1 {color: ##757575; padding: 0;  padding-bottom: 10px; font-size: 25px; text-align: center}
#form h2 ,#form h2{ width:100%; text-align:center; font-size:20px; padding:100px 20px; color:#fff}
#form a,#form a {
 text-align:center;
 font-size:16px;
 color:#fff;
 margin-top:13px;
 width:100%
}
#form form.formHome,#form form.formHome {
 margin:18px 27px
}
#form form.formHome .campos,#form form.formHome .campos {
 font-size:14px;
 background-color:#fff;
 width:100%;
 height:39px;
 color:#8ca8c5;
 margin-bottom:10px
}
#auxiliar form#formGatilho .campos {
 color:#333;
 padding:15px;
 margin-bottom:15px;
 width:100%
}
#auxiliar form#formGatilho #CadNome { margin-top:20px}
#auxiliar form#formGatilho #CadDddCel { width:145px}
#auxiliar form#formGatilho #CadCel { width:300px; margin-left:10px}
#auxiliar form#formGatilho #bt-enviar-gatilho {
 margin:0 auto;
 color:#fff;
 font-size:30px;
 text-align:center;
 padding:10px 35px;
 background:#a92826;
 display:block;
 cursor:pointer
}
#como-funciona img {
 background-color:#073361;
 width:100%
}
#como-ajudamos-vc>.row>div {
 padding:30px 30px 30px 30px
}
#como-ajudamos-vc ._row2,
#como-ajudamos-vc._row1 {
 background-color:#fff;
 transition:background .3s,border .3s,border-radius .3s,box-shadow .3s;
 margin-top:0;
 margin-bottom:0
}
#como-ajudamos-vc ._row1 {
 padding:0
}
#como-ajudamos-vc ._row2 {
 padding:40px 0 100px 0
}
#box-certificacoes {
 padding:50px 0 50px 0
}
#ultimas-blog {
 margin-bottom:70px
}
#ultimas-blog h3 {
 font-size:20px;
 font-weight:700
}
#ultimas-blog a {
 font-weight:700;
 font-size:12px;
 color:#002b40;
 font-weight:900
}
#leia-mais img {
 padding-top: 10px;
 padding-bottom: 10px;
 max-width:100%
}
#a-empresa,
#politica-privacidade,
#termos-uso {
 text-align:justify
}
._border-bottom {
 border-bottom:1px solid
}
.form-control_fale_conosco {
 padding:20px 12px!important
}
#header-mobile {
 z-index:99;
 position:relative;
 box-shadow:2px 2px 2px #777
}
#header-mobile .tabela {
 display:table;
 width:100%;
 padding:5px 0;
 vertical-align:middle
}
#header-mobile .linha-2 .col-xs-3,
#header-mobile .linha-2 .col-xs-9 {
 display:table-cell;
 vertical-align:middle
}
.linha-1 a {
 color:#777
}
.navbar-toggle,
.navbar-toggle:hover {
 background-color:#fff;
 border-radius:2px;
 padding:10px;
 margin:0;
 transition:all .1s ease-out
}
.navbar-toggle .icon-bar {
 background-color:#033060;
 width:35px;
 height:6px;
 margin:6px 0
}
.navbar-toggle__icon-bar {
 vertical-align:middle;
 display:inline-block;
 height:18px;
 margin-top:-24px
}
.nav-mobile { border-radius:2px; background-color:#143160}
.nav-mobile .list-item { border-bottom:solid #134274 1px}
.nav-mobile .list-item a,
.nav-mobile .list-item a:hover { color:#fff; font-weight:700; background-color:#033060}
.nav-mobile .list-item:nth-child(2) .drop::after { content:'\f078'; font-family:FontAwesome; font-size:10px; color:#fff; margin-left:5px}
.nav-mobile .list-item a:focus { background-color:#033060}
.nav-mobile .list-item .dropdown-nav a { background-color:#021f3f}
.navbar-toggle { display:block}
footer{
    background-color: #002b40;
    color: #fff;
    height: auto;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 25vh;
    display: block;
    margin: 0 auto;
    padding-top: 15px;
}

footer a,footer a:hover{ color: #fff }


.title-footer{
 font-size:14px;
 font-weight:500;
 display:block;
 margin-bottom:30px;
 margin-top:30px
}


.list-footer {
 list-style:none
}
.list-social{
 list-style:none;
 padding:0;
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -webkit-box-pack:start;
 -ms-flex-pack:start;
 justify-content:flex-start;
 -webkit-box-align:center;
 -ms-flex-align:center;
 align-items:center
}
.list-pagamentos {
 list-style:none;
 padding:0;
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -webkit-box-pack:start;
 -ms-flex-pack:start;
 justify-content:flex-start;
 -webkit-box-align:center;
 -ms-flex-align:center;
 align-items:center;
 -ms-flex-wrap:wrap;
 flex-wrap:wrap
}
footer ul li a {
 font-size:13px;
 color:#99aab3;
 display:block;
 margin-bottom:5px;
 font-weight:400
}
.be-a-client {
 background-color:#ff5265;
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -webkit-box-align:center;
 -ms-flex-align:center;
 align-items:center;
 -webkit-box-pack:center;
 -ms-flex-pack:center;
 justify-content:center;
 padding:65px 0
}
.be-a-client-text {
 color:#fff;
 font-size:38px;
 font-weight:700;
 margin-right:40px;
 line-height:36px;
 margin-bottom:0
}
.btn-white {
 text-transform:uppercase;
 font-size:11px;
 font-weight:800;
 color:#fff;
 padding:10px 15px;
 letter-spacing:5px;
 background:0 0;
 text-decoration:none!important;
 text-align:center;
 border:1px solid #fff;
 -webkit-transition:.4s;
 transition:.4s;
 transition-property:all;
 transition-duration:.4s;
 transition-timing-function:ease;
 border-radius:2px
}
.btn-white:hover {
 color:#353e47!important;
 background-color:#fff
}
._margin-bottom-40 {
 margin-bottom:40px
}
._margin-bottom-60 {
 margin-bottom:60px
}
._margin-bottom-70 {
 margin-bottom:70px
}

._margin-top-50 {
 margin-top: 50px
}

._margin-top-70 {
 margin-top: 70px
}


._margin-top-100 {
 margin-top: 100px
}


._margin-bottom-100 {
 margin-bottom:100px
}


._margin-bottom-150 {
 margin-bottom:150px
}



._margin-top-30 {
 margin-top:30px
}
._margin-top-60 {
 margin-top:60px
}
cite._font_paragrafo>a {
 color:#fff!important
}
.slider-content p {
 color:#fff;
 margin-top:25px;
 font-size:21px;
 line-height:30px;
 text-shadow:1px 1px 3px #444
}
.slider-content a.btn {
 margin-top:30px
}


#session-pronto-atendimento {
 color:#fff;
 background:url(<?=$base;?>assets/img/pronto-atendimento.jpg);
 min-width:100%;
 height:auto;
 display:block;
 padding-bottom:102px
}



#session-pronto-atendimento h3 {
 margin-top:90px
}
#_h2 {
 margin-bottom:70px
}
#btn-pt-presencial {
    position: absolute;
    top: -140px;
    left: 87px;
}

#btn-pt-virtual{
	position: absolute;
    top: -170px;    
    right: 9%;
}


@media (max-width:75em) {
	 #session-pronto-atendimento {
	  padding-bottom:80px
	 }
	 #session-pronto-atendimento h3 {
	  margin-top:70px
	 }
	 #session-pronto-atendimento p {
	  font-size:18px
	 }
	 #logo-volpato-telefones ul {
	  margin:10px 0 0 310px;
	  display:inline-block
	 }
	 #owl-main-slider .item img {
	  min-width:100%;
	  max-height:480px;
	  display:block
	 }
	 #_h2 {
	  margin-bottom:20px
	 }
	 ._title_padding-top-10 {
	  padding:0 0 20px 0;
	  text-align:center;
	  font-size:20px
	 }
	
	 #session-pronto-atendimento-mobie img {
	  max-width:100%;
	  height:auto
	 }

	 #formulario-lateral h1 {
	  font-weight:700;
	  font-size:28px;
	  margin-top:91px
	 }
}

@media screen and (max-width:767px) {
	.title-footer {
	 	 margin:15px 0
 	}
}
@media screen and (max-width:767px) {
 .footer-item.last-item-footer{
  padding-bottom:15px;
  margin-bottom:15px;
  border-bottom:1px solid #1b3f52
 }
}
@media screen and (max-width:767px) {
 .ajust-title-mob {
  padding-bottom:15px;
  border-bottom:1px solid #1b3f52
 }
}
@media screen and (max-width:767px) {
 .list-footer .title-footer {
  margin-bottom:15px;
  margin-top:15px;
  position:relative
 }
 .list-footer .footer-item:last-child {
  margin-bottom:15px
 }
 .list-footer.active .title-footer {
  border:none
 }
 .list-footer.active .footer-item {
  display:block
 }
 .list-footer .subtitle-footer {
  display:block;
  padding-bottom:15px;
  border-bottom:1px solid #1b3f52;
  margin-bottom:15px
 }
 .list-footer .subtitle-footer:last-child {
  border:none;
  padding:0
 }
}
@media screen and (max-width:767px) {
 .line-space-footer {
  display:none
 }
}
.list-social>li:first-child {
 margin-left:-9px
}
.icon-arrow-small-white {
 display:none
}
@media screen and (max-width:767px) {
 .icon-arrow-small-white {
  display:block;
  display:block;
  position:absolute;
  right:0;
  top:10px
 }
}
@media screen and (max-width:991px) {
 .wrapper-footer {
  padding:0
 }
}
@media (max-width:700px) {
 .be-a-client-text {
  color:#fff;
  font-size:43px;
  font-weight:700;
  line-height:55px;
  padding:18px
 }
}
blockquote {
 padding:0;
 margin:0 0 20px;
 font-size:15px;
 border:0
}
#_title-Mais-de-60-MIL-VeÃ­culos-recuperados {
 padding-bottom:20px
}
a[href="#top"] {
 padding:10px;
 position:fixed;
 right:40px;
 display:none;
 font-size:30px;
 z-index:9999999999
}
a[href="#top"]:hover {
 text-decoration:none
}
#return-to-top {
 z-index:99999;
 position:fixed;
 bottom:20px;
 right:20px;
 background:#000;
 background:rgba(0,0,0,.5);
 padding:5px 13px;
 display:block;
 text-decoration:none;
 display:none;
 -webkit-transition:all .3s linear;
 -moz-transition:all .3s ease;
 -ms-transition:all .3s ease;
 -o-transition:all .3s ease;
 transition:all .3s ease
}
#banner-conheca-a-volpato,
#banner-obrigado-for-principal { background-image:url(<?=$base;?>assets/img/banners/banners-slin/sobre.jpg)}
#banner-fale-conosco { background-image:url(<?=$base;?>assets/img/banners/banners-slin/fale-conosco.jpg)}
#banner-blog { background-image:url(<?=$base;?>assets/img/banners/banners-slin/leia-mais.jpg)}
#banner-blog,
#banner-conheca-a-volpato,
#banner-duvida-frequente,
#banner-fale-conosco,
#banner-obrigado-for-principal,
#banner-politica-de-privacidade,
#banner-termos-de-uso {
 max-width:100%;
 max-height:130px;
 color:#fff;
 margin-bottom:15px;
 padding:0;
 margin:0
}
.drag-drop-item {
 touch-action:none
}
.testimonial-content {
 position:relative;
 margin-left:10px;
 margin-bottom:40px
}
.testimonial-author {
 margin-right:40px
}
.testimonial-author h4,
.testimonial-content h3 {
 margin-bottom:0
}
.testimonial-content h3 {
 font-size:18px
}
#testimonials .owl-buttons {
 margin:-40px 0 0 10px
}
#testimonials2 .owl-buttons {
 position:absolute;
 top:-100px;
 right:20px
}
#testimonials2 .owl-buttons div {
 padding:5px 20px;
 border-color:#ddd
}
#testimonials2>div.owl-wrapper-outer>div>div>div {
 margin-right:20px
}
.testimonial-content p {
 color:#777;
 padding-top:15px;
 padding-bottom:10px
}
.testimonial-content .fa-quote-left {
 color:#fff
}
@media (max-width:75em) {
 #testimonials2>div.owl-wrapper-outer>div>div>div {
  margin:0
 }
}
.img_cursor_pinter {
 cursor:pointer!important
}
.btn__ {
 position:absolute;
 bottom:40px;
 left:120px;
 padding:15px 30px
}
._title_avolpato {
 font-family:"Gotham-Bold"!important;
 font-size:20px;
 margin-top:0;
 color:#757373
}
._font_paragrafo_volpato {
 font-family:Roboto!important;
 color:#777;
 font-size:1.5rem
}
.margin-bottom-volpato {
 margin-bottom:50px
}
.bg-volpato {
 background-color:#033060
}
.py-10 {
 padding-top:6rem!important;
 padding-bottom:6rem!important
}
#missao-visao h3,
#missao-visao p {
 color:#fff
}
@media screen and (max-width:2000px) {
 ._font_paragrafo {
  font-size:17px
 }
}
video {
 max-width:100%
}
._backgroud_cinza {background: #eeedf3;}
/*
-----------------------------------------------------------------------------------
----- SAIBA AGOARA COMO PODEMOS TE AJUDAR-----------
-----------------------------------------------------------------------------------
*/
#TAB___  .nav li.active a{  
background-color: #033060;
color: #fff !important;
margin-top:2px;
}
#TAB___  .nav a {
color: #777;
padding: 15px;
}
#TAB___ .nav a:hover {
background-color: #ddd;
color: #444;
}
#TAB___  .nav li.active {
background-color:#ddd;
margin-top:2px;
color:#444;
}    

.whatsapp {	position: fixed;left: 0;text-align: center;padding: 20px;background: #a22723;width: 100%;bottom: 0;}
.slider-content {    margin-top: 452px;    left: 550px;}
.slider-content a.prev, .slider-content a.next {   opacity: 0.8;    display: block;  float: left; border: 2px solid;    padding: 7px 15px;   cursor: pointer;   margin-right: 5px; color: #FFF;}   
hr{ margin: 0 ; padding: 0; border: 0 ; }
 /*loading da pagina */
#__container-fluid{position:absolute;	width: 100%;height: 100%;top: 0px;left:0px;	display: block;}
._UPERCASE { text-transform: uppercase; }
._colorbranco{ color: #fff !important; }


.bg-appstore {  width: 110px; height: 36px; background: url(<?=$base;?>assets/img/sprites_footer.png) -10px -67px;}
.bg-facebook {    width: 39px; height: 40px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -10px -178px;}
.bg-google_play {  width: 110px; height: 37px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -10px -10px;}
.bg-boleto {  width: 55px; height: 35px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -140px -10px;}
.bg-elo {  width: 55px; height: 35px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -140px -65px;}
.bg-instagram {  width: 35px; height: 40px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -69px -178px;}
.bg-twitter { width: 34px; height: 40px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -124px -178px;}
.bg-youtube { width: 46px; height: 40px; background: url(<?=$base;?>assets/img/sprites_footer.png) -215px -65px;}
.bg-mastercard {  width: 55px; height: 35px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -10px -123px;}
.bg-paypal {  width: 55px; height: 35px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -85px -123px;}
.bg-visa {  width: 55px; height: 35px;  background: url(<?=$base;?>assets/img/sprites_footer.png) -215px -10px;}




/*
.bg-brigada {  width: 107px; height: 98px;    background: url(<?=$base;?>assets/img/sprites_certificados.png) -184px -117px;}
.bg-abese { width: 113px; height: 99px;  text-align: center;  background: url(<?=$base;?>assets/img/sprites_certificados.png) -184px -6px;}
.bg-anatel {  width: 166px; height: 89px;    background: url(<?=$base;?>assets/img/sprites_certificados.png) -6px -6px;}
.bg-cesvi {  width: 111px; height: 112px;    background: url(<?=$base;?>assets/img/sprites_certificados.png) -6px -107px;}
.bg-crea {   width: 94px; height: 114px;    background: url(<?=$base;?>assets/img/sprites_certificados.png) -309px -6px;}

*/



.bg-7segundos { width: 141px; height: 141px;   background: url(<?=$base;?>assets/img/sprites_nossa_eficiencia.png) -172px -0px;  display: inline-block}
.bg-2MINUTOSECLUSA { width: 141px; height: 141px;  background: url(<?=$base;?>assets/img/sprites_nossa_eficiencia.png) 0px 0px; display: inline-block}
.bg-MANUTENcaO1h30 { width: 139px; height: 141px; background: url(<?=$base;?>assets/img/sprites_nossa_eficiencia.png) -345px -0px;display: inline-block}
.bg-manutencao { width: 65px; height: 55px; background: url(<?=$base;?>assets/img/sprites_icones.png) -62px 14px;display: inline-block}
.bg-reserva_local { width: 50px; height: 55px; background: url(<?=$base;?>assets/img/sprites_icones.png) -161px 0px;display: inline-block}
.bg-recado { width: 50px; height: 55px; background: url(<?=$base;?>assets/img/sprites_icones.png) -417px -0px;display: inline-block}
.bg-chave_virtual { width: 30px; height: 55px;background: url(<?=$base;?>assets/img/sprites_icones.png) 0px 0px;display: inline-block;margin-top: 15px}
.bg-controle_da_portaria {  width: 50px; height: 55px;  background: url(<?=$base;?>assets/img/sprites_icones.png) -502px 0px;display: inline-block;margin-top: 20px}
.bg-prestador_de_servico {  width: 50px; height: 55px; background: url(<?=$base;?>assets/img/sprites_icones.png) -246px 0px;display: inline-block;margin-top: 20px}
.bg-previsao_de_visita {  width: 50px; height: 55px; background: url(<?=$base;?>assets/img/sprites_icones.png) -331px 0px;display: inline-block}

._bg-azul{background: #002b40;}

.panel-heading._bg_cinza{background: #e4e4ec}

._color_branco{ color: #ffffff}
._padding_buttom{padding-bottom: 15px}



._h22 {
  color: #333;
  text-align: center;
  text-transform: uppercase;
  font-family: "Roboto", sans-serif;
  font-weight: bold;
  position: relative;
  margin: 30px 0 60px;
}
._h22::after {
  content: "";
  width: 100px;
  position: absolute;
  margin: 0 auto;
  height: 3px;
  background: #c1383b;
  left: 0;
  right: 0;
  bottom: -10px;
}
.col-center {
  margin: 0 auto;
  float: none !important;
}
._carousel {
  margin: 50px auto;
  padding: 0 70px;
}
.carousel .item {
  color: #999;
  font-size: 14px;
    text-align: center;
  overflow: hidden;
    min-height: 290px;
}
.carousel .item .img-box {
  width: 135px;
  height: 135px;
  margin: 0 auto;
  padding: 5px;
  border: 1px solid #ddd;
  border-radius: 50%;
}
.carousel .img-box img {
  width: 100%;
  height: 100%;
  display: block;
  border-radius: 50%;
}
.carousel .testimonial {
  padding: 30px 0 10px;
}
.carousel .overview { 
  font-style: italic;
}
.carousel .overview b {
  text-transform: uppercase;
  color: #c1383b;
}
.carousel .carousel-control {
  width: 40px;
    height: 40px;
    margin-top: -20px;
    top: 50%;
  background: none;
}
.carousel-control i {
    font-size: 68px;
  line-height: 42px;
    position: absolute;
    display: inline-block;
  color: rgba(0, 0, 0, 0.8);
    text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
}


/*.carousel .carousel-indicators {
  bottom: -40px;
}*/

.carousel-indicators li, .carousel-indicators li.active {
  width: 10px;
  height: 10px;
  margin: 1px 3px;
  border-radius: 50%;
}
.carousel-indicators li { 
  background: #999;
  border-color: transparent;
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}
.carousel-indicators li.active {  
  background: #555;   
  box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
}


._widgeds_blog{ padding: 22px;   width: 264px;
    margin-left: 17px;    margin-top: 36px; background: #eee ; border: 1px solid  #b1afaf;}



._cor_whatsApp{background: #25d366 !important}


</style>