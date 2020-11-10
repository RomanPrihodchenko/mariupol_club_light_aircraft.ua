<?php
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>МАРИУПОЛЬСКИЙ КЛУБ ЛЮБИТЕЛЕЙ ЛЕГКОМОТОРНОЙ АВИАЦИИ</title>
	  	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	  	<link rel="stylesheet" type="text/css" href="css/midl.css" charset="utf-8">
	  	<link href="img/airplane1.ico" rel="shortcut icon" type="image/x-icon">
	  	<link rel="stylesheet" href="css/font-awesome.min.css">
	  	
	</head>
	<body class="third" id="yak3">
		
		<div id="wrapper">
			<div id="content">
				<header class="za">
					<div id="logo">
						<img src="img/airplane_61.png">
					</div>
					<div id="reg_auth">
						<a href="midl.php" title="О НАС">
							<div id="btn">
								О нас
							</div>
						</a>
						<a href="index.php" title="На главную" id="yak1">
							<div id="btn">
								На главную
							</div>
						</a>
					</div>
				</header>
					<nav>
						<a href="#yak1">ЗАКАЗАТЬ</a>
						<a href="#yak2">МЫ ЗДЕСЬ</a>
						<a href="#yak3">НАВЕРХ</a>
					</nav>
					<div id="zzak">

						<h4>Если вы решили воспользоваться услугами нашего клуба заполните, пожалуйста, форму и мы с вами свяжемся:</h4>
						<form action="/function.php" method="post">
							<div>
								<input autocomplete="off" type="text" name="username" id="username" placeholder="Имя" class="inp" onclick="$(this).css ('border-color', '#341ed9')" autofocus class="form-control" required>
								<input autocomplete="off" type="tel" name="phone" id="phone" placeholder="Телефон" class="inp" onclick="$(this).css ('border-color', '#341ed9')" required>
								<input autocomplete="off" type="email" name="email" id="email" placeholder="Эл. почта" class="inp" onclick="$(this).css ('border-color', '#341ed9')" required>
							</div>
							<div id="yak2">
								<textarea id="charter" placeholder="Название услуги" autocomplete="off" name="charter" onclick="$(this).css ('border-color', '#341ed9')" required></textarea>
								<button class="btn btn-primary" type="submit" name="submit" id="submit">Отправить</button>
							</div>
						</form>
						<br/>
						<br/>
						<h4>Наш офис находится здесь:</h4>
						<br/>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9662.69607995584!2d37.55427526747333!3d47.093052931305444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e6e443336f782f%3A0xf5efc82c89a8a0d8!2z0J_RgNC-0YHQv9C10LrRgiDQnNC40YDQsCwgMSwg0JzQsNGA0LjRg9C_0L7Qu9GMLCDQlNC-0L3QtdGG0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA4NzUwMA!5e1!3m2!1sru!2sua!4v1530987837583" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						<br/>
								<h4>Hаш адрес: проспект Мира 1, офис 75</h4>
						<br/>
						<br/>
								<h4>Телефоны:</h4>
								<h4>+38 095 537 57 65</h4>
								<h4>+38 097 560 34 52</h4>
						<br/>

					</div>

					<div id="yak2"></div>
					<div id="map-canvas"></div>
					<div id="aside">
						<div id="planes">
							<h3 class="heading">Очень красивые картинки</h3>
							<div style="clear: both;"><br></div>
							
							<!-- try2 -->
								<link rel="stylesheet" media="screen" type="text/css" href="lightgallery/skins/default/main.css">
								<script type="text/javascript" src="../lightgallery/lightgallery.min.js"></script>
								<a title="planes" rel="lightgallery" href="kk/136389_krasivaya_eskadra_samoletov_na_aviashou.jpg" target="_blank">
								<img title="planes" alt="planes" src="kk/images1.jpg"></a>
								<a title="planes" rel="lightgallery" href="kk/2.jpg" target="_blank">
								<img title="planes" alt="planes" src="kk/images2.jpg"></a>
								<a title="planes" rel="lightgallery" href="kk/25-porazitelnyh-fotografi.jpg" target="_blank">
								<img title="planes" alt="planes" src="kk/images3.jpg"></a>
								<a title="planes" rel="lightgallery" href="kk/aircraft4.jpg" target="_blank">
								<img title="planes" alt="planes" src="kk/i4.jpg"></a>
								<a title="planes" rel="lightgallery" href="kk/West Wind 2, Corporate Jet Aircraft, , Delaware5.jpg" target="_blank">
								<img title="planes" alt="planes" src="kk/i5.jpg"></a>

							<!-- try2 -->
						</div>
					</div>
			</div>
				<footer>
					<div id="site_name">
						<span>МАРИУПОЛЬСКИЙ КЛУБ ЛЛМА</span>-сообщество вольных духом людей!	
					</div>
					<div id="clear"></div>
					<div id="footer_menu">
						<a href="" title="написать письмо">Обратная связь</a>
					</div>
					<div id="site_name">
						<p>Все права защищены &copy; <?=date('Y')?></p>
					</div>	
				</footer>
		</div>
		<?php
			require_once "blocks/JS_scripts.php";
		?>
	</body>
</html>