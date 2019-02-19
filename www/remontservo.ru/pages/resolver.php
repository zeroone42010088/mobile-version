<?php 
$title = 'Произведем ремонт резольвера, диагностику';
$keywords = 'резольвер, ремонт, диагностика';
$description = 'Выполняем работы по диагностике и ремонту резольверов';
$classes = 'resolver';
require '../header.php';
?>

<div class="container">
<div class="main-content">
	                               
                               <section class="repair_block">
		<h1 class="title">Ремонт резольверов</h1>
		<div class="row">
			<div class="col-md-6 left-block index_pages_slider">
				<div class="slider_img1">
                                <div>
                                    <img src="../img/resolver-slider-pictures/atas_resolver.jpg" alt="Ремонт резольверов ATAS">
                                </div> 
                                <div>
                                    <img src="../img/resolver-slider-pictures/ete_resolver.jpg" alt="Ремонт резольверов ETE">
                                </div>
                                <div>
                                    <img src="../img/resolver-slider-pictures/resolver_remont.jpg" alt="Ремонтируем резольверы">
                                </div>
                                <div>
                                    <img src="../img/resolver-slider-pictures/resolvers.jpg" alt="Резольверы диагностика">
                                </div>
                                <div>
                                    <img src="../img/resolver-slider-pictures/smartsyn-resolver.jpg" alt="Ремонт резольверов TAMAGAWA BRT SMARTSYN">
                                </div>   
                           </div>
				
			</div>
                        <!--slider-->
                       <div class="col-md-6 right-block">
				<ul class="indexCard__right_block__ul"> 
                               <li class="pages_cards_li"> Диагностика резольвера.</li>
                                <li class="pages_cards_li"> Ремонт резольвера.</li>
                                <li class="pages_cards_li"> Перемотка резольвера.</li>
                                <li class="pages_cards_li"> Перемотка обмоток резольвера.</li>
                                <li class="pages_cards_li"> Настройка резольвера.</li>
                                <li class="pages_cards_li"> Юстировка резольвера.</li>
                                <li class="pages_cards_li"> Ремонт резольвера серводвигателя.</li>
                                <li class="pages_cards_li"> Ремонт резольвера сервомотора.</li>
                                <li class="pages_cards_li"> Проверка работоспособности резольвера на серводвигателе с сервоприводом на стэнде.</li>
                                <li class="pages_cards_li"> Подключение.</li>
                                <li class="pages_cards_li"> Пуско-наладка.</li>
                                <li class="pages_cards_li"> Настройка.</li>
                                <li class="pages_cards_li"> Устранение электронных сбоев.</li>
                                <li class="pages_cards_li"> Техническое обслуживание.</li>
                                <li class="pages_cards_li"> Без электро-схем на оборудование.</li>
                                <li class="pages_cards_li"> Ремонтируем устаревшее оборудование которое снято с производства.</li>
                                <li class="pages_cards_li"> Ремонтируем любые производители оборудование.</li>
                                <li class="pages_cards_li"> Заключение договора.</li>
                                <li class="pages_cards_li"> Предоставление гарантии на ремонт электронного устройства 6 месяцев.</li>
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