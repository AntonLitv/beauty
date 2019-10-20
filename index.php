<!-- saved from url=(0014)about:internet -->
<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?h=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/color.css?h=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css?g=<?php echo time(); ?>">
	<title>Продаю Бьюти сайт. Цена 990 руб. Тел: 8(909)498-13-22</title>

	<meta name="description" content="Интернет сайты на русском языке, разработка, доработка, установка, обслуживание. Работаем по всей России. Находимся в Краснодаре.">
	<meta name="keywords" content="сайт краснодар, сайт гидрострой, сайт гмр, сайт гассия, сайт валерия гассия, сайт трудовой славы, сайт невкипелова, сайт знаменского, стоимость сайт, цена сайт, интернет сайт в краснодаре, интернет краснодар, site краснодар, site гидростроителей, site гассия, site автолюбителей, ватсап site, ватсап сайт, whatsapp интернет">
	<meta name="author" content="антон литвинов">
	<meta name="copyright" content="(c) yygo.ru"> 
	<meta http-equiv="Reply-to" content="all@yygo.ru">

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, maximum-scale=1.0">
	<meta name="HandheldFriendly" content="True">
	<meta http-equiv="Cache-Control" content="public">
	<meta http-equiv="cleartype" content="on">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="imagetoolbar" content="no">
	<meta http-equiv="msthemecompatible" content="no">

<!--
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
-->
	<script type="text/javascript">
		function detectmob() { 
			if( navigator.userAgent.match(/Android/i)
				|| navigator.userAgent.match(/webOS/i)
				|| navigator.userAgent.match(/iPhone/i)
				|| navigator.userAgent.match(/iPad/i)
				|| navigator.userAgent.match(/iPod/i)
				|| navigator.userAgent.match(/BlackBerry/i)
				|| navigator.userAgent.match(/Windows Phone/i)
			){
		    	return true;
		  	}
		 	else {
		    	return false;
		 	}
		}

		function funcFonFlider() {
			var fsl = Math.floor(Math.random() * (4) + (1));
			document.getElementById('fon_slider').style.backgroundImage  ="url('img/f" + fsl +".jpg')";
		}
		setInterval(funcFonFlider, 6000);

		function funcBlockB() {
			let bb = document.getElementById('mainBlockB').classList;
			let bbs;
			if(bb[0] == 'main_block_b_full'){
				bbs = 'main_block_b';
			}
			else{
				bbs = 'main_block_b_full main_block_b';
			}
			document.getElementById('mainBlockB').classList = bbs;
		}


		function funcNav() {
			let aa = document.getElementById('mainNav').style.display;
			let aas;
			if(aa === 'none' || aa == ''){
				aas = 'flex';
			}
			else{
				aas = 'none';
			}
			document.getElementById('mainNav').style.display = aas;
		}

	</script>

	<!-- Yandex.Metrika counter -->
	<!-- /Yandex.Metrika counter -->
		
</head>
<body onload="funcFonFlider()">

<article>
	<div id="fon_slider">
	</div>
</article>

<nav>
	<div>
		<div>
			<div>
				<div>Ежедневно с 09:00 до 22:30</div>
				<div><span>Время работы</span></div>
			</div>
			<div>
				<div><div><a href="tel:+79990001122">8(999)000-11-22</a></div></div>
				<div><span>Нужна помощь?</span></div>
			</div>
		</div>
		<div>
			<div>
				<img src="img/l3.svg" alt="" onclick="funcFonFlider()"> Шугаринг в Париже
			</div>
			<div onclick="funcNav()">
				<i class="far fa-bars"></i>
				<ul id="mainNav">
					<li>
						<a href="#">Горячие Beauty предложения</a>
					</li>
					<li>
						<a href="#">Услуги и цены</a>
					</li>
					<li>
						<a href="#">О мастере</a>
					</li>
					<li>
						<a href="#" >Социальные сети</a>
					</li>
					<li>
						<a href="#">Контакты и время работы</a>
					</li>
					<li>
						<a href="#">FAQ && Help</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>	

<header>
	<div>
		<h2>СКИДКА 25% НА ШУГАРИНГ</h2>
		<p>* только при заказе через сайт скидка в ноябре на шугаринг. подробнее по телефону 8(999)000-11-22</p>
	</div>
</header>

<main>
	<div class="main_block_a">
		<div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>БИКИНИ</h3>
				<div class="img">
					<div>
						<img src="img/pr1.jpg" alt="">
						<h4>СКИДКА 15%</h4>
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>РУЧКИ ДО ЛОКТЯ</h3>
				<div class="img">
					<div>
						<img src="img/pr2.jpg" alt="">
						<h4>СКИДКА 20%</h4>
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>БЁДРА И ГОЛЕНЬ</h3>
				<div class="img">
					<div>
						<img src="img/pr3.jpg" alt="">
						<h4>СКИДКА 25%</h4>
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
		</div>
	</div>

	<div id="mainBlockB" class="main_block_b">
		<i class="fal fa-times" onclick="funcBlockB()"></i>
		<div>
			<div>
				<h4>ЗАПИСЬ К МАСТЕРУ</h4>
				<p>Заполните поле Ваше имя</p>
				<p>Заполните поле Телефон</p>
				<p>Выберите процедуру (зону)</p>
				<p>Выберите дату и время</p>
				<p>Кликните кнопку Записаться</p>
				<p><span>* нажимая кнопку "зарегистрироваться" вы соглашаетесь с правилами политики конфиденциальности и правилами пользования данным сайтом.</span></p>
			</div>
			<div>
				<form action="#" method="post">
					<div>
						<label><h6>Ваше имя</h6><input type="text" name="name" required></label>
						<label><h6>Телефон</h6><input type="tel" name="tel" required></label>
						<label>
							<h6>Процедура (зона)</h6>
							<select type="text" name="datetime-local" required>
								<option value=""></option>
								<option value="1">Шугаринг. Зона Подмышки</option>
								<option value="1">Шугаринг. Зона Спина</option>
								<option value="1">Шугаринг. Зона Лицо</option>
								<option value="1">Шугаринг. Зона Бикини</option>
								<option value="1">Шугаринг. Зона Ноги</option>
							</select>
						</label>
						<label><h6>Дата и время</h6><input type="datetime-local" name="date" required></label>
						<label><button type="submit">Записаться</button></label>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="main_block_c">
		<div>
			<div class="img">
				<div>
					<img src="img/m3.jpg" alt="">
				</div>
			</div>
			<h3>О мастере</h3>
			<p>Искусство, творчество и креатив мастеров и специалистов профессионального beauty-сообщества. Мировые тенденции сферы beauty, последние тренды от звезд индустрии. Международный уровень встреч косметических брендов и профессионалов. Креативный beauty-нетворкинг специалистов, мастеров, профессионалов, топ-менеджмента мировых лидеров рынка косметики, звездный коучинг.Искусство, творчество и креатив мастеров и специалистов профессионального beauty-сообщества. Мировые тенденции сферы beauty, последние тренды от звезд индустрии. Международный уровень встреч косметических брендов и профессионалов. </p>
		</div>
	</div>

	<div class="main_block_d">
		<div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>НОЖКИ</h3>
				<div class="img">
					<div>
						<img src="img/pr8.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа. Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>ВСЕ ЗОНЫ</h3>
				<div class="img">
					<div>
						<img src="img/pr9.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>ГОЛЕНЬ</h3>
				<div class="img">
					<div>
						<img src="img/pr6.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>ПОЯСНИЦА</h3>
				<div class="img">
					<div>
						<img src="img/pr7.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа. Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>НОЖКИ ПО ЗОНАМ</h3>
				<div class="img">
					<div>
						<img src="img/pr4.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div>
				<h5>ГОРЯЧИЕ BEAUTY ПРЕДЛОЖЕНИЯ</h5>
				<h3>БИКИНИ</h3>
				<div class="img">
					<div>
						<img src="img/pr5.jpg" alt="">
					</div>
				</div>
				<p>Новости из мира бьюти-индустрии, секреты красоты, обзоры продукции, ... Что такое Fast Beauty, и почему от него страдают бьюти-бренды и природа.</p>
				<article>
					<i class="far fa-share-alt"></i>
					<i class="far fa-retweet-alt"></i>
					<i class="far fa-star"></i>
					<a onclick="funcBlockB()">ЗАПИСАТЬСЯ</a>
				</article>
			</div>
			<div></div>
		</div>
	</div>

	<div class="main_block_e">
		<div>
			<h4>СЛЕДУЙ ЗА МНОЙ В СОЦИАЛЬНЫХ СЕТЯХ</h4>
			<div>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-google-plus-g"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-whatsapp"></i></a>

			</div>
		</div>
	</div>

	<div class="main_block_f">
		<div>
			<h3>Контакты и время работы</h3>
			<h4>Россия, Челябинская область, поселок Париж, ул.Почтовая 5</h4>	
			<div class="img">
				<div>
					<img src="img/maps.jpg" alt="">
				</div>
			</div>
			<div>
				<h6>Открыто с 09:00 до 22:30. </h6>
				<h6>Без перерыва и выходных.</h6>
			</div>
			<div>
				<h6>Тел: +7(999)000-11-22</h6>
				<h6>Email: info@MyBeauty</h6>
			</div>
		</div>
	</div>

</main>

<footer>
	<div>
		<div><a href="#">MyBeauty</a> (C) 2019</div>
		<div>Сделано в <a href="http://yygo.ru" target="_blank">YYGO</a></div>
	</div>
	<p>
		Посещая сайт MyBeauty, Вы предоставляете согласие на обработку данных о посещении Вами сайта MyBeauty (данные cookies и иные пользовательские данные), сбор которых автоматически осуществляется MyBeauty на условиях Политики обработки персональных данных. MyBeauty также может использовать указанные данные для их последующей обработки системами Google Analytics, Яндекс.Метрика и др., которая осуществляется с целью функционирования сайта MyBeauty.
	</p>
</footer>

</body>
</html>
<!-- Разработа >> lcdt@ya.ru >> Anton Litvinov -->