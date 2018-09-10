<?php 
require 'config.php';
?>
<!DOCTYPE html>
<html lang=ru >
<head>
    <meta charset="utf-8" />
    <title>Ремонтируемое оборудование</title>
    <link rel="shortcut icon" type=image/png href=img/logo2.png>
    <meta name=keywords content="FANUC DELTA ABB OMRON" />
    <meta name=description content="Ремонт промышленной электроники и оборудования. Перемотка, настройка и диагностка" />
    <link href=css/shop.css rel=stylesheet>
    <link href=css/style.css rel=stylesheet> 
    
</head>

<body style=height:100% style="
    max-width: 1366px;
    margin: auto;">
    <div class=container-catalog style=" min-width: 1000px;
    max-width: 1366px;
    margin: 0 auto;" >
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
        <nav class="nav-catalog">
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
                <!--    <li><a class=a-public href=pages/list-publications.html>публикации</a></li> 
                    <li><a class=a-public href=pages/sell.html>на продажу</a></li> -->
                    <li><a class=a-public style="background:linear-gradient(to top,#FF7E00,white)" href=catalog.php>каталог ремонтируемого оборудования</a></li>
                </ul>
            </div>
        </nav>
        <main class=content style="background-color: #E9F4C8;">

         <!--    <div class="header-bottom" style="background-color:white;" >-->
             <!--   <div class="container" style="background-color:orange;">-->
                 <!--   <div class="header-electronica" style="background-color:grey; position:relative;">-->
                     <!--   <div class="col-md-9 header-left" style="background-color:#E9F4C8;"> -->
                            <div class="top-nav" style="position:relative;">
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
                                <form action="catalog.php" method="get">
                                <input type="text" name="search" value="Поиск оборудован" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск по оборудованию';}" value="<? echo $_GET['search'] ?>" >
                                <input type="submit" value="" style="" >
                                </form>
                            </div> 
                               <!--searsh -->
                                
                              
                                
                            </div>
                         <!--    <div class="clearfix"> </div>-->
                    <!--    </div> -->
                       <!-- <div class="col-md-3 header-right" style="background-color:aqua"> -->
                            
                      <!--  </div> -->
                      <!--  <div class="clearfix" style="background-color: #E9F4C8;"> </div> -->
                 <!--   </div>-->
             <!--   </div> -->
          <!--  </div> -->
            <!--bottom-header-->

          


            
            <!--about-end-->
            <!--product-starts-->
          <!--  <div class="product">  -->
          <!--      <div class="container">  -->
                    <div class="product-top">
                        <div class="product-one" style="display:flex; flex-direction:row; flex-wrap:wrap;">


<?php
if($_GET['search']) {
echo '<h1>Поисковой запрос: '.$_GET['search'].'</h1>';
$query = $db->query("SELECT * FROM products where name LIKE '%".$_GET['search']."%'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
                                echo '
                    <div class="col-md-4 product-left p-left" style="max-width:30%;">
                                <div class="product-main simpleCart_shelfItem" style="padding: 1em; margin: 5%;">
                                    <a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
                                    <div class="product-bottom">
                                        <p style="margin-left: 5%; max-width: 80%; word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial, Helvetica Neue, Helvetica,sans-serif; color: #444;">'.$row["name"].'</p>
                                         <p>'.$row["manefacter"].'</p> 
                                        <p><a class="item_add" href="#"><i></i></a> <span class=" item_price">'.$row["price"].' </span></p>
                                    </div>
                                    <div class="srch srch1">
                                        <span>-'.$row["sale"].'. Диагностика и настройка</span>
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
    
    
   
                <div class="container-upblock" style="max-width: 100%; padding:0; margin:0;">
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
           ';
    
    
    
    
    while($row = $query->fetch_assoc()){
								echo '
								<div class="col-md-4 product-left p-left" style="max-width:30%;">
								<div class="product-main simpleCart_shelfItem" style="padding: 1em; margin: 5%;">
									<a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
									<div class="product-bottom">
										<p style="margin-left: 5%; max-width: 80%; word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial, Helvetica Neue, Helvetica,sans-serif; color: #444;">'.$row["name"].'</p>
										 <p>'.$row["manefacter"].'</p> 
										<p><a class="item_add" href="#"><i></i></a> <span class=" item_price">'.$row["price"].' </span></p>
									</div>
									<div class="srch srch1">
										<span>-'.$row["sale"].'. Диагностика и настройка</span>
									</div>
								</div>
							</div>
								';

} } }  else {

$query = $db->query("SELECT * FROM products where id = '".$_GET['id']."'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
								echo '
                               
                                <div class="logo" >
                
                    <h2 style="text-align:center; margin-top: 10px; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin:auto; margin-left: 30%; white-space:normal;">Диагностика и ремонт '.$row["manufacter"].'</h2>
                
            </div>
                                
                                
                                
								<div class="col-md-4 product-left p-left">
								<div class=" simpleCart_shelfItem">
									<img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" />
									<div class="">
										<h3 style="word-wrap:normal; font-size:1em; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin-top:5px;">'.$row["name"].'</h3>										
										
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
			
            <h3 style="margin-bottom:10px; text-align: center;">Контактная форма</h3>
			<div class="fields">
				<form class="form-inner ajax-contact-form" enctype="multipart/form-data">
						<label for="catalog_form_email">Ваш почтовый адрес</label>				
						<div class="col"><input type="email" name="email" value="E-mail" placeholder="E-mail" id="catalog_form_email"></div>
                        <label for="catalog_form_tel">Телефон</label>
                        <div class="col"><input type="tel" name="tel" value="Телефон" placeholder="Телефон" id="catalog_form_tel"></div>
						<label for="catalog_form_name">Тип, модель неисправного блока</label>
                    <input type="text" name="name" value="" placeholder="" id="catalog_form_name"> 					
					<label style="margin-bottom:0.5em;">Описание, неисправности. Номер ошибки</label>
					<textarea name="message" cols="40" rows="10"></textarea>
                    <label for="catalog_form_files">Прикрепить файлы:</label>
<input name="file" type="file" multiple="" id="catalog_form_files">
					<input id="catalog_form_submit" type="submit" name="submit" class="submit" value="Отправить">
                    
				</form>
			</div>
		</div>            
				
                
    ';
} }} 
                         
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
<? } ?>

        </main>
        <footer class="foot" >
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
        
        


        </script>
        <script  src="js/memenu.js"></script> 
        <script>
            $(document).ready(function() {
                $(".memenu").memenu();
            });

        </script>
       
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
       <?php
$VivodimJivoSiteilinet = '';
$VivodimJivoSite = "<script type='text/javascript'>
(function(){ var widget_id = 'smo9Ly9F6j';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>";
 
$chasov = date("H.m");
$den = date("D");
 
if($chasov > '9.00' && $chasov < '10.55') {

    $VivodimJivoSiteilinet = $VivodimJivoSite;

} elseif($chasov > '12.05' && $chasov < '17.00') {

    $VivodimJivoSiteilinet = $VivodimJivoSite;
}
 

 
 echo $VivodimJivoSiteilinet; ?>
        <!-- последовательная загрузка изображений  -->
<!-- <script src="js/jquery-3.3.1.min.js"></script> -->   
<script src="js/contactform.js"> </script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(function() {

 document.getElementById('ajax-contact-form').addEventListener('submit', function(evt){

  var http = new XMLHttpRequest(), f = this;

  var th = $(this);

  evt.preventDefault();

  http.open("POST", "js/contact.php", true);

  http.onreadystatechange = function() {

   if (http.readyState == 4 && http.status == 200) {

    alert(http.responseText);

    if (http.responseText.indexOf(f.nameFF.value) == 0) { // очистить поля формы, если в ответе первым словом будет имя отправителя (nameFF)

     th.trigger("reset");

    }

   }

  }

  http.onerror = function() {

   alert('Ошибка, попробуйте еще раз');

  }

  http.send(new FormData(f));

 }, false);

});</script>

</body>

</html>
