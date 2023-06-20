<?php

require_once ('header.php');

require ('classes/connect.php');
?>
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
                <?php foreach ($products as $product): ?>
				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 product-parent" data-id="<?= $product['id'] ?>">
					<div class="product">
						<div class="product-pic" style="background: url('<?= $product['image'] ?>') no-repeat; background-size: auto 100%; background-position: center"></div>
						<span class="product-name"><?= $product['name'] ?></span>
						<span class="product_price"><?= $product['price'] ?></span>
						<button class="js_buy">Купить</button>
					</div>
				</div>
                <?php endforeach; ?>
			</div>
		</section>
        <?php require_once ('footer.php'); ?>
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