<?php
   $email = $_POST['email'];
   $message = $_POST['message'];

   $notif = '';
   if(trim($email) == '')
      $notif = 'Ведите ваш email!';
   else if(trim($message) == '')
      $notif = 'Введите Сообщение!';
   else if(strlen($message) < 10)
      $notif = 'Минимальное допустимое значение сообщения 10 символов!';
   if($notif !=''){
      echo $notif;
      exit;
   }

   $nameofmail = "=?utf-8?B?".base64_encode("Пришла Заявка")."?=";
   $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text-html;charset-utf-8\r\n";
   mail('priem.zayavok0004@gmail.com', $nameofmail, $headers )
?>