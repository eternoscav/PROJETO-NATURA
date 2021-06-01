<!DOCTYPE html>
<html lang="en">
<!--
	Bent - Inicializar modelo de página Landing por Dcrazed
	Site: https://dcrazed.com/bent-app-landing-page-template/
	Free for personal and commercial use under GNU GPL 3.0 license.
-->

<head>
<link rel="shortcut icon" href="http://www.naturams.com.br/favicon.ico"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Natura MS</title>
    <!-- Google Fonte -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:500,600,700,800,900,400,300' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- inicialização -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carrossel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">


    <!-- Pixeden Icone Fonte -->
    <link rel="stylesheet" href="css/Pe-icon-7-stroke.css">

    <!-- Font impressionante -->
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <!-- Foto bonita -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <!-- Responsivo CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- HTML5 Shim e Respond.js IE8 suporte de elementos HTML5 e consultas de mídia -->
    <!-- AVISO: Respond.js não funciona se você visualizar a página por meio do arquivo:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<script language="JavaScript">

 function mascara(t, mask){
 var i = t.value.length;
 var saida = mask.substring(1,0);
 var texto = mask.substring(i)
 if (texto.substring(0,1) != saida){
 t.value += texto.substring(0,1);
 }
 }
 </script>

<?php


if (isset($_POST['BTEnvia'])) {
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject']; 
	$mesage = $_POST['mesage'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "naturams@naturams.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "eternoscavaleiros@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_assunto = "NaturaMS E-mail"; // Este será o assunto da mensagem
	$email_erro = "NaturaMS Erro Cupom"; // Este será o assunto da mensagem
	//====================================================
	
	//Monta o Corpo da Mensagem
	//====================================================
	$email_conteudo = "Nome = $name \n"; 
	$email_conteudo .= "Email = $email \n";
	$email_conteudo .= "Telefone = $subject \n"; 
	$email_conteudo .= "Mensagem = $message \n";
	//====================================================

	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if ($name <> null) {
			if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
						echo "</b>E-Mail enviado com sucesso!</b>"; 
				} 
			else{ 
						echo "</b>Falha no envio do E-Mail!</b>"; } 
				 
	
	}
}elseif (isset($_POST['BTErro1'])){
//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$codigo1 = $_POST['codigo1'];
	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "naturams@naturams.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "eternoscavaleiros@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_erro = "NaturaMS Erro Cupom"; // Este será o assunto da mensagem
	//====================================================
		
 	//Erro Cupom
	$email_cupom = "Código = $codigo1 \n"; 
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if ($name == null) {
			if (mail ( $email_destinatario, $email_erro, $email_cupom,  $email_headers)){ 
						echo "</b>Erro enviado com Sucesso!</b>"; 
				} 
			else{ 
						echo "</b>Falha no envio do E-Mail!</b>"; } 
				 
	//====================================================
	}
}elseif (isset($_POST['BTErro2'])){
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$codigo2 = $_POST['codigo2'];

	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "naturams@naturams.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "eternoscavaleiros@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_erro = "NaturaMS Erro Cupom"; // Este será o assunto da mensagem
	//====================================================
		
	//Erro Cupom
	$email_cupom = "Código = $codigo2 \n"; 
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if ($name == null) {
			if (mail ( $email_destinatario, $email_erro, $email_cupom,  $email_headers)){ 
						echo "</b>Erro enviado com Sucesso!</b>"; 
				} 
			else{ 
						echo "</b>Falha no envio do E-Mail!</b>"; } 
				 
	//====================================================
	}
}elseif (isset($_POST['BTErro3'])){
	
	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$codigo3 = $_POST['codigo3'];

	//====================================================
	
	//REMETENTE --> ESTE EMAIL TEM QUE SER VALIDO DO DOMINIO
	//==================================================== 
	$email_remetente = "naturams@naturams.com.br"; // deve ser uma conta de email do seu dominio 
	//====================================================
	
	//Configurações do email, ajustar conforme necessidade
	//==================================================== 
	$email_destinatario = "eternoscavaleiros@hotmail.com"; // pode ser qualquer email que receberá as mensagens
	$email_reply = "$email"; 
	$email_erro = "NaturaMS Erro Cupom"; // Este será o assunto da mensagem
	//====================================================
		
	//Erro Cupom
	$email_cupom = "Código = $codigo3 \n"; 
	
	//Seta os Headers (Alterar somente caso necessario) 
	//==================================================== 
	$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
	//====================================================
	
	//Enviando o email 
	//==================================================== 
	if ($name == null) {
			if (mail ( $email_destinatario, $email_erro, $email_cupom,  $email_headers)){ 
						echo "</b>Erro enviado com Sucesso!</b>"; 
				} 
			else{ 
						echo "</b>Falha no envio do E-Mail!</b>"; } 
				 
	//====================================================
}
	}
	
?>




<body>
<body style="background:#5f5d60">
    <!-- PRE-CARREGAR -->
    <div class="spn_hol">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

 <!-- FIM PRE-CARREGAR -->

 <!-- =========================
     INICIA SOBRE NÓS SEÇÃO
============================== -->
    <section class="header parallax home-parallax page" id="HOME">
        <h2></h2>
        <div class="section_overlay">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <!-- Marca e alternar agrupados para melhor exibição móvel -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Alternar de navegação</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="Logo">
                        </a>
                    </div>
                    <!-- Coletar os links, formulários e outros conteúdos de navegação para alternar -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <!-- NAV -->
                            <li><a href="#HOME">INICIAL</a> </li>
                            <li><a href="#ABOUT">SOBRE </a> </li>
                            <li><a href="#FEATURES">CUPOM DE DESCONTO</a></li>
                            <li><a href="#DOWNLOAD">ESPAÇO </a> </li>
                            <li><a href="#CONTACT">CONTATO </a> </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container- -->
            </nav>

            <div class="container home-container">
                <div class="row">
                    <div class="col-md-12">

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="home_text">
                            <!-- TITULO E DESCRIÇÃO -->
                            <h1>ENTRE EM NOSSO ESPAÇO E CONSIGA ATÉ 60% DE DESCONTO EM SUAS COMPRAS.</h1>
                            <p>Entre agora e descubra o que nosso espaço natura tem para você!</p>

                            <div class="download-btn">
                            <!-- BOTÃO -->
                                <a class="btn home-btn wow fadeInLeft" href="http://rede.natura.net/espaco/natums">Espaço Natura</a>
                                <a class="tuor btn wow fadeInRight" href="#ABOUT">Faça um tour <i class="fa fa-angle-down"></i></a>
                           </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-md-offset-1 col-sm-4">
                        <div class="home-iphone">
                            <img src="images/iPhone_Home.png" alt="">
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </section>

    <!-- FIM SEÇÃO CABEÇA -->




 <!-- =========================
     INICIO SOBRE NOS SEÇÃO
============================== -->


    <section class="about page" id="ABOUT">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- SOBRE NOS TITULO SEÇÃO-->
                    <div class="section_title">
                        <h2>Sobre nós</h2>
                        <p>Estamos no mercado a 8 anos na ârea de consultoria presencial, e tivemos a oportunidade de adquirir a nossa loja virtual com os melhores descontos.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="inner_about_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="about_phone wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- TELEFONE -->
                            <img src="images/about_iphone.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6  wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">
                        <!-- TITULO -->
                        <div class="inner_about_title">
                            <h2>Por que comprar os produtos da natura?</h2>
                            <p>Porque fragrância nos levam a lugares, tempos e pessoas, provocam sensações, e despertam sentimentos verdadeiros.</p>
                        </div>
                        <div class="inner_about_desc">

                            <!-- INICIO UNICA DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1s">
                                <!-- ICONE -->
                                <div><i class="pe-7s-credit"></i></div>
                                <!-- DESCRIÇÃO DA DIREÇÃO-->
                                <h3>PARCELAMENTO NO CARTÃO</h3>
                                <p>A Natura parcela suas compras em até 6x no cartão de credito.</p>
                            </div>
                            <!-- INICIO UNICA DESC -->


                            <!-- INICIO UNICA DESC  -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="1.5s">
                                <!-- ICON -->
                                <div><i class="pe-7s-home"></i></div>
                                <!-- DESCRIÇÃO DA DIREÇÃO -->
                                <h3>COMPRE SEM SAIR DE CASA</h3>
                                <p>Compre Produtos Natura com descontos, e os produtos vão até você compre sem sair de casa!</p>
                            </div>
                            <!-- INICIO UNICA DESC -->


                            <!-- INICIO UNICA DESC -->
                            <div class="single_about_area fadeInUp wow" data-wow-duration=".5s" data-wow-delay="2s">
                                <!-- ICONE -->
                                <div><i class="pe-7s-gleam"></i></div>
                                <!-- DESCRIÇÃO DA DIREÇÃO -->
                                <h3>ENTREGA RÁPIDA</h3>
                                <p>A Natura oferece total comodidade, facilidade e agilidade de seus serviços de entrega de encomendas.</p>
                            </div>
                            <!-- FIM UNICA DESC -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="video_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 wow fadeInLeftBig ">
                    <!-- VIDEO TITULO ESQUERDA -->
                        <div class="video_title">
                            <h2>Como comprar pelo Espaço!</h2>
                            <p>Em breve traremos um video explicativo ensinando como fazer a sua compra em nosso espaço e como utilizar os cupons de desconto</p>
                        </div>
                        <div class="video-button">
                            <!-- BOTÃO -->
                            <a class="btn btn-primary btn-video" href="#FEATURES" role="button">Cupom de Desconto</a>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRightBig">
                         <!-- VIDEO -->
                        <div class="video">
                           <!-- <iframe src="http://www.youtube.com/embed/mZFnXLswRSI#t=2m30s" width="560" height="315"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM SOBRE NÓS -->




 <!-- =========================
     UNICIO DA SEÇÃO TESTIMONIAL
============================== -->

    <section id="TESTIMONIAL" class="testimonial parallax">
        <div class="section_overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow bounceInDown">
                        <div id="carousel-example-caption-testimonial" class="carousel slide" data-ride="carousel">
                            <!-- Indicadores -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-caption-testimonial" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-caption-testimonial" data-slide-to="1"></li>
                            </ol>

                            <!-- Embrulho para slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                 <!-- IMAGEM -->
                                                <img src="images/client_2.png" alt="">
                                                <div class="testimonial_caption">
                                                <!-- DESCRIÇÃO --> 
                                                    <h2>Stefani Alves</h2>
                                                    <h4><span>Consultora Natura</h4>
                                                    <p>“Professora, apaixonada por crianças.”</p>
													<img src="images/zap.png" width="40" height="40" alt="APPS SCREEN" /><a href="https://api.whatsapp.com/send?phone=5543984039802">
													<button class="btn btn-primary"   >(43) 98403-9802</button></a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
											                                                <!-- IMAGEM -->
                                                <img src="images/client_1.png" alt="">
                                                <div class="testimonial_caption">
                                                   <!-- DESCRIÇÃO -->  
                                                    <h2>Marcos Araújo</h2>
                                                    <h4><span>Consultor Natura</h4>
                                                    <p>“Fundador do NaturaMS, Engenheiro da computação, apaixonado por design e programação web...”</p>
													<img src="images/zap.png" width="40" height="40" alt="APPS SCREEN"  /><a href="https://api.whatsapp.com/send?phone=5543984627401">
													<button class="btn btn-primary"   >(43) 98462-7401</button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FIM SEÇÃO TESTIMONIAL -->



<!-- =========================
     INICIO DAS SEÇÃO DAS FUNÇÕES
============================== -->
    <section id="FEATURES" class="features page">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!-- INICIO TITULO FUNÇÕES -->
                    <div class="section_title wow fadeIn" data-wow-duration="1s">
                        <h2>CUPOM DE DESCONTO</h2>
                        <p>Com esse cupom você poderá obter diversos descontos em nosso espaço natura.</p>
                    </div>
                     <!-- FIM TITULO FUNÇÕES -->
					<form action="<? $PHP_SELF; ?>" method="POST" > 
                        <div class="social_icons">
                            <ul>
							<h4>40% De Desconto.</h4>
							    <input type="text" class="js-copytextarea"  id="cupom1" value="DESCONTONATURA" name="codigo1">
								<button class="btn btn-second  js-textareacopybtn" >Copiar Cupom</button>
								<input type="submit" name="BTErro1" value="Não Funcionou" class="btn btn-thirty"> 
							<p>Vencimento em 30/07/2017.</p>
							

							<br>
							<h4>30% De Desconto.</h4>
                                <input type="text" class="js-copytextarea1"  id="cupom2" value="JUNHOCIADEZ" name="codigo2">
								<button class="btn btn-second js-textareacopybtn1"  >Copiar Cupom</button>
								<input type="submit" name="BTErro2" value="Não Funcionou" class="btn btn-thirty"> 
							<p>Vencimento em 15/07/2017.</p>
							
							<br>
							<h4>15% De Desconto.</h4>
                            <input type="text" class="js-copytextarea2"  id="cupom3" value="CHEGUEICOM15" name="codigo3">
							<button class="btn btn-second js-textareacopybtn2" >Copiar Cupom</button>
							<input type="submit" name="BTErro3" value="Não Funcionou" class="btn btn-thirty"> 
							<p>Vencimento em 10/08/2017.</p>
							 
                            </div>
                            </ul>
							</form>
                    </div>
                </div>
            </div>
        </div>
       </section>
    <!-- FIM DAS SEÇÃO DAS FUNÇÕES -->



<!-- =========================
     INICIAR CHAMADA PARA AÇÃO
============================== -->
<section id="DOWNLOAD" class="features page">
    
	
    <div class="col-md-12 text-center call_to_action">
    
            <div class="row wow fadeInLeftBig" data-wow-duration="1s">
                <div class="col-md-12">
				 <p>Acesse nosso Espaço.</p>
                    <a class="btn btn-primary btn-action" href="http://rede.natura.net/espaco/natums" role="button">Espaço Natura</a>
                </div>
          
        </div>
    
	
	</div>
	 </section>
	 

    <!-- TERMINA CHAMADA PARA AÇÃO -->


<!-- =========================
     INICIO APPS TELAS
============================== 
    <section class="apps_screen page" id="SCREENS">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 wow fadeInBig" data-wow-duration="1s">
                        <!-- APPS TITULO TELA 
                        <div class="section_title">
                            <h2>LANÇAMENTOS</h2>
                            <p>Acesse o nosso espaço Natura para ter mais informações dos lançamentos que só a Natura pode te oferecer.</p>                           
                        </div>
                        <!-- FIM APPS TITULO TELA 
                    </div>
                </div>
            </div>

        <div class="screen_slider">
            <div id="demo" class="wow bounceInRight" data-wow-duration="1s">
                <div id="owl-demo" class="owl-carousel">

                    <!-- APPS SCREEN IMAGES 
                    <div class="item">
                    <a href="images/screens/Produto01.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto01.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/screens/Produto02.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto02.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/screens/Produto03.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto03.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/screens/Produto04.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto04.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/screens/Produto05.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto05.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                    <div class="item">
                        <a href="images/screens/Produto06.png" rel="prettyPhoto[pp_gal]"><img src="images/Produto06.png" width="60" height="60" alt="APPS SCREEN" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- FIM APPS TELAS -->





<!-- =========================
     INICIO FIM DIVERSÃO FATOS
============================== 


    <section class="fun_facts parallax">
        <div class="section_overlay">
            <div class="container wow bounceInLeft" data-wow-duration="1s">
                <div class="row text-center">
                    <div class="col-md-6">
                        <div class="single_fun_facts">
                            <i class="pe-7s-look"></i>
                            <h2><span  class="counter_num">1999</span> <span>+</span></h2>
                            <p>Curtidas</p>
                        </div>
                    </div>
                      <div class="col-md-6">
                        <div class="single_fun_facts">
                            <i class="pe-7s-cup"></i>
                            <h2><span  class="counter_num">10</span> <span>+</span></h2>
                            <p>Prêmios</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIM DIVERSÃO FATOS -->




<!-- =========================
     INICIAR AREA DE CONTATO FORMULARIO
============================== -->
    <section class="contact page" id="CONTACT">
        <div class="section_overlay">
            <div class="container">
                <div class="col-md-10 col-md-offset-1 wow bounceIn">
                    <!-- Iniciar seção titulo da mensagem -->
                    <div class="section_title">
                        <h2>Entre em contato</h2>
                    </div>
                </div>
            </div>


            <div class="contact_form wow bounceIn">
			
                <div class="container">

                <!-- INICIO ERROR E SUCESSO MENSAGEM -->
                    <div class="form_error text-center">
                        <div class="name_error hide error">Por favor digite seu nome</div>
                        <div class="email_error hide error">Por favor digite seu E-mail</div>
                        <div class="email_val_error hide error">Por favor digite um endereço de E-mail Válido</div>
                        <div class="message_error hide error">Por favor digite uma mensagem</div>
                    </div>
                    <div class="Sucess"></div>
                <!-- FIM ERRO E SUCESSO MENSAGEM -->
				<!-- CONTATO FORMULARIO INICIA AQUI, IR PARA contact.php E ADICIONAR SEU E-MAIL ID, E ISSO AE.-->    
					<form action="<? $PHP_SELF; ?>" method="POST"> 
					                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" class="form-control" name="name" placeholder="Nome" id="name">
                                <input type="email" class="form-control" name="email" placeholder="Email" id="email">
                                <input name="telefone" onkeypress="mascara(this, '##-#####-####')" maxlength="13" class="form-control" name="subject" placeholder="Celular" id="telefone" >
								
                            </div>


                            <div class="col-md-8">
                                <textarea class="form-control" id="message" rows="25" cols="10" placeholder="Mensagem" name="message"></textarea>
                                  <input type="submit" name="BTEnvia" value="Enviar Mensagem" class="btn btn-default submit-btn"> 
                            </div>
                        </div>
            </div>
			<!-- FIM FORMULARIO --> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow bounceInLeft">
                        <div class="social_icons">
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href=""><i class="fa fa-youtube-play"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FIM CONTATO -->

<!-- =========================
     INICIAR FORMULARIO DE INCRIÇÃO 
============================== -->



    <section class="subscribe parallax subscribe-parallax" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
        <div class="section_overlay wow lightSpeedIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">

                        <!-- Iniciar Inscrição titulo seção -->
                        <div class="section_title">
                            <h2>Receba Novidades</h2>
                            <p>Preencha com seu e-mail para receber diversos descontos do site.</p>
                        </div>
                        <!-- Fim Incrição titulo seção -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row  wow lightSpeedIn">
                    <div class="col-md-6 col-md-offset-3">
                        <!-- SUBSCRIÇÃO MENSAGENS SUCEDIDAS OU ERRADAS -->
                        <div class="subscription-success"></div>
                        <div class="subscription-error"></div>
                        <!-- Check this topic on how to add email subscription list, http://kb.mailchimp.com/lists/signup-forms/host-your-own-signup-forms -->
                        <form id="mc-form" action="https://naturams.us16.list-manage.com/subscribe/post" method="POST" class="subscribe_form">                         
							<input type="hidden" name="u" value="3d6a5d0adacde90ed1883ba17">
							<input type="hidden" name="id" value="988f2aa9f5">
							<input type="hidden" name="orig-lang" value="1">
                            <div class="form-group">
                                <!-- EMAIL INPUT BOX -->
                                <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" class="required email form-control" id="MERGE0" placeholder="Digite o Endereço de E-mail" value="" >                                 
								<input type="text" autocapitalize="off" autocorrect="off" name="MERGE1" class="required email form-control" id="MERGE1" placeholder="Digite o Numero de Celular" value="" >                                 
                            </div>
                                <!-- SUBSCRIBE BUTTON -->
                            <button type="submit" class="btn btn-default subs-btn">Enviar</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FIM FORMULARIO DE INCRIÇÃO -->


<!-- =========================
     RODAPÉ 
============================== -->

    <section class="copyright">
        <h2></h2>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copy_right_text">
                    <!-- DIREITOS TEXTO -->
                        <p>Copyright &copy; 2017. Todos os direitos Reservados.</p>        
                    </div>
                     
                </div>

                <div class="col-md-6">
                    <div class="scroll_top">
                        <a href="#HOME"><i class="fa fa-angle-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END ROD´PÉ -->


<!-- =========================
     SCRIPTS 
============================== -->

	
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.ajaxchimp.langs.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/script.js"></script>
<script>
 

 
</script>

</body>
</html>