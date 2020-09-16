<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	public function index() {
		$array_list_noticias = $this->findAllNoticias();
		$this->loadPage('site/paginas/home', [
			'_noticias' => $array_list_noticias
		]);
	}
	public function conhecaEmpresa() {
		$this->loadPage('site/paginas/conheca-a-volpato');
	}
	public function areaDoCliente() {
		$this->loadPage('site/paginas/area-do-cliente-volpato');
	}
	public function termos() {
		$this->loadPage('site/paginas/termos');
	}
	public function politicaPrivacidade() {
		$this->loadPage('site/paginas/politica-de-privacidade');
	}
	public function faleConosco() {
		$this->loadPage('site/paginas/contato');
	}
	public function monitoramento() {
		$this->loadPage('site/paginas/monitoramento');
	}
	public function leiaMais($id = 0) {
		$array_list_noticias = $this->findAllNoticias();
		$noticia = $this->getNoticias($id);
		$this->loadPage('site/paginas/blog', [
			'_noticias' => $array_list_noticias,
			'_noticia' => $noticia
		]);
	}
	public function getNoticias($id) {
		$arr_noticias = $this->findAllNoticias();
		for ($i = 0; $i < count($arr_noticias); $i++) {
			if ($arr_noticias[$i]['_id'] == $id || $arr_noticias[$i]['_url'] == $id) {
				$noticia = $arr_noticias[$i];
				break;
			}
		}
		return $noticia;
	}

	public function salvar(){
		$data = $this->formatarDados($this->input->post());
		if($data['t']){
			$this->db->insert('captacao', $data['dados']);
			$this->enviarCaptacaoGPI($data['dados']);
			$this->enviarCaptacaoSeguidor($data['dados']);
			redirect(base_url('sucesso'));
		}else{
			redirect(base_url('sucesso'));
		}	  
	}           
    /* 
     * FORMULARIO DE CONTATO
     * Enviar Email para o adiministrador do site : 
    */
    public function saveContato() {
    	if($this->input->post('assunto')=="sac"){
    		$array_data =[
    			'contato_nome' => $this->input->post('nome'),
    			'contato_email' => $this->input->post('email'),
    			'contato_telefone' => $this->input->post('telefone'),
    			'contato_assunto' => $this->input->post('assunto'),
    			'contato_menssagem' => $this->input->post('mensagem'),
    			'contato_origem' => $this->input->post('origem'),
    			'contato_destino' => "desenvolvimento@grupovolpato.com",
    		];
    		$this->sendEmail($array_data,'contato');
    	}
    	redirect(base_url('sucesso'));
    }
    public function obrigado() {
    	$this->loadPage('site/paginas/obrigado');    
    }
    public function findAllNoticias(){
    	$arr_noticias = [
    		[
    			'_id' => 1,
    			'_titulo' => 'Saiba como motorista de Uber teve veículo recuperado em Alvorada – RS',
    			'_texto' => '<p class="_font_paragrafo">No último sábado, 26/01, nosso cliente entrou em contato com a Central de Rastreamento da Volpato para informar que quatro assaltantes, sendo que dois estavam armados, tinham levado seu veículo de trabalho, um Uno Attractive.</p>
    			<p class="_font_paragrafo">O roubo aconteceu no bairro Santa Isabel, em Viamão. Após comunicar o ocorrido, a equipe de Pronta Resposta fez o resgate do veículo em Alvorada, na Rua Pedro Cláudio Monassa, bairro Algarve. </p>',
    			'_data_publicacao' => '1 de fevereiro de 2019',
    			'_imagem' => 'saiba-como-motorista-de-uber-teve-veiculo-recuperado-em-alvorada.jpg',
    			'_url' => 'saiba-como-motorista-de-uber-teve-veiculo-recuperado-em-alvorada',
    			'_uf' => 'RS',
    			'_cidade' => 'Alvorada',
    			'_autor' => 'Larissa Teixeira',
    			'_paragrafo_introducao' => 'No último sábado, 26/01, nosso cliente entrou em contato com a Central de Rastreamento da Volpato para informar que quatro assaltantes, sendo que dois estavam armados',
    		],
    		[
    			'_id' => 2,
    			'_titulo' => '3 carros são recuperados na Região Metropolitana de Porto Alegre',
    			'_texto' => '<p class="_font_paragrafo">O primeiro veículo a ser recuperado foi um Vectra prata em Canoas, há 18 km de Porto Alegre. O roubo aconteceu no bairro Estância Velha.</p>
    			<p class="_font_paragrafo">Às 22h02 do dia 21/04 (domingo), Evandir entrou em contato com nossa Central de Monitoramento 24h informando que seu carro tinha sido roubado por dois homens armados.</p>
    			<p class="_font_paragrafo">Então, nossa equipe tática foi informada onde o veículo foi bloqueado e o resgatou ainda em Canoas, na Rua Sessenta e Sete, no bairro Guajurivas.</p>
    			<p class="_font_paragrafo">O segundo caso aconteceu em Gravataí, onde nosso cliente Guilherme teve seu carro roubado na Estrada Dionízio Cardoso de Lima, também Região Metropolitana da capital.</p>
    			<p class="_font_paragrafo">Após entrar em contato com a Central de Monitoramento 24h, a equipe tática foi acionada e o veículo foi recuperado em Cachoeirinha, na Rua Borges de Medeiros.</p>
    			<p class="_font_paragrafo">O terceiro e último foi roubado em Estância Velha, às 11h49. Andrelisa também entrou em contato com nossa Central de Monitoramento 24h informando que havia sido assaltada por três homens armados.</p>
    			<p class="_font_paragrafo">Às 12h30 nossa equipe tática fez a recuperação em Novo Hamburgo, no bairro Vila Nova.</p>',
    			'_data_publicacao' => '26 de abril de 2019',
    			'_imagem' => '3-carros-sao-recuperados-na-regiao-metropolitana-de-porto-alegre.jpg',
    			'_url' => '3-carros-sao-recuperados-na-regiao-metropolitana-de-porto-alegre',
    			'_uf' => 'RS',
    			'_cidade' => 'Porto Alegre',
    			'_autor' => 'Larissa Teixeira',
    			'_paragrafo_introducao' => 'O primeiro veículo a ser recuperado foi um Vectra prata em Canoas, há 18 km de Porto Alegre. O roubo aconteceu no bairro Estância Velha.',
    		],
    		[
    			'_id' => 3,
    			'_titulo' => 'Dois veículos são recuperados pelo Rastreador Veicular da Volpato',
    			'_texto' => '<p class="_font_paragrafo">Nos dias 07 e 09/04 (domingo e terça) dois veículos foram recuperados pelo nosso rastreador veicular. Dentre eles, uma moto GSR 750 foi recuperada. O crime aconteceu no dia 09/04, por volta das 20h.</p>
    			<p class="_font_paragrafo">Nosso cliente, Denis, entrou em contato com a Central de Monitoramento e informou que havia sido roubado por três assaltantes armados na rua João Fazio Amato, bairro Rubem Berta, zona norte de Porto Alegre.</p>
    			<p class="_font_paragrafo">A equipe tática da Volpato foi informada pela central sobre o ocorrido e fez o resgate no bairro Mário Quintana, na rua Felisberto Maia, também zona norte de Porto Alegre. A moto estava em perfeito estado e foi devolvida ao seu dono.Segunda recuperação</p>
    			<p class="_font_paragrafo">No dia 07/04 (domingo), Marcio teve seu celta roubado em Alvorada, Região Metropolitana de Porto Alegre. Entrou em contato com nossa central e informou o que havia acontecido. O bloqueio foi efetuado e nossa equipe se dirigiu ao local indicado. O carro foi encontrado na Free Way, às 14h12.</p>',
    			'_data_publicacao' => '12 de abril de 2019',
    			'_imagem' => 'dois-veiculos-sao-recuperados-pelo-rastreador-veicular-da-volpato.jpg',
    			'_url' => 'dois-veiculos-sao-recuperados-pelo-rastreador-veicular-da-volpato',
    			'_uf' => 'RS',
    			'_cidade' => 'Rubem Berta, zona norte de Porto Alegre',
    			'_autor' => 'Larissa Teixeira',
    			'_paragrafo_introducao' => 'Nos dias 07 e 09/04 (domingo e terça) dois veículos foram recuperados pelo nosso rastreador veicular. Dentre eles, uma moto GSR 750 foi recuperada.',
    		],
    	];
    	return $arr_noticias;
    }


/*
* ****************************************************************************************************************************************************
* METODOS PRIVADOS :
* ****************************************************************************************************************************************************
*/
private function formatarDados($Dados){
	$Dados['captacao_interesse'] = 5;
	$Dados['acao'] = "InsertCaptacao";
	$Dados['captacao_ddd'] = (int) $Dados['captacao_ddd'] ?  (int) $Dados['captacao_ddd'] : null;
	$Dados['captacao_telefone1'] = (int) $Dados['captacao_telefone1'] ? (int) $Dados['captacao_telefone1'] :null;
	if(is_int($Dados['captacao_telefone1']) &&  is_int($Dados['captacao_ddd'])){
		$Dados['captacao_telefone1'] = "({$Dados['captacao_ddd']})" . $Dados['captacao_telefone1'] ;
		unset($Dados['captacao_ddd']);
		return ['t'=>true, 'dados'=>$Dados];
	}else{
		unset($Dados);
		return ['t'=>false, 'dados'=>null];
	} 
}


    /*
     * ENVIA SMS
     * exemplo: https://www.seguidor.com.br/api_restful_sms/sms/v1/enviarSms/?phoneNumber=00000000000
     * @param: phoneNumber 51993870000
     */
    private function enviarSMS($telefone) {
    	$telefone = str_replace("(", "", str_replace(")", "", str_replace(" ", "", str_replace("-", "", $telefone))));
    	$url = "https://www.seguidor.com.br/api_restful_sms/sms/v1/enviarSms/?phoneNumber=" . $telefone;
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, $url);
    	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
    	$data = curl_exec($ch);
    }
    private function strCharFind($needle, $haystack) {
    	$return = FALSE;
    	$arr = str_split($haystack, 1);
    	foreach ($arr as $value) {
    		if ($value == strtolower($needle) || $value == strtoupper($needle)) {
    			$return = TRUE;
    		}
    	}
    	return $return;
    }
    private function sendEmail($data, $tipo = null) {
    	switch ($tipo) {
    		case 'contato':
    		$mensagem = '
    		<h1>Contato</h1><br>
    		<ul>
    		<li><b>Cliente:</b>' . $data['contato_nome'] . '</li>
    		<li><b>Email:</b>' . $data['contato_email'] . '</li>
    		<li><b>Telefone:</b>' . $data['contato_telefone'] . '</li>
    		<li><b>Assunto:</b>' . $data['contato_assunto'] . '</li>
    		<li><b>Mensagem:</b>' . $data['contato_menssagem'] . '</li>
    		<li><b>Origem:</b>' . $data['contato_origem'] . '</li>
    		</ul>';
    		$this->email->from("revendavolpato@revendavolpato.com", "Novo Site");
    		$this->email->to($data['contato_destino'], $data['contato_nome']);
    		$this->email->subject("novo site de Rastreamento veícular");
    		$this->email->message($mensagem);
    		$this->email->send();
    		break;
    		default:
    		$imagem = base_url('assets/img/obrigado.png');
    		$mensagem = "
    		<p class=\"_font_paragrafo\">Olá {$data['captacao_cliente']},</p>
    		<p class=\"_font_paragrafo\">Obrigado pela preferência.</p>
    		<p class=\"_font_paragrafo\">Em breve um de nossos consultores entrará em contato.</p>
    		<br><p class=\"_font_paragrafo\">Atenciosamente,<br>Grupo Volpato</p>
    		<img src=\"{$imagem}\" width=\"500\">";
    		$this->email->from("revendavolpato@revendavolpato.com", "Grupo Volpato");
    		$this->email->to($data['captacao_email'], $data['captacao_cliente']);
    		$this->email->subject("Solicitação de Orçamento de Rastreamento veícular");
    		$this->email->message($mensagem);
    		$this->email->send();
    		break;
    	}
    }
    private function enviarCaptacaoGPI($Dados) {
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, 'http://gpi.ddns.me:9093/gpi/modulos/captacao/src/controllers/captacao.php');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $Dados);
    	$result = curl_exec($ch);
    	curl_close($ch);
    }

    private function enviarCaptacaoSeguidor($Dados){
    	$Dados['captacao_fonte_oportunidade'] = '5ef38e85048133001530607e';
    	$ch = curl_init();
    	curl_setopt($ch, CURLOPT_URL, 'https://seguidor.com.br/pluga.co/rastreamentoveicular/index.php');
    	curl_setopt($ch, CURLOPT_POST, true);
    	curl_setopt($ch, CURLOPT_POSTFIELDS, $Dados);
    	$result = curl_exec($ch);
    	curl_close($ch);
    }
    private function loadPage($moduleRoute, $parameters = '') {
    	$data['assets'] = $this->loadAssets($moduleRoute);
    	$data['content'] = $this->load->view($moduleRoute, $parameters, TRUE);
    	$this->load->view('page', $data);
    }
    private function loadAssets($moduleRoute) {
    	$url = base_url();
    	switch ($moduleRoute) {
    		case '':
    		return array(
    			'css' => '
    			',
    			'javaScriptHeader' => '
    			
    			',
    			'javaScriptFooter' => ' 
    			
    			'
    		);
    		break;            
    	}
    }
}