<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">
        <script src="js/operations.js" type="text/javascript"></script>
        <script type="text/javascript">
            function cambiarPantalla(str) {
                var conexion;
                if (window.XMLHttpRequest)
                    conexion = new XMLHttpRequest();
                else
                    conexion = new ActiveXObjet("Microsoft.XMLHttpRequest");

                conexion.onreadystatechange = function () {
                    if (conexion.readyState == 4 && conexion.status == 200)
                        document.getElementById('contenedor').innerHTML = conexion.responseText;
                }
                conexion.open("GET", "pantallas.php?q=" + str, true);
                conexion.send();
            }
        </script>
    </head>
    <body>
        <div id="blook">
            <a onclick='overlay()'>Click here to show the overlay</a>
        </div>
        <div id="overlay">
            <div>
                <a onclick='overlay()'>close</a>
                <p>Content you want the user to see goes here.</p>
            </div>
        </div>
    </body>
</html>