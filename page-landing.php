<?php get_header(); ?>
<main class="main">

	<?php $contacts = get_crb_contacts(); ?>


	<section class="home section--regular">
		<?php
		$typewriter = carbon_get_post_meta(get_the_ID(), 'kapitalno_typewriter');
		?>
		<div class="home__wrapper wrapper">
			<h1 class="home__title">
				<?php echo $typewriter[0]['kapitalno_typewriter_total']; ?>
			</h1>
			<picture class="home__pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/home/home.jpg" alt="<?php echo $typewriter[0]['kapitalno_typewriter_total']; ?>" class="home__img" /></picture>
			<div class="home__cta">
				<button data-modal-open="quiz-1" class="button button--primary home__button">
					Рассчитать стоимость
				</button>
				<p class="home__desc">
					Ответьте на 3 вопроса, <br />
					и мы рассчитаем персональную смету
				</p>
			</div>
		</div>
		<script>
			const homeTitle = document.querySelector(".home__title");
			const typeWriterSetup = [
				<?php foreach ($typewriter as $title) : ?> {
						text: "<?php echo $title['kapitalno_typewriter_total']; ?>",
						find: "<?php echo $title['kapitalno_typewriter_find']; ?>",
						replace: "<?php echo $title['kapitalno_typewriter_replace']; ?>",
					},
				<?php endforeach; ?>
			];
			let typeWriterIndex = 0;

			function findStringsDiffsIndexes(typeWriterItem) {
				let s1 = typeWriterItem.text;
				let find = typeWriterItem.find;
				let s1First, s1Last;
				s1First = s1.indexOf(find);
				s1Last = s1First + find.length;
				return [s1First, s1Last];
			}

			function repalceStringDiffs(typeWriterItem, replaceIndexes) {
				let str = typeWriterItem.text;
				let indexStart = replaceIndexes[0];
				let indexEnd = replaceIndexes[1];
				let replace = typeWriterItem.replace;
				let find = typeWriterItem.find;

				let findLength = typeWriterItem.find.length;
				let replaceLength = replace.length;

				return {
					indexStart,
					indexEnd,
					findLength,
					replaceLength,
					str,
					replace,
				};
			}
			let indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
			let typeWriterState = repalceStringDiffs(
				typeWriterSetup[typeWriterIndex],
				indexes
			);
			homeTitle.innerHTML = typeWriterSetup[typeWriterIndex].text;

			let cursorPosition = 0;
			// #region
			function typeWriterErase(state) {
				if (state.indexEnd > state.indexStart) {
					state.indexEnd--;
					let toReplace = homeTitle.innerHTML.split("");
					toReplace.splice(state.indexEnd, 1);
					homeTitle.innerHTML = toReplace.join("");
					state.replaceLength--;
					setTimeout(() => typeWriterErase(state), 25);
				} else {
					indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
					typeWriterState = {
						...repalceStringDiffs(typeWriterSetup[typeWriterIndex], indexes),
						typeText: state.replace,
						counter: 0,
					};
					setTimeout(() => typeWriterWrite(typeWriterState), 1000);
				}
			}

			function typeWriterWrite(state) {
				if (typeWriterIndex >= typeWriterSetup.length - 1) {
					typeWriterIndex = -1;
				}
				if (state.counter - 1 < state.indexEnd + 2) {
					let toReplace = homeTitle.innerHTML.split("");
					toReplace.splice(state.indexStart, 0, state.typeText[state.counter]);
					homeTitle.innerHTML = toReplace.join("");
					state.indexStart++;
					state.counter++;
					setTimeout(() => typeWriterWrite(state), 30);
				} else {
					typeWriterIndex++;
					indexes = findStringsDiffsIndexes(typeWriterSetup[typeWriterIndex]);
					typeWriterState = {
						...repalceStringDiffs(typeWriterSetup[typeWriterIndex], indexes),
						typeText: state.replace,
						counter: 0,
					};

					setTimeout(() => {
						typeWriterErase(typeWriterState);
					}, 2000);
				}
			}
			setTimeout(() => {
				typeWriterErase(typeWriterState);
			}, 2000);
			// #endregion
		</script>
	</section>

	<section class="features">
		<div class="wrapper features__wrapper">
			<picture class="features__pic"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/features/features.jpg" alt="Как работает Капитально" class="features__img" />
			</picture>
			<ul class="features__bullets wow animate__animated animate__fadeIn">
				<li class="features__bullet">
					Разработаем дизайн-проект <br />
					и воплотим его в жизнь
				</li>
				<li class="features__bullet">
					Начнём ремонт через 7 дней <br />
					после консультации
				</li>
				<li class="features__bullet">
					Установим видеонаблюдение <br />
					для контроля работы
				</li>
				<li class="features__bullet">
					Будем с вами на связи 24/7 в личных чатах
				</li>
				<li class="features__bullet">Рассчитаем понятную смету</li>
			</ul>
		</div>
	</section>

	<section class="troubles">
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title troubles__title wow animate__animated animate__fadeIn">
				Ремонт — бесконечный процесс, <br />
				который отнимает много сил
			</h2>
		</div>
		<div class="troubles__inner">
			<div class="wrapper troubles__wrapper">
				<div class="troubles__bullets">
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-1.svg" alt="Не понятно с чего начать ремонт помещения" class="troubles-bullet__img" /></picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Не понятно с чего начать ремонт помещения
						</p>
					</article>
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-2.svg" alt="Не знаете, как выбрать строительные материалы" class="troubles-bullet__img" />
						</picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Не знаете, как выбрать строительные материалы
						</p>
					</article>
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-3.svg" alt="Не уверены, что продумали все нюансы в планировке" class="troubles-bullet__img" />
						</picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Не уверены, что&nbsp;продумали все нюансы в&nbsp;планировке
						</p>
					</article>
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-4.svg" alt="Не доверяете частным строителям и прорабам" class="troubles-bullet__img" />
						</picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Не доверяете частным строителям и&nbsp;прорабам
						</p>
					</article>
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-5.svg" alt="Тяжело определить стоимость и выделить время" class="troubles-bullet__img" />
						</picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Тяжело определить стоимость и&nbsp;выделить время
						</p>
					</article>
					<article class="troubles-bullet">
						<picture class="troubles-bullet__pic wow animate__animated animate__fadeIn">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/troubles/troubles-6.svg" alt="" class="troubles-bullet__img" />
						</picture>
						<p class="troubles-bullet__desc wow animate__animated animate__fadeIn">
							Боитесь повредить <br />
							и испортить мебель
						</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="experience">
		<?php
		$experience_title = carbon_get_post_meta(get_the_ID(), 'kapitalno_experience_title');
		$experience = carbon_get_post_meta(get_the_ID(), 'kapitalno_experience');
		?>
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title experience__title wow animate__animated animate__fadeIn">
				<?php echo nl2br($experience_title); ?>
			</h2>
		</div>
		<div class="experience__inner">
			<div class="wrapper experience__wrapper">
				<div class="experience__gallery">
					<?php foreach ($experience as $service) : ?>
						<article class="experience-card">
							<div class="experience-card__info">
								<h3 class="experience-card__title wow animate__animated animate__fadeIn">
									<?php echo $service['kapitalno_experience_title']; ?>
								</h3>
								<ul class="experience-card__bullets bullets__list">
									<?php foreach ($service['kapitalno_experience_bullets'] as $bullet) : ?>
										<li class="experience-card__bullet bullets__item wow animate__animated animate__fadeIn">
											<?php echo $bullet['kapitalno_experience_bullet']; ?>
										</li>
									<?php endforeach; ?>
								</ul>
								<a href="<?php echo $service['kapitalno_experience_link']; ?>" class="button button--primary button--small experience-card__button wow animate__animated animate__fadeIn">Подробнее</a>
							</div>
							<picture class="experience-card__pic">
								<img data-src="<?php echo $service['kapitalno_experience_image']; ?>" alt="<?php echo $service['kapitalno_experience_title']; ?>" class="experience-card__img" />
							</picture>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="design">
		<div class="design__wrapper wrapper">
			<picture class="design__pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/design/hero-2.jpg" alt="Продумаем дизайн и сделаем его эргономичным" class="design__img" /></picture>
			<div class="design__offer design__offer-title">
				<h2 class="design__title section__title wow animate__animated animate__fadeIn">
					Продумаем дизайн <br />
					и сделаем его эргономичным
				</h2>
			</div>
			<div class="design__offer design__offer-bullets">
				<ul class="design__bullets bullets__list">
					<li class="design__bullet bullets__item wow animate__animated animate__fadeIn">
						Работаем в любых стилях от классики до&nbsp;модерна
					</li>
					<li class="design__bullet bullets__item wow animate__animated animate__fadeIn">
						Решаем задачи любой сложности
					</li>
					<li class="design__bullet bullets__item wow animate__animated animate__fadeIn">
						Учитываем ваш характер и образ жизни
					</li>
				</ul>
				<button data-modal-open="quiz-1" class="button button--primary design__button wow animate__animated animate__fadeIn">
					Узнать больше
				</button>
			</div>
		</div>
	</section>

	<section class="cases">
		<?php $cases = carbon_get_post_meta(get_the_ID(), 'kapitalno_cases'); ?>
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title cases__title wow animate__animated animate__fadeIn">
				Капитально преобразим <br />
				старые помещения <br />
				в функциональные <br />
				пространства
			</h2>
		</div>
		<div class="cases__inner">
			<div class="cases__wrapper">
				<div class="cases__gallery">
					<?php foreach ($cases as $case) : ?>
						<div class="cases-card">
							<div class="cases-card__front">
								<picture class="cases-card__pic"><img data-src="<?php echo $case['kapitalno_cases_after']; ?>" alt="После" class="cases-card__img" /></picture>
							</div>
							<div class="cases-card__back">
								<picture class="cases-card__pic"><img src="<?php echo $case['kapitalno_cases_before']; ?>" alt="До" class="cases-card__img" /></picture>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="cases__cta">
					<p class="cases__cta-desc wow animate__animated animate__fadeIn">
						Посмотрите больше проектов
					</p>
					<a href="https://kapitalno.pro/cases" class="button button--primary cases__button wow animate__animated animate__fadeIn">Взглянуть</a>
				</div>
			</div>
		</div>
	</section>

	<section class="reviews">
		<?php
		$reviews = carbon_get_post_meta(get_the_ID(), 'kapitalno_reviews');
		?>
		<div class="wrapper reviews__wrapper section__title-wrapper">
			<h2 class="section__title reviews__title wow animate__animated animate__fadeIn">
				Результат наших работ <br />
				превосходит ожидания клиентов
			</h2>
		</div>
		<div class="reviews__inner">
			<div class="wrapper reviews__wrapper">
				<div class="reviews__gallery">
					<?php foreach ($reviews as $review) : ?>
						<article class="reviews-card">
							<h3 class="reviews-card__name">
								<?php echo $review['kapitalno_reviews_name']; ?>
							</h3>
							<p class="reviews-card__feedback">
								<?php echo nl2br($review['kapitalno_reviews_feedback']); ?>
							</p>
						</article>
					<?php endforeach; ?>
				</div>
				<div class="reviews__more">
					Читайте больше отзывов на
					<a href="https://yandex.ru/maps/org/remprofstroy/1381303393/?ll=30.298429%2C59.957640&mode=search&sll=30.298429%2C59.957640&sspn=0.065231%2C0.048983&text=%D0%A0%D0%B5%D0%BC%D0%BF%D1%80%D0%BE%D1%84%D1%81%D1%82%D1%80%D0%BE%D0%B9&z=13" class="link--regular">Яндексе</a>,
					<a href="https://www.google.ru/maps/place/%D0%A0%D0%B5%D0%BC%D0%BF%D1%80%D0%BE%D1%84%D1%81%D1%82%D1%80%D0%BE%D0%B9/@59.9576878,30.2962265,17z/data=!3m1!4b1!4m5!3m4!1s0x46963147b41464bb:0x4a20c879f3b175c9!8m2!3d59.9576878!4d30.2984152" class="link--regular">Google</a>
					и
					<a href="https://www.houzz.ru/hznb/professionaly/studii-remonta-i-podryadchiki/remprofstroy-pfvwus-pf~185766334#reviews?hz_ref=aHR0cHM6Ly9mbGFzaGZhbWlseS5iaXRyaXgyNC5ydS98YzM2Y2M3YzYtMzUxMS00NmZhLTg2NTAtMDEwZGU4NjEwYjdlfDE2Mzk0MDE5NTIyNzA" class="link--regular">Houzz</a>
				</div>
			</div>
		</div>
	</section>

	<section class="work">
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title work__title wow animate__animated animate__fadeIn">
				От ремонта мечты вас <br />
				отделяет одна встреча
			</h2>
		</div>
		<div class="work__inner">
			<div class="wrapper work__wrapper">
				<div class="work__gallery">
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							Проведем консультацию
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Ответим на все вопросы, обсудим ваши пожелания
						</p>
					</article>
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							За 3 дня подготовим чек-лист
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Распишем этапы ремонта, рассчитаем смету и&nbsp;учтём в
							дизайн-проекте ваши задачи
						</p>
					</article>
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							Подготовим материалы
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Выберем и привезём строительные материалы <br />
							на место ремонта
						</p>
					</article>
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							Контроль работы
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Для безопасности установим видеокамеры, каждый шаг зафиксируем
							в личном чате с прорабом и менеджером
						</p>
					</article>
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							Безопасность
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Застрахуем помещение на период ремонта
						</p>
					</article>
					<article class="work-card">
						<h3 class="work-card__title wow animate__animated animate__fadeIn">
							Готовый проект
						</h3>
						<p class="work-card__desc wow animate__animated animate__fadeIn">
							Вывезем мусор, и покажем вам финальный <br />
							результат ремонта
						</p>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="results">
		<div class="wrapper results__wrapper">
			<div class="results__info results__info-title">
				<h2 class="results__title section__title wow animate__animated animate__fadeIn">
					Более 8 лет создаём пространства <br />
					для&nbsp;комфортной <br />
					жизни&nbsp;и&nbsp;работы
				</h2>
			</div>
			<div class="results__info results__info-bullets">
				<ul class="results__bullets bullets__list">
					<li class="results__bullet bullets__item wow animate__animated animate__fadeIn">
						67 восстановленных квартир в&nbsp;старом фонде
					</li>
					<li class="results__bullet bullets__item wow animate__animated animate__fadeIn">
						32 современных квартиры в&nbsp;новостройках
					</li>
					<li class="results__bullet bullets__item wow animate__animated animate__fadeIn">
						18 функциональных коммерческих&nbsp;объектов
					</li>
					<li class="results__bullet bullets__item wow animate__animated animate__fadeIn">
						15 уютных домов для семей
					</li>
					<li class="results__bullet bullets__item wow animate__animated animate__fadeIn">
						5 лет гарантии на ремонт
					</li>
				</ul>
			</div>
			<div class="results__gallery">
				<picture class="results__pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/results/results-2.jpg" alt="Капитально" class="results__img" /></picture>
				<picture class="results__pic"><img data-src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/results/results-1.jpg" alt="Капитально" class="results__img" /></picture>
			</div>
		</div>
	</section>

	<section class="masters">
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title masters__title wow animate__animated animate__fadeIn">
				Более 200 специалистов <br />
				позаботятся о вашем проекте
			</h2>
		</div>
		<?php
		$masters = carbon_get_post_meta(get_the_ID(), 'kapitalno_masters');
		?>
		<div class="masters__inner">
			<div class="wrapper masters__wrapper">
				<div class="masters__gallery">
					<?php foreach ($masters as $master) : ?>
						<article class="masters-card">
							<picture class="masters-card__pic">
								<img data-src="<?php echo $master['kapitalno_masters_photo']; ?>" alt="<?php echo $master['kapitalno_masters_name'] ?> — <?php echo $amster['kapitalno_masters_post'] ?>" class="masters-card__img" />
							</picture>
							<h3 class="masters-card__name">
								<?php echo $master['kapitalno_masters_name']; ?>
							</h3>
							<p class="masters-card__post masters-card__desc">
								<?php echo $master['kapitalno_masters_post']; ?>
							</p>
							<p class="masters-card__desc">
								<?php echo nl2br($master['kapitalno_masters_description']); ?>
							</p>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="callout">
		<div class="wrapper callout__wrapper">
			<h2 class="callout__title wow animate__animated animate__fadeIn">
				Познакомьтесь с компанией <br />Капитально поближе
			</h2>
			<a href="https://kapitalno.pro/comingsoon" class="button button--primary callout__button">Узнать подробнее</a>
		</div>
	</section>

	<section class="news">
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title news__title">
				Создаем <br />резонансные решения
			</h2>
		</div>
		<div class="news__inner">
			<div class="wrapper news__wrapper">
				<div class="news__gallery">
					<?php
					$news = carbon_get_post_meta(get_the_ID(), 'kapitalno_resonance');
					?>
					<?php foreach ($news as $article) : ?>
						<article class="news-card">
							<a href="<?php echo $article['kapitalno_resonance_url']; ?>" class="news-card__pic-link">
								<picture class="news-card__pic">
									<img data-src="<?php echo $article['kapitalno_resonance_image']; ?>" alt="<?php echo $article['kapitalno_resonance_title']; ?>" class="news-card__img" />
								</picture>
							</a>
							<p class="news-card__excerpt">
								<a href="<?php echo $article['kapitalno_resonance_url']; ?>" class="news-card__link">
									<?php echo $article['kapitalno_resonance_title']; ?>
								</a>
							</p>
							<a href="<?php echo $article['kapitalno_resonance_url']; ?>" class="button button--primary button--small news-card__button">Читать</a>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="heritate">
		<div class="wrapper section__title-wrapper heritate__title-wrapper">
			<h2 class="section__title heritate__title wow animate__animated animate__fadeIn">
				Сохраняем <br />
				и восстанавливаем <br />
				объекты культурно-<br />
				исторического наследия
			</h2>
		</div>
		<div class="heritate__inner">
			<div class="wrapper heritate__wrapper">
				<?php
				$heritate = carbon_get_post_meta(get_the_ID(), 'kapitalno_heritate');
				?>
				<div class="heritate__gallery">

					<?php foreach ($heritate as $card) : ?>
						<?php
						if ($card['kapitalno_heritate_caption'] == '') {
							$default_caption = 'kapitalno.pro';
							$card['kapitalno_heritate_caption'] = $default_caption;
						}
						?>
						<article class="heritate-card">
							<picture class="heritate-card__pic"><img data-src="<?php echo $card['kapitalno_heritate_image']; ?>" alt="<?php echo $card['kapitalno_heritate_caption']; ?>" class="heritate-card__img" />
							</picture>
							<?php if ($card['kapitalno_heritate_caption'] != '' && $card['kapitalno_heritate_caption'] != $default_caption) : ?>
								<p class="heritate-card__desc wow animate__animated animate__fadeIn">
									<?php echo nl2br($card['kapitalno_heritate_caption']); ?>
									<?php if ($card['kapitalno_heritate_tooltip'] != '') : ?>
										<span class="heritate-card__tooltip tooltip" data-tooltip="<?php echo $card['kapitalno_heritate_tooltip']; ?>">i</span>
									<?php endif; ?>
								</p>
							<?php endif; ?>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>

	<section class="consult">
		<div class="wrapper section__title-wrapper">
			<h2 class="section__title consult__title wow animate__animated animate__fadeIn">
				Начнём работать над <br />вашим проектом
			</h2>
			<p class="section__subtitle consult__subtitle wow animate__animated animate__fadeIn">
				Оставьте свои контактные данные, мы с вами <br />
				свяжемся и обсудим детали будущего проекта
			</p>
		</div>
		<div class="wrapper consult__wrapper">
			<div class="consult__info">
				<h3 class="consult__info-title wow animate__animated animate__fadeIn">
					Нет времени ждать звонка? <br />
					Тогда свяжитесь с нами любым <br />
					удобным способом
				</h3>
				<div class="consult__contacts">
					<a href="tel:<?php echo $contacts['phone_raw']; ?>" class="consult__contact link--phone"><?php echo $contacts['phone'] ?></a>
					<a href="mailto:<?php echo $contacts['email']; ?>" class="consult__contact link--email"><?php echo $contacts['email']; ?></a>
				</div>
			</div>
			<div class="consult__form-wrap">
				<form class="consult__form animate__zoomOut">
					<label class="input__field">
						<input type="text" name="user_name" min="2" max="50" placeholder="Имя" class="input consult__input" />
						<small class="input__error error-text"></small>
					</label>
					<label class="input__field">
						<input type="tel" inputmode="numeric" min="10" max="20" placeholder="+7 (999) 999 99 99" class="input consult__input" />
						<small class="input__error error-text"></small>
					</label>
					<div class="input__field">
						<label class="input-privacy checkbox">
							<input class="checkbox__hidden" type="checkbox" checked hidden />
							<span class="checkbox__visible input-privacy__checkbox"></span>
							<p class="input-privacy__desc">
								Я согласен с
								<a class="link--regular" href="https://kapitalno.pro/policy" target="_blank">политикой конфиденциальности</a>
							</p>
						</label>
					</div>
					<div class="input__field">
						<button class="button button--primary button--filled button--small consult__form-button callback__button">
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
		</div>
	</section>
</main>
<?php get_footer(); ?>
