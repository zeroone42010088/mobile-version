<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Заявка на ремонт и настройку оборудования</title>
	<link rel="shortcut icon" type="image/png" href="/img/logo2.png">
	<meta name="keywords" content="Заявка, заказ ремонта, выполнение ремонта, вызвать специалиста, диагностика электроники"/>
    <meta name="description" content="Оставить заявку на ремонт и диагностику промышленной электроники и оборудования. Перемотка, настройка"/>
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/all.css" rel="stylesheet">	
    <link href="/css/jquery.jbcallme.css" rel="stylesheet">
	<link href="/css/main.css"  rel="stylesheet">
	<link href="/css/form.css"  rel="stylesheet">

	<!-- Begin Talk-Me {literal} -->
	<!--<script>
		(function(d, w, m) {
			window.supportAPIMethod = m;
			var s = d.createElement('script');
			s.type ='text/javascript'; s.id = 'supportScript'; s.charset = 'utf-8';
			s.async = true;
			var id = '641ef44ddd81dd7022bfea6ab1737d9a';
			s.src = '//lcab.talk-me.ru/support/support.js?h='+id;
			var sc = d.getElementsByTagName('script')[0];
			w[m] = w[m] || function() { (w[m].q = w[m].q || []).push(arguments); };
			if (sc) sc.parentNode.insertBefore(s, sc); 
			else d.documentElement.firstChild.appendChild(s);
		})(document, window, 'TalkMe');
	</script>-->
    <!-- End Talk-Me {literal} -->
</head>
<?php include 'functions.php';?>
<body class="<?= $classes;?>">

<header>
	<div class="container">
		<div class="row order_wrap">

			<div class="col-12 col-sm-12 col-md-5 col-lg-4 logo">
                <div class=h-logo><a href=https://www.remontservo.ru/><img src="/img/logo1.png" alt="Логотип Кернел"></a></div>
			</div>

			<div class="col-12 col-sm-12 col-md-12 col-lg-4 site-info">
				<p class="site-name">РЕМОНТ СЕРВОДВИГАТЕЛЕЙ, СЕРВОПРИВОДОВ, ЭНКОДЕРОВ, РЕЗОЛЬВЕРОВ</p>
				<p class="site-desc">РЕМОНТ ПАНЕЛЕЙ ОПЕРАТОРА, ЧАСТОТНЫХ ПРЕОБРАЗОВАТЕЛЕЙ, СИСТЕМ ЧПУ, ПРОМЫШЛЕННОЙ ЭЛЕКТРОНИКИ, ПРОМЫШЛЕННЫХ КОМПЬЮТЕРОВ</p>
			</div>

			<div class="col-12 col-sm-12 col-md-7 col-lg-4 h-contacts">
				<div class="row">
					<div class="col-12 col-sm-7  col-md-8  contacts-info">
						<a href="tel:+78482797854" class="phone">+7(8482) 79-78-54</a>
						<a href="tel:+79171215301" class="phone">+7(917)  121-53-01</a>
						<a href="mailto:89171215301@mail.ru" class="mail">89171215301@mail.ru</a>
					</div>
					<div class="col-12 col-sm-5 col-md-4 ">
						
					</div>
				</div>				
			</div>

		</div>
	</div>
</header>

<div class="mobmenu">МЕНЮ<i class="fas fa-bars"></i></div>
<nav class="primary" data-id="<?= $menuID;?>">
	<i class="fas fa-times"></i>
	<ul class="container goriz_menu_width">
		<li>
			<a href="/" id="item-1">О компании</a>
		</li>
        <li class="has-submenu">
        	<a href="#" id="item-2">Условия работ</a> <i class="fas fa-sort-down"></i>
			<ul class="submenu">
				<li><a href="/pages/guarantees.html" id="item-3">Гарантия</a></li>
				<li><a href="/pages/delivery.html" id="item-4">Доставка в ремонт</a></li>
				<!-- <li><a href="/pages/oplata.html">Порядок оплаты</a></li>-->
				<li><a href="/pages/request.html" id="item-5">Заявка на ремонт</a></li>
			</ul>
		</li>
        <li><a href="/pages/our-works" id="item-6">Выполненные работы</a></li>
		<li><a href=/catalog.php>Ремонт электроники в сервисном центре</a></li>
		<li><a href="/pages/departure" id="item-7">Выезд специалиста к Заказчику</a></li>
		<li><a href="/pages/contacts.html" id="item-8">Контакты</a></li>
	</ul>
</nav>
<main>


	<div class="container">
		<div class="filling-page">

				<div class="form-container transparent">
            <h1 style="margin-bottom:10px; text-align: center; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); font-size:1.3rem;">Заявка на ремонт</h1>
			<div class="fields">					
                        <form class="form-inner"  id="ajax-contact-form" enctype="multipart/form-data" method="post">          
          <div class="form-group" >
            <label for="contactFF" style="color:#000">ВАШ ПОЧТОВЫЙ АДРЕС</label>
            <input id="contactFF" name="contactFF" type="email" placeholder="E-mail" required style="border: 1px solid #808080;">
          </div>
          <div class="form-group">
            <label for="telFF" style="color:#000">Телефон:</label>
            <input id="telFF" name="telFF" type="tel" placeholder="Номер телефона" style="border: 1px solid #808080; color:#000">
          </div>
          <div class="form-group">
            <label for="nameFF" style="color:#000">ТИП, МОДЕЛЬ НЕИСПРАВНОГО БЛОКА</label>
            <input id="nameFF" name="nameFF" type="text" style="border: 1px solid #808080; color:#000" placeholder="Тип блока">
          </div>
          <div class="form-group">
            <label for="projectFF" style="color:#000">ОПИСАНИЕ, НЕИСПРАВНОСТИ. НОМЕР ОШИБКИ</label>
            <textarea id="projectFF" name="projectFF" cols="40" rows="9"></textarea>
          </div>
          <div class="control-file">
            <label for="fileFF" style="color:#000">Прикрепить файл:</label>
            <input id="fileFF" name="fileFF" type="file">
          </div>
          <button class="btn" type="submit" id="submitFF">Отправить заявку</button>          
        </form>
            </div>
            </div>


            </div>
	</div>



<?php require '../footer.php';?>