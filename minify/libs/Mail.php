<?php

class Mail{
	public static function sent($subject, $email = EMAIL, $message = 'Empty'){	
		//$str = @strip_tags($str);
    //$str = @stripslashes($str);
    //$str = mysql_real_escape_string($str);
			
		$headers = 'From: '. $email . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		return mail(EMAIL, $subject, $message, $headers);
	}   
}