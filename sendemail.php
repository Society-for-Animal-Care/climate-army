<?php
$field_name = $_POST['cf_full_name'];
$field_email = $_POST['cf_email'];
$field_country = $_POST['cf_country'];
$field_city = $_POST['cf_city'];

$mail_to = 'societyforanimalcare@gmail.com';
$subject = ' '.$field_name;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Country: '.$field_country;
$body_Message .= 'City: '.field_city;


$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for signing up! You will receive an email welcoming you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Failed to send form. Please send your form to societyforanimalcare@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
?>
