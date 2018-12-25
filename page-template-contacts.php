<?php
/**
* Template name: Контакты
*/
 ?>


<?php get_header('page')?>


 		<div class="contacts-page">
 			<div class="container">
 				<h6 class="pre-headline">Контакты</h6>
 				<h1 class="page-headline ta-c">Форма обратной связи</h1>
 				<div class="flex-block">
 					<div class="flex-left">
 						<div class="contacts-wrapper">
 							<div class="contact-item"><span>Телефон</span><a href="tel:+12248175916">+1(224) 817-59-16 </a></div>
 							<div class="contact-item"><span>WhatsApp</span><a href="https://api.whatsapp.com/send?phone=12248175906">+1(224) 817-59-16 </a></div>
 							<div class="contact-item"><span>Telegram</span><a href="tg://resolve?domain=VerumTrade1">+1(224) 817-59-16 </a></div>
 						</div>
 					</div>
 					<div class="flex-right">
 						<form class="form">
 							<div class="form-row">
 								<div class="form-group col-sm-6 col-xs-12">
 									<input class="form-control" type="text" name="name" placeholder="Ваше имя" value="" required id="your-name">
 									<div class="error-input" style="opacity: 0;"></div>
 								</div>
 								<div class="form-group col-sm-6 col-xs-12">
 									<input class="form-control" type="email" name="email" placeholder="Ваш email" value="" required id="your-mail">
 									<div class="error-input" style="opacity: 0;"></div>
 								</div>
 							</div>
 							<div class="form-group">
 								<textarea class="form-control" name="message" placeholder="Ваше сообщение" value="" required id="your-message"></textarea>
 								<div class="error-textarea" style="opacity: 0;"></div>
 							</div>
 							<button class="custom-btn" type="submit" role="button" id="form-submit"><span>Задать вопрос</span>
 								<svg id="submit" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36.1 25.8" enable-background="new 0 0 36.1 25.8" xml:space="preserve">
 									<g>
 										<polyline fill="none" stroke="#FFFFFF" stroke-width="3" stroke-miterlimit="10" points="22.2,1.1 34,12.9 22.2,24.7"></polyline>
 									</g>
 								</svg>
 							</button>
 						</form>
 					</div>
 				</div>
 				<div class="map-wrapper"><img src="<?php bloginfo('template_directory')?>/images/map.png" alt="Map"></div>
 			</div>
 		</div>

 		<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/main.min.css">
 		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 		<script src="https://tympanus.net/Development/ProximityFeedback/js/TweenMax.min.js"></script>
 		<script src="https://tympanus.net/Development/ProximityFeedback/js/nearby.js"></script>
 		<script src="https://tympanus.net/Development/ProximityFeedback/js/charming.min.js"></script>
 		<script>
 			const form = document.querySelector('.form');
 			const submitBttn = form.querySelector('#form-submit');
 			const requiredElems = Array.from(form.querySelectorAll('input[required], textarea'));
 			const opacityInterval = {from: 0, to: 1};

 			new Nearby(submitBttn, {
 				onProgress: (distance) => {
 					const o = lineEq(opacityInterval.from, opacityInterval.to, distanceThreshold.max, distanceThreshold.min, distance);

 					requiredElems.forEach((el) => {
 						const inputErrorEl = el.nextElementSibling;
 						if ( !el.value || el.type === 'email' && !validateEmail(el.value) ) {
 							TweenMax.to(inputErrorEl, .3, {
 								opacity: Math.max(o,opacityInterval.from)
 							});
 						}
 						else if ( el.value ) {
 							inputErrorEl.style.opacity = opacityInterval.from;
 						}
 					});
 				}
 			});

 		</script>
 		<script src="<?php bloginfo('template_directory')?>/js/common.js"></script>
 	</body>
 </html>
 <?php get_footer('page')?>
