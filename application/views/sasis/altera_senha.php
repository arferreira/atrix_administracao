<?php

	$this->load->view('shared/header');

?>

    <div class="container-fluid">
      <div class="row">

      <?php

      	$this->load->view('shared/menu_sidebar');

      ?>

              <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Alterar senha </h1>

     			
     	<div class="col-md-4 col-md-offset-4">
    		<br />

    		<?php if($alerta != null) { ?>
    		<div class="alert alert-<?php echo $alerta['class']; ?>">
    			<?php echo $alerta["mensagem"]; ?>
    		</div>
    		<?php } ?>

				<form action="<?php echo base_url('sasis/altera_senha'); ?>" method="post">
				
				  <div class="form-group">
				    <label for="email">Saram do Militar</label>
				    <input type="text" name="saram" value="<?php echo set_value('saram');  ?>" class="form-control" id="exampleInputEmail1" placeholder="Saram">
				  </div>
				  
				 
				  <button type="submit" class="btn btn-success pull-right" name="alterar" value="alterar">Resetar Senha</button>
				</form>


    	</div>


        </div>
      </div>

      
    </div>

<?php

	$this->load->view('shared/footer');

?>