<?php 
$title = 'ООО Кернел официальный сайт Ремонт электроники и диагностика';
$keywords = 'диагностика, ремонт, наладка, выезд, официальный сайт, электроника';
$description = 'Сервисный центр производит: диагностику, ремонт электроники. Ремонтируем электронную часть станков и промышленную электронику. Производим выезд на оборудование Заказчика';
$classes = 'contacts';
$menuID = 'item-8';
require '../header.php';
?>
   <style>
   #item-8 {background:linear-gradient(to top,#FF7E00,white);}
   </style>
            


            <div class="contacts_adress_tel row" itemscope itemtype="http://schema.org/Organization">
               <div class="title-unit">
                <h1 class="contacts_main_h1" itemprop="name">Сервисный центр по ремонту промышленной электроники ООО "КЕРНЕЛ"</h1>
            </div>
                <div class="contacts col-md-6">
                    <h3 class="contacts_main_h3">Фактический / Юридический адрес:</h3>
                    <p >
                        445030,<span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> РФ, Самарская область, г. Тольятти, <br> ул. 40 лет Победы, д. 17, этаж 1 <br> офис 1004, 1005</span>
                    </p>
                    
                    <h3 class="contacts_main_h3">Почтовый адрес:</h3>
                    <p>
                        <span>445030</span>, РФ, Самарская область, <br> г. Тольятти, А/Я 4924
                    </p>
                   
                    <h3 class="contacts_main_h3">Телефоны и эл. почта</h3>
                    <p>
                        тел. офис. <span itemprop="telephone">+7(8482) 79-78-54</span> <br> тел. для связи <span itemprop="telephone">+79171215301</span> <br> E-mail: <a itemprop="email" href="mailto:89171215301@mail.ru">89171215301@mail.ru</a>
                        <br>Режим работы:<time> пн-пт 8.00-18.00</time></p>
                    
                    <form action="delivery.html" class="pages__linkOurWorks" style="text-decoration: none; display: block; "><button class="pages_contacts_delivery" type="submit" style="padding: 20px; padding-top: 20px; border-radius: 10px; background-color: #465DCF; color:#fff;">Доставка в ремонт</button> </form> 
                </div>
                <div class="map col-md-6">
                 <!--  <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5fe842be51a02b35a388c09e34aa713bbb777b7fe95961e889a177763ce5a17b&amp;max-width=500&amp;height=400&amp;lang=ru_RU&amp;scroll=true;"></script> -->
                    <div class="ymap-container col-sm-1 col-md-6 col-lg-6">
    <div class="loader loader-default"></div>
    <div id="map-yandex" class="contacts_main_map-yandex"></div>
</div><!-- .ymap-container -->


                </div>
            </div>
   
 <?php require '../footer.php';?>   