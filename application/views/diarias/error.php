<?php

	$this->load->view('shared/header');

?>

    <div class="container-fluid">
      <div class="row">

      <?php
      if ($this->session->userdata('peslocaltrabalho') != 95 ) {
      	$this->load->view('shared/menu_user');
      }elseif ($this->session->userdata('peslocaltrabalho') == 95) {
        $this->load->view('shared/menu_sidebar');
      }

      ?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        
        <div class="panel panel-success"> 
        <div class="panel-heading"> 
        <h3 class="panel-title">Ordem de Serviço de Solicitação de Diárias</h3> 
        </div> 
        <div class="panel-body"> 

          <div class="alert alert-danger" role="alert">
            <p>Ocorreu um erro ao gerar sua OS! Tente novamente!</p>
          </div>


         </div> 
        </div>

      </div>

      </div>
    </div>

<?php

	$this->load->view('shared/footer');

?>