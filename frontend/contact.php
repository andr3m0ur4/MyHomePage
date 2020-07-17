<?php

	$field_name = $_POST['cf_name'];
	$field_email = $_POST['cf_email'];
	$field_message = $_POST['cf_message'];

	$mail_to = 'andre.benedicto@etec.sp.gov.br';
	$subject = 'Mensagem do visitante do site ' . $field_name;

	$body_message = 'Do: '.$field_name."\n";
	$body_message .= 'E-mail: '.$field_email."\n";
	$body_message .= 'Messagem: '.$field_message;

	$headers = 'From: '.$field_email."\r\n";
	$headers .= 'Reply-To: '.$field_email."\r\n";

	$mail_status = mail($mail_to, $subject, $body_message, $headers);

	if ($mail_status) : ?>
		<script language="javascript" type="text/javascript">
			alert('Obrigado pela mensagem. Irei entrar em contato em breve.')
			window.location = '/'
		</script>
	<?php else : ?>
		<script language="javascript" type="text/javascript">
			alert('Mensagem falhou. Por favor, envie um e-mail para andre.benedicto@etec.sp.gov.br')
			window.location = '/'
		</script>
	<?php
	endif;
