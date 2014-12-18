<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <?php
    include("lib/class.phpmailer.php");
    include("lib/class.smtp.php");
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "ssl";
    //$mail->SMTPDebug = 1;
    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465;
    $mail->Username = "webspasto@gmail.com";
    $mail->Password = "Casitegano";
   //$mail->Priority = 1;

    /*$mail->IsSendmail();
    $mail->Mailer = "smtp";
    $mail->SMTPDebug = 1;
    $mail->Host = 'mx1.hostinger.es';
    $mail->Port = 2525;
    $mail->SMTPAuth = true;
    $mail->Username = 'webspasto@gmail.com';
    $mail->Password = 'Casitegano';
    $mail->SMTPSecure = '';*/

    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $asunto = $_GET['asunto'];
    $consulta = $_GET['mensaje'];
    $mail->From = $email;
    $mail->FromName = $nombre;
    $mail->Subject = $asunto;
    $mail->AltBody = "Mensaje de WP";

    $mensaje = "<div style='padding:5px; background:#C6C6C6; border:0px solid black;''><div><p><strong>Nombre:</strong> " . $nombre . "</p></div><div><p><strong>Email: </strong>" . $email . "</p></div><div style='text-align:justify;'><p><strong>Consulta: </strong>" . $consulta . "</p></div></div>";
    $mail->MsgHTML($mensaje);
    $mail->AddAddress("webspasto@gmail.com", "");
    $mail->IsHTML(true);

    $mail->SetFrom($email, $nombre);
    $mail->AddReplyTo($email, $nombre);

    if (!$mail->Send()) {
        echo "<span style='color: red; font-weight: bold;'>Lo sentimos, su mensaje no pudo ser enviado.</span>";
    } else {
        echo "<span style='color: green; font-weight: bold;'>Gracias, su mensaje ha sido enviado.</span>";
    }
?>
</body>
</html>