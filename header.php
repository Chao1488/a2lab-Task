<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Verum
 */

?>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>VerumTrade</title>
		<meta name="description" content="VerumTrade"/>
		<link rel="canonical" href="http://verumtrade.com"/>
		<link rel="shortcut icon" href="./images/favicons/favicon_verum.ico">
		<link rel="icon" type="image/png" href="./images/favicons/favicon_verum.png" sizes="16x16">
		<link rel="stylesheet" href="css/hamburgers.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
	</head>
	<body>
<header class="header home-page-header">
	<div class="container">
		<nav class="navbar navbar-expand-xl toBottomAnimated" id="tenth"><a class="brand" href="/"><img class="d-inline-block align-top" src="./images/home-page-logo.png" alt="logo" style="width: 40px; height: 40px;"><span>VerumTrade</span></a>
			<div class="collapse navbar-collapse main-menu" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item default-nav-item lang-item dropdown"><a class="nav-link dropdown-toggle" id="navbarLangSwitcher" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>RUS</span><i class="zmdi zmdi-chevron-down"></i></a>
						<div class="dropdown-menu"><a class="dropdown-item" href="javascript:void(0);">ENG</a></div>
					</li>
					<li class="nav-item default-nav-item active"><a class="nav-link" href="/">Главная</a></li>
					<li class="nav-item default-nav-item"><a class="nav-link" href="company.html">О компании</a></li>
					<li class="nav-item default-nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
					<li class="nav-item default-nav-item dropdown"><a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Инфоцентр<i class="zmdi zmdi-chevron-down"></i></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item" href="marketing.html">Ранги и премии</a><a class="dropdown-item" href="events.html">События</a><a class="dropdown-item" href="javascript:void(0);">Конференции</a></div>
					</li>
					<li class="nav-item default-nav-item"><a class="nav-link" href="contacts.html">Контакты</a></li>
					<li class="nav-item special-nav-item"><a class="nav-link" href="https://backoffice.verumtrade.com/sign_in"><i class="zmdi zmdi-lock"></i><span>Войти</span></a><a class="nav-link" href="https://backoffice.verumtrade.com/sign_up"><i class="zmdi zmdi-account-add"></i><span>Регистрация</span></a></li>
				</ul>
			</div>
			<button class="hamburger hamburger--spin" id="hamburger" type="button" onclick="openMobileMenu()"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
		</nav>
	</div>
</header>

	<?php wp_head(); ?>
