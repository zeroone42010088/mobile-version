<!DOCTYPE html>
<html lang=ru>

<head>
    <meta charset="utf-8" />
	<?  $query_pro = $db->query("SELECT * FROM products where id = '".$_GET['id']."'");
		$row_pro = $query_pro->fetch_assoc();
		$title = $row_pro['block'].' '.$row_pro['name'];
	?>

        <title><?=$title?></title>
        <link rel="shortcut icon" type=image/png href=img/logo2.png>
        <meta name=keywords content="FANUC DELTA ABB OMRON INDRAMAT Yaskawa Heidenhain" />
        <meta name=description content="Ремонт промышленной электроники и оборудования. Перемотка, настройка и диагностка. В том числе устаревшее оборудование. Гарантия" />
        <link href="/css/bootstrap.min.css" rel="stylesheet">
       <link href="/css/font-awesome.min.css" rel="stylesheet">
       <link href="/css/slick.css" rel="stylesheet">
    	<link href="/css/slick-theme.css" rel="stylesheet">
        <link href="/css/style.css" rel=stylesheet>
        <link href="css/jquery.jbcallme.css" rel=stylesheet>
        <link href="/css/main.css"  rel="stylesheet">
	<link href="/css/form.css"  rel="stylesheet">
      <link href="/css/shop.css" rel=stylesheet>
       <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<style>
#item-10 {background:linear-gradient(to top,#FF7E00,white);}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131780255-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131780255-1');
</script>
        <!-- Begin Talk-Me {literal} -->
        <script>
            (function(d, w, m) {
                window.supportAPIMethod = m;
                var s = d.createElement('script');
                s.type = 'text/javascript';
                s.id = 'supportScript';
                s.charset = 'utf-8';
                s.async = true;
                var id = '641ef44ddd81dd7022bfea6ab1737d9a';
                s.src = '//lcab.talk-me.ru/support/support.js?h=' + id;
                var sc = d.getElementsByTagName('script')[0];
                w[m] = w[m] || function() {
                    (w[m].q = w[m].q || []).push(arguments);
                };
                if (sc) sc.parentNode.insertBefore(s, sc);
                else d.documentElement.firstChild.appendChild(s);
            })(document, window, 'TalkMe');

        </script>
        <!-- End Talk-Me {literal} -->
    </head>

    <body class="catalog_page" style="/*display: flex;*/
  min-height: 100vh;
  flex-direction: column; margin:0 auto;">
        <div class=container-catalog style="">
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
						<button class="callme_button header__buttonCall orange_btn">
							<span class="header__buttonCall__text">Оставить<br>заявку</span>
						</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</header>

        <div class="mobmenu">МЕНЮ<i class="fa fa-bars"></i></div>
<nav class="primary" data-id="<?= $menuID;?>">
	<i class="fa fa-times"></i>
	<ul class="container goriz_menu_width">
		<li>
			<a href="/" id="item-1">О компании</a>
		</li>
        <li class="has-submenu">
        	<a href="#" id="item-2">Условия работ</a> <i class="fa fa-sort-down"></i>
			<ul class="submenu">
				<li><a href="/pages/guarantees" id="item-3">Гарантия</a></li>
				<li><a href="/pages/delivery" id="item-4">Доставка в ремонт</a></li>
				<li><a href="/pages/request" id="item-5">Заявка на ремонт</a></li>
			</ul>
		</li>
        <li><a href="/pages/our-works" id="item-6">Выполненные работы</a></li>
		<li><a href=/catalog>Ремонт электроники в сервисном центре</a></li>
		<li><a href="/pages/departure" id="item-7">Выезд специалиста к Заказчику</a></li>
		<li><a href="/pages/contacts" id="item-8">Контакты</a></li>
	</ul>
</nav>
            <main class=content>

<?php
	$def_word = 'электроники';

	$id_ = (int)$_GET['id'];
	$query1 = $db->query("SELECT upcomment FROM products WHERE `id`='$id_'");
	$row1 = $query1->fetch_assoc();
	if($row1["upcomment"] != ''):
		$def_word = $row1["upcomment"];
	endif;
?>

                <!--about-end-->
                <!--product-starts-->
                <!--  <div class="product">  -->
                <!--      <div class="container">  -->
                <?php
    if($_GET['search']) {
                   echo '<h2 style="margin-left:10px; color: #000;
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3);">Поисковый запрос: '.$_GET['search'].'</h2>';}?>
                    <div class="product-top">
                        <div class="product-one <?php if(isset($_GET['id'])): echo 'single'; else: echo 'catalog'; endif; ?>">


                            <?php
if($_GET['search']) {

$query = $db->query("SELECT * FROM products where name LIKE '%".$_GET['search']."%'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){

                                echo '
                    <div class="col-md-4 product-left p-left">
                                <div class="product-main simpleCart_shelfItem" style="padding: 1em; margin: 5%;">
                                    <a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
                                    <div class="product-bottom">
                                        <p style="margin-left: 5%; max-width: 80%; word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial, Helvetica Neue, Helvetica,sans-serif; color: #000;">'.$row["name"].'</p>
                                         <p>'.$row["manefacter"].'</p>
                                        <p><a class="item_add" href="#"><i></i></a> <span class=" item_price">'.$row["price"].' </span></p>
                                    </div>
                                    <div class="srch srch1">
                                        <span>-Ремонтируем. Диагностика и настройка</span>
                                    </div>
                                </div>
                            </div>


    ';
 } }
} else {
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 12;
$offset = ($pageno-1) * $no_of_records_per_page;


$query_pro = $db->query("SELECT * FROM products where id = '".$_GET['id']."'");
if($query_pro->num_rows > 0){
	while($row_pro = $query_pro->fetch_assoc())
	{
?>
                                <h1 class="catalog__h1 catalog__h1__item" > <?php echo $row_pro["block"].' '.$row_pro["name"];?></h1>
                                <div class="product-row catalog_item_content row">
					<div class="col-md-5">
						<div class="simpleCart_shelfItem catalog_item_slider ">
							<section class="regular">
							<?php	$images = array();

								if(empty($row_pro['CardImage']))
								{
								    	$folder = (int)$_GET['id'];
									$folder = $row_pro['type'];
								    	$images = glob('img/slider-cat/'.$folder.'/*');

								}else $images = array($row_pro['CardImage']);

								foreach($images as $img){ ?>
								<div>
				                                    <img src="<?php echo $img;?>" alt="Ремонт электроники фотография"/>
	                        			        </div>
								<?php } ?>
			                              </section>
                        			</div>
					</div>
		                        <div class="catalog_cardinfo offset-1 col-md-6">
		                            <ol class="rounded">
                		              <li><a href="#">Диагностика от 1 дня</a></li>
		                              <li><a href="#">Ремонт от 3 дней</a></li>
                		              <li><a href="#">Гарантия на ремонт 6 месяцев</a></li>
		                              <li><a href="#">Работаем по безналичному расчету и договору</a></li>
                		            </ol>
	                            </div>
		                </div>
<?php




}

}

?>
<div class="product_row_button row">
    <div class="col-md-5"> <button class="callme_button catalog_item_buttonCall"><span class="header__buttonCall__text">Оставить<br>заявку</span></button>  </div>
    <div class="list_works offset-1 col-md-6">
                        <form action="pages/our-works.html" class="pages__linkOurWorks" style="text-decoration: none; display: block; "><button class="pages__linkOurWorks__button" type="submit" style=" height: 50px; border-radius: 10px; padding-right: 10px; padding-left:10px; background-color: #465DCF; color:#fff;">Cписок всех выполненных работ (Посмотреть...)</button> </form>


                        <div class="pages__content__search repair_search catalog_search" style="">
                            <form class="pages__content__searchForm catalog_search__item_serchForm">
                                <input type="text" placeholder="Найти оборудование">
                                  <a class="pages__content__searchForm__button" href="pages/our-works.html"></a>

                            </form>
                        </div>

                   </div>
</div>

                        </div>
                        <!-- product-one -->
                    </div>
                    <!-- product-top -->
                    <!-- buttons -->

                            <!-- buttons -->
                            <? } ?>

            </main>
           <footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<img src="/img/logo3.png" alt="">
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="sitename sitename_catalog">ООО "КЕРНЕЛ" Ремонт промышленной электроники</div>
			</div>
			<div class="hidden-small col-sm-3 col-md-3">
				<img src="/img/logo3.png" alt="">
			</div>
		</div>
	</div>
</footer>
        </div>

         <!-- форма всплывающего окна формы обратной связи заявка на ремонт begin -->
    <div class="fields form-main my-form">
                 <span class="close" id="close">&#215;</span>
        <div class="form-wrap">



            <label class="container-radio"><span class="container-radio__span">Заявка на ремонт</span>
                <input type="radio" checked="checked" name="radio" data-id="form_remont" class="form_change">
                <span class="checkmark"></span>
            </label>
            <label class="container-radio"><span class="container-radio__span">Заявка на выезд</span>
                <input type="radio"  name="radio" data-id="form_viezd" class="form_change">
                <span class="checkmark"></span>
            </label>

            <form class="form-inner" id="ajax-contact-form" enctype="multipart/form-data" method="post">
                <div id="form_remont" class="frm">

                  <div class="form-group">
                    <label for="contactFF" style="color:#000;">ВАШ ПОЧТОВЫЙ АДРЕС</label>
                    <input id="contactFF" name="contactFF" type="email" placeholder="E-mail" style="border: 1px solid #B0C4DE" required="">
                  </div>
                  <div class="form-group">
                    <label for="telFF" style="color:#000;">Телефон:</label>
                    <input id="telFF" name="telFF" type="tel" style="border: 1px solid #B0C4DE" placeholder="Номер телефона">
                  </div>
                  <div class="form-group">
                    <label for="nameFF" style="color:#000;">ТИП, МОДЕЛЬ НЕИСПРАВНОГО БЛОКА</label>
                    <input id="nameFF" name="nameFF" type="text" placeholder="Тип/модель" style="border: 1px solid #B0C4DE">
                  </div>
                  <div class="form-group">
                    <label for="projectFF" style="color:#000;">ОПИСАНИЕ, НЕИСПРАВНОСТИ. НОМЕР ОШИБКИ</label>
                    <textarea id="projectFF" name="projectFF" cols="40" rows="9"></textarea>
                  </div>
                  <div class="control-file">
                    <label for="fileFF" style="color:#000;">Прикрепить файл:</label>
                    <input id="fileFF" name="fileFF" type="file">
                   <!-- <input id="fileFF2" name="fileFF2" type="file">
                    <input id="fileFF3" name="fileFF3" type="file"> -->
                  </div>
                  <button class="btn form-button" type="submit" id="submitFF">Отправить заявку</button>

                </div><!-- форма всплывающего окна формы обратной связи заявка на ремонт end -->
            </form>
            <!-- форма всплывающего окна формы обратной связи заявка на выезд begin -->
            <form class="form-inner" id="ajax-contact-form1" enctype="multipart/form-data" method="post" >
            <div id="form_viezd" class="frm">
              <div class="form-group">
                <label for="contactFF1">Ваш почтовый адрес</label>
                <input id="contactFF1" name="contactFF" type="email" placeholder="E-mail" required="" style="border: 1px solid #B0C4DE">
              </div>
              <div class="form-group">
                <label for="telFF1">Телефон:</label>
                <input id="telFF1" name="telFF" type="tel" placeholder="Номер телефона" style="border: 1px solid #B0C4DE">
              </div>
              <div class="form-group">
                <label for="nameFF2">Тип/модель неисправного станка</label>
                <input id="nameFF2" name="nameFF" type="text" placeholder="Тип/модель" style="border: 1px solid #B0C4DE">
              </div>
                <div class="form-group">
                <label for="nameFF1">Тип/модель неисправного чпу, либо контроллера с панелью оператора</label>
                <input id="nameFF1" name="nameFF1" type="text" placeholder="Тип/модель" style="border: 1px solid #B0C4DE">
              </div>
              <div class="form-group">
                <label for="projectFF1">Описание неисправности. Номер ошибки </label>
                <textarea id="projectFF1" name="projectFF" cols="40" rows="4"></textarea>
              </div>
              <div class="control-file">
                <label for="fileFF1">Прикрепить фотографии:<br>1.фото шкафа управления в момент неисправности;<br>2.фото стойки ЧПУ или контроллера с панелью оператора в момент неисправности;<!--<br>3.фото панели оператора в момент неисправности;--></label>
                <input id="fileFF1" name="fileFF" type="file">
                <input id="fileFF2" name="fileFF2" type="file">
              <!--  <input id="fileFF3" name="fileFF3" type="file"> -->
              </div>
              <button class="btn form-button" type="submit" id="submitFF1">Отправить заявку на выезд</button>

            </div> <!-- форма всплывающего окна формы обратной связи заявка на выезд end -->
        </form>

        </div>
    </div>
<!--popup-->
<div class="b-popup" id="popup1" style="display: none;">
    <div class="b-popup-content">
    <div id="sendemail">


          </div>

    <a href="javascript:PopUpHide()" class="closeform">+</a>
    </div>
</div><!--popup end-->

        <!-- container -->

        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-2.2.0.min.js"></script>
       <script src="js/slick.js"></script>

        <!--form to take call from client start-->
        <script src="js/jquery.jbcallme.js"></script>
        <script src="/js/custom.js"></script>
        <script src="/js/scripts.js"></script>
       <!-- <script src="js/cat_contactform.js"></script>-->
        <!--form to take call from client end-->




        <!-- fixed menu start  -->
        <script src=js/fixedmenu.js></script>
        <!-- mail form start-->
     <!--   <script src=js/callmefile.js></script>-->
        <!-- mail form end-->
        <script src=js/gorizontalmenu.js></script>

                <!--slider start-->
<script>

    $(document).on('ready', function() {

            $(".regular").slick({
            //    centerMode: true,
  //centerPadding: '60px',
                аccessibility: true,
                autoplay:true,
                arrows:true,
                focusOnSelect:true,
                pauseOnHover: true,
                dots: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                pauseOnHover:true,
            /*     responsive: [
                      {
      breakpoint: 1200,
      settings: {
      //  centerMode: true,
      //  centerPadding: '40px',
        slidesToShow: 4
      }
    },
    {
      breakpoint: 768,
      settings: {
        arrows: false,
     //   centerMode: true,
     //   centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
     //   centerMode: true,
     //   centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ] */
            });


        });

</script>
    <!--slider end-->



        <script>
            $(document).ready(function() {
                var type = "<?php echo $_GET['type'];?>";
                var diller = "<?php echo $_GET['diller'];?>";
                if (type.length != 0) {
                    $(".top-nav span.custom-select-trigger").html(type);
                }
                if (diller.length != 0) {
                    $(".diller span.custom-select-trigger").html(diller);
                }
            });

        </script>

    <!-- Yandex.Metrika counter --> <script> (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(44532427, "init", { id:44532427, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44532427" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->

    </body>

    </html>
