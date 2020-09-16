<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends MX_Controller {

    public function index() {
        $this->loadPage('admin/paginas/login');
    }
    
    public function auth() {
        die("usuario autendicado!");
    }
    
    public function home() {
        die("Olá seja bem vindo sr(a): Pedro jardim!");
    }
    
    public function panel() {
        die("Olá seja bem vindo sr(a): Pedro jardim! <br><h1>Gerenciar posts do Blog</h1>");
    }
    
    private function loadPage($moduleRoute, $parameters = '') {
        $data['assets'] = $this->loadAssets($moduleRoute);
        $data['content'] = $this->load->view($moduleRoute, $parameters, TRUE);
        $this->load->view('page', $data);
    }
    private function loadAssets($moduleRoute) {
        $url = base_url();
        switch ($moduleRoute) {
            case 'admin/paginas/login':
               return array(
                    'css' => '
                        <link rel="stylesheet" href="'.$url.'assets/css/bootstrap.v2.min.css"/>
                        <link rel="stylesheet" href="'.$url.'assets/css/bootstrap-responsive.min.css"/>
                        <link rel="stylesheet" href="'.$url.'assets/css/matrix-login.css"/>
                        <link rel="stylesheet" href="'.$url.'assets/css/padrao-volpato.css"/>
                        <link rel="stylesheet" href="'.$url.'assets/css/font-awesome.css"/>
                    ',
                    'javaScriptHeader' =>'
                       
                    ',
                    'javaScriptFooter' => ' 
                                
                        <script type="text/javascript" src="'.$url.'assets/js/matrix.login.js"></script>           
                    '
                );
                break;
   
        }
    }   
}  


  /*

    
                        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                        <script type="text/javascript" src="https://use.fontawesome.com/11e4ccece0.js"></script>   */