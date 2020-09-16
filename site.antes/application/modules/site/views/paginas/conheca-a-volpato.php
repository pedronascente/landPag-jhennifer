<?php  echo $this->load->view("layout/nav"); ?>
<div  id="banner-conheca-a-volpato" class="row">
    <div class="col-md-12">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12"><h1 class="title-banner">A VOLPATO</h1></div>
            </div>
        </div>
    </div>
</div>
<?php
echo $this->load->view("empresa");  
echo '<div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>';
echo $this->load->view("certificacoes"); 
echo '<div class="row _margin-bottom-40">  <div class="col-md-12"></div></div>';
echo $this->load->view("footer");