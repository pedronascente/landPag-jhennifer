<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['translate_uri_dashes']               = FALSE;
$route['default_controller']                 = 'site/index';
$route['inc-modal-abandono']                 = 'site/modalAbandono';
$route['inc-gatilho']                        = 'site/modalGatilho';
$route['conheca-a-volpato']                  = 'site/conhecaEmpresa';
$route['depoimentos-clientes-volpato']       = 'site/depoimentoCliente';
$route['rastreador-protecao-para-carros']    = 'site/protecaoParaCarro';
$route['area-do-cliente-volpato']            = 'site/areaDoCliente';
$route['termos']                             = 'site/termos';
$route['politica-de-privacidade']            = 'site/politicaPrivacidade';
$route['fale-conosco']                       = 'site/faleConosco';
$route['leia-mais/(:any)']                   = 'site/leiaMais/$1';
$route['duvidas-frequentes']                 = 'site/duvidasFrequentes';
$route['obrigado-1']                         = 'site/formPrincipalObrigado';
$route['save']                               = 'site/salvar';
$route['home_com_video']                     = 'site/homeComVideo';
$route['save-contato']                       = 'site/saveContato';
$route['erro_cadastro/(:num)']                   = 'site/saveContato/$1';

//ADMIN
$route['admin']                 = 'admin/index';