<?php
require 'config.php';
?>
    <!DOCTYPE html>
    <html lang=ru>

    <head>
        <meta charset="utf-8" />
        <title>Каталог ремонтируемого оборудования и электроники</title>
        <link rel="shortcut icon" type=image/png href=img/logo2.png>
        <meta name=keywords content="FANUC DELTA ABB OMRON INDRAMAT Yaskawa Heidenhain" />
        <meta name=description content="Ремонт промышленной электроники и оборудования. Перемотка, настройка и диагностка. В том числе устаревшее оборудование. Гарантия" />
        <!--<link href=css/normalize.css rel=stylesheet>-->
        <link href=css/shop.css rel=stylesheet>
        <link href=css/style.css rel=stylesheet>        
        <link href="css/slick.css" rel="stylesheet">
        <link href="css/slick-theme.css" rel="stylesheet">
     <!--   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> -->
        <!-- Begin Talk-Me {literal} -->
     <!--   <script>
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

        </script> -->
        <!-- End Talk-Me {literal} -->
    </head>

    <body style="/*display: flex;*/
  min-height: 100vh;
  flex-direction: column; margin:0 auto;">
        <div class=container-catalog style="">
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
                        <a class="phone-second" href=tel:+79171215301 style=color:#FFF;text-decoration:none;font-size:1em>+79171215301</a><br>
                        <a class="mail" href=89171215301@mail.ru>89171215301@mail.ru</a></p>
                    <button class="callme_button header__buttonCall"><span class="header__buttonCall__text">Оставить<br>заявку</span></button>
                </div>
            </header>
            <nav class=nav>
                <ul class="menu topmenu">
                    <li><a href=index.html>О компании</a></li>
                    <li><a href=#><span class="nav__drop__iconText">Условия работ</span> <img class="nav__drop__icon" src="img/drop-down-arrow.svg" alt="Раскрыть"></a>
                        <ul class="submenu">
                            <li><a href="pages/guarantees.html">Гарантия</a></li>
                            <li><a href="pages/delivery.html">Доставка в ремонт</a></li>
                            <li><a href="pages/oplata.html">Порядок оплаты</a></li>
                            <li><a href="pages/request.html">Заявка на ремонт</a></li>
                        </ul>
                    </li>
                    <li><a href=pages/our-works.html>Выполненные работы</a></li>
                    <li><a style="background:linear-gradient(to top,#FF7E00,white)" href=catalog.php>Ремонт электроники в сервисном центре</a></li>
                    <li><a href=pages/departure.html>Выезд специалиста к Заказчику</a></li>
                    <li><a href=pages/contacts.html>Контакты</a></li>
                </ul>
            </nav>
            <main class=content>

                <div class="top_wrap">

                    <div class="select_wrap diller">
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
									?>
                            <!-- выборка -->
                            <div style="margin: 10px 0 10px 15px;"><span style="margin-right: 5px;">Производитель:</span>
                                <?

									$query = $db->query("SELECT diller FROM products ".$type_cond." GROUP by diller");
									echo "<select onChange=\"location.href='?type=".$type."&diller='+this.value\" name=\"diller\" class=\"custom-select\" placeholder=\"выбрать\">";

									while($row = $query->fetch_assoc()){
										$url = strtok($_SERVER['REQUEST_URI']);
										$url .= '?diller='.$row["diller"];
										if(isset($_GET['type'])):
											$url .= '&type='.$_GET['type'];
										endif;

										if ($diller == $row["diller"]) $sel = " selected";
										else $sel = "";
										echo "<option data-name='".$row["diller"]."' value='" .$url. "'".$sel;

										if($_GET['diller'] == $row["diller"] ) echo ' selected';

										echo ">".$row["diller"]."</option>";
									}
									echo "</select>";?>
                            </div>
                            <!-- выборка end -->
                            <?php
								}
							}
							?>
                    </div>

                    <div class="select_wrap">
                        <?php 
						         $req_uri = str_replace('/catalog.php', '', $_SERVER['REQUEST_URI']);
						         	?>
                        <div class="top-nav">
                            <span class="catalog__top-nav__equipment">Оборудование </span>
                            <select name="sources" id="sources" class="custom-select sources" placeholder="выбрать">
										<?php 
										$arr_types = array(
											'Серводвигатели',
											'Сервоприводы',
											'Частотные преобразователи',
											'Сенсорные панели оператора'
										);
										for ($i=0; $i < count($arr_types); $i++) { 
											$url = '?type='.urlencode($arr_types[$i]);
											if(isset($_GET['diller'])):
												$url .= '&diller='.strip_tags($_GET['diller']);
											endif;


											echo '<option data-name="'.$arr_types[$i].'" value="'.$url.'"'; 
											if($_GET['type'] == $arr_types[$i] ) echo 'selected';
											echo '>'.$arr_types[$i].'</option>';
										}
										?>
									</select>
                        </div>
                    </div>
                    <!--searsh -->
                    <div class="search-bar">
                        <form action="catalog.php" method="get">
                            <input type="text" name="search" placeholder="Поиск" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск по оборудованию';}" value="<? echo $_GET['search'] ?>">
                            <input type="submit" value="">
                        </form>
                    </div>
                    <!--searsh -->
                </div>
                <!--end top_wrap-->

                <?php 
$def_word = 'электроники';
if(isset($_GET['type']) && $_GET['type'] != ''):
	$type_ = strip_tags($_GET['type']);
	switch ($type_) {
		case 'Серводвигатели':
			$def_word = 'серводвигателей';
			break;
		case 'Сервоприводы':
			$def_word = 'сервоприводов';
			break;
		case 'Частотные преобразователи':
			$def_word = 'частотных преобразователей';
			break;
		case 'Сенсорные панели оператора':
			$def_word = 'сенсорных панелей оператора';
			break;
	}
endif;

if( isset($_GET['id']) && $_GET['id'] != '' ):
	$id_ = (int)$_GET['id'];
	$query1 = $db->query("SELECT upcomment FROM products WHERE `id`='$id_'");
	$row1 = $query1->fetch_assoc();
	if($row1["upcomment"] != ''):
		$def_word = $row1["upcomment"];
	endif;
endif;
?>

                <h1 class="catalog__h1" style="">Диагностика и ремонт
                    <?php echo $def_word ;?>
                </h1>


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
                        <div class="product-one" style="display:flex; flex-direction:row; justify-content:center; flex-wrap:wrap; align-content:flex-start;">


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


if(empty($_GET['id'])) {

$result = $db->query("SELECT COUNT(*) FROM products".$type_cond.$diller_cond);
$total_rows = $result->fetch_array();
$total_pages = ceil($total_rows[0] / $no_of_records_per_page);
$query = $db->query("SELECT * FROM products ".$type_cond.$diller_cond." LIMIT $offset, $no_of_records_per_page");
if($query->num_rows > 0){
    
    
    
    
    
    
    

    while($row = $query->fetch_assoc()){
								echo '
								<div class="col-md-4 product-left p-left catalog" style="">
								<div class="product-main simpleCart_shelfItem" style="padding: 1em; margin: 5%;">
									<a href="?id='.$row["id"].'" class="mask"><img class="img-responsive zoom-img" src=".'.$row["imgFile"].'.jpg" alt="" /></a>
									<div class="product-bottom">
										<p class="catalog__marg" style=" word-break: normal; font-size: 1.13em;
    line-height: 1.25em; font-family: Arial, Helvetica Neue, Helvetica,sans-serif; color: #000; margin-left:5%;;">'.$row["block"].'<br>'.$row["name"].'</p>
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
                                <h1 class="catalog__h1 catalog__h1__item" >'.$row["block"].' '.$row["name"].'</h1>
                                <div class="product-row" style="display: flex; flex-direction: row; justify-content:center; >
                                
								<div class="col-md-4">
								<div class="simpleCart_shelfItem catalog_item_slider">
								 
                            <section class="regular"> 
                               <div>
                                    <img src="../img/servodrive-slider-pictures/berger_6154.jpg" alt="Ремонт серводвигателей BERGER LAHR">
                                </div> 
                                <div>
                                    <img src="../img/servodrive-slider-pictures/drive_abb_6176.jpg" alt="Ремонт серводвигателей ABB">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/siemens_1fk7064_6231.jpg" alt="Ремонт серводвигателей SIEMENS">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/remont_elau_6034.jpg" alt="Ремонт серводвигателей ELAU ">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/remont_laferservo_6022.jpg" alt="Ремонт серводвигателей LAFERTSERVO">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/servodrive_6013.jpg" alt="Ремонт серводвигателей PSE-312-8">
                                </div>
                                 <div>
                                    <img src="../img/servodrive-slider-pictures/servodrive_abb_6142.jpg" alt="Cервомоторы ABB ремонт">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/servomotor-lenze-6097.jpg" alt="Ремонт серводвигателей Lenze">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/servomotor_control_technigues.jpg" alt="Ремонт серводвигателей Control_Technigues">
                                </div>
                                <div>
                                    <img src="../img/servodrive-slider-pictures/siemens_1ah3_6173.jpg" alt="Диагностика серводвигателей Siemens">
                                </div>
                               
                          </section> 
                         
                        <!--slider-->	
																								
		            <button class="callme_button catalog_item_buttonCall"><span class="header__buttonCall__text">Оставить<br>заявку</span></button>                   					
										
									
									
								</div>
							</div>
                            
                            <div class="catalog_cardinfo">
                            
                            <ol class="rounded">
                              <li><a href="#">Диагностика от 1 дня</a></li>
                              <li><a href="#">Ремонт от 3 дней</a></li>
                              <li><a href="#">Гарантия на ремонт 6 месяцев</a></li>
                              <li><a href="#">Работаем по безналичному расчету и договору</a></li>  
                            </ol>
                            </div>
                         

 
                    
                    <div class="list_works" >
                        <form action="pages/our-works.html" class="pages__linkOurWorks" style="text-decoration: none; display: block; "><button class="pages__linkOurWorks__button" type="submit" style=" height: 50px; border-radius: 10px; padding-right: 10px; padding-left:10px; background-color: #465DCF; color:#fff;">Cписок всех выполненных работ (Посмотреть...)</button> </form>  
                        
                        
                        <div class="pages__content__search repair_search catalog_search" style="">
                            <form class="pages__content__searchForm catalog_search__item_serchForm">
                                <input type="text" placeholder="Найти оборудование">
                                  <a class="pages__content__searchForm__button" href="pages/our-works.html"></a>
                                
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
        <link href="css/jquery.jbcallme.css" rel=stylesheet>
        <!-- container -->
        
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-2.2.0.min.js"></script>
       <script src="js/slick.js"></script>
        
        <!--form to take call from client start-->
        <script src="js/jquery.jbcallme.js"></script>
        <script src="js/custom.js"></script>
        <script src="js/cat_contactform.js"></script>
        <!--form to take call from client end-->




        <!-- fixed menu start  -->
        <script src=js/fixedmenu.js></script>
        <!-- mail form start-->
        <script src=js/callmefile.js></script>
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

        <!-- форма всплывающего окна формы обратной связи -->
        <div class="fields form-main">
            <form class="form-inner" id="ajax-contact-form" enctype="multipart/form-data" method="post">
                <div class="form-group">
                    <label for="contactFF" style="color:#000">ВАШ ПОЧТОВЫЙ АДРЕС</label>
                    <input id="contactFF" name="contactFF" type="email" placeholder="E-mail" required="" style="border: 1px solid #B0C4DE;">
                </div>
                <div class="form-group">
                    <label for="telFF" style="color:#000;">Телефон:</label>
                    <input id="telFF" name="telFF" type="tel" placeholder="Телефон" style="border: 1px solid #B0C4DE;">
                </div>
                <div class="form-group">
                    <label for="nameFF" style="color:#000;">ТИП, МОДЕЛЬ НЕИСПРАВНОГО БЛОКА</label>
                    <input id="nameFF" name="nameFF" type="text" style="border: 1px solid #B0C4DE;" placeholder="Тип">
                </div>
                <div class="form-group">
                    <label for="projectFF" style="color:#000;">ОПИСАНИЕ, НЕИСПРАВНОСТИ. НОМЕР ОШИБКИ</label>
                    <textarea id="projectFF" name="projectFF" cols="40" rows="9"></textarea>
                </div>
                <div class="control-file">
                    <label for="fileFF" style="color:#000; border: 1px solid #B0C4DE;">Прикрепить файл:</label>
                    <input id="fileFF" name="fileFF" type="file">
                </div>
                <button class="btn form-button" type="submit" id="submitFF">Отправить заявку</button>
                <span class="close">&#215;</span>
            </form>
        </div>
        <!-- форма всплывающего окна формы обратной связи -->

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

    </body>

    </html>
