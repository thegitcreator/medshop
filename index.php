<!DOCTYPE html>
<html>
<head>
	<title>Оптовый интернет-магазин медицинских товаров</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<script src="static/js/jquery-3.4.1.min.js"></script>
	<script src="static/js/slick.js"></script>
	<script src="static/js/script.js"></script>
    <link rel=”icon” href=”static/img/icon.ico” type=”image/ico”>
	<link href="static/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="static/css/slick.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" crossorigin="anonymous">
	<link href="static/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="vein"></div>
	<div class="main container">
		<header>
			<div class="mobile-menu-open-button js_mobile_menu_open_button"><i class="fas fa-bars"></i></div>
			<nav class="js_wide_menu">
				<i class="fas fa-times close-mobile-menu js_close_mobile_menu"></i>
				<div class="wrapper-inside">
					<div class="visible-elements">
						<span>Главная</span>
						<span>Акции</span>
						<span>Оплата</span>
						<span>Доставка</span>
						<span>Отзывы</span>
						<span>О магазине</span>
					</div>
				</div>
			</nav>
			<div class="slider-block">
				<div class="nav-left"><i class="fas fa-chevron-left"></i></div>
				<div class="slider">
					<div style="background: url('static/img/slide-1.jpg') no-repeat; background-size: auto 100%; background-position: center; background-position-y: 0;">
						<span class="text-box">Скидки до 50%</span>
					</div>
					<div style="background: url('static/img/slide-2.jpg') no-repeat; background-size: auto 100%; background-position: center; background-position-y: 0;">
						<span class="text-box">Всегда есть в наличии</span>
					</div>
					<div style="background: url('static/img/slide-3.jpg') no-repeat; background-size: auto 100%; background-position: center; background-position-y: 0;">
						<span class="text-box">Соответствие товаров нормам качества и ГОСТ</span>
					</div>
				</div>
				<div class="nav-right"><i class="fas fa-chevron-right"></i></div>
			</div>
		</header>
		<section class="product-box">
			<h2>Каталог</h2>
			<div class="row">
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent">
					<div class="product">
						<div class="product-pic" style="background: url('static/img/product-1.jpg') no-repeat; background-size: auto 100%; background-position: center"></div>
						<span class="product-name">Медицинские маски (100 шт.)</span>
						<span class="product_price">- руб.</span>
						<button class="js_buy">Купить</button>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent">
					<div class="product">
						<div class="product-pic" style="background: url('static/img/product-2.jpg') no-repeat; background-size: auto 100%; background-position: center"></div>
						<span class="product-name">Аптечка FirstAid (5 шт.)</span>
						<span class="product_price">- руб.</span>
						<button class="js_buy">Купить</button>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent">
					<div class="product">
						<div class="product-pic" style="background: url('static/img/product-3.jpg') no-repeat; background-size: auto 100%; background-position: center"></div>
						<span class="product-name">Медицинский костюм (жен., 10 шт.)</span>
						<span class="product_price">- руб.</span>
						<button class="js_buy">Купить</button>
					</div>
				</div>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent">
					<div class="product">
						<div class="product-pic" style="background: url('static/img/product-4.jpg') no-repeat; background-size: auto 100%; background-position: center"></div>
						<span class="product-name">Медицинский костюм (муж., 10 шт.)</span>
						<span class="product_price">- руб.</span>
						<button class="js_buy">Купить</button>
					</div>
				</div>
			</div>
		</section>
		<footer>
			2023 © Все права защищены
		</footer>
	</div>
	<div class="overlay js_overlay"></div>
	<div class="popup">
		<h3>Оформление заказа</h3><i class="fas fa-times close-popup js_close-popup"></i>
		<div class='js_error'></div>
		<input type="hidden" name="product-id">
		<input type="text" name="fio" placeholder="Ваше имя">
		<input type="text" name="phone" placeholder="Телефон">
		<input type="text" name="email" placeholder="e-mail">
		<textarea placeholder="Комментарий" name="comment"></textarea>
		<button class="js_send">Отправить</button>
	</div>
</body>
</html>