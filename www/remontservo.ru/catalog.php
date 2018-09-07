<?php 
require 'config.php';
?>
<!DOCTYPE html>
<html lang=ru style=height:100%>
<head>
    <meta charset="utf-8" />
    <title>Ремонтируемое оборудование</title>
    <link rel="shortcut icon" type=image/png href=img/logo2.png>
    <meta name=keywords content="FANUC DELTA ABB OMRON" />
    <meta name=description content="Ремонт промышленной электроники и оборудования. Перемотка, настройка и диагностка" />
    <link href=css/shop.css rel=stylesheet>
    <link href=css/style.css rel=stylesheet> 
    
</head>

<body>
    <div class=container>
        <header class="header">
            <div class=h-logo><a href=https://www.remontservo.ru/><img src=img/logo1.png alt=KERNEL></a>
            </div>
            <div class=h-title>
                <h2 style="margin:1em 0 .8em;font-size:15px;color:#ff7e00;font-weight:bold">РЕМОНТ СЕРВОПРИВОДОВ И СЕРВОДВИГАТЕЛЕЙ</h2>
                <h2>
                    <!--Ремонт настройка перемотка серводвигателей энкодеров резольверов сервомоторов сервоприводов-->Москва Санкт-Петербург СПБ Екатеринбург Самара Казань Челябинск Томск и любой регион <br> Страны СНГ и ближнее зарубежье</h2>
            </div>
            <div class=h-contacts>
                <p><a href=tel:+7(8482)79-78-54 style=color:#FFF;text-decoration:none;font-size:1em>+7(8482)<b>79-78-54</b></a><br>
                    <a href=tel:+7(937)215-78-97 style=color:#FFF;text-decoration:none;font-size:1em>+7(937)215-78-97</a><br>
                    <a href=mailto:msulianov@gmail.com>msulianov@gmail.com</a></p>
            </div>
        </header>
        <nav class=nav>
            <div class=n-menu>
                <ul class=menu>
                    <li><a class=a-public href=index.html>главная</a></li>
                    <li><a class=a-public href=pages/about_us.html>о нас</a></li>
                    <li><a class=a-public href=pages/guarantees.html>гарантии</a></li>
                    <li><a class=a-public href=pages/our-works.html>выполненные работы</a></li>
                    <li><a class=a-public href=pages/repairs.html>ремонт электроники</a></li>
                    <li><a class=a-public href=pages/delivery.html>доставка в ремонт</a></li>
                    <li><a class=a-public href=pages/departure.html>выезд специалиста</a></li>
                    <li><a class=a-public href=pages/contacts.html>контакты</a></li>
                    <li><a class=a-public href=pages/list-publications.html>публикации</a></li>
                    <li><a class=a-public href=pages/sell.html>на продажу</a></li>
                    <li><a class=a-public style="background:linear-gradient(to top,#FF7E00,white)" href=catalog.php>каталог ремонтируемого оборудования</a></li>
                </ul>
            </div>
        </nav>
        <main class=content style="background-color: #E9F4C8;">

            <div class="header-bottom" style="background-color:white;" >
             <!--   <div class="container" style="background-color:orange;">-->
                    <div class="header-electronica" style="background-color:grey; position:relative;">
                        <div class="col-md-9 header-left" style="background-color:#E9F4C8;">
                            <div class="top-nav">
                                <ul class="memenu skyblue" >

                                    <li class="grid"><a href="#">Серводвигатели</a>
                                        <div class="mepanel">
                                            <div class="row">
                                                <div class="col1 me-one">
                                                    <h4>Сервомоторы</h4>
                                                    <ul>
                                                        <li><a href="#">FANUC</a></li>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div>
                                    </li>

                                    <li class="grid"><a href="#">Сервоприводы</a>
                                    </li>
                                    <li class="grid"><a href="#">Частотные преобразователи</a>
                                    </li>
                                    <li class="grid"><a href="#">Сенсорные панели оператора</a>
                                    </li>
                                </ul>
                                
                                <!--searsh -->
                               <div class="search-bar" style="position:absolute; right:5%; top:10%;">
                                <input type="text" value="Поиск оборудован" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск по оборудованию';}" >
                                <input type="submit" value="" style="" >
                            </div> 
                               <!--searsh -->
                                
                              
                                
                            </div>
                         <!--    <div class="clearfix"> </div>-->
                        </div>
                       <!-- <div class="col-md-3 header-right" style="background-color:aqua"> -->
                            
                      <!--  </div> -->
                      <!--  <div class="clearfix" style="background-color: #E9F4C8;"> </div> -->
                    </div>
             <!--   </div> -->
            </div>
            <!--bottom-header-->

          


            
            <!--about-end-->
            <!--product-starts-->
          <!--  <div class="product">  -->
                <div class="container">
                    <div class="product-top">
                        <div class="product-one" style="display:flex; flex-direction:row; flex-wrap:wrap;">


                            <?php
if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
} else {
    $pageno = 1;
}
$no_of_records_per_page = 13;
$offset = ($pageno-1) * $no_of_records_per_page;                          


if(empty($_GET['id'])) {
$result = $db->query("SELECT COUNT(*) FROM products");
$total_rows = $result->fetch_array();
$total_pages = ceil($total_rows[0] / $no_of_records_per_page);
$query = $db->query("SELECT * FROM products LIMIT $offset, $no_of_records_per_page");
if($query->num_rows > 0){
    
    
    
    echo '   <div class="logo" >
                
                    <h2 style="text-align:center; margin-top: 10px; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin-left:25%; white-space:nowrap;">Диагностика и ремонт cерводвигателей</h2>
                
            </div>
    
    
    <div class="about" style="margin:  0 -1.5% 0 -1.5%">
                <div class="container" style="max-width: 100%; padding:0; margin:0;">
                    <div class="about-top grid-1">
                        <div class="col-md-4 about-left">
                            <figure class="effect-bubba">
                                <img class="img-responsive" src="img/our-works/block_deimotion_6025.jpg" alt="Электронный блок" />
                                <figcaption>
                                    <h2>Выполнена диагностика и ремонт</h2>
                                    <p>Гарантия 6 месяцев. Любой регион</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 about-left">
                            <figure class="effect-bubba">
                                <img class="img-responsive" src="img/our-works/plata_paika.jpg" alt="Пайка плат" />
                                <figcaption>
                                    <h4>Выполнена диагностика и ремонт</h4>
                                    <p>Гарантия 6 месяцев. Любой регион</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-md-4 about-left">
                            <figure class="effect-bubba">
                                <img class="img-responsive" src="img/our-works/servoprivod-deimotion-6103.jpg" alt="Сервопривод" />
                                <figcaption>
                                    <h4>Выполнена диагностика и ремонт</h4>
                                    <p>Гарантия 6 месяцев. Любой регион</p>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>';
    
    
    
    
    while($row = $query->fetch_assoc()){
								echo '
								<div class="col-md-4 product-left p-left" style="max-width:30%;">
								<div class="product-main simpleCart_shelfItem style="padding:1em; margin: 5%;">
									<a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
									<div class="product-bottom">
										<p style="margin-left: 5%; max-width: 80%; word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial,"Helvetica Neue",Helvetica,sans-serif; color: #444;"><font color: #444;>'.$row["name"].'</font></p>
										 <p>'.$row["manefacter"].'</p> 
										<p><a class="item_add" href="#"><i></i></a> <span class=" item_price">'.$row["price"].' </span></p>
									</div>
									<div class="srch srch1">
										<span>-'.$row["sale"].'. Диагностика и настройка</span>
									</div>
								</div>
							</div>
								';

} } } else {

$query = $db->query("SELECT * FROM products where id = '".$_GET['id']."'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
								echo '
                                
                                <div class="logo" >
                
                    <h2 style="text-align:center; margin-top: 10px; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin:auto; margin-left: 30%; white-space:normal;">Диагностика и ремонт '.$row["manufacter"].'</h2>
                
            </div>
                                
                                
                                
								<div class="col-md-4 product-left p-left" style="">
								<div class="product-main simpleCart_shelfItem">
									<img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" />
									<div class="product-bottom">
										<h3 style="font-size: 20px;" font-family: "Trebuchet MS", "Lucida Sans" text-shadow: 0 1px 0 rgba(255,255,255,.5); white-space:normal;">'.$row["name"].'</h3>										
										</span></h4>
									</div>
									<div class="srch srch1">
										<span>-'.$row["sale"].'. Диагностика и настройка</span>
									</div>
								</div>
							</div>
                            <div class="catalog_cardinfo">
                            
                            <ol class="rounded">
                              <li><a href="#">Диагностика от 3 дней</a></li>
                              <li><a href="#">Ремонт от 7 дней</a></li>
                              <li><a href="#">Гарантия на ремонт 6 месяцев</a></li>
                              <li><a href="#">Работаем по безналичному расчету и договору</a></li>  
                            </ol>
                            </div>




		<div class="form-container transparent">
			<div class="form-inner-main"></div>
            <h3 style="margin-bottom:10px; text-align: center;">Контактная форма</h3>
			<div class="fields">
				<form class="form-inner ajax-contact-form" action="">
						<label for="email">Ваш почтовый адрес</label>				
						<div class="col"><input type="email" name="email" value="E-mail" placeholder="E-mail"></div>
                        <label for="tel">Телефон</label>
                        <div class="col"><input type="tel" name="tel" value="Телефон" placeholder="Телефон"></div>
						<label src="name">Тип, модель неисправного блока</label>
                    <input type="text" name="name" value="" placeholder="">					
					<label>Описание, неисправности. Номер ошибки</label>
					<textarea name="message" cols="40" rows="3"></textarea>
					<input type="submit" name="submit" class="submit" value="Отправить">
                    
				</form>
			</div>
		</div>            
				
                
    ';} }}
                         
?>
                            
                         
                        </div>
                        <!-- product-one -->
                    </div>
                    <!-- product-top -->
                    <!-- buttons -->
                    <? if(empty($_GET['id'])) { ?>
                        <ul class="pagination" style="display:flex">
                            <li><a href="?pageno=1" class="button28">Первая</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo " ?pageno=".($pageno - 1); } ?>" class="button28">Предыдущая</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo " ?pageno=".($pageno + 1); } ?>" class="button28">Следующая</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages; ?>" class="button28">Последняя</a></li>
                        </ul>
                        <? } ?>
                    <!-- buttons -->

        </main>
        <footer class="foot" style="position:absolute;width:100%;">
            <div class=f-logo-l><img src=img/logo3.png alt=kerneltlt></div>
            <div class=f-title>ООО "КЕРНЕЛ" Ремонт промышленной электроники</div>
            <div class=f-logo-r><img src=img/logo3.png alt=kerneltlt></div>
        </footer>
        </div>
            <!-- container -->
 <!--   </div> -->
    <!-- product -->
    
        <!--scripts-->
        <script>
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }

        </script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/simpleCart.min.js">


        </script>
        <script  src="js/memenu.js"></script> 
        <script>
            $(document).ready(function() {
                $(".memenu").memenu();
            });

        </script>
        <script src="js/jquery.easydropdown.js"></script>
        <!--scripts-->

        <!-- yandex metrica begin -->
        <!--    <script>
            (function(d, w, c) {
                (w[c] = w[c] || []).push(function() {
                    try {
                        w.yaCounter44532427 = new Ya.Metrika({
                            id: 44532427,
                            clickmap: true,
                            trackLinks: true,
                            accurateTrackBounce: true,
                            webvisor: true
                        });
                    } catch (e) {}
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function() {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");

        </script> <noscript><div><img src=../https@mc.yandex.ru/watch/44532427 style=position:absolute;left:-9999px alt /></div></noscript>  -->
        <!-- yandex metrica complete -->
        <!-- форма обратной связи -->
        <script type='text/javascript'>
(function(){ var widget_id = 'smo9Ly9F6j';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
        <!-- форма обратной связи -->
        <!-- последовательная загрузка изображений  -->
        <script>
            function isVisible(c) {
                var d = c.getBoundingClientRect();
                var e = document.documentElement.clientHeight;
                var b = d.top > 0 && d.top < e;
                var a = d.bottom < e && d.bottom > 0;
                return b || a
            }

            function showVisible() {
                var d = document.getElementsByTagName("img");
                for (var b = 0; b < d.length; b++) {
                    var a = d[b];
                    var c = a.getAttribute("realsrc");
                    if (!c) {
                        continue
                    }
                    if (isVisible(a)) {
                        a.src = c;
                        a.setAttribute("realsrc", "")
                    }
                }
            }
            window.onscroll = showVisible;
            showVisible();

        </script>
        <!-- последовательная загрузка изображений  -->
    <script src="js/contactform.js"> </script>
</body>

</html>
