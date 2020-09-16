<?php
    echo $this->load->view("layout/nav");
    echo $this->load->view("layout/banner-principal");
    echo $this->load->view("formulario/form_principal");
    echo $this->load->view("como-funciona-o-rastreador-veicular");
    echo $this->load->view("pronto-atendimento");
    ?>
    <div class=" visible-lg visible-md"><?=$this->load->view("como-ajudamos-voce");?></div>
    <div class=" visible-sm visible-xs"><?=$this->load->view("como-ajudamos-voce-mobie")?></div>
    <?php

     echo $this->load->view("cta");
   echo $this->load->view("ultimas-do-blog-home");
      echo $this->load->view("footer");
