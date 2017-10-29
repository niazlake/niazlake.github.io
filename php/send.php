<?php
  if(isset($_POST['submit']))
  {
  	
  		$to = "alivartstudio@gmail.com";
  		$subject = "Message from Tubatay.com";
  		$headers = "MIME-Version: 1.0" . "\r\n";
	    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	    $headers .= 'From: <info@tubatay.com>' . "\r\n";
	    $message .= '<p><strong>Имя:</strong></p>'.$_POST['name'].'<br><p><strong>Телефон:</strong></p>'.$_POST['phone'].'';
	    if(mail($to, $subject, $message, $headers))
		   {
	          echo '<div style="color:green; text-align: center;"><strong>Письмо отправлено</strong>!<br>Мы скоро с вами свяжемся!</div>';
		   }
		   else {
	          echo '<div style="color:red; text-align: center;">Произошла ошибка</div>';
		   }
	  	
  }
?>