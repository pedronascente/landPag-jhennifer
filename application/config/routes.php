<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['translate_uri_dashes']               = FALSE;
$route['default_controller']                 = 'site/index';
$route['portaria-presencial']                = 'site/portariaPresencial';
$route['portaria-virtual']                   = 'site/portariaVirtual';
$route['inc-modal-abandono']                 = 'site/modalAbandono';
$route['inc-gatilho']                        = 'site/modalGatilho';
$route['conheca-a-volpato']                  = 'site/conhecaEmpresa';
$route['depoimentos-clientes-volpato']       = 'site/depoimentoCliente';
$route['rastreador-protecao-para-carros']    = 'site/protecaoParaCarro';
$route['area-do-cliente-volpato']            = 'site/areaDoCliente';
$route['termos']                             = 'site/termos';
$route['politica-de-privacidade']            = 'site/politicaPrivacidade';
$route['contato']                            = 'site/faleConosco';
$route['blog/(:any)']                        = 'site/leiaMais/$1';
$route['duvidas-frequentes']                 = 'site/duvidasFrequentes';
$route['save']                               = 'site/salvar';
$route['salvar_monitoramento']               = 'site/salvar_monitoramento';
$route['sucesso']                            = 'site/obrigado';
$route['home_com_video']                     = 'site/homeComVideo';
$route['save-contato']                       = 'site/saveContato';
//$route['erro_cadastro/(:num)']                   = 'site/saveContato/$1';
$route['abrir.captacao']                     = 'site/monitoramento';
//ADMIN
$route['admin']                              = 'admin/index';