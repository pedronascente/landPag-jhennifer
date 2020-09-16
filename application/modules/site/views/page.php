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
<meta charset="utf-8">  
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="HandheldFriendly" content="true" />
<meta content="INDEX, FOLLOW" name="ROBOTS" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<meta name="geo.region" content="BR-RS" />
<meta name="geo.placename" content="Porto Alegre" />
<meta name="geo.position" content="-30.012827;-51.198421" />
<meta name="ICBM" content="-30.012827, -51.198421" /> 

<!--compartilhar facebook-->
<meta property="og:type"               content="website" />
<meta property="og:site_name" content="VOLPATO RASTREAMENTO">
<meta property="og:locale" content="pt_BR">
<meta property="fb:admins" content="260283444054998">
<meta property="og:url" content="https://volpatorastreamento.com.br/">
<meta property="og:title" content="Faça seu orçamento GRATUITO agora mesmo. ">
<meta property="og:description" content="Você já se perguntou porque algumas pessoas estão migrando para o sistema de rastreamento veicular VOLPATO com Proteção 24h, pagando até 52% Mais Barato que o seguro e Sem Burocracias complicadas, enquanto outras simplesmente continuam inseguras e com medo no trânsito? ">   
<meta name="og:image" content="https://volpatorastreamento.com.br/assets/img/fb/107379134_197306498351604_4273545954380954771_n.jpg" />

<meta name="classification" content="Internet" />
<meta name="document-classification" content="VOLPATO" />
<meta name="REVISIT-AFTER" content="1 days" />
<meta name="LANGUAGE" content="Portuguese" />
<meta name="COPYRIGHT" content="" />
<meta name="audience" content="all" />
<meta name="copyright" content="VOLPATO" />
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="<?=base_url('assets/img/favicon.ico')?>" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
<title>Rastreador Veícular -  Ligue : 3004-5554</title>
<?php echo $this->load->view("bootstrap"); ?>
<?php echo $this->load->view("main"); ?>



<?=isset($assets['css'])?$assets['css']:'';?>
<?=isset($assets['javaScriptHeader'])?$assets['javaScriptHeader']:'';?>
</head>
<body>
    
        <div id="__container-fluid">
            <div class="container-fluid">
                <?php echo $content; ?>       
            </div>  
        </div> 
        
    <?php echo $this->load->view("jquery.php"); ?>
    <?php echo $this->load->view("bootstrapjs"); ?>



    <?php echo isset($assets['javaScriptFooter'])?$assets['javaScriptFooter']:'';?>        

</body>
<?= $this->load->view("formulario/form_modal"); ?>
</html>