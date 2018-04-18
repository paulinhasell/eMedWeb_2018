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

<body class="sobre drawer drawer--left containerfull">
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
                               <div class="col-lg-4 col-md-4 col-sm-4 hidden-xs"><a href="https://emedweb.com.br" class="animsition-link"><img src="img/logo_int.png" class="logoint img-responsive center-block" alt="logo internas" title="emedWeb Logo"></a></div>
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
    <section id="emedweb">
        <div class="container">
        <h1> Agendamento com  um <span>Especialista</span></h1>
        </div>
        <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <?
$conexao = mysql_connect ("localhost", "emedweb_mail", "webfoco2012");
mysql_select_db ("emedweb_mail", $conexao);
 
	
require("phpmailer/class.smtp.php");
require("phpmailer/class.phpmailer.php");
$urlSite	= $_POST['urlSite'];
$nome		= $_POST['nome'];
$email		= $_POST['email'];
$tel		= $_POST['tel'];
$ip 		= $_POST['ip'];

if((!$nome) ||(!$email) || (!$tel)){

	echo "<h1> ATENÇÃO ERRO: TODOS OS CAMPOS SÃO OBRIGATÓRIOS !<br> <a href='javascript:window.history.go(-1)' class='semi'>CLIQUE AQUI</a> </h1><br /> <br />";
} else {
// Inicia a classe PHPMailer
$mail = new PHPMailer();


// Define os dados do servidor e tipo de conexão
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "mail.webfocobrasil.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Autenticação
$mail->Username = 'envia@webfocobrasil.com.br';
$mail->Password = 'automatico01';



// Define o remetente
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->From = "$email"; // Seu e-mail
$mail->FromName = "$nome"  ; // Seu nome
$mail->Sender = "envia@webfocobrasil.com.br"; 
//$mail->AddAddress('alessandra.sell@emed.com.br');
$mail->AddAddress("$email", "$nome");
//$mail->AddAddress('comercial.emed@emed.com.br');



// Define os dados técnicos da Mensagem
// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsHTML(true);
//formato o campo da mensagem 


$chave    = trim ($chave);
$urlSite = trim($_POST['urlSite']);
$nome = trim($_POST['nome']);
$tel = trim($_POST['tel']);
$email = trim ( $_POST['email']);
$ip = trim($_POST['ip']);
$chave      = md5($email);


$sql = "insert into cadastro ( id, nome, email, tel, chave, ip ) ";
$sql .= "values ('', '$nome','$email','$tel','$chave','$ip')";

    if( ! mysql_query( $sql ) ) {
        echo "Houve um erro inserindo o registro tente novamente ".mysql_error( );
    } else {       



//formato o campo da mensagem 
$mail->Subject = "Agendamento com um Especialista - eMedWeb ";
$mail->AltBody = "Esta Mensagem está em HTML";
$body = "Ola $nome<br/><br/>
			Para confirmar seu cadastro, por favor, clique no link abaixo:<br/>
			<a href='$urlSite/cadastroConfirmado.php?token=$chave'>Clique aqui para confirmar seu cadastro</a><br/><br/>
			Se nao tiver sido voce ou nao desejar confirmar o cadastro, apenas desconsidere esta mensagem<br/><br/>
			Obrigado!<br/> Equipe eMed";
$mail->MsgHTML($body);
	
	if($mail->Send())
		$msg = "
		<div class='alert alert-danger semi' role='alert'><center><h1>Olá, $nome </h1>
				Você receberá um e-mail para VALIDAR seu cadastro.<br/>
				Valide seu cadastro para garantir sua consulta com um especialista.<br/><br/>
                Somente CADASTROS CONFIRMADOS serão atendidos. Obrigado.<br><p class='semi center-block'>Equipe eMed</p>
                <p>IMPORTANTE - VERIFIQUE SUA CAIXA DE LIXO ELETRÔNICO ou SPAM caso o e-mail de validação não esteja na caixa de entrada</p>
                </center></div>";
	else
		$msg = " <div class='alert alert-danger semi' role='alert'><center><h1>Dados não enviados</h1>
				Por favor, Digite um email válido.</center></div>";
// mensagem do antigo emedweb 
$mail->ClearAllRecipients();
$mail->ClearAttachments();

	}
}		
?>
<div>
	<?php
		if(isset($msg))
		echo "$msg";
	?>

	
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
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
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

      $('.statistic-counter_two, .statistic-counter, .count-number').counterUp({
                delay: 10,
                time: 2000
            });
    </script>
</body>

</html>
<link href="https://fonts.googleapis.com/css?family=Encode+Sans+Semi+Expanded:100,300,500,600,700" rel="stylesheet">