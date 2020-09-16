<?php   defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="pt-BR" class="drag-drop-item">
<head>
<!--[if lt IE 7]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js"></script>
<![endif]-->
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NTP5G2L');</script>
<!-- End Google Tag Manager -->


    <meta name="google-site-verification" content="vUTlYsQzfskEM-Zexg86rX2ED7nhp5UNsgYaohQFa5c" />
    <meta charset="utf-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="HandheldFriendly" content="true" />
    <meta content="INDEX, FOLLOW" name="ROBOTS" />
    <meta name="description" content="A VOLPATO é a maior empresa do Brasil de Rastreadores de carros e motos. Fique mais seguro com o exclusivo Plano Plus e receba em caso de roubo sem recuperação. Proteja já seu veículo com VOLPATO!" />
    <meta name="keywords" content="" />
    <meta name="og:title" content="VOLPATO Rastreadores para Carros e Motos – Fique mais Seguro!" />
    <meta name="og:url" content="" />
    <meta name="og:image" content="<?=  base_url('assets/img/logo-volpato.png')?>" />
    <meta name="geo.region" content="BR" />
    <meta name="geo.placename" content="Rio Grande do Sul" />
    <meta name="og:site_name" content="A VOLPATO é a maior empresa do Brasil de Rastreadores de carros e motos. Proteja já seu veículo com VOLPATO!" />
    <meta name="classification" content="Internet" />
    <meta name="document-classification" content="VOLPATO" />
    <meta name="REVISIT-AFTER" content="1 days" />
    <meta name="LANGUAGE" content="Portuguese" />
    <meta name="COPYRIGHT" content="" />
    <meta name="audience" content="all" />
    <meta name="copyright" content="VOLPATO" />
    <link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" />
    <link rel="image_src" href="<?=base_url('assets/img/logo-volpato.png')?>" />
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico");?>" sizes="16x16">
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico");?>" sizes="32x32">
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico");?>" sizes="48x48">
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico");?>" sizes="64x64">
    <link rel="icon" href="<?=base_url("assets/img/favicon.ico");?>" sizes="128x128">
    <title>Volpato Rastreadores para Carros e Motos – Fique mais Seguro!</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/min/bootstrap.3.3.7.min.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.min.css');?>"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <?=isset($assets['css'])?$assets['css']:'';?>
    <?=isset($assets['javaScriptHeader'])?$assets['javaScriptHeader']:'';?>
    </head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NTP5G2L"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <div class="container-fluid">
        <div id="_bodu"></div>
          <?php echo $content; ?>       
    </div>  
    <script type="text/javascript" src="<?php echo base_url('assets/js/min/jquery-3.4.1.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/min/bootstrap.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/dev/formulario_promocao_relampago.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugins/jquery-mask-plugin/jquery.mask.js');?>"></script>
    
    <script type="text/javascript">
    $(function(){
        /*jquery-mask-plugin*/
        var SPMaskBehavior = function (val) {
		return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
	},
	spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
	};
	$('input[data-mask-type="telefone"]').mask(SPMaskBehavior, spOptions);
    });
</script>
       <?php echo isset($assets['javaScriptFooter'])?$assets['javaScriptFooter']:'';?>
</body>
</html>