<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">
        <script src="js/operations.js" type="text/javascript"></script>
        <script>
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
            .itemAcordion{
                background: transparent;
                border: 0;
                margin-bottom: 10px;
            }
            .pregunta{
                text-align: left;
                width: 100px;
            }
            .rtapreg{
                font-weight: normal;
                width: auto;
                text-align: justify;
                margin-left: 15px;
            }
            .imgpreg{
                background-position: 50%;
            }
            .pregunta a:hover, .lblpreg:hover{
                opacity: 0.8;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <section id="contenedor">
            <div class="divsolo">
                <div class="sections">
                    <div id="divPadre2" class="acordeon">
                        <a onclick="acordeonSimple(this, 'divPadre2');">
                            <h2><img src="img/question_open.png">¿Quienes somos?</h2> 
                        </a>
                        <div><p>
                                <strong>Webspasto - Desarrollo de aplicaciones Web y Escrotorio</strong> es una empresa que, aplicando
                                el modelo TSP, se dedicada a la elaboración de herramientas o productos software para pequeñas o medianas empresas.
                            </p>
                            <hr></div>
                        <a onclick="acordeonSimple(this, 'divPadre2');"><h2><img src="img/question_open.png">Nuestros servicios</h2>
                        </a>
                        <div>
                            <p>
                                Ofrecemos soluciones informaticas a la medida, brindando una herramienta que permite
                                al cliente tener un completo manejo y una completa administración de las actividades de su empresa.
                            </p>
                            <hr>
                        </div>
                        <a onclick="acordeonSimple(this, 'divPadre2');"><h2><img src="img/question_open.png">¿Por que ?</h2>
                        </a>
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
                        <a onclick="acordeonSimple(this, 'divPadre2');"><h2><img src="img/question_open.png">Enlace 4</h2>
                        </a>
                        <div>Este es el div numero4</div>
                        <a onclick="acordeonSimple(this, 'divPadre2');"><h2><img src="img/question_open.png">Enlace 5</h2>   
                        </a>
                        <div>Este es el div numero5
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                            <p>qqqqqqq</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.html'; ?>
    </body>
    <script>
        //iniciar();
    </script>
</html>