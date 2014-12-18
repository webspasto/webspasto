<?php
$msg = "";
$msgId= "";
if (isset($_GET['m'])){
    $get = $_GET['m'];
    if ($get==1){
        $msg="Gracias, su mensaje fue enviado con éxito.";
        $msgId="class='msg-exito'";
    }
    else if ($get==2){
        $msg="Lo sentimos, su mensaje no pudo ser enviado.";
        $msgId="class='msg-error'";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/favicon.png" type="image/png">
        <script src="js/heartcode-canvasloader-min-0.9.1.js"></script>
        <script src="js/operations.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div id="spinner" class="wrapper"></div>
        <section id="contenedor">
            <label for="msg" <?php echo $msgId; ?>><?php echo $msg; ?></label>
            <div class="divizquierda formvertical">
                <form id="form" onsubmit="javascript:return validar();">
                    <h2 style="text-align:center;">Enviamos tu Petición</h2>
                    <input type="text" id="nombre" name="nombre"  placeholder="Tu nombre" required /><br>

                    <p><div id="txtHint"></div>
                    <input type="email" id="email" name="email" placeholder="Tu correo electronico" required/><br>
                    </p>
                    
                    <input type="text" id="asunto" name="asunto" placeholder="Asunto" required /><br>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe tu consulta" required></textarea><br>
                    <input type="submit" value="Enviar">
                </form>
            </div>
            <div class="divderecha">
                <h2 style="text-align:center;">Datos de Contacto</h2>
                <table class="tablacentro">
                    <tr>
                        <td>Email<br>webspasto@gmail.com</td>
                    </tr>
                    <tr>
                        <td><hr>Celular<br>3183234711 - 3046703421</td>
                    </tr>
                    <tr>
                        <td><hr>Dirección<br>San Juan de Pasto (Nariño) -Colombia </td>
                    </tr>
                    <tr>
                        <td><hr>Siguenos<br>
                            <div id="divredes"class="social">
                                <a href="https://twitter.com/webspasto" title="Twitter"><img src="img/social_c_twitter.png"></a>
                                <a href="https://www.facebook.com/pages/Desarrollo-Web-Pasto/382046511962765" title="Facebook"><img src="img/social_c_facebook.png"></a>
                                <a href="https://plus.google.com/u/0/105315169514370720149/" title="Google +"><img src="img/social_c_googleplus.png"></a>
                                <a href="https://www.youtube.com/channel/UCsKneHB6ja_sI2qa6tHmUyg/feed" title="Youtube"><img src="img/social_c_youtube.png"></a>
                            </div>
                        </td>
                    </tr>
                </table>		
            </div>
            <br><br>
            <div class="divsolo">
                <h2 style="text-align:center;">Ubicanos</h2>
                <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d773.9540110714125!2d-77.27768199999991!3d1.204665500573275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2ed4999e7580a9%3A0x7e5550bfec06119e!2sCalle+14+%23+16-2%2C+Pasto%2C+Nari%C3%B1o%2C+Colombia!5e1!3m2!1ses-419!2ses!4v1418515498645" frameborder="0"></iframe>	
            </div>
        </section>
        <?php include 'footer.html'; ?>
    </body>
</html>