<?= $this->load->view("layout/nav"); ?>
<div class="container-fluid _bg-azul " >     
    <div class="container ">
        <div   class="row">
            <div class="col-md-12 col-xs-12 text-right">
                <a href="<?=base_url()?>" class=" _color_branco " style="padding-top: 15px; padding-bottom: 15px ;">
                Home  /  Contato</a> 
                
            </div>
        </div>
    </div>
</div>

<hr class="_margin-bottom-40">

<div  class="container">
    <div class="row text-center">
        <div class="col-md-12">
      
          <h2 class=" _h22" >Horário de Atendimento</h2>  
            <ul>
                <li><p><i class="fa fa-mail-forward" aria-hidden="true"></i>   Seg. a Sex. - 08:00 às 20:00 | Sábado - 09:00 às 14:00</p></li>
                <li><p><i class="fa fa-envelope" aria-hidden="true"></i>  volpato@grupovolpato.com</p></li>
                <li><p><i class="fa fa-phone" aria-hidden="true"></i> 3004-5554</p>  </li>
            </ul>
        </div>
    </div>

    <div class="row text-center">
        <div class="col-md-12 ">
          <hr class="_margin-bottom-40">
               <h2 class=" _h22" >Localizações</h2>
            <ul>
                <li><p>Rua Pereira Franco, 188 - São João, Porto Alegre - RS, 90240</p></li>
                <li><p>Av. Amazonas, Nº 205 São Geraldo - Porto Alegre/RS</p></li>
                <li><p>Av. Dorival Cândido Luz de Oliveira, 6963 - Parque Florido, Gravataí - RS, 94070</p></li>
                <li><p>Rua: Dr Alexandre Gutierres, 80, Agua Verde – Curitiba - PR</p></li>
                <li><p>R. Fernando Ferrari, 1231 - Centro, Esteio - RS, 93260-030</p></li>
                <li><p>Av. Nestor de Moura Jardim, Nº 1725 - Nossa Sra. de Fatima, Guaíba - RS, 92500-000</p></li>
            </ul> 
        </div>
    </div>
  <div class="row">
        <hr class="_margin-bottom-40">
         <div class=" col-md-12">
            <h2 class="_h22 text-center" >Deixe seus dados abaixo, que em breve entraremos em contato. </h2>

            <div class="panel panel-default" > 
                <div class="panel-body"> 
                    <?= $this->load->view("formulario/form_contato"); ?>  
                </div> 
            </div>
        </div>
    </div>
</div>

<hr class="_margin-bottom-70">


<?= $this->load->view("footer-home"); ?>