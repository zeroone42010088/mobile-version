<?php 
$title = 'Заявка на ремонт и настройку оборудования';
$keywords = 'Заявка, заказ ремонта, выполнение ремонта, вызвать специалиста, диагностика электроники';
$description = 'Оставить заявку на ремонт и диагностику промышленной электроники и оборудования. Перемотка, настройка';
$classes = 'request';
require '../header.php';
?>

<div class="container">
<div class="main-content">
	<style>
   #item-5 {background:linear-gradient(to top,#FF7E00,white);}
   </style>
	<div class="filling-page">

                <div class="form-container transparent delievery_company request_padding">
            <h1 class="request_hTop" style="margin-bottom:10px; text-align: center; color: rgba(0,0,0,0.6);
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
</div><!--end container-->
<?php require '../footer.php';?>