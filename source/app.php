﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EmedWeb Sistema para Clínicas </title>

    <!-- Bootstrap -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link href="https://www.emedweb.com.br/css/style.css" rel="stylesheet" type="text/css" media="all" />
     <link href="https://www.emedweb.com.br/dist/css/animsition.min.css" rel="stylesheet">
    <link href="https://www.emedweb.com.br/css/sandbox.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="azul containerfull drawer drawer--left ">
    <header>
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
          </button>
      
                               
          <?php include("menutopo.php"); ?>

    <div class="topbar">
            <div class="container-fluid">
                   <div class="row">
                       <div class="col-lg-4 col-md-4 col-sm-1 col-xs-2"></div>
                       <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"><a href="https://www.emedweb.com.br/" class="animsition-link"><img src="img/logo_int.png" class="logoint img-responsive center-block" alt="logo internas" title="emedWeb Logo"></a></div>
                       <div class="col-lg-4 col-md-4 col-sm-7 col-xs-10">
                           <div class="teltopo">
                            <span><i class="fa fa-phone-square"></i></span> <span class="num">0800 633-3633</span>
                        </div>
                       </div>
                   </div>
          </div>
    </div>
<div class="clearfix"></div>
<div class="menubar">
        <div class="container">
                <?php include("menufooter.php"); ?>
            </div>
</div>
    </header>
    <div class="clearfix"></div>
     <div class="animsition-overlay">      
    <section id="aplicativo">
        <div class="container">
        <h1> Aplicativo <span>gratuito</span> para download</h1>
        <p>Ao contratar o eMedWeb, você automaticamente já poderá usar o aplicativo gratuitamente para facilitar o seu dia. Nele você terá sua agenda em tempo real ou poderá obter imagens de seus pacientes para vincular em sua ficha médica.</p>
       <div class="row">
           <div class="col-lg-8 col-md-8 col-sm-8 col-xs-6">
               <figure>
                    <img src="img/app_img.png" class="img-responsive animated zoomInDown" title="Download aplicativo EmedMob" alt="Aplicativo emedMob">
               </figure>
           </div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
               <div class="vertical-align">
                <figure>
                        <img src="img/link_download.png" class="img-responsive" title="Download aplicativo EmedMob" alt="Aplicativo emedMob">
                   </figure>
                </div>    
           </div>
       </div>
    </div>
    
    </section>
   
</div>
    <!-- scripts-->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
  <script src="https://use.fontawesome.com/5cb466a7f4.js"></script>
  <script src="https://www.emedweb.com.br/dist/js/drawer.js" charset="utf-8"></script>
  <script scr="https://www.emedweb.com.br/main.js"></script>
<script src="https://www.emedweb.com.br/dist/js/animsition.min.js" charset="utf-8"></script> 
<script>
$(document).ready(function() {
  $('.animsition-overlay').animsition({
  inClass: 'fade-in-down',
  outClass: 'fade-out-up',
  inDuration: 500,
  outDuration: 500,
  linkElement: '.animsition-link',
  })
});

      $(document).ready(function() {
        $('.drawer').drawer();
      });
    </script>

</body>

</html>
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,300,500,600,700" rel="stylesheet">