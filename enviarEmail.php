<meta charset="utf-8">﻿
<?php
include("lib/class.phpmailer.php");
include("lib/class.smtp.php");
$mail = new PHPMailer();
$mail->IsSMTP();
//$mail->SMTPDebug = 2;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "ssl://smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "webspasto@gmail.com";
$mail->Password = "Casitegano";
$mail->Priority = 1;

$mail->From = "webspasto@gmail.com";
$mail->FromName = "Webs Pasto";
$mail->Subject = "Mensaje de Webs Pasto";
$mail->AltBody = "Mensaje de WP";
$nombre=$_POST['txtnombre'];
$email=$_POST['txtemail'];
$consulta=$_POST['txtconsulta'];
$mail->MsgHTML("<b style='background: red;	color: white;'>".$nombre.$email.$consulta."</b>.");
$mail->AddAddress("webspasto@gmail.com", "");
$mail->IsHTML(true);



$mail->SetFrom("webspasto@gmail.comwebspasto@gmail.com", "Destinatario");
$mail->AddReplyTo("webspasto@gmail.com", "Destinatario");

//$mail->Body     = "Mensaje de prueba";
//$mail->WordWrap = 50;  


if(!$mail->Send()) {
header('Location: contactos.php?m=2');
} else {
header('Location: contactos.php?m=1');
}
?>