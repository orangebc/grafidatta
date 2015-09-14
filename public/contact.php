<?php

	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$celular = $_POST['celular'];
	$telefono = $_POST['telefono'];
	$comentarios = $_POST['comentarios'];

	$to = 'contacto@grafidatta.mx';
	$title = 'Mensaje desde Grafidatta web';
	$from = "GrafidattaMx@grafidatta.mx";

	$headers = 'From: ' . $from . "\r\n";
	$headers .= "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

	$message = '<html><body><head><meta charset="UTF-8"></head>';
	$message .= '<strong>Formulario de contacto Grafidatta </strong><br><br>';
	$message .= 'Nombre de Cliente: ' . '<strong>' . $nombre . '</strong><br><br>';
	$message .= 'Email: ' . '<strong>' . $email . "</strong><br><br>";
	$message .= 'Celular: ' . '<strong>' . $celular . "</strong><br><br>";
	$message .= 'Teléfono: ' . '<strong>' . $telefono . "</strong><br><br>";
	$message .= 'Comentarios: ' . '<strong>' . $comentarios . "</strong><br><br>";
	$message .= '</body></html>';


	if ($_POST['submit']) {
	if (mail($to, $title, $message, $headers )) {

	echo '
	<script type="text/javascript">
			alert("Gracias, en breve nos comunicaremos con usted.");
	</script>

	<script type="text/javascript">
		window.location.href = "http://grafidatta.mx";
	</script>
		'
	;
		} else {
			echo 'Nos disculpamos, algo ha salido inesperadamente! :('; }
		}
?>
