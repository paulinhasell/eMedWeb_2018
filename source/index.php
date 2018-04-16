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
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="dist/css/animsition.min.css" rel="stylesheet">
    <link href="css/sandbox.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="drawer drawer--left">
    <div>
    <header>
            <button type="button" class="drawer-toggle drawer-hamburger">
                    <span class="sr-only">toggle navigation</span>
                    <span class="drawer-hamburger-icon"></span>
                  </button>
              
                  <nav class="drawer-nav" role="navigation">
                    <ul class="drawer-menu">       
                      <li><img src="img/logo_int.png" class="center-block top10"></li>
                   <br>
                     
                      <li><a class="drawer-menu-item animsition-link" href="sobre.php">Porque usar o eMedWeb?</a></li>
                      <li><a class="drawer-menu-item animsition-link" href="app.php">Aplicativo Gratuito</a></li>
                      <li><a class="drawer-menu-item animsition-link" href="vantagens.php">Vantagens Imbatíveis</a></li>
                      <li><a class="drawer-menu-item animsition-link" href="adicionais.php">Adicionais Exclusivos</a></li>
                      <li><a class="drawer-menu-item animsition-link" href="clientes.php">Depoimentos</a></li>
                      <li><a class="drawer-menu-item animsition-link" href="contato.php">Sobre Nós</a></li>
                      <hr>
                      <div class="bg-green">
                      <li><a class="drawer-menu-item animsition-link boldI" href="index.php">Cadastre-se e receba contato de um especialista</a></li>
                    </div>
                      <hr>
                    </ul>
                  </nav>
            
        <div class="topbar">
               
                <div class="container-fluid">
                       <div class="row">
                           <div class="col-lg-8 col-md-8 col-sm-6 col-xs-2">                
                           </div>
                           
                           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-10">
                               <div class="teltopo">
                                <span><i class="fa fa-phone-square"></i></span> <span class="num">0800 633-3633</span>
                            </div>
                           </div>
                       </div>
              </div>
        </div>
    </header>
    <section id="home" class="animsition-overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo">
                        <img src="img/logo_topo.png" alt="logo eMedweb" title="logo EmedWeb">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="row">
                       
                        <div class="col-xs-12">
                            <h1>O melhor e mais completo sistema do  mercado.<br> Lucratividade já nas <span>primeiras semanas.</span></h1>
                        </div>
                    </div>
                    <div class="row top20">
                                                         
                            
                            <div class="col-xs-12">
                                    <img src="img/seta_form.png" alt="emedweb" title="seta formulario" class="img-responsive pull-left"> 
                                    <h2>Descubra <span>AGORA</span> o verdadeiro potencial de sua clínica</h2>
                                    <div class="pull-left col-xs-11 top10">
                                            <form action="e_propostaCheck.php" method="post">
                                       <div class="bloco">
                                           <div class="full">
                                                    <input type="text" class="form-control" id="nome" placeholder="*Nome Completo">
                                            </div>        
                                       </div> 
                                       <div class="bloco">          
                                                    <input type="text" class="form-control meio_e" id="email" placeholder="*Seu e-mail">
                                                    <input type="text" class="form-control meio_d" id="tel" placeholder="*Seu celular">
                                        </div>                                                 
                                        <div class="bloco">               
                                         <button type="submit" class="btn btn-success full">QUERO RECEBER O CONTATO DE UM ESPECIALISTA</button>
                                       </div>
                                            </form>            
                                         
                                    </div>
                                    <div class="col-xs-11">
                                            <p><i class="fa fa-heart animated infinite pulse"></i> Restam apenas <span>50 </span> Vagas</p>
                                    </div>
                      
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clearfix">
     
   
   </div>
    <!-- scripts-->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.js"></script>
    <script src="https://use.fontawesome.com/5cb466a7f4.js"></script>
    <script src="dist/js/drawer.js" charset="utf-8"></script>
    <script scr="main.js"></script>

<script src="dist/js/animsition.min.js" charset="utf-8"></script> 
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