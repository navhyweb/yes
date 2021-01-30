<?php

if (isset($_pos¨t['enviar'])) {
	if (!empty($_post['name']) && !empty($_post['email']) && !empty($_post['asunto']) && !empty($_post['msg'])) {
		$name = $_post['name'];
		$asunto = $_post['asunto'];
		$email = $_post['email'];
		$msg = $_post['msg'];

		$header = "From: noreply@example.com"  . "\r\n";
		$header = "Reply-to: noreply@example.com"  . "\r\n";
		$header = "X-Mailer: PHP/"  . "\r\n";
		$mail = @mail ($email, $asunto, $msg, $header);
		if ($email) {
			echo "<h4>Mail enviado exitosamente</h4>";
		}
	}
}
