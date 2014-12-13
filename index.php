<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <title>WebsPasto -Inicio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Webs Pasto</title>
	<script type="text/javascript">
			function cambiarPantalla(str){

				if(str.length==0){
					//document.getElementById('txtHint').innerHTML="";
					return ;
				}
				var conexion;
						if(window.XMLHttpRequest)

						conexion = new XMLHttpRequest();
						else
							conexion = new ActiveXObjet("Microsoft.XMLHttpRequest");

						conexion.onreadystatechange = function(){
						

						if (conexion.readyState == 4 && conexion.status == 200) {

							document.getElementById('contenedor').innerHTML=conexion.responseText;
						}
					}
						conexion.open("GET","pantallas.php?q="+str,true);
						conexion.send(null);
			}
	</script>
</head>

<body>
        <?php include 'header.php'; ?>
    <section id="contenedor">
    	<?php include 'principal.php'; ?>
    </section>
</body>
<footer>
		 <?php include 'footer.html'; ?>
</footer>
</html>
