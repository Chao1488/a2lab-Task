<?php
/**
* Template name: FAQ
*/
 ?>

 <!DOCTYPE html>
 <html>
 	<head>
 		<meta charset="UTF-8">
 		<meta http-equiv="X-UA-Compatible" content="IE=edge">
 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 		<title>Часто задаваемые вопросы - VerumTrade</title>
 		<meta name="description" content="Часто задаваемые вопросы - VerumTrade"/>
 		<link rel="canonical" href="https://verumtrade.com/faq.html"/>
 		<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/images/favicons/favicon_verum.ico">
 		<link rel="icon" type="image/png" href="<?php bloginfo('template_directory')?>/images/favicons/favicon_verum.png" sizes="16x16">
 		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/hamburgers.css">
 		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
 	</head>
 	<body>
 		<header class="header">
 			<div class="container">
 				<nav class="navbar navbar-expand-xl"><a class="brand" href="/"><img class="d-inline-block align-top" src="<?php bloginfo('template_directory')?>/images/logo.png" alt="logo" style="width: 40px; height: 40px;"><span>VerumTrade</span></a>
 					<div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
 						<ul class="navbar-nav">
 							<li class="nav-item default-nav-item lang-item dropdown"><a class="nav-link dropdown-toggle" id="navbarLangSwitcher" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>RUS</span><i class="zmdi zmdi-chevron-down"></i></a>
 								<div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);">ENG</a></div>
 							</li>
              <!--
 							<li class="nav-item default-nav-item active"><a class="nav-link" href="/">Главная</a></li>
 							<li class="nav-item default-nav-item"><a class="nav-link" href="company.html">О компании</a></li>
 							<li class="nav-item default-nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
 							<li class="nav-item default-nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Инфоцентр<i class="zmdi zmdi-chevron-down"></i></a>
 								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="marketing.html">Ранги и премии</a><a class="dropdown-item" href="events.html">События</a><a class="dropdown-item" href="javascript:void(0);">Конференции</a></div>
 							</li>
 							<li class="nav-item default-nav-item"><a class="nav-link" href="contacts.html">Контакты</a></li>
            -->

            <?php
            $args = array(

                  'theme_location'  => '',
                  'menu'            => '',
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse main-menu',
                  'container_id'    => 'navbarNavDropdown',
                  'menu_class'      => 'navbar-nav',
                  'menu_id'         => '',



            ); wp_nav_menu( $args	); ?>


 							<li class="nav-item special-nav-item"><a class="nav-link" href="https://backoffice.verumtrade.com/sign_in"><i class="zmdi zmdi-lock"></i><span>Войти</span></a><a class="nav-link" href="https://backoffice.verumtrade.com/sign_up"><i class="zmdi zmdi-account-add"></i><span>Регистрация</span></a></li>
 						</ul>
 					</div>
 					<button class="hamburger hamburger--spin" id="hamburger" type="button" onclick="openMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
 				</nav>
 			</div>
 		</header>
 		<div class="container">
 			<div class="faq-page">
 				<div class="faq-page-wrapper">
 					<h6 class="pre-headline">Часто задаваемые вопросы</h6>
 					<h1 class="page-headline ta-c">Отвечаем на ваши <br>часто задаваемые вопросы</h1>
 					<div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical"><a class="nav-link active" href="#tab1" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true"><i class="mdi mdi-help-circle"></i> Регистрация</a><a class="nav-link" href="#tab2" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false"><i class="mdi mdi-account"></i> Финансы</a><a class="nav-link" href="#tab3" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false"><i class="mdi mdi-account-settings"></i> Безопасность</a></div>
 					<div class="tab-content" id="faq-tab-content">
 						<div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
 							<div class="accordion" id="accordion-tab-1">
 								<div class="card">
 									<div class="card-header" id="accordion-tab-1-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-1" aria-expanded="false" aria-controls="accordion-tab-1-content-1"><span>Как зарегистрироваться на сайте компании VerumTrade для дальнейшей работы?</span></a></div>
 									<div class="collapse" id="accordion-tab-1-content-1" aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
 										<div class="card-body">
 											<p>Для начала работы в компании VerumTrade необходимо зарегистрироваться по ссылке уже действующего партнера или подать заявку на регистрацию. Оставьте ваш адрес электронной почты на сайте компании и мы обязательно с вами свяжемся.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-1-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-2" aria-expanded="false" aria-controls="accordion-tab-1-content-2"><span>В какой валюте можно сделать <br>инвестицию?</span></a></div>
 									<div class="collapse" id="accordion-tab-1-content-2" aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
 										<div class="card-body">
 											<p>Компания принимает инвестиции в любой валюте через visa/mastercard или через криптовалюту.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-1-heading-3"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-3" aria-expanded="false" aria-controls="accordion-tab-1-content-3"><span>Какой минимальный и максимальный размер инвестиций в компанию VerumTrade?</span></a></div>
 									<div class="collapse" id="accordion-tab-1-content-3" aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
 										<div class="card-body">
 											<p>Минимальная инвестиция в компании равна эквиваленту 10 долларов, а максимальная — 50 000 долларов.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-1-heading-4"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-4" aria-expanded="false" aria-controls="accordion-tab-1-content-4"><span>Когда начисляются и выплачиваются проценты по инвестициям?</span></a></div>
 									<div class="collapse" id="accordion-tab-1-content-4" aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
 										<div class="card-body">
 											<p>Процент по инвестиции начисляется каждые 30 дней (раз в месяц) или ежедневно - это зависит от выбранного пакета инвестиций. Вывод доступен сразу после их начисления.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-1-heading-5"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-1-content-5" aria-expanded="false" aria-controls="accordion-tab-1-content-5"><span>Кто может зарегистрироваться и начать работу с VerumTrade?</span></a></div>
 									<div class="collapse" id="accordion-tab-1-content-5" aria-labelledby="accordion-tab-1-heading-5" data-parent="#accordion-tab-1">
 										<div class="card-body">
 											<p>Регистрация доступна особам, достигшим совершеннолетия.</p>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
 							<div class="accordion" id="accordion-tab-2">
 								<div class="card">
 									<div class="card-header" id="accordion-tab-2-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-1" aria-expanded="false" aria-controls="accordion-tab-2-content-1"><span>Как быстро осуществляется <br>вывод средств?</span></a></div>
 									<div class="collapse" id="accordion-tab-2-content-1" aria-labelledby="accordion-tab-2-heading-1" data-parent="#accordion-tab-2">
 										<div class="card-body">
 											<p>Регламент на вывод — 72 часа с момента подачи заявки.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-2-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-2" aria-expanded="false" aria-controls="accordion-tab-2-content-2"><span>Возможно ли досрочно </span><br>снять депозит?</a></div>
 									<div class="collapse" id="accordion-tab-2-content-2" aria-labelledby="accordion-tab-2-heading-2" data-parent="#accordion-tab-2">
 										<div class="card-body">
 											<p>Досрочное снятие депозита не предусмотрено.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-2-heading-3"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-3" aria-expanded="false" aria-controls="accordion-tab-2-content-3"><span>Какова сумма минимального <br>вывода средств?</span></a></div>
 									<div class="collapse" id="accordion-tab-2-content-3" aria-labelledby="accordion-tab-2-heading-3" data-parent="#accordion-tab-2">
 										<div class="card-body">
 											<p>Минимальная сумма для вывода средств равняется эквиваленту 10 долларов.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-2-heading-4"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-4" aria-expanded="false" aria-controls="accordion-tab-2-content-4"><span>Какие условия для участия в <br>реферальной программе?</span></a></div>
 									<div class="collapse" id="accordion-tab-2-content-4" aria-labelledby="accordion-tab-2-heading-4" data-parent="#accordion-tab-2">
 										<div class="card-body">
 											<p>Для участие в реферальной программе необходимо наличие минимальной инвестиции (эквивалент 10 долларов).</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-2-heading-5"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-2-content-5" aria-expanded="false" aria-controls="accordion-tab-2-content-5"><span>Какой процент за ввод и <br>вывод средств?</span></a></div>
 									<div class="collapse" id="accordion-tab-2-content-5" aria-labelledby="accordion-tab-2-heading-5" data-parent="#accordion-tab-2">
 										<div class="card-body">
 											<p>Процент за ввод и вывод средств составляет 0.5 % от суммы.</p>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 						<div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
 							<div class="accordion" id="accordion-tab-3">
 								<div class="card">
 									<div class="card-header" id="accordion-tab-3-heading-1"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-3-content-1" aria-expanded="false" aria-controls="accordion-tab-3-content-1"><span>Что делать, если забыл или потерял пароль?</span></a></div>
 									<div class="collapse" id="accordion-tab-3-content-1" aria-labelledby="accordion-tab-3-heading-1" data-parent="#accordion-tab-3">
 										<div class="card-body">
 											<p>Перейдите, пожалуйста, по ссылке «забыл пароль» и далее следуйте простым инструкциям.</p>
 										</div>
 									</div>
 								</div>
 								<div class="card">
 									<div class="card-header" id="accordion-tab-3-heading-2"><a class="collapsed" data-toggle="collapse" data-target="#accordion-tab-3-content-2" aria-expanded="false" aria-controls="accordion-tab-3-content-2"><span>Как обеспечить безопасность своего кабинета?</span></a></div>
 									<div class="collapse" id="accordion-tab-3-content-2" aria-labelledby="accordion-tab-3-heading-2" data-parent="#accordion-tab-3">
 										<div class="card-body">
 											<p>При выводе или переводе денежных средств потребуется «Транзакционный пароль», который указан при регистрации.</p>
 										</div>
 									</div>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>








 <?php get_footer() ?>
