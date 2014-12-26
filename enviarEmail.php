<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
</head>
<body>
    <?php
    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $asunto = $_GET['asunto'];
    $consulta = $_GET['mensaje'];

    $mensaje = "<div style='padding:5px; background:#EEE; border:0px solid black; text-align:justify;'>"
            . "<div><p><strong>Nombre:</strong> " . $nombre . "</p></div>"
            . "<div><p><strong>Email: </strong>" . $email . "</p></div>"
            . "<div><p><strong>Mensaje: </strong>" . $consulta . "</p></div>"
            . "</div>";
    
    $para = "webspasto@webspasto.hol.es";
    $headers = "From: " . $nombre . "<" . $email . ">\r\n";
    $headers .= "Reply-To: " . $nombre . "<" . $email . ">\r\n";
    $headers .= "CC: " . $para . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    if (!mail($para, $asunto, $mensaje, $headers)) {
        echo "<span style='color: red;'>"
                . "Error, su mensaje no pudo ser enviado.</span><br>"
                . "<a id='amsg' onclick='javascript:limpiarContacto();'>"
                . "<img id='imgmsg' title='Limpiar' src='img/img_error.png'></a>";
    } else {
        echo "<span style='color: green;'>"
                . "Gracias, su mensaje ha sido enviado.</span><br>"
                . "<a id='amsg' title='Limpiar' onclick='javascript:limpiarContacto();'>"
                . "<img id='imgmsg' src='img/img_exito.png'></a>";
    }
?>
</body>
</html>