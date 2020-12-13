<?php
	header('Content-type: text/html; charset=utf-8');
	require './phpmailer/PHPMailerAutoload.php'; //Envia correos


	$nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
	$dia = filter_var($_POST["dia"], FILTER_SANITIZE_STRING);
	$mes = filter_var($_POST["mes"], FILTER_SANITIZE_STRING);
	$anio = filter_var($_POST["anio"], FILTER_SANITIZE_STRING);
	$direccion = filter_var($_POST["direccion"], FILTER_SANITIZE_STRING);
	$estado = filter_var($_POST["estado"], FILTER_SANITIZE_STRING);
	$telefono = filter_var($_POST["telefono"], FILTER_SANITIZE_STRING);
	$correo = filter_var($_POST["correo"], FILTER_SANITIZE_STRING);
	$disponibilidad_viajar = filter_var($_POST["disponibilidad_viajar"], FILTER_SANITIZE_STRING);
	$tipo_trabajo = filter_var($_POST["tipo_trabajo"], FILTER_SANITIZE_STRING);
	$idioma = filter_var($_POST["idioma"], FILTER_SANITIZE_STRING);
	$idioma_lvl = filter_var($_POST["idioma_lvl"], FILTER_SANITIZE_STRING);
	$estado_laboral = filter_var($_POST["estado_laboral"], FILTER_SANITIZE_STRING);
	$disponibilidad = filter_var($_POST["disponibilidad"], FILTER_SANITIZE_STRING);
	$cv = filter_var($_POST["cv"], FILTER_SANITIZE_STRING);
	$txt = "El Sr./Sra. ".$nombre." dejó los siguientes datos: <br /><br />
			Correo: ". $correo ."<br /> <br />
			Fecha de nacimiento: ". $dia ."/". $mes ."/". $anio ."<br /> <br />
			Dirección: ". $direccion ."<br /> <br />
			Estado: ". $estado ."<br /> <br />
			Teléfono: ". $telefono ."<br /> <br />
			Disponibilidad para viajar: ". $disponibilidad_viajar ."<br /> <br />
			Tipo de trabajo que busca: ". $tipo_trabajo ."<br /> <br />
			Idioma: ". $idioma .", con un nivel: ".$idioma_lvl."<br /> <br />
			Estado laboral: ". $estado_laboral ."<br /> <br />
			Disponibilidad: ". $disponibilidad ."<br /> <br />
			Su CV está en la siguiente liga: ". $cv ."<br /> <br />
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
