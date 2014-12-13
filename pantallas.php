<?php
$q = $_GET["q"];
if($q=='inicio'){
	echo include'principal.php';
}
else if($q=='nosotros'){
	echo include'nosotros.php';
}
else if($q=='contactos'){
	echo include'footer.html';
}
else{
	echo include'principal.php';
}
?>