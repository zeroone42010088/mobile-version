<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang=ru >
<head>
    <meta charset="utf-8" />
    <title>Каталог ремонтируемого оборудования и электроники</title>
    <link rel="shortcut icon" type=image/png href=img/logo2.png>
    <meta name=keywords content="FANUC DELTA ABB OMRON INDRAMAT"/>
    <meta name=description content="Ремонт промышленной электроники и оборудования. Перемотка, настройка и диагностка. Даже устаревшее оборудование. Гарантия" />
    <link href=css/normalize.css rel=stylesheet>
    <link href=css/shop.css rel=stylesheet>
    <link href=css/style.css rel=stylesheet>
    <link href="css/jquery.jbcallme.css" rel=stylesheet>
    <!-- Begin Talk-Me {literal} -->
<script>
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
</script>
    <!-- End Talk-Me {literal} -->
</head>

<body style="display: flex;
  min-height: 100vh;
  flex-direction: column;">
    <div class=container-catalog>
        <header class="header">
              <div class=h-logo><a href=https://www.remontservo.ru/><img src=img/logo1.png alt=KERNEL></a>
            </div>
            <div class=h-title>
                <p class="h1-main-page cardPagesHeader">РЕМОНТ СЕРВОДВИГАТЕЛЕЙ, СЕРВОПРИВОДОВ, ЭНКОДЕРОВ, РЕЗОЛЬВЕРОВ</p>
                <p class="h2-main-page"><span class="header__fontSize">РЕМОНТ ПАНЕЛЕЙ ОПЕРАТОРА, ЧАСТОТНЫХ ПРЕОБРАЗОВАТЕЛЕЙ, СИСТЕМ ЧПУ<span class="header__fontSize__part1">, ПРОМЫШЛЕННОЙ ЭЛЕКТРОНИКИ</span><span class="header__fontSize__part2">, ПРОМЫШЛЕННЫХ КОМПЬЮТЕРОВ</span></span>
                </p>
            </div>
            <div class=h-contacts>
                <p><a class="phone-main" href=tel:+7(8482)79-78-54 style=color:#FFF;text-decoration:none;font-size:1em>+7(8482)<b>79-78-54</b></a><br>
                    <a class="phone-second" href=tel:+7(937)215-78-97 style=color:#FFF;text-decoration:none;font-size:1em>+7(937)215-78-97</a><br>
                    <a class="mail" href=mailto:msulianov@gmail.com>msulianov@gmail.com</a></p>
                <button class="callme_button header__buttonCall"><span class="header__buttonCall__text">Оставить<br>заявку</span></button>
            </div>
        </header>
    <nav class=nav> 
<ul class="menu topmenu" >
<li><a  href=index.html>О компании</a></li>
<li><a href=#><span class="nav__drop__iconText">Условия работ</span> <img class="nav__drop__icon" src="img/drop-down-arrow.svg" alt="Раскрыть"></a>
            <ul class="submenu">
            <li><a href="pages/guarantees.html">Гарантия</a></li>
            <li><a href="pages/delivery.html">Доставка в ремонт</a></li>
            <li><a href="pages/oplata.html">Порядок оплаты</a></li>
            <li><a href="request.html">Заявка на ремонт</a></li>
        </ul>
<li><a href=pages/our-works.html>Выполненные работы</a></li>
<li><a style="background:linear-gradient(to top,#FF7E00,white)" href=catalog.php>Ремонт электроники в сервисном центре</a></li>
<li><a href=pages/departure.html>Выезд специалиста к Заказчику</a></li>
<li><a href=pages/contacts.html>Контакты</a></li>
</ul>
</nav>
        <main class=content>

         
                            <div class="top-nav" style="position:relative;">
                                <ul class="memenu skyblue" style="margin-left:15px;">

                                    <li class="grid"><a href="?type=Серводвигатели">Серводвигатели</a>

                                    </li>

                                    <li class="grid"><a href="?type=Сервоприводы">Сервоприводы</a>
                                    
                                    

                                    </li>
                                    <li class="grid"><a href="?type=Частотные преобразователи">Частотные преобразователи</a>
                                    
                                    
                                    </li>
                                    <li class="grid"><a href="?type=Сенсорные панели оператора">Сенсорные панели оператора</a>
                                    
                                    
                                    </li>
                                </ul>
                                
                                <!--searsh -->
                               <div class="search-bar" style="position:absolute; right:5%; top:10%;">
                                <form action="catalog.php" method="get">
                                <input type="text" name="search" placeholder="Поиск"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск по оборудованию';}" value="<? echo $_GET['search'] ?>" style="border: 2px solid #DCDCDC;">
                                <input type="submit" value="" style="" >
                                </form>
                            </div> 
                               <!--searsh -->
                                
                              
                                
                            </div>
                       


<?
if(empty($_GET['id'])) {

	$type = filter_var($_GET["type"],  FILTER_SANITIZE_STRING);
	if (strlen($type)) {
		$type_cond = " WHERE type like '".$type."'";
		$type_pages = "&type=".$type;

	}

	$diller = filter_var($_GET["diller"],  FILTER_SANITIZE_STRING);
	if (strlen($diller)) {
		$diller_cond = " AND diller like '".$diller."'";
		$diller_pages = "&diller=".$diller;

	}

	if (strlen($type)) {
		?><!-- выборка -->
		<div style="margin: 10px 0 10px 15px;"><span style="margin-right: 5px;">Производитель:</span><?

		$query = $db->query("SELECT diller FROM products ".$type_cond." GROUP by diller");
		echo "<select onChange=\"location.href='?type=".$type."&diller='+this.value\" name=\"diller\"><option>Выбрать</option>";
		while($row = $query->fetch_assoc()){
			if ($diller == $row["diller"]) $sel = " selected";
			else $sel = "";
			echo "<option value='" .$row["diller"]. "'".$sel.">".$row["diller"]."</option>";
		}
		echo "</select>";
	}


}

?>
</div>
<!-- выборка end -->

<h1 style="text-align:center; margin:auto; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin-left:10%;  white-space:nowrap; margin-top:20px;">Диагностика и ремонт cерводвигателей FANUC</h1> 

            
            <!--about-end-->
            <!--product-starts-->
          <!--  <div class="product">  -->
          <!--      <div class="container">  -->
                  <?php
    if($_GET['search']) {
                   echo '<h1 style="margin-left:10px; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3);">Поисковый запрос: '.$_GET['search'].'</h1>';}?>
                   
                    <div class="product-top">
                        <div class="product-one" style="display:flex; flex-direction:row; flex-wrap:wrap; align-content:flex-start;">


<?php
if($_GET['search']) {

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
$no_of_records_per_page = 13;
$offset = ($pageno-1) * $no_of_records_per_page;                          


if(empty($_GET['id'])) {

$result = $db->query("SELECT COUNT(*) FROM products".$type_cond.$diller_cond);
$total_rows = $result->fetch_array();
$total_pages = ceil($total_rows[0] / $no_of_records_per_page);
$query = $db->query("SELECT * FROM products ".$type_cond.$diller_cond." LIMIT $offset, $no_of_records_per_page");
if($query->num_rows > 0){
    
    
    
    
    
    
    

    while($row = $query->fetch_assoc()){
								echo '
								<div class="col-md-4 product-left p-left catalog" style="max-width:30%;">
								<div class="product-main simpleCart_shelfItem" style="padding: 1em; margin: 5%;">
									<a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
									<div class="product-bottom">
										<p style="margin-left: 5%; max-width: 80%; word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial, Helvetica Neue, Helvetica,sans-serif; color: #444;">'.$row["name"].'</p>
										 <p>'.$row["manefacter"].'</p> 
										<p><a class="item_add" href="#"><i></i></a> <span class=" item_price">'.$row["price"].' </span></p>
									</div>
									<div class="srch srch1">
										<span>-Ремонтируем. Диагностика и настройка</span>
									</div>
								</div>
							</div>
								';

} } }  else {

$query = $db->query("SELECT * FROM products where id = '".$_GET['id']."'");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        
								echo '
                               
                                <div class="product-row" style="	display: flex;

justify-content: space-between;>
                                
                                
                                
								<div class="col-md-4 product-left p-left">
								<div class="simpleCart_shelfItem">
									<img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" />
									<div class="">
										<h3 style="word-wrap:normal; font-size:1em; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3); margin-top:5px;">'.$row["name"].'</h3>										
										
									</div>
									
								</div>
							</div>
                            
                            <div class="catalog_cardinfo" >
                            
                            <ol class="rounded">
                              <li><a href="#">Диагностика от 3 дней</a></li>
                              <li><a href="#">Ремонт от 7 дней</a></li>
                              <li><a href="#">Гарантия на ремонт 6 месяцев</a></li>
                              <li><a href="#">Работаем по безналичному расчету и договору</a></li>  
                            </ol>
                            </div>
                         




		<div class="form-container transparent">
			
            <h3 style="margin-bottom:10px; text-align: center; color: rgba(0,0,0,0.6);
	text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
	                 0px -5px 35px rgba(255,255,255,0.3);">Контактная форма</h3>
			<div class="fields">					
                        <form class="form-inner"  id="ajax-contact-form" enctype="multipart/form-data" method="post">          
          <div class="form-group" >
            <label for="contactFF">ВАШ ПОЧТОВЫЙ АДРЕС</label>
            <input id="contactFF" name="contactFF" type="email" placeholder="E-mail" required>
          </div>
          <div class="form-group">
            <label for="telFF">Телефон:</label>
            <input id="telFF" name="telFF" type="tel" placeholder="Телефон">
          </div>
          <div class="form-group">
            <label for="nameFF">ТИП, МОДЕЛЬ НЕИСПРАВНОГО БЛОКА</label>
            <input id="nameFF" name="nameFF" type="text">
          </div>
          <div class="form-group">
            <label for="projectFF">ОПИСАНИЕ, НЕИСПРАВНОСТИ. НОМЕР ОШИБКИ</label>
            <textarea id="projectFF" name="projectFF" cols="40" rows="9"></textarea>
          </div>
          <div class="control-file">
            <label for="fileFF">Прикрепить файл:</label>
            <input id="fileFF" name="fileFF" type="file">
          </div>
          <button class="btn" type="submit" id="submitFF">Отправить</button>          
        </form>

                        
			</div>
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
                        <ul class="pagination" style="display:flex;">
                            <li><a href="?pageno=1<? echo $type_pages.$diller_pages; ?>" class="button28">Первая</a></li>
                            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno <= 1){ echo '#'; } else { echo " ?pageno=".($pageno - 1).$type_pages.$diller_pages; } ?>" class="button28">Предыдущая</a>
                            </li>
                            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
                                <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo " ?pageno=".($pageno + 1).$type_pages.$diller_pages; } ?>" class="button28">Следующая</a>
                            </li>
                            <li><a href="?pageno=<?php echo $total_pages.$type_pages.$diller_pages; ?>" class="button28">Последняя</a></li>
                        </ul>
                        <? } ?>
                    <!-- buttons -->
<? } ?>

        </main>
        <footer class="foot" style="width:100%; flex: 0;">
            <div class=f-logo-l><img src=img/logo3.png alt=kerneltlt></div>
            <div class=f-title>ООО "КЕРНЕЛ" Ремонт промышленной электроники</div>
            <div class=f-logo-r><img src=img/logo3.png alt=kerneltlt></div>
        </footer>
        </div>
            <!-- container -->
   <script src="js/jquery-3.3.1.min.js"></script>
    <!--form to take call from client start-->
    <script src="js/jquery.jbcallme.js"></script>
    <script src="js/cat_contactform.js"></script>
    <!--form to take call from client end-->
   
   
   
    <!-- fixed menu start  -->
    <script src=js/fixedmenu.js></script>
    <!-- mail form start-->
    <script src=js/callmefile.js></script>
    <!-- mail form end-->
    <script src=js/gorizontalmenu.js></script>
    
    <!-- форма всплывающего окна формы обратной связи -->
    <div class="fields form-main">                    
        <form class="form-inner" id="ajax-contact-form" enctype="multipart/form-data" method="post" _lpchecked="1">          
          <div class="form-group">
            <label for="contactFF">ВАШ ПОЧТОВЫЙ АДРЕС</label>
            <input id="contactFF" name="contactFF" type="email" placeholder="E-mail" required="">
          </div>
          <div class="form-group">
            <label for="telFF">Телефон:</label>
            <input id="telFF" name="telFF" type="tel" placeholder="Телефон">
          </div>
          <div class="form-group">
            <label for="nameFF">ТИП, МОДЕЛЬ НЕИСПРАВНОГО БЛОКА</label>
            <input id="nameFF" name="nameFF" type="text">
          </div>
          <div class="form-group">
            <label for="projectFF">ОПИСАНИЕ, НЕИСПРАВНОСТИ. НОМЕР ОШИБКИ</label>
            <textarea id="projectFF" name="projectFF" cols="40" rows="9"></textarea>
          </div>
          <div class="control-file">
            <label for="fileFF">Прикрепить файл:</label>
            <input id="fileFF" name="fileFF" type="file">
          </div>
          <button class="btn form-button" type="submit" id="submitFF">Отправить заявку</button> 
          <span class="close">&#215;</span>         
        </form>            
    </div>
<!-- форма всплывающего окна формы обратной связи -->

</body>

</html>
