﻿<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EmedWeb Sistema para Clínicas</title>       
    <link href="https://www.emedweb.com.br/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.emedweb.com.br/dist/css/animsition.min.css" rel="stylesheet">
    <link href="https://www.emedweb.com.br/css/sandbox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.emedweb.com.br/css/jquery.mCustomScrollbar.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="containerfull drawer drawer--left">
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

    </header>
    <div class="clearfix"></div>
     <div class="animsition-overlay">      
    <section id="contato">
        <div class="container">
            <div class="col-md-12">
            <h1> Há <span> 18 anos</span> criamos soluções <span>inovadoras</span> para o setor da saúde</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2></h2>
                <p>
                    A <span>EMED Tecnologia</span> tem seu foco dedicado à soluções para gestão de clínicas médicas. No mercado desde o ano 2000, é pioneira no uso do conceito de um sistema online que pode ser totalmente acessado de qualquer lugar através da Internet.
                </p>
                <h2>Missão</h2>
                <p>Nossa missão é ser um agente de transformação, criando soluções de tecnologia que ajudem aos nossos Clientes da área Saúde prestarem melhores serviços</p>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2>Tecnologia Própria</h2>
                <p>A <span>EMED</span> provê totalmente suas soluções informatizadas através de equipe própria de consultores e desenvolvedores. Esta estrutura permite uma evolução constante dos produtos e serviços oferecidos permitindo agilidade quando se faz necessária alguma customização.</p>
                <h2></h2>
                <p><img src="img/logo_emed.jpg"> <a href="https://www.emed.com.br">| Visite nosso site</a></p>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="rodape">

                </div>
            </div>
        </div>

        
    </div>        
    </section>
</div>
     <!-- scripts-->
  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
  <script src="https://use.fontawesome.com/5cb466a7f4.js"></script>
  <script src="https://www.emedweb.com.br/dist/js/drawer.js" charset="utf-8"></script>
  
  <script src="https://www.emedweb.com.br/js/jquery.mCustomScrollbar.concat.min.js"></script>
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
     
    
		(function($){
			$(window).load(function(){
				
				
				
				$("#depoimentos").mCustomScrollbar({
					theme:"rounded-dots",
					scrollInertia:300
				});
				
				
				
				
				
				
				
			});
		})(jQuery);
	
    </script>

</body>

</html>
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,300,500,600,700" rel="stylesheet">