
<!DOCTYPE html>
<html>
    <head>
        <title>Heartcode CanvasLoader example</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <!-- Include the heartcode canvasloader js file -->
        

        <style type="text/css">
            body, html {
                margin:0;
                padding:0;
                overflow:hidden;
                background-color:#ffffff;
            }
            .wrapper {
                position:absolute;
                top:50%;
                left:50%;
            }
        </style>
    </head>
    <body>
        <!-- Create a div which will be the canvasloader wrapper -->	
        <div id="spinner" class="wrapper"></div>
        <!-- This script creates a new CanvasLoader instance and places it in the wrapper div -->        
        <form id="form" action="enviarEmail_1.php" method="POST">
            <h2>Enviamos tu Petición</h2>
            <input type="text" id="nombre" name="nombre"  placeholder="Tu nombre" required /><br>
            <input type="email" id="email" name="email" placeholder="Tu correo electronico" required /><br>
            <input type="text" id="asunto" name="asunto" placeholder="Asunto" required /><br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Escribe tu consulta" required></textarea><br>
            <button id="button-upload" onclick="return validar()">A</button>
        </form>
        <script type="text/javascript">
            function spinner(){
                var cl = new CanvasLoader('spinner');
                cl.setColor('#f1d761');
                cl.setShape('spiral');
                cl.setDiameter(64);
                cl.setDensity(14);
                cl.setRange(1);
                cl.setSpeed(1);
                cl.setFPS(9);
                cl.show();

                // This bit is only for positioning - not necessary
                var loaderObj = document.getElementById("canvasLoader");
                loaderObj.style.position = "absolute";
                loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
                loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
            }
        </script>
    </body>
</html>