<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">

        <link rel="stylesheet" href="css/jquery-ui.css">
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
          $(function() {
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
          });
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
        <div id="idioma"><a href="index.php" ><img title="Español" src="img/esp.png"></a></div>
        <?php include 'header.en.php'; ?>
        <section id="contenedor">
            <div class="divsolo">
                <div class="sections">
                    <div id="accordion">
                        <h3 class="itemAcordion">¿Quienes somos?</h3>
                        <div>
                            <p>
                                <strong>Webspasto - Desarrollo de aplicaciones Web y Escrotorio</strong> es una empresa que, aplicando
                                el modelo TSP, se dedicada a la elaboración de herramientas o productos software para pequeñas o medianas empresas.
                            </p>
                            <hr>
                        </div>
                        <h3 class="itemAcordion">Nuestros servicios</h3>
                        <div>
                            <p>
                                Ofrecemos soluciones informaticas a la medida, brindando una herramienta que permite
                                al cliente tener un completo manejo y una completa administración de las actividades de su empresa.
                            </p>
                            <hr>
                        </div>
                        <h3 class="itemAcordion">¿Por que ?</h3>
                        <div>
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
                        <h3 class="itemAcordion">Section 4</h3>
                        <div >
                            <p>
                                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                mauris vel est.
                            </p>
                            <p>
                                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                inceptos himenaeos.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.en.html'; ?>
    </body>
</html>