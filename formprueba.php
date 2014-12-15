<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form name="contacto" method="post" action="email2.php">
		<tr>
			<td><div align="center"><font face="Arial" size="2"> <strong>NOMBRE: </font> </strong></div></td>
			<td><input type="text" name="nombre" size="30" maxlength="30" id="nombre"> <br></td>
		</tr>
		<tr>
			<td><div align="center"><font face="Arial" size="2"> <strong>E-MAIL: </font> </strong></div>
				<td><input type="text" name="email" size="30" maxlength="40" id="email"> <br></td>
			</tr>
			<tr>
				<td><div align="center"><font face="Arial" size="2"> <strong>TELÉFONO: </font> </strong></div>
					<td><input type="text" name="telefono" size="30" maxlength="20" id="telefono"> <br></td>
				</tr>
				<tr>
					<td><div align="center"><font face="Arial" size="2"> <strong>EMPRESA: </font> </strong></div>
						<td><input type="text" name="empresa" size="30" maxlength="20" id="empresa"> <br><br></td>
					</tr>
					<tr>
						<td colspan="2"><div align="center"><font face="Arial" size="2"> <strong> COMENTARIOS: </font> </strong><br>
							<textarea name="comentario" id="comentario" cols="40" rows="5" ></textarea> </div><br><br>
							<div align="center"> <input type="reset" name="Reset" value="LIMPIAR FORMA"> <input type="submit" name="Submit" value="ENVIAR"> </form> 
							</body>
</html>
