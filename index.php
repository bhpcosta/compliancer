<!DOCTYPE html>
<html lang="pt-br">

<head>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
	<link rel = "shortcut icon" type = "imagem/x-icon" href = "img/icon_fav.png"/>
	<link rel="manifest" href="manifest.json" />
	<link rel="manifest" href="/manifest.json">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Home | Compliancer</title>

	<!--- Video BackGroung ----->
	<link rel="stylesheet" href="master.css">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="jquery.vide.js"></script>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body > <!--data-vide-bg="teste5"-->
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('fundo.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
							<img class="logo" src="img/logo.png" alt="logo">
							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#about">Facilidades</a></li>
					<li><a href="#portfolio">Produtos</a></li>
					<li><a href="#service">Serviços</a></li>
					<!--<li><a href="#pricing">Preços</a></li>-->
					<li><a href="#team">Time</a></li>
					<li><a href="#contact">Contatos</a></li>
					<li class="has-dropdown"><a>Acessar o sistema</a>
						<ul class="dropdown">
							<li><a href="Sistema_Web/Login.php">Fazer Login</a></li>
						</ul>
					</li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<home>
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content white-text">
	      		<h2 class="text-center white-text">Faltam</h2>
	      		<br></br>
	      		<div class="row" align="center">
	      			<div class="col-md-3" align="center">
	      				<div class="row" align="center">
	      					<h1 class="white-text"><div class="numero" id="dia"></div></h1>
	      					<div class="col"></div>
	      				</div>
	      				<div class="text-center">
	      					<h2 class="text-center white-text">dias</h2>      					
	      				</div>
	      			</div>
	      			<div class="col-md-3">
	      				<div class="row">
	      					<div class="col"></div>
	      					<h1 class="white-text"><div class="numero" id="hora"></div></h1>
	      					<div class="col"></div>
	      				</div>
	      				<div class="text-center">
	      					<h2 class="text-center white-text"> horas </h2>
	      					<div class="col"></div>
	      				</div>
	      			</div>
	      			<div class="col-md-3">
	      				<div class="row">
	      				<div class="col"></div>
	      					<h1 class="white-text"><div class="numero" id="minuto"></div></h1>
	      					<div class="col"></div>
	      				</div>
	      				<div class="text-center">
	      					<h2 class="text-center white-text"> minutos </h2>
	      					<div class="col"></div>
	      				</div>
	      			</div>
	      			<div class="col-md-3">
	      				<div class="row">
	      					<div class="col"></div>
	      					<h1 class="white-text"><div class="numero" id="segundo"></div></h1>
	      					<div class="col"></div>
	      				</div>
	      				<div class="text-center">
	      					<h2 class="text-center white-text"> segundos </h2> 
	      					<div class="col"></div>
	      				</div>
	      			</div>
	      		</div>
	      	</div>
	      		<br></br>
	      		<h2 class="white-text">Para a vigência da LGPD</h2>
	      		<p class="white-text">Está preparado?</p>
	      		<p class="white-text">A <a href="http://www.planalto.gov.br/ccivil_03/_Ato2015-2018/2018/Lei/L13709.htm" target="_blank">Lei nº 13.709/2018</a>, conhecida como Lei Geral de Proteção de Dados (“LGPD”) passará a ser aplicável em agosto de 2020. Ela traz mudanças profundas nas condições para o tratamento de dados pessoais, o que inclui atividades como coleta, armazenamento, utilização, compartilhamento e eliminação de informações relacionadas a pessoas naturais identificadas ou identificáveis. </p>
					</div>
					</home>

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>

		</div>
		<!-- /Container -->

	</div>
	<!-- /Penalidades -->



	<!-- /Header -->

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Facilidades</h2>
				</div>
				<!-- /Section header -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs"></i>
						<h3>Adaptável</h3>
						<p>Nosso sistema consegue se adaptar a qualquer ambiente de implantação.</p>
						<a href="#">Leia mais</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic"></i>
						<h3>Descomplicado</h3>
						<p>O sistema sistema busca ser objetivo e completo sem complexibilidade.</p>
						<a href="#">Leia mais</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile"></i>
						<h3>Compatibilidade Mobile</h3>
						<p>O gerenciamento de segurança pode estar na palma de sua mão.</p>
						<a href="#">Leia mais</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Produtos</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work1.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Painel de Controle</span>
						<h3>Resumo de informações</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work2.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Conformidade</span>
						<h3>Checklist de conformidade</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work2.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work3.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Recursos Humanos</span>
						<h3>Obrigações contratuais</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work3.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work4.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Controle de Ativos</span>
						<h3>Cadastro de Ativos</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work4.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work5.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Auditorias</span>
						<h3>Agendamento de Auditoria</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work5.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-4 col-xs-6 work">
					<img class="img-responsive" src="img/work6.jpg" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Calendário</span>
						<h3>eventos, notificações, avisos</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="img/work6.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->

	<!-- Service -->
	<div id="service" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Principais Serviços</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-calendar-plus-o"></i>
						<h3>Controle de Incidentes</h3>
						<p>Controla os incidentes de maneira mais rápida, objetiva, consciente e precisa.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-briefcase"></i>
						<h3>Auditorias</h3>
						<p>Audita o grau de conformidade com políticas, diretrizes, normas e procedimentos.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-balance-scale"></i>
						<h3>Conformidade ISO</h3>
						<p>Garante conformidade com leis e regulamentos voltados a lei geral de proteção de dados.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-exclamation-triangle"></i>
						<h3>Gestão de Riscos</h3>
						<p>Aprimora o reconhecimento de riscos e auxilia na posterior correção do mesmo.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-shield"></i>
						<h3>Controle de Ativos</h3>
						<p>Define os processos que controlam e revisam a gestão de segurança da informação.</p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-line-chart"></i>
						<h3>Gestão de Melhorias</h3>
						<p>Ajuda na criação de escopo para delegar melhorias e obter aumento na qualidade</p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->


	<!-- Why Choose Us -->
	<div id="features" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">Por que nos escolher?</h2>
					</div>
					<p>O Compliancer nasceu com o viés de ser um sistema capaz de ajudar na gestão de todo o processo de implantação da ISO bem como ajudar a manter toda a gestão em funcionamento contínuo, com intuito de melhorar cada vez mais a segurança da informação.</p>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Apoio para tomada de decisões</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Inclusão de todos os módulos de gerenciamento</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Sistema multiplataforma</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Fácil de usar</p>
					</div>
				</div>
				<!-- /why choose us content -->

				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/about3.jpg" alt="">
						<img class="img-responsive" src="./img/about4.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->


	<!-- Numbers -->
	<div id="numbers" class="section sm-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background2.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-user-secret"></i>
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text">Confidencialidade</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-shield"></i>
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text">Integridade</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-cloud"></i>
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text">Disponibilidade</span>
					</div>
				</div>
				<!-- /number -->

				<!-- number -->
				<div class="col-sm-3 col-xs-6">
					<div class="number">
						<i class="fa fa-balance-scale"></i>
						<h3 class="white-text"><span class="counter"></span></h3>
						<span class="white-text">Legalidade</span>
					</div>
				</div>
				<!-- /number -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Numbers -->


	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/background3.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/confidencialidade.png" alt="">
								<h3 class="white-text">Confidencialidade</h3>
								<span>Entenda</span>
							</div>
							<p class="white-text">Propriedade que limita o acesso a informação tão somente às entidades legítimas, ou seja, àquelas autorizadas pelo proprietário da informação.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/integridade.jpg" alt="">
								<h3 class="white-text">Integridade</h3>
								<span>Entenda</span>
							</div>
							<p class="white-text">Propriedade que garante que a informação manipulada mantenha todas as características originais estabelecidas pelo proprietário da informação, incluindo controle de mudanças e garantia do seu ciclo de vida corrente, intermediária e permanente.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/legalidade.jpg" alt="">
								<h3 class="white-text">Legaliade</h3>
								<span>Entenda</span>
							</div>
							<p class="white-text">Garantia de que a informação foi produzida em conformidade com a lei.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="./img/disponibilidade.jpg" alt="">
								<h3 class="white-text">Disponibilidade</h3>
								<span>Entenda</span>
							</div>
							<p class="white-text">Propriedade que garante que a informação esteja sempre disponível para o uso legítimo, ou seja, por aqueles usuários autorizados pelo proprietário da informação.</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Nosso time</h2>
				</div>
				<!-- /Section header -->

				<!-- team -->
				<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Bárbara Caroline</h3>
							<span>Co-Founder</span>
						</div>
					</div>
				</div>
								<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team2.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Bruno Costa</h3>
							<span>Founder-CEO</span>
						</div>
					</div>
				</div>
								<div class="col-sm-4">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="./img/team3.jpg" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>William Pires</h3>
							<span>Co-Founder</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Entre em contato</h2>
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Telefone</h3>
						<p>(14)99692-8997</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>support@compliancer.com</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-map-marker"></i>
						<h3>Endereço</h3>
						<p>Avenida, Av. Higino Muzi Filho, 529 - Sala 1 - Mirante, Marília - SP, 17525-901</p>
					</div>
				</div>
				<!-- /contact -->

				<!-- contact form -->
				<div class="col-md-8 col-md-offset-2">
					<form class="contact-form">
						<input type="text" class="input" placeholder="Nome">
						<input type="email" class="input" placeholder="E-mail">
						<input type="text" class="input" placeholder="Assunto">
						<textarea class="input" placeholder="Mensagem"></textarea>
						<button class="main-btn">Enviar Mensagem</button>
					</form>
				</div>
				<!-- /contact form -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->


	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="index.html"><img src="img/logo-alt.png" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. Todos os Direitos reservados. Designed by <a href="https://google.com" target="_blank">Compliancer</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<script>

		var target_date = new Date("august 8, 2020").getTime();
		var dias, horas, minutos, segundos;
		var regressiva = document.getElementById("regressiva");

		setInterval(function () {

		    var current_date = new Date().getTime();
		    var segundos_f = (target_date - current_date) / 1000;

			dias = parseInt(segundos_f / 86400);
		    segundos_f = segundos_f % 86400;
		    
		    horas = parseInt(segundos_f / 3600);
		    segundos_f = segundos_f % 3600;
		    
		    minutos = parseInt(segundos_f / 60);
		    segundos = parseInt(segundos_f % 60);

		    document.getElementById('dia').innerHTML = dias;
			document.getElementById('hora').innerHTML = horas;
			document.getElementById('minuto').innerHTML = minutos;
			document.getElementById('segundo').innerHTML = segundos;
		}, 1000);

	</script>
	<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
	<script>
	window.cookieconsent.initialise({
	  "palette": {
	    "popup": {
	      "background": "#1d8a8a"
	    },
	    "button": {
	      "background": "#62ffaa"
	    }
	  },
	  "theme": "classic",
	  "type": "opt-in",
	  "content": {
	    "message": "Ao clicar em \"Permitir cookies\", você concorda em armazenar cookies no seu dispositivo para aprimorar a navegação no site, analisar o uso do site e ajudar em nossas equipes de marketing.",
	    "dismiss": "Recusar",
	    "allow": "Permitir Cookies",
	    "link": "Saiba Mais",
	    "href": "localhost/cookiepolicy.php"
	  }
	});
	</script>
</body>

</html>
