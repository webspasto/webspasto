<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">

        <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> 
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>-->
        <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->

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

            }
        </style>
    </head>
    <body>
        <?php include 'header.php'; ?>
        <section id="contenedor">
            <div class="divsolo">
               <div id="accordion">
                  <h3 class="itemAcordion">Section 1</h3>
                  <div>
                    <p>
                    Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                    ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                    amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                    odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                    </p>
                  </div>
                  <h3 class="itemAcordion">Section 2</h3>
                  <div>
                    <p>
                    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                    suscipit faucibus urna.
                    </p>
                  </div>
                  <h3 class="itemAcordion">Section 3</h3>
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
                  </div>
                  <h3 class="itemAcordion">Section 4</h3>
                  <div>
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
                  </div>
                </div>
            </div>
        </section>
        <?php include 'footer.html'; ?>
    </body>
</html>