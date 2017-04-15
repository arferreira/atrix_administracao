<?php

	$this->load->view('shared/header');

?>

    <div class="container-fluid">
      <div class="row">

      <?php

      	$this->load->view('shared/menu_sidebar');

      ?>

      <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <br /><br />
         <table class="table table-bordered">
                <tr style="font-weight: bold;">
                        <td width="20%">Nome Completo</td>
                        <td width="40%">Endere&ccedil;o</td>
                        <td width="15%">E-mail</td>
                        <td width="5%">Telefone</td>
                        <td width="5%">&nbsp;</td>
                </tr>
                
                <?php
                        //Preenche a tabela com o array $pessoas que vem do controller
                        foreach($militares as $militar){
                          ?>

                          <tr>
                            <td><?php echo $militar->pesnguerra;  ?></td>
                            <td><?php echo $militar->pesemail;  ?></td>
                            <td><?php echo $militar->peslocaltrabalho;  ?></td>
                            <td><?php echo $militar->pescodigo;  ?></td>
                            <td><?php echo $militar->pesnguerra;  ?></td>
                          </tr>

                          <?php
                                
                        }
                ?>
                
                </table>
      </div>

      </div>
    </div>

<?php

	$this->load->view('shared/footer');

?>