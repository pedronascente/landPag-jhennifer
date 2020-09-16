<?php
echo $this->load->view("layout/nav");
echo $this->load->view("layout/banner-principal");
echo $this->load->view("video-como-funciona");
echo $this->load->view("pronto-atendimento");
echo $this->load->view("como-ajudamos-voce.php");
echo $this->load->view("pronto-atendimento");
echo $this->load->view("depoimentos");
echo $this->load->view("faq");
echo $this->load->view("ultimas-do-blog");
?>
<hr class="_margin-bottom-100">
<section class="container-fluid _margin-top-100  "  style="background: #c1383b">
	<div class="container">
	    <div class="row">
	        <div class="col-md-8">
	            <h6 class="  text-center hidden-xs" style="color: #fff; font-size: 20px; line-height: 36px; font-weight: normal;">
	            	Segurança, transparência e agilidade na  <br>localização de veíclulos 24 horas por dia. 
	            </h6>
	        </div>
	        <div class="col-md-4 text-center">
	        	<a href="https://bit.ly/3aNd9Gx" alt="SOLICITAR ORÇAMENTO" title=""  
	        			 class="btn btn-danger   _cor_whatsApp"  
	        			style="background: #c1383b; 
	        			padding: 12px 30px;  
	        			border: 2px solid; 
	        			margin-top: 15px; 
	        			margin-bottom: 15px; border-radius: 36px; font-size: 20px">
	        			 <i class="fa fa-whatsapp" aria-hidden="true"></i>   Fale Agora whatsApp
	        	</a>
	        </div>
	    </div>
	</div>
</section>
<?php  echo $this->load->view("footer-home");