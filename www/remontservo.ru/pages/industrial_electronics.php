<?php 
$title = 'Ремонт промышленного оборудования, электроники Диагностика';
$keywords = 'промышленная электроника, ремонт, диагностика, оборудование, на компонентном уровне';
$description = 'Выполняем работы по диагностике и ремонту промышленной электроники на компонентном уровне, настройка';
$classes = 'servodrive';
require '../header.php';
?>

<div class="container">
<div class="main-content">
	

	<section class="repair_block">
		<h1 class="title">Ремонт промышленной электроники и оборудования</h1>
		<div class="row">
			<div class="col-md-6 left-block index_pages_slider">
				<div class="slider_img1">
								
                    <div>
                                    <img src="../img/industrial_electronics-slider-pictures/allen-bradley-6365.jpg" alt="Ремонт промышленной электроники Allen-Bradley">
                                </div> 
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/block-6379.jpg" alt="Ремонт блока управления">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/block_cpu_6408.jpg" alt="Ремонт электронного блока OMRON">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/block_haas_5530g1.jpg" alt="Ремонт промышленной электроники HAAS">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/sew_eurodrive_6398.jpg" alt="Ремонт промышленной электроники Sew-Eurodrive">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/siemens_1p_6386.jpg" alt="Ремонт промышленной электроники Siemens">
                                </div>   
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/siemens_simodrive_5691.jpg" alt="Диагностика электроники Siemens">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/simodrive_6411.jpg" alt="Ремонт промышленной электроники SIMODRIVE">
                                </div>
                                <div>
                                    <img src="../img/industrial_electronics-slider-pictures/sitop_power_5727.jpg" alt="Ремонт электронных блоков SITOP power">
                                </div>
                 </div>
				
			</div>
			<div class="col-md-6 right-block">
				<ul class="indexCard__right_block__ul"> 
                      <li class="pages_cards_liLetterA">Ремонт сервоусилитей.</li>
                                <li class="pages_cards_liLetterB"> Ремонт сервоконтроллеров.</li>
                                <li class="pages_cards_liLetterV"> Ремонт servo drive.</li>
                                <li class="pages_cards_liLetterG"> Ремонт драйверов двигателя.</li>
                                <li class="pages_cards_liLetterD"> Ремонт блока управления сервомоторов и серводвигателей.</li>
                                <li class="pages_cards_liLetterE"> Ремонт блока управления серводвигателей.</li>
                                <li>&#160;&#160;&#160; Услуги в сервисном центре:</li>
                                <li class="pages_cards_li"> диагностика поэлементная ;</li>
                                <li class="pages_cards_li"> определение неисправных микросхем;</li>
                                <li class="pages_cards_li"> замена неисправных микросхем;</li>
                                <li class="pages_cards_li"> ремонт неисправных плат;</li>
                                <li class="pages_cards_li"> списывание прошивок с микросхем;</li>
                                <li class="pages_cards_li"> запись прошивок в микросхемы;</li>
                                <li class="pages_cards_li"> проверка работоспособности оборудования на стэнде;</li>
                                <li class="pages_cards_li"> настройка;</li>
                                <li class="pages_cards_li"> подключение;</li>
                                <li class="pages_cards_li"> параметрирование;</li>
                                <li class="pages_cards_li"> программирование;</li>
                                <li class="pages_cards_li"> устранение электронных сбоев;</li>
                                <li class="pages_cards_li"> наладка;</li>
                                <li class="pages_cards_li"> написание и изменение программ;</li>
                                <li class="pages_cards_li"> обслуживание;</li>
                                <li class="pages_cards_li"> без электро-схем на оборудование;</li>
                                <li class="pages_cards_li"> ремонтируем устаревшее оборудование,<br> которое снято с производства;</li>
                                <li class="pages_cards_li"> ремонтируем любые производители оборудование;</li>
                                <li class="pages_cards_li"> заключение договора;</li>
                                <li class="pages_cards_li"> предоставление гарантии на ремонт электронного устройства 6 месяцев;</li>
                                <li class="pages_cards_li"> ремонтируем гарантийное оборудование;</li>
                                <li class="pages_cards_li"> ремонтируем послегарантийное оборудование.</li>
                            </ul> 
			</div>
		</div>


		<div class="row">
			<div class="col-md-6">
				<!--request begin -->
				<button class="callme_button content__sellForm__button repair_sellForm orange_btn"><span class="header__buttonCall__text">Оставить<br>заявку</span></button>
				<!--request end -->
			</div>
			<div class="col-md-6">
				<form action="our-works.html" class="pages__linkOurWorks">
					<button class="pages__linkOurWorks__button" type="submit">Cписок всех выполненных работ (Посмотреть...)</button> 
				</form>  
                        
				<!--searsh start -->
				<div class="pages__content__search repair_search">
					<form action="../catalog.php" method="get" class="pages__content__searchForm">
                        <input type="text" name="search" placeholder="Поиск по каталогу" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск по оборудованию';}" value="<? echo $_GET['search'] ?>">
                         <button type="submit" class="index__content__searchForm__button" href="../catalog"></button>   
                    </form>
				</div>
				<!--searsh end -->
			</div>
		</div>


	</section>
		
		

</div>
</div><!--end container-->
<?php require '../footer.php';?>