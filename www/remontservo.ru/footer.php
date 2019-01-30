</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-md-3">
				<img src="/img/logo3.png" alt="">
			</div>
			<div class="col-sm-6 col-md-6">
				<div class="sitename">ООО "КЕРНЕЛ" Ремонт промышленной электроники</div>
			</div>
			<div class="hidden-small col-sm-3 col-md-3">
				<img src="/img/logo3.png" alt="">
			</div>
		</div>
	</div>
</footer>
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


<script src="/js/jquery.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/js/jquery.jbcallme.js"></script>
<script src="/js/scripts.js"></script>

<!-- Yandex.Metrika counter -->  <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(44532427, "init", { id:44532427, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/44532427" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->  

</body>
</html>