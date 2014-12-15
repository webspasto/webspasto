<?php
$msg = "";
if (isset($_GET['m'])){
    $get = $_GET['m'];
    if ($get==1){
        $msg="Su mensaje fue enviado con éxito";
    }
    else if ($get==2){
        $msg="Su mensaje fue enviado con éxito";
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
    </head>
    <body>
        <?php include 'header.php'; ?>
        <section id="contenedor">
            <div class="divizquierda formvertical">
                <form action="enviarEmail.php" method="post">
                    <h2 style="text-align:center;">Enviamos tu Petición</h2>
                    <label for="msg"><?php echo $msg; ?></label>
                    <input type="text" id="txtnombre" name="txtnombre"  placeholder="Tu nombre" required></input>
                    <input type="email" id="txtemail" name="txtemail" placeholder="Tu correo electronico" required></input>
                    <textarea name="txtconsulta" id="txtconsulta" cols="30" rows="10" placeholder="Escribe tu consulta" required></textarea>
                    <input type="submit" value="Enviar"></input>
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
                                <a href="https://www.facebook.com/pages/Desarrollo-Web-Pasto/382046511962765" title="Facebook"><img src="img/icon_facebook.png"></a>
                                <a href="#" title="Gmail"><img src="img/icon_gmail.png"></a>
                                <a href="https://plus.google.com/u/0/105315169514370720149" title="Google +"><img src="img/icon_googlemas.png"></a>
                                <a href="https://twitter.com/webspasto" title="Twitter"><img src="img/icon_twitter.png"></a>
                                <a href="#" title="Youtube"><img src="img/icon_youtube.png"></a>
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