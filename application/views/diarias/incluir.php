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
        <br />
     
        <br /><br />


          <form action="<?php echo base_url('diarias/cadastrar'); ?>" method="post" class="form-inline">
          <a href="javascript:history.back()" class="btn btn-warning">Voltar</a>
          <input type="submit" value="Gerar OS" name="gerar" class="btn btn-danger pull-right" />
          <div class="alert alert-warning" role="alert">
            <h5>I- DETERMINAÇÃO:</h5>
            <span>Determino ao militar/servidor civil abaixo que realize o serviço especificado, fora da sede desta OM, nas condições seguintes: </span> 
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">¹Subcentro de Custo:</label><br />
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="sc"  style="">
            </div>
            <br /><br />
            <div class="form-group">
              <label for="exampleInputEmail1">POSTO/GRAD/NOME:</label><br />
              <input type="text" class="form-control" id="exampleInputEmail1" placeholder="2 - <?php echo $posto_grad[ 'pgabrev'].' '.$nome_completo; ?>" value="<?php echo $posto_grad[ 'pgabrev'].' '.$nome_completo; ?>" name="posto_grad_nome" style="width:600px;">
            </div>

            <br /><br />

            <div class="form-group">
            <label for="exampleInputName2">Saram:</label><br />
            <input type="text" class="form-control" name="saram" id="exampleInputName2" placeholder="3 - <?php echo $saram; ?>" value="<?php echo $saram; ?>" >
            </div>

            <div class="form-group">
            <label for="exampleInputName2">CPF:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="cpf" placeholder="4 - <?php echo $cpf; ?>" value="<?php echo $cpf; ?>">
            </div>
            <br />
            <div class="form-group">
            <label for="exampleInputName2">Banco:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="banco" placeholder="5 - Banco">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Agência:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="agencia" placeholder="6 - Agência">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Conta:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="conta" placeholder="7 - Conta">
            </div>

             <div class="form-group">
            <label for="exampleInputName2">Email:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="email" placeholder="8 - <?php echo $email; ?>" value="<?php echo $email; ?>" >
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Data Nascimento:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="data_nascimento" placeholder="9 - <?php echo date('d/m/Y', strtotime($data_nascimento)); ?>" value="<?php echo $data_nascimento; ?>">
            </div>
            <br />
            <div class="form-group">
            <label for="exampleInputName2">Enquadramento Legal:</label><br />
            <input type="text" class="form-control" id="" name="amparo" placeholder="10 - Art.18 do Dec. 4.307 de 18/07/2002 e Portaria nº 1348/GC4, de 3 set 2015."  style="width:550px;">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Identidade:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="identidade" placeholder="11 - <?php echo $identidade; ?>"  style="width:120px;" value="<?php echo $identidade; ?>">
            </div>


            <div class="form-group">
            <label for="exampleInputName2">OM:</label><br />
            <!--<input type="text" class="form-control" id="exampleInputName2" name="unidade" placeholder="12 - <?php echo $om['omabrev']; ?>"  style="width:120px;" value="<?php echo $om['omabrev']; ?>">-->
            <select name="unidade" class="form-control">
              <option name="unidade" value="ALA 5">Selecione a Unidade</option>
              <option name="unidade" value="ALA 5">ALA 5</option>
              <option name="unidade" value="GAPCG">GAPCG</option>
            </select>
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Telefone:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="telefone" placeholder="13 - <?php echo $telefone; ?>"  style="" value="<?php echo $telefone; ?>">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Serviço a Realizar:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="servico" placeholder="14 - Serviço a realizar"  style="width:995px;">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">Documentos que Originaram a Missão:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="documentos_origem" placeholder="15 - Documentos que Originaram a Missão"  style="width:550px;">
            </div>

            <div class="form-group">
            <label for="exampleInputName2">NE:</label><br />
            <input type="text" class="form-control" id="exampleInputName2" name="ne" placeholder="16 - NE"  style="width:120px;">

            </div>

            <div class="form-group">
            <label for="exampleInputName2">17 - Missão em Proveito:</label><br />

              <input type="radio" name="missao_proveito" id="optionsRadios1" value="u" >
              UNIÃO&nbsp;&nbsp;&nbsp;
              <input type="radio" name="missao_proveito" id="optionsRadios1" value="p" >
              PRÓPRIA&nbsp;&nbsp;&nbsp;
     
          </div>
          <br />

          <div class="form-group">
            <label for="exampleInputName2">18 - Custeio:</label><br />

              <input type="radio" name="custeio" id="optionsRadios1" value="s" >
              SEM CUSTO&nbsp;&nbsp;&nbsp;
              <input type="radio" name="custeio" id="optionsRadios1" value="d" >
              DIÁRIA&nbsp;&nbsp;&nbsp;
              <input type="radio" name="custeio" id="optionsRadios1" value="c" >
              COMISSIONAMENTO&nbsp;&nbsp;&nbsp;
          
          </div>
          <hr />

          <div class="form-group">
            <label for="exampleInputName2">19 - Local de Realização de Serviço(Cidade):</label><br />

              <input type="text" class="form-control" id="exampleInputName2" name="sv1" placeholder=""  style="width:995px;">
              <br />
              <label for="exampleInputName2">Loca(is) de Pernoite:</label><br />
              <input type="text" class="form-control" id="exampleInputName2" name="pernoite" placeholder=""  style="width:995px;">

              <br />
               <label for="exampleInputName2">Afastamento de Sede:</label><br />
               <td>Início: &nbsp;&nbsp;<input type="text" class="form-control" id="exampleInputName2" name="sv1datai" maxlength="10" onkeypress="mascaraData(this)" placeholder="Data" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora1" name="sv1horai" placeholder="Hora" style="width:80px;"></td> 
          <td>Término: &nbsp;&nbsp;<input type="text" class="form-control" id="exampleInputName2" name="sv1dataf" maxlength="10" onkeypress="mascaraData(this)" placeholder="Data" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text"  class="form-control" id="hora2" name="sv1horaf"  placeholder="Hora" style="width:80px;" ></td>
              
          </div>
          <hr />

          <!--
          <table class="table table-bordered"> 
          <thead> 
          <tr> 
          
          <th>19 - Local de Realização de Serviço(Cidade):</th> 
          <th>20 - Início<br />
          Data/Hora
          </th> 
          <th>21 - Término<br />
          Data/Hora
          </th> 
          </tr> 
          </thead> 
          <tbody> 
          <tr> 
          
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv1" placeholder="Rio de Janeiro/RJ"  style="width:100%;" maxlength=""></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv1datai" maxlength="10" onkeypress="mascaraData(this)" placeholder="Data" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora1" name="sv1horai" placeholder="Hora" style="width:80px;"></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv1dataf" maxlength="10" onkeypress="mascaraData(this)" placeholder="Data" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text"  class="form-control" id="hora2" name="sv1horaf"  placeholder="Hora" style="width:80px;" ></td> 
          </tr> 
          <tr> 
          
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv2" placeholder="Rio de Janeiro/RJ"  style="width:100%;" maxlength="20"></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv2datai" maxlength="10" onkeypress="mascaraData(this)" placeholder="Data" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora3" name="sv2horai" placeholder="Hora" style="width:80px;"></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv2dataf" placeholder="Data" maxlength="10" onkeypress="mascaraData(this)" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora4" name="sv2horaf" placeholder="Hora" style="width:80px;"></td> 
          </tr> 
          <tr> 
          
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv3" placeholder="Rio de Janeiro/RJ"  style="width:100%;" maxlength="20"></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv3datai" placeholder="Data" maxlength="10" onkeypress="mascaraData(this)" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora5"  name="sv3horai" placeholder="Hora" style="width:80px;"></td> 
          <td><input type="text" class="form-control" id="exampleInputName2" name="sv3dataf" placeholder="Data" maxlength="10" onkeypress="mascaraData(this)" style="width:99px;">&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" class="form-control" id="hora6" name="sv3horaf" placeholder="Hora" style="width:80px;"></td> 
          </tr> 
          </tbody> 
          </table>
          -->
          <hr />

            <br />
            <div class="form-group">
            <label for="exampleInputName2">22 - Adicional de Deslocamento:</label><span>(A § 1.º do art. 20 do Decreto n.º 4.307/2002, alterado pelo Decreto n.º 6.907/2009)</span><br />
            <input type="radio" name="adicional_deslocamento" id="optionsRadios1" value="s" >
              SIM&nbsp;&nbsp;&nbsp;
              <input type="radio" name="adicional_deslocamento" id="optionsRadios1" value="n" >
              NÃO&nbsp;&nbsp;&nbsp;
            <br />
            <span>Total de Acréscimos:
            </span>
            <input type="text" name="total_acrescimos" maxlength="2" style="width:40px;" />
            <input type="radio" name="acrescimos" id="optionsRadios1" value="diaria_completa" >
              Diária Completa&nbsp;&nbsp;&nbsp;
              <input type="radio" name="acrescimos" id="optionsRadios1" value="meia_diaria" >
              1/2 Diária&nbsp;&nbsp;&nbsp;

            </div>
            <hr />
            <br />
            <br />
            <div class="form-group">
            <label for="exampleInputName2">23 - Valor Total:</label><span>(Diária + Adc. Deslocamento)</span><br />
            
          
            <br />
              <input type="radio" name="valor_total_radio" id="optionsRadios1" value="s" >
              Sem Custo&nbsp;&nbsp;&nbsp; <br /><br />
              R$<input type="text" name="valor_total_extenso" id="optionsRadios1" value="" >
              

            </div>
            <hr />
            <br /><br />
            <br />
            <div class="form-group">
            <label for="exampleInputName2">24 - Aux. Transporte:</label><br />
            <input type="radio" name="aux_transporte" id="optionsRadios1" value="s" >
              SIM&nbsp;&nbsp;&nbsp;
              <input type="radio" name="aux_transporte" id="optionsRadios1" value="n" >
              NÃO&nbsp;&nbsp;&nbsp;
            <br />
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="form-group">
            <label for="exampleInputName2">25 - Aux. Alimentação:</label><br />
            <input type="radio" name="aux_alimentacao" id="optionsRadios1" value="s" >
              SIM&nbsp;&nbsp;&nbsp;
              <input type="radio" name="aux_alimentacao" id="optionsRadios1" value="n" >
              NÃO&nbsp;&nbsp;&nbsp;
            <br />
            

            </div>

            <hr />
            <br />
            <br />
            <div class="form-group" style="width:100%;">
            <label for="exampleInputName2">Justificativa da Missão em final de semana/feriado, de acordo com o Art. 5º, § 2º do Decreto Nº 5.992:</label><br />
            <input type="text" class="form-control" id="" name="just_missao" placeholder="26 - Justificativa da Missão em final de semana/feriado, de acordo com o Art. 5º, § 2º do Decreto Nº 5.992"  style="width:100%;">
            </div>
            <hr />
            <br />
            <br />
            <div class="form-group" style="width:100%;">
            <label for="exampleInputName2">Justificativa da Conveniência do Serviço(Inciso 2.1.3 da ICA 177-42):</label><br />
            <input type="text" class="form-control" id="" name="just_conv" placeholder="27 - Justificativa da Conveniência do Serviço(Inciso 2.1.3 da ICA 177-42)"  style="width:100%;">
            </div>
            <hr />
            <br />
            <br />
            <div class="form-group" style="width:100%;">
            <label for="exampleInputName2">Justificativa conforme o Art. 1º da Portaria 1348/GC4:</label><br />
            <input type="text" class="form-control" id="" name="justificativa" placeholder="28 - Justificativa conforme o Art. 1º da Portaria 1348/GC4"  style="width:100%;">
            </div>

            <hr />
<!--
            <div class="alert alert-warning" role="alert">
            <h5>II- ³³ FICHA DE APRESENTAÇÃO DE CONCESSÃO DE DIÁRIAS(FACD):</h5>
            </div>

            <div class="row" style="padding:10px;">
              
               <div class="col-md-1" style="width:100%; border:3px solid #ccc;">
                 <strong>

                 <p style="margin-top:5px;">
                 Ocorreram, por motivo de força maior, alterações no local de realização do serviço e/ou nas datas de início/retorno autorizados inicialmente?
                 </p></strong>
                 <br />
                 <input type="radio" name="alteracao_servico" id="optionsRadios1" value="s" >
                  SIM&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="alteracao_servico" id="optionsRadios1" value="n" >
                  NÃO&nbsp;&nbsp;&nbsp;
               </div>

            </div>

            <div class="row" style="padding:10px;">
              
               <div class="col-md-1" style="width:100%; border:3px solid #ccc;">
               <center>
                <strong>

                 <p style="margin-top:5px;">
                 Cômputo de Diárias Acréscimos - Por Localidade
                 </p>
                 </strong>
                 </center>

                 <table class="table">
    <caption>
       
    </caption>
    <thead>
        <tr>
            <th>
                Valor
            </th>
            <th>
                Cidades
            </th>
            <th>
                Quantidade
            </th>
            <th>
                Subtotal
            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <th scope="row">
               <input type="text" />
            </th>
            <td>
                Brasília, Manaus, Rio de Janeiro 
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <input type="text" />
            </th>
            <td>
                Belo Horizonte, Fortaleza, Porto Alegre, Recife, Salvador e São Paulo
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <input type="text" />
            </th>
            <td>
                Demais Capitais de Estados
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <input type="text" />
            </th>
            <td>
                Demais Cidades
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
    </tbody>
</table>
               </div>
               </div>

               <div class="row" style="padding:10px;">
              
               <div class="col-md-1" style="width:100%; border:3px solid #ccc;">
               <center>
                <strong>

                 <p style="margin-top:5px;">
                 Acréscimos de Deslocamento:
                 </p>
                 </strong>
                 </center>

                 <table class="table">
    <caption>
       
    </caption>
    <thead>
        <tr>
            <th>
                Valor Diário
            </th>
            <th>
                Cômputo de Descontos:
            </th>
            <th>
                Dias Úteis
            </th>
            <th>
                Subtotal
            </th>
        </tr>
    </thead>
    <tbody>
    <tr>
            <th scope="row">
               0
            </th>
            <td>
                Auxílio Alimentação - Valor Líquido Mensal: R$ 0
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        <tr>
            <th scope="row">
                0
            </th>
            <td>
                Auxílio Transporte - Valor Líquido Mensal: R$ 0
            </td>
            <td>
                <input type="text" />
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        <tr>
        <th>
          Publique-se:<br />
               Campo Grande/MS<br />
               ___/___/______
        </th>
            <th>
               __________________________________________________<br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ordenador de Despesas do GAP-CG
            </th>
            
            <td>
                Total
            </td>
            <td>
                <input type="text" />
            </td>
        </tr>
        
    </tbody>
</table>
               </div>
               </div>
               <hr />
            <div class="alert alert-warning" role="alert">
            <h5>III- ³² Homologação:</h5>
            </div>

            <div class="row" style="padding:10px;">
              
               <div class="col-md-1" style="width:100%; border:3px solid #ccc; padding:15px;">
               <p>a) Homologo a concessão de diárias</p>
               <p>
               b) 1.( ) Conforme previsto na presente Ordem de Serviço.<br />
                  2.( ) Conforme a seguir, por motivo de força maior:<br />
                  1/2 diária - Qtd: ( ) referente a localidade de ____________________________<br />
                  Diária completa - Qtd: ( ) referente a pernoite(s) em ______________________<br />
                  N⁰ total de acréscimos: _____________________________________________<br />
                  3. Restituição a efetuar Sim( ) Não( ) Valor: R$ __________________________<br />
               
               </p>
               <p>
                 c) Publique-se: ____________________________________________________  
               </p>

               </div>

            </div>
-->
            <div class="alert alert-danger" role="alert">
            <h5>Observação:</h5><br/>
            <p>Confirme todos os dados e clique acima do formulário no botão <strong>"Gerar OS"</strong>.</p>
            </div>

          </form>

  

         </div> 
        </div>

      </div>

      </div>
    </div>

 

<?php

	$this->load->view('shared/footer');

?>