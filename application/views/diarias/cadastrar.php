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

        
        <br /><br />
         <div class="row" style="padding:10px;">
              
         <div class="col-md-1" style="width:100%; border:3px solid #ccc; padding:20px;">
        <p style="margin-top:5px;">
                 Busca Militar
        </p>
        <form action="<?php echo base_url('diarias/cadastrar'); ?>" method="post"  class="form-inline">
        <input type="text" name="busca_saram" class="form-control" placeholder="Saram do militar"/>
        <input type="submit" value="Buscar Militar" name="btn_bm" class="btn btn-primary " />
        </form>

        </div>
        </div>

          

  

         </div> 
        </div>

      </div>

      </div>
    </div>

<?php

	$this->load->view('shared/footer');

?>