<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">

        <!--<link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui.js"></script>-->

        <script src="js/javascript.js" type="text/javascript"></script>
        <script>
          /*$(function() {
            var icons = {
              header: "ui-icon-circle-arrow-e",
              activeHeader: "ui-icon-circle-arrow-s"
            };
            $( "#accordion" ).accordion({
              icons: icons
            });
            $( "#toggle" ).button().click(function() {
              if ( $( "#accordion" ).accordion( "option", "icons" ) ) {
                $( "#accordion" ).accordion( "option", "icons", null );
              } else {
                $( "#accordion" ).accordion( "option", "icons", icons );
              }
            });
          });*/
        </script>

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
        <style>
            .itemAcordion
            {
                background: transparent;
                border: 0;
                margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <section id="contenedor">
            <div class="divsolo">
                <div id="divPadre"class="acordeon" >
                    <a onclick="acordeon('div1','divPadre');">¿Quienes somos?
                        <div id="div1"><p>
                            <strong>Webspasto - Desarrollo de aplicaciones Web y Escrotorio</strong> es una empresa que, aplicando
                                el modelo TSP, se dedicada a la elaboración de herramientas o productos software para pequeñas o medianas empresas.
                        </p>
                        <hr></div>
                    </a><br>
                    <a onclick="acordeon('div2','divPadre');">Nuestros servicios
                        <div id="div2">
                            <p>
                                Ofrecemos soluciones informaticas a la medida, brindando una herramienta que permite
                                al cliente tener un completo manejo y una completa administración de las actividades de su empresa.
                            </p>
                            <hr>
                        </div>
                    </a><br>
                    <a onclick="acordeon('div3','divPadre');">¿Por que ?
                        <div id="div3">
                            <p>
                                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                            </p>
                            <ul>
                                <li>List item one</li>
                                <li>List item two</li>
                                <li>List item three</li>
                            </ul>
                            <hr>
                        </div>
                    </a><br>
                    <a onclick="acordeon('div4','divPadre');">Enlace 4
                        <div id="div4">Este es el div numero4</div>
                    </a><br>
                    <a onclick="acordeon('div5','divPadre');">Enlace 5
                        <div id="div5">Este es el div numero5</div>
                    </a>
                </div>
            </div>
        </section>
        <?php include 'footer.html'; ?>
    </body>
</html>