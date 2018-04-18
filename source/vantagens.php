<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>EmedWeb Sistema para Clínicas</title>

    <!-- Bootstrap -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link href="https://www.emedweb.com.br/css/style.css?v2" rel="stylesheet" type="text/css" media="all" />
    <link href="https://www.emedweb.com.br/dist/css/animsition.min.css" rel="stylesheet">
    <link href="https://www.emedweb.com.br/css/sandbox.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="vermelho containerfull drawer drawer--left">
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
    <section id="vantagens">
        <div class="container">
        <h1> Vantagens <span>imbatíveis</span> para sua Clínica</h1>

        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-3 hidden-xs">
                <figure>
                    <img src="img/foguete.png" class="img-responsive animated zoomInDown" alt="Vantagens imbativeis" title="vantagens emedWeb">
                </figure>
            </div>
            
                   
            
            <div class="col-lg-7 col-md-7 col-sm-9 hidden-xs">
                <div class="row top10">
                    <div class="col-xs-2">
                        <div class="boxicon">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <h2>Agenda</h2>
                        <p>Gerencie o cadastro dos seus pacientes e sua agenda profissional com seus horários e diversos recursos que permitem o controle da sua rotina de forma organizada e otimizada</p>
                        </div>
                </div>
                <div class="row top10">
                        <div class="col-xs-2">
                            <div class="boxicon">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                        </div>
                        <div class="col-xs-10">
                            <h2>Prontuário Eletronico</h2>
                            <p>Esqueça as fichas de papel e leve seus prontuários para dentro do sistema da eMed. Vários tipos de fichas médicas como Receituário, Anamnese, Evolução, e o melhor: totalmente personalizável.</p>
                            </div>
                    </div>
                    <div class="row top10">
                            <div class="col-xs-2">
                                <div class="boxicon">
                                    <i class="fa fa-newspaper-o"></i>
                                </div>
                            </div>
                            <div class="col-xs-10">
                                <h2>Relatórios</h2>
                                <p>Tenha um controle gerencial das informações que você coloca dentro do sistema a partir da extração de relatórios diversos como agendamentos, perfil dos pacientes e vários outros</p>
                                </div>
                        </div>
                        <div class="row top10">
                                <div class="col-xs-2">
                                    <div class="boxicon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div class="col-xs-10">
                                    <h2>Fácil e Rápido</h2>
                                    <p>Após contratar, o sistema é configurado e liberado em até 48h para uso, e você já pode acessar os tutoriais de treinamento e trabalhar com todos os recursos do eMedWeb</p>
                                    </div>
                            </div>    
            </div>
            <div class="visible-xs">

                    <div id="carousel-vantagens" class="carousel slide" data-ride="carousel">                    
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                              <div class="item active">
                                    <span class="boxicon">
                                            <i class="fa fa-calendar"></i></span> <h2>Agenda</h2>
                              
                                    
                                    <p>Gerencie o cadastro dos seus pacientes e sua agenda profissional com seus horários e diversos recursos que permitem o controle da sua rotina de forma organizada e otimizada</p>
                                
                              </div>
                              <div class="item">
                                    <span class="boxicon">
                                            <i class="fa fa-calendar-o"></i></span> <h2>Prontuário Eletronico</h2>
                              
                                    
                                    <p>Esqueça as fichas de papel e leve seus prontuários para dentro do sistema da eMed. Vários tipos de fichas médicas como Receituário, Anamnese, Evolução, e o melhor: totalmente personalizável.</p>
                                
                                </div>
                                <div class="item">
                                        <span class="boxicon">
                                                <i class="fa fa-newspaper-o"></i></span> <h2>Relatórios</h2>
                                  
                                        
                                        <p>Tenha um controle gerencial das informações que você coloca dentro do sistema a partir da extração de relatórios diversos como agendamentos, perfil dos pacientes e vários outros</p>
                                    
                                 </div>
                                    <div class="item">
                                            <span class="boxicon">
                                                    <i class="fa fa-clock-o"></i></span> <h2>Fácil e Rápido</h2>                                  
                                            
                                            <p>Gerencie o cadastro dos seus pacientes e sua agenda profissional com seus horários e diversos recursos que permitem o controle da sua rotina de forma organizada e otimizada</p>
                        
                                        </div>
                              </div>
                            </div>
                          
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-vantagens" role="button" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-vantagens" role="button" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
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