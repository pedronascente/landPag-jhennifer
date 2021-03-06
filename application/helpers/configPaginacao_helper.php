<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('configPaginacao')){
   function configPaginacao($url,$totalRegistros,$maximo) {

    $config['base_url'] = $url;
    $config['total_rows'] = $totalRegistros;
    $config['per_page'] = $maximo;
    $config['page_query_string'] = TRUE;
    //pagination customization using bootstrap styles
    $config['full_tag_open'] = '<div id="example2_paginate" class=" paging_simple_numbers"><ul class="pagination">';
    $config['full_tag_close'] = '</ul></div>';

    $config['first_link'] = 'Primeiro';
    $config['first_tag_open'] = '<li class="prev page">';
    $config['first_tag_close'] = '</li>';

    $config['last_link'] = 'Último';
    $config['last_tag_open'] = '<li class="next page">';
    $config['last_tag_close'] = '</li>';

    $config['next_link'] = 'Próximo';
    $config['next_tag_open'] = '<li id="example2_next" class="paginate_button next">';
    $config['next_tag_close'] = '</li>';

    $config['prev_link'] = 'Anterior';
    $config['prev_tag_open'] = '<li id="example2_previous" class="paginate_button previous">';
    $config['prev_tag_close'] = '</li>';

    $config['cur_tag_open'] = '<li class="active"><a href="">';
    $config['cur_tag_close'] = '</a></li>';

    $config['num_tag_open'] = '<li class="page">';
    $config['num_tag_close'] = '</li>';

    return $config;
  }
}