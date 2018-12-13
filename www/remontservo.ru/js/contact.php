<?php
if (isset ($_POST['contactFF'])) {
  $to = "msulianov@gmail.com";//"114polaris@gmail.com";
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
    echo 'Ваша заявка по блоку, ', $_POST['nameFF'].', отправлена, спасибо!';
    //echo $message;
  } else {
    echo 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';
  }
}
?>
