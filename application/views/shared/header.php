<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="3S Ricardo Souza">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $titulo; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('dist/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url('assets/css/ie10-viewport-bug-workaround.css'); ?>" rel="stylesheet">

    <link href="<?php echo base_url('new.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('dashboard.css'); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js'); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
       /* Toggle Styles */
 
 #wrapper {
    padding-left: 0;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    overflow: hidden;
}
 
#wrapper.toggled {
    padding-left: 250px;
    overflow: scroll;
}
 
#sidebar-wrapper {
    z-index: 1000;
    position: absolute; 
    left: 250px;
    width: 0;
    height: 100%;
    margin-left: -250px;
    overflow-y: auto;
    background: #000;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}
#wrapper.toggled #sidebar-wrapper {
    width: 250px;
}
 
#page-content-wrapper {
    position: absolute;
    padding: 15px;
    width: 100%;  
    overflow-x: hidden; 
}
.xyz{
    min-width: 360px;
}
#wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0px; 
}
.fixed-brand{
    width: auto;
}
/* Sidebar Styles */
 
.sidebar-nav {
    position: absolute;
    top: 0;
    width: 250px;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-top: 2px;
}
 
.sidebar-nav li {
    text-indent: 15px;
    line-height: 40px;
}
 
.sidebar-nav li a {
    display: block;
    text-decoration: none;
    color: #999999;
}
 
.sidebar-nav li a:hover {
    text-decoration: none;
    color: #fff;
    background: rgba(255,255,255,0.2);
    border-left: red 2px solid;
}
 
.sidebar-nav li a:active,
.sidebar-nav li a:focus {
    text-decoration: none;
}
 
.sidebar-nav > .sidebar-brand {
    height: 65px;
    font-size: 18px;
    line-height: 60px;
}
 
.sidebar-nav > .sidebar-brand a {
    color: #999999;
}
 
.sidebar-nav > .sidebar-brand a:hover {
    color: #fff;
    background: none;
}
.no-margin{
    margin:0;
}
 
@media(min-width:768px) {
    #wrapper {
        padding-left: 250px;
    }
    .fixed-brand{
        width: 250px;
    }
    #wrapper.toggled {
        padding-left: 0;
    }
 
    #sidebar-wrapper {
        width: 250px;
    }
 
    #wrapper.toggled #sidebar-wrapper {
        width: 250px;
    }
    #wrapper.toggled-2 #sidebar-wrapper {
        width: 50px;
    }
    #wrapper.toggled-2 #sidebar-wrapper:hover {
        width: 250px;
    }
 
 
    #page-content-wrapper {
        padding: 20px;
        position: relative;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
    }
 
    #wrapper.toggled #page-content-wrapper {
        position: relative;
        margin-right: 0;
        padding-left: 250px;
    }
    #wrapper.toggled-2 #page-content-wrapper {
        position: relative;
        margin-right: 0;
        margin-left: -200px;
        -webkit-transition: all 0.5s ease;
        -moz-transition: all 0.5s ease;
        -o-transition: all 0.5s ease;
        transition: all 0.5s ease;
        width: auto;
 
    }
}
    </style>

    <script type="text/javascript">
        function mascaraData(val) {
  var pass = val.value;
  var expr = /[0123456789]/;

  for (i = 0; i < pass.length; i++) {
    // charAt -> retorna o caractere posicionado no índice especificado
    var lchar = val.value.charAt(i);
    var nchar = val.value.charAt(i + 1);

    if (i == 0) {
      // search -> retorna um valor inteiro, indicando a posição do inicio da primeira
      // ocorrência de expReg dentro de instStr. Se nenhuma ocorrencia for encontrada o método retornara -1
      // instStr.search(expReg);
      if ((lchar.search(expr) != 0) || (lchar > 3)) {
        val.value = "";
      }

    } else if (i == 1) {

      if (lchar.search(expr) != 0) {
        // substring(indice1,indice2)
        // indice1, indice2 -> será usado para delimitar a string
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }

    } else if (i == 4) {

      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
        continue;
      }

      if ((nchar != '/') && (nchar != '')) {
        var tst1 = val.value.substring(0, (i) + 1);

        if (nchar.search(expr) != 0)
          var tst2 = val.value.substring(i + 2, pass.length);
        else
          var tst2 = val.value.substring(i + 1, pass.length);

        val.value = tst1 + '/' + tst2;
      }
    }

    if (i >= 6) {
      if (lchar.search(expr) != 0) {
        var tst1 = val.value.substring(0, (i));
        val.value = tst1;
      }
    }
  }

  if (pass.length > 10)
    val.value = val.value.substring(0, 10);
  return true;
}



    </script>

  <body>

  <?php

  	$this->load->view('shared/menu_topo');


  ?>