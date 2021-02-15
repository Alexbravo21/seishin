<?php
	header('Content-type: text/html; charset=utf-8');
	require './phpmailer/PHPMailerAutoload.php'; //Envia correos


	$nombre = filter_var($_POST["empresa_nombre"], FILTER_SANITIZE_STRING);
	$nombre_empresa = filter_var($_POST["empresa_nombre_empresa"], FILTER_SANITIZE_STRING);
	$telefono = filter_var($_POST["empresa_telefono"], FILTER_SANITIZE_STRING);
	$correo = filter_var($_POST["empresa_correo"], FILTER_SANITIZE_STRING);
	$comentario = filter_var($_POST["empresa_comentario"], FILTER_SANITIZE_STRING);
	$txt = "El Sr./Sra. ".$nombre." dejó los siguientes datos: <br /><br />
    Nombe de su empresa: ". $nombre_empresa ."<br /> <br />
    Teléfono: ". $telefono ."<br /> <br />
    Correo: ". $correo ."<br /> <br />
    Comentario: ". $comentario ."<br /> <br />
	";

	//Create a new PHPMailer instance
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->SMTPDebug = 0;//2 para ver mas detalles
	$mail->Debugoutput = 'html';
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = "contacto.seishingroup@gmail.com";
	$mail->Password = "s31sh1n1234";
	$mail->setFrom('contacto.seishingroup@gmail.com', 'Formulario de contacto');
	$mail->Subject = "Mensaje de ". $nombre;
	$mail->Body = $txt;
	$mail->IsHTML(true);
	$mail->addAddress("contacto.seishingroup@gmail.com", $nombre);
	$mail->addAddress("alexbravo21@gmail.com", $nombre);

	if($mail->send()){
		echo json_encode(["success"=>true]);
	}else{
		echo json_encode(["success"=>false, "error_desc"=>"Error al intentar enviar."]);
	}
