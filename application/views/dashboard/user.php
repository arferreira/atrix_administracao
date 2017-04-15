<?php

	$this->load->view('shared/header');

?>

    <div class="container-fluid">
      <div class="row">

      <?php

      	$this->load->view('shared/menu_user');

      ?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <div class="jumbotron">
     
      	<center><h2>Bem vindo ao sistema de Administração de Militares.</h2></center>
      	<center><h3><span style="color:red;">Obs:</span>Qualquer dúvida ou suporte entrar em contato com a Assessoria de Tecnologia da Informação.</h3></center>
      </div>
      </div>

      </div>
    </div>

<?php

	$this->load->view('shared/footer');

?>