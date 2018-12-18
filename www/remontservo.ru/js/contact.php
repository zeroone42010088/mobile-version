<?php
if (isset ($_POST['contactFF'])) {
	$message_client = 
        '    Здравствуйте!
    Вы отправили заявку в Сервисный центр по ремонту промышленной электроники.
    Ваша заявка будет рассмотрена в ближайшее время.
    Если у Вас срочное обращение, то можете перезвонить на телефон 
    +79171215301 с ПН-ВС с 8.00-22.00
    или на рабочий номер 
    +7(8482)79-78-54 с ПН-ПТ с 8.00-18.00';
  
	$to = "114polaris@gmail.com";//"114polaris@gmail.com";
	$from = "new_client@remontservo.ru";
	$subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
	$message = "\nEmail".$_POST['contactFF'].
    "\nТелефон".$_POST['telFF'].
    "\nТип, модель неисправного блока: ".$_POST['nameFF'];

    if(isset($_POST['nameFF1']) and $_POST['nameFF1']!= ''):
      $message .= "\nТип/модель неисправного чпу, либо контроллера с панелью оператора".$_POST['nameFF1'];
    endif;
	$message .=
    "\nОписание неисправности. номер ошибки: ".$_POST['projectFF'].
    "\n\nАдрес сайта: ".$_SERVER['HTTP_REFERER'];
 
  	$boundary = md5(date('r', time()));
  	$filesize = '';
  	$headers = "MIME-Version: 1.0\r\n";
  	$headers .= "From: " . $from . "\r\n";
  	$headers .= "Reply-To: " . $from . "\r\n";
  	$headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
  	$message="
	Content-Type: multipart/mixed; boundary=\"$boundary\"
	 
	--$boundary
	Content-Type: text/plain; charset=\"utf-8\"
	Content-Transfer-Encoding: 7bit
	 
	$message";
    
    if(is_uploaded_file($_FILES['fileFF']['tmp_name'])) {
		$attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF']['tmp_name'])));
		$filename = $_FILES['fileFF']['name'];
		$filetype = $_FILES['fileFF']['type'];
		$filesize = $_FILES['fileFF']['size'];
		$message.="
 
			--$boundary
			Content-Type: \"$filetype\"; name=\"$filename\"
			Content-Transfer-Encoding: base64
			Content-Disposition: attachment; filename=\"$filename\"
			 
			$attachment";
    }


    if(is_uploaded_file($_FILES['fileFF2']['tmp_name'])) {
         $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF2']['tmp_name'])));
         $filename = $_FILES['fileFF2']['name'];
         $filetype = $_FILES['fileFF2']['type'];
         $filesize = $_FILES['fileFF2']['size'];
         $message.="
 
		--$boundary
		Content-Type: \"$filetype\"; name=\"$filename\"
		Content-Transfer-Encoding: base64
		Content-Disposition: attachment; filename=\"$filename\"
		 
		$attachment";
    }



	if(is_uploaded_file($_FILES['fileFF3']['tmp_name'])) {
         $attachment = chunk_split(base64_encode(file_get_contents($_FILES['fileFF3']['tmp_name'])));
         $filename = $_FILES['fileFF3']['name'];
         $filetype = $_FILES['fileFF3']['type'];
         $filesize = $_FILES['fileFF3']['size'];
         $message.="
 
		--$boundary
		Content-Type: \"$filetype\"; name=\"$filename\"
		Content-Transfer-Encoding: base64
		Content-Disposition: attachment; filename=\"$filename\"
		 
		$attachment";
    }


   $message.="
		--$boundary--";

 
  if ($filesize < 10000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
    mail($to, $subject, $message, $headers);
    echo 'Ваша заявка по ремонту будет рассмотрена в ближайшее время! Если у Вас срочный вопрос, то позвоните по телефону +79171215301 ПН-ВС с 8.00-22.00';


    $to = $_POST['contactFF'];
	$subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
	$headers = "From: " .$from. "\r\n";

	mail($to,$subject,$message_client,$headers);


    //echo $message;
  } else {
    echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
  }
}
?>
