<?php
$q = $_GET["q"];
if($q=='inicio'){
	include 'principal.php' ;
}
else if($q=='nosotros'){
	include'nosotros.php';
}
else if($q=='contactos'){
	include'contactos.php';
}
else{
	include'principal.php';
}
?>