<?php

if (strlen($_POST['phone']) > 5) {
	$to = 'testtest@mail.ru';
	$subject = 'Заявка с сайта';
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: TEST <callback@thelandpage.ru>\r\n";

	if (isset($_POST['name'])) { $message .= '<p>Имя: '.$_POST['name'].'</p>'; }
	if (isset($_POST['phone'])) { $message .= '<p>Телефон: '.$_POST['phone'].'</p>'; }

  $message .= '</body></html>';

	$send = mail($to, $subject, $message, $headers);

	if ($send) {
		print "success";
	}
	else {
		print "error";
	}
}

?>
