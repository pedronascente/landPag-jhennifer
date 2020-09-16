<?php  echo $this->load->view("layout/nav"); ?>
<div class="container-fluid _bg-azul" >		
	<div class="container">
		<div   class="row">
		    <div class="col-md-12 col-xs-12 text-right">
		        <a href="<?=base_url('site')?>" class=" _color_branco " style="padding: 15px 0;">
		        	Home  /  Empresa
		    	</a> 
		    </div>
		</div>
	</div>
</div>
<hr class=" visible-md visible-lg  _margin-bottom-70 ">
<hr class=" visible-xs _margin-bottom-40 ">
<?php
echo $this->load->view("empresa"); 
echo $this->load->view("certificacoes"); 
echo '<div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>';
echo $this->load->view("footer-home");