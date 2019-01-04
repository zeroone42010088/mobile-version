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
  $fromName = 'glebwebsite';

  $succesMessage = 'Ваша заявка по ремонту будет рассмотрена в ближайшее время! Если у Вас срочный вопрос, то позвоните по телефону +79171215301 ПН-ВС с 8.00-22.00';
  $errorMessage = 'Извините, письмо не отправлено. Размер всех файлов превышает 10 МБ.';

	$to = "114polaris@gmail.com";//"114polaris@gmail.com";


	$from = "new_client@remontservo.ru";
	$subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
	$message = "<br>Email".$_POST['contactFF'].
    "<br>Телефон".$_POST['telFF'].
    "<br>Тип, модель неисправного блока: ".$_POST['nameFF'];

    if(isset($_POST['nameFF1']) and $_POST['nameFF1']!= ''):
      $message .= "<br>Тип/модель неисправного чпу, либо контроллера с панелью оператора: ".$_POST['nameFF1'];
    endif;
  $message .=
    "<br>Описание неисправности. номер ошибки: ".$_POST['projectFF'].
    "<br><br>Адрес сайта: ".$_SERVER['HTTP_REFERER'];
 


$picture = array();
if (!empty($_FILES['fileFF']['tmp_name'])) 
{ 
    // Закачиваем файл 
    $path = $_FILES['fileFF']['name']; 

    if (copy($_FILES['fileFF']['tmp_name'], $path)) $picture[] = $path; 

} 
if (!empty($_FILES['fileFF2']['tmp_name'])) 
{ 
    // Закачиваем файл 
    $path = $_FILES['fileFF2']['name']; 

    if (copy($_FILES['fileFF2']['tmp_name'], $path)) $picture[] = $path; 

} 
if (!empty($_FILES['fileFF3']['tmp_name'])) 
{ 
    // Закачиваем файл 
    $path = $_FILES['fileFF3']['name']; 

    if (copy($_FILES['fileFF3']['tmp_name'], $path)) $picture[] = $path; 

} 
//var_dump($picture);

require '../inc/class.phpmailer.php';

        $mail = new PHPMailer(); 
        $mail->From = $from;      // от кого 
        $mail->FromName = $fromName;   // от кого 
        $mail->AddAddress($to, 'Имя'); // кому - адрес, Имя 
        $mail->IsHTML(true);        // выставляем формат письма HTML 
        $mail->Subject = $subj;  // тема письма 
        foreach ($picture as $key => $pic) {
          $mail-> AddAttachment($pic);
        }
        
        $mail->Body = $message;
        
        // отправляем наше письмо 

  if( $mail->Send() ):
    echo $succesMessage;
    foreach ($picture as $key => $pic) {
      unlink($pic);
    }
  else:
    echo $errorMessage;
  endif;

}
?>
