<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kapitalno
 */

?>

<footer class="footer">
	<div class="wrapper footer__wrapper">
		<a href="" class="footer__logo">Капитально</a>
		<div class="footer__socials socials">
			<a href="https://www.facebook.com/remprofstroy" class="socials__link socials__link--facebook footer__socials-link">
				<svg class="socials__link-icon" xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 60 60" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M58.4413 10.3612C59.1798 12.2604 59.6953 14.4521 59.8359 17.6402C59.9764 20.8401 59.9883 21.8597 59.9883 30.0059C59.9883 38.152 59.9531 39.1716 59.8125 42.3716C59.672 45.5596 59.156 47.7399 58.4179 49.6505C56.8589 53.6824 53.6709 56.8704 49.6386 58.4294C47.7399 59.1679 45.5481 59.6834 42.3601 59.824C41.9623 59.8415 41.5983 59.8574 41.25 59.8718V39.375H46.875L50.625 30H41.25V22.5C41.25 20.5973 42.6694 20.6083 44.5064 20.6225C44.6679 20.6237 44.8327 20.625 45 20.625H48.75V11.25H41.25C35.0363 11.25 30 16.2863 30 22.5V30H22.5V39.375H30V59.9998C29.9981 59.9998 29.9963 59.9998 29.9944 59.9998C21.8483 59.9998 20.8282 59.965 17.6287 59.824C14.4402 59.6834 12.2604 59.1679 10.3498 58.4294C8.35719 57.6794 6.54043 56.4954 5.04004 54.9717C3.51631 53.4713 2.33276 51.6664 1.57089 49.6505C0.832376 47.7513 0.316376 45.5596 0.175816 42.3716C0.0352546 39.1716 0 38.152 0 30.0059C0 21.8597 0.0352546 20.8401 0.18772 17.6283C0.328281 14.4402 0.843823 12.2604 1.58234 10.3498C2.33276 8.35719 3.51631 6.54043 5.04004 5.04005C6.54043 3.50441 8.34528 2.3323 10.3617 1.57044C12.2604 0.832377 14.4521 0.316377 17.6402 0.175816C20.8401 0.0352547 21.8597 0 30.0058 0C38.152 0 39.1716 0.0352547 42.3834 0.18772C45.5715 0.328281 47.7518 0.843823 49.6619 1.58234C51.6545 2.3323 53.4713 3.51631 54.9716 5.04005C56.5073 6.54043 57.6794 8.34529 58.4413 10.3612Z" fill="#949494"></path>
				</svg>
			</a>
			<a href="https://www.instagram.com/remprofstroy/" class="socials__link socials__link--instagram footer__socials-link">
				<svg xmlns="http://www.w3.org/2000/svg" class="socials__link-icon" width="60" height="60" viewBox="0 0 60 60" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M59.8359 17.6402C59.6953 14.4521 59.1798 12.2604 58.4413 10.3612C57.6794 8.34529 56.5073 6.54043 54.9716 5.04005C53.4713 3.51631 51.6545 2.3323 49.6619 1.58234C47.7518 0.843823 45.5715 0.328281 42.3834 0.18772C39.1716 0.0352547 38.152 0 30.0058 0C21.8597 0 20.8401 0.0352547 17.6402 0.175816C14.4521 0.316377 12.2604 0.832377 10.3617 1.57044C8.34528 2.3323 6.54043 3.50441 5.04004 5.04005C3.51631 6.54043 2.33276 8.35719 1.58234 10.3498C0.843823 12.2604 0.328281 14.4402 0.18772 17.6283C0.0352546 20.8401 0 21.8597 0 30.0059C0 38.152 0.0352546 39.1716 0.175816 42.3716C0.316376 45.5596 0.832376 47.7513 1.57089 49.6505C2.33276 51.6664 3.51631 53.4713 5.04004 54.9717C6.54043 56.4954 8.35719 57.6794 10.3498 58.4294C12.2604 59.1679 14.4402 59.6834 17.6287 59.824C20.8282 59.965 21.8483 59.9998 29.9944 59.9998C38.1405 59.9998 39.1602 59.965 42.3601 59.824C45.5481 59.6834 47.7399 59.1679 49.6386 58.4294C53.6709 56.8704 56.8589 53.6824 58.4179 49.6505C59.156 47.7399 59.672 45.5596 59.8125 42.3716C59.9531 39.1716 59.9883 38.152 59.9883 30.0059C59.9883 21.8597 59.9764 20.8401 59.8359 17.6402ZM30.1114 14.5928C21.6022 14.5928 14.6982 21.4963 14.6982 30.0059C14.6982 38.5156 21.6022 45.4191 30.1114 45.4191C38.6211 45.4191 45.5246 38.5156 45.5246 30.0059C45.5246 21.4963 38.6211 14.5928 30.1114 14.5928ZM30.1114 40.0041C24.5911 40.0041 20.1133 35.5267 20.1133 30.0059C20.1133 24.4851 24.5911 20.0078 30.1114 20.0078C35.6322 20.0078 40.1095 24.4851 40.1095 30.0059C40.1095 35.5267 35.6322 40.0041 30.1114 40.0041ZM46.1339 17.5816C48.1215 17.5816 49.7327 15.9704 49.7327 13.9833C49.7327 11.9957 48.1215 10.385 46.1339 10.385C44.1468 10.385 42.5356 11.9957 42.5356 13.9833C42.5356 15.9704 44.1468 17.5816 46.1339 17.5816Z" fill="#949494"></path>
				</svg>
			</a>
			<a href="https://vk.com/remprofstroy" class="socials__link socials__link--vk footer__socials-link">
				<svg xmlns="http://www.w3.org/2000/svg" class="socials__link-icon" width="60" height="60" viewBox="0 0 60 60" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M58.4414 10.3613C59.1797 12.2605 59.6953 14.4521 59.8359 17.6401C59.9766 20.8401 59.9883 21.8596 59.9883 30.0059C59.9883 38.1521 59.9531 39.1716 59.8125 42.3716C59.6719 45.5596 59.1558 47.74 58.418 49.6504C56.8589 53.6824 53.6709 56.8704 49.6387 58.4294C47.7397 59.168 45.5483 59.6833 42.3599 59.824C39.1602 59.9651 38.1406 59.9998 29.9946 59.9998C25.1299 59.9998 22.8066 59.9873 21.0425 59.9473C19.8525 59.9204 18.9175 59.8809 17.6289 59.824C14.4404 59.6833 12.2603 59.168 10.3496 58.4294C8.35742 57.6794 6.54053 56.4954 5.04004 54.9717C3.51611 53.4712 2.33252 51.6665 1.5708 49.6504C0.83252 47.7512 0.316406 45.5596 0.175781 42.3716C0.0351562 39.1716 0 38.1521 0 30.0059C0 21.8596 0.0351562 20.8401 0.1875 17.6282C0.328125 14.4402 0.84375 12.2605 1.58252 10.3499C2.33252 8.35718 3.51611 6.54053 5.04004 5.04004C6.54053 3.50439 8.34521 2.33228 10.3618 1.57056C12.2603 0.832275 14.4521 0.316406 17.6401 0.175781C20.8403 0.0351562 21.8599 0 30.0059 0C38.1519 0 39.1714 0.0351562 42.3833 0.187744C45.5713 0.328369 47.752 0.84375 49.6621 1.58228C51.6543 2.33228 53.4712 3.51636 54.9717 5.04004C56.5073 6.54053 57.6792 8.34521 58.4414 10.3613ZM45.6709 34.3499C48.8711 37.3201 49.5361 38.7651 49.6436 38.9451C50.9688 41.1428 48.1733 41.3152 48.1733 41.3152L42.8306 41.3904C42.8306 41.3904 41.6831 41.6179 40.1729 40.5803C39.3833 40.0378 38.6113 39.1526 37.876 38.3093C36.7505 37.0188 35.71 35.8262 34.8223 36.1074C33.3325 36.5798 33.3799 39.7876 33.3799 39.7876C33.3799 39.7876 33.3848 40.0544 33.3057 40.3438C33.2583 40.5181 33.1802 40.7004 33.0522 40.8376C32.6846 41.2354 31.9624 41.3152 31.9624 41.3152H29.5718C29.5718 41.3152 24.2964 41.6328 19.6489 36.7949C14.5835 31.5171 10.1079 21.0488 10.1079 21.0488C10.1079 21.0488 9.85059 20.3638 10.1304 20.0312C10.4458 19.6587 11.3032 19.6338 11.3032 19.6338L17.0186 19.5986C17.0186 19.5986 17.5586 19.6887 17.9438 19.9712C18.2612 20.2036 18.4385 20.6387 18.4385 20.6387C18.4385 20.6387 19.3638 22.9763 20.5864 25.0891C22.9741 29.2168 24.0864 30.1194 24.8989 29.677C26.0815 29.032 25.7266 23.844 25.7266 23.844C25.7266 23.844 25.749 21.9587 25.1318 21.1213C24.6543 20.4712 23.7539 20.2812 23.3564 20.2288C23.1323 20.1992 23.3193 19.8286 23.6846 19.4929C23.8442 19.3459 24.0381 19.2056 24.2466 19.1035C25.2744 18.6011 27.0918 18.571 29.2368 18.5935C30.9097 18.6111 31.3896 18.7161 32.0449 18.8735C33.562 19.2395 33.5146 20.4136 33.4126 22.9473C33.3823 23.7034 33.3472 24.5808 33.3472 25.594C33.3472 27.0042 33.0923 28.9919 34.1099 29.6494C34.5474 29.9319 35.6201 29.6919 38.2979 25.144C39.5679 22.989 40.5205 20.4536 40.5205 20.4536C40.5205 20.4536 40.728 20.0037 41.0503 19.8086C41.3828 19.6111 41.8281 19.6711 41.8281 19.6711L47.8384 19.6362C47.8384 19.6362 49.646 19.4211 49.9385 20.2363C50.2461 21.0913 49.2637 23.0913 46.8057 26.3667C44.4717 29.4771 43.3374 30.6194 43.4438 31.6316C43.5215 32.3696 44.2583 33.0383 45.6709 34.3499Z" fill="#949494"></path>
				</svg>
			</a>
		</div>
		<nav class="footer__nav">
			<ul class="footer__nav-list">
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/comingsoon" class="footer__nav-link">О компании</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/renovation" class="footer__nav-link">Ремонт старого фонда</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/houses" class="footer__nav-link">Ремонт квартир</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/forbusiness" class="footer__nav-link">Для бизнеса</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/comingsoon" class="footer__nav-link">Экспертиза</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/comingsoon" class="footer__nav-link">Кейсы</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/comingsoon" class="footer__nav-link">Проектирование и дизайн интерьера</a>
				</li>
				<li class="footer__nav-item">
					<a href="https://kapitalno.pro/comingsoon" class="footer__nav-link">Контакты</a>
				</li>
			</ul>
		</nav>
		<div class="footer__privacy">
			<p class="footer__copy">© 2021. Все права защищены</p>
			<a target="_blank" href="https://kapitalno.pro/policy" class="footer__privacy-link">Политика конфиденциальности</a>
		</div>
	</div>
</footer>
<div class="popups">
	<div class="quiz modal" id="quiz-1">
		<button class="quiz__close button--close modal__close">Закрыть</button>
		<form class="wrapper quiz__wrapper quiz__form animate__zoomOut">
			<div class="quiz__heading">
				<h3 class="quiz__title">
					Ответьте на 3 вопроса, и мы рассчитаем персональную смету
				</h3>
				<div class="quiz__counter">1/3</div>
			</div>
			<div class="swiper-pagination quiz__progress slider__progress">
				<div class="quiz__progress-value"></div>
			</div>
			<div class="swiper quiz__steps">
				<div class="swiper-wrapper quiz__steps-wrap quiz__form">
					<div class="swiper-slide quiz-step">
						<h3 class="quiz-step__title">Что вы хотите отремонтировать?</h3>
						<p class="quiz-step__error error-text">
							Выберите минимум 1 объект
						</p>
						<label class="quiz-step__answer checkbox">
							<input class="checkbox__hidden quiz-step__checkbox--hidden" type="checkbox" name="quiz[step1]" checked hidden value="Квартиру" />
							<span class="checkbox__visible quiz-step__checkbox"></span>
							<p class="quiz-step__desc">Квартиру</p>
						</label>
						<label class="quiz-step__answer checkbox">
							<input class="checkbox__hidden quiz-step__checkbox--hidden" type="checkbox" name="quiz[step1]" hidden value="Коммерческое помещение" />
							<span class="checkbox__visible quiz-step__checkbox"></span>
							<p class="quiz-step__desc">Коммерческое помещение</p>
						</label>
						<label class="quiz-step__answer checkbox">
							<input class="checkbox__hidden quiz-step__checkbox--hidden" type="checkbox" name="quiz[step1]" hidden value="Старый фонд" />
							<span class="checkbox__visible quiz-step__checkbox"></span>
							<p class="quiz-step__desc">Старый фонд</p>
						</label>
						<label class="quiz-step__answer checkbox">
							<input class="checkbox__hidden quiz-step__checkbox--hidden" type="checkbox" name="quiz[step1]" hidden value="Другое" />
							<span class="checkbox__visible quiz-step__checkbox"></span>
							<p class="quiz-step__desc">Другое</p>
						</label>
					</div>
					<div class="swiper-slide quiz-step">
						<h3 class="quiz-step__title">Какая площадь помещения?</h3>
						<p class="quiz-step__error error-text">
							Поле не дожно быть пустым
						</p>
						<label class="input__field">
							<input type="text" placeholder="Напишите площадь в м²" name="quiz[step2]" inputmode="numeric" class="input input--underlined" />
							<small class="input__error error-text"></small>
						</label>
					</div>
					<div class="swiper-slide quiz-step">
						<h3 class="quiz-step__title">Расскажите про ваши идеи</h3>
						<p class="quiz-step__error error-text">
							Поле не дожно быть пустым
						</p>
						<label class="input__field">
							<input type="text" name="quiz[step3]" class="input input--underlined" />

							<small class="input__error error-text"></small>
						</label>
					</div>
					<div class="swiper-slide quiz-step">
						<label class="input__field">
							<input type="text" name="quiz[name]" placeholder="Имя" class="input input--underlined" />
							<small class="input__error error-text">Напишите имя</small>
						</label>
						<label class="input__field">
							<input type="tel" inputmode="numeric" name="quiz[tel]" placeholder="+7 (999) 999 99 99" class="input input--underlined" />
							<small class="input__error error-text">Без правильного номера телефона мы не сможем вам
								позвонить</small>
						</label>
						<div class="input__field">
							<label class="quiz-step__privacy checkbox">
								<input class="checkbox__hidden" type="checkbox" name="privacy" checked hidden />
								<span class="checkbox__visible quiz-step__checkbox"></span>
								<p class="quiz-step__desc">
									Я согласен с
									<a class="link--regular" target="_blank" href="https://kapitalno.pro/policy">политикой конфиденциальности</a>
								</p>
							</label>
						</div>
					</div>
				</div>
				<div class="quiz__navigation">
					<div class="swiper-button-prev quiz__button-prev slider__button slider__button-prev button button--primary">
						← Назад
					</div>
					<div data-regular-text="Далее →" data-last-text="Последний ворпос" class="swiper-button-next quiz__button-next slider__button slider__button-next button button--primary">
						Далее →
					</div>
					<button type="submit" class="button button--primary quiz__button-submit">
						Подобрать решение
					</button>
				</div>
			</div>
		</form>
		<div class="thanks-message thanks-message--inline quiz__thanks">
			<h3 class="quiz__thanks-title thanks-message__title">
				Спасибо! Данные успешно отправлены.
			</h3>
		</div>
	</div>
	<div class="pop modal pop-callback" id="callback-1">
		<button class="pop__closer modal__close button--close">Закрыть</button>
		<form class="wrapper pop-callback__wrapper pop-callback__form animate__zoomOut">
			<h3 class="pop__title">Получите бесплатную консультацию</h3>
			<p class="pop__desc">
				Оставьте свои контактные данные, менеджер вам перезвонит и подробно
				проконсультирует по всем вопросам
			</p>
			<label class="input__field">
				<input type="text" name="user_name" min="2" max="50" placeholder="Имя" class="input input--underlined pop-callback__input" />
				<small class="input__error error-text"></small>
			</label>
			<label class="input__field">
				<input type="tel" name="user_tel" min="9" max="18" inputmode="numeric" placeholder="+7 (999) 999 99 99" class="input input--underlined pop-callback__input" />
				<small class="input__error error-text"></small>
			</label>
			<div class="input__field">
				<label class="input-privacy checkbox">
					<input class="checkbox__hidden" type="checkbox" checked hidden />
					<span class="checkbox__visible input-privacy__checkbox"></span>
					<p class="input-privacy__desc">
						Я согласен с
						<a class="link--regular" target="_blank" href="https://kapitalno.pro/policy">политикой конфиденциальности</a>
					</p>
				</label>
			</div>
			<div class="input__field">
				<button class="button button--primary pop-callback__button">
					Получить консультацию
				</button>
			</div>
		</form>
		<div class="thanks-message thanks-message--inline">
			<h3 class="thanks-message__title">
				Спасибо! Данные успешно отправлены.
			</h3>
		</div>
	</div>
	<div class="popups-thanks__wrapper">
		<div class="popups-thanks">
			<button class="button--close popups-thanks__close"></button>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/thanks.svg" alt="Спасибо" class="popups-thanks__icon" />

			<p class="popups-thanks__desc">Спасибо! Данные успешно отправлены.</p>
		</div>
	</div>
</div>

<button class="scroll__top">
	<svg class="scroll__top-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
		<path style="fill: #3b3b3b" d="M43.006,47.529H4.964c-2.635,0-4.791-2.156-4.791-4.791V4.697c0-2.635,2.156-4.791,4.791-4.791h38.042 c2.635,0,4.791,2.156,4.791,4.791v38.042C47.797,45.373,45.641,47.529,43.006,47.529z M25.503,16.881l6.994,7.049 c0.583,0.588,1.532,0.592,2.121,0.008c0.588-0.583,0.592-1.533,0.008-2.122l-9.562-9.637c-0.281-0.283-0.664-0.443-1.063-0.443 c0,0,0,0-0.001,0c-0.399,0-0.782,0.159-1.063,0.442l-9.591,9.637c-0.584,0.587-0.583,1.537,0.005,2.121 c0.292,0.292,0.675,0.437,1.058,0.437c0.385,0,0.77-0.147,1.063-0.442L22.5,16.87v19.163c0,0.828,0.671,1.5,1.5,1.5 s1.5-0.672,1.5-1.5L25.503,16.881z"></path>
	</svg>
</button>

<button class="callback-fixed__button">
	<div class="callback-fixed__button-icon"></div>
	<div class="callback-fixed__button-ring"></div>
</button>
<form class="callback-fixed__form">
	<button type="button" class="button--close callback-fixed__close">
		Закрыть
	</button>
	<h3 class="callback-fixed__title">
		Оставьте номер телефона, и мы Вам перезвоним!
	</h3>
	<input type="tel" name="user_tel" class="input callback-fixed__input" inputmode="numeric" placeholder="Ваш телефон" />
	<button class="button callback-fixed__submit">Ок</button>
</form>

<?php /*
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kapitalno' ) ); ?>"> */ ?>

<?php wp_footer(); ?>

</body>

</html>
