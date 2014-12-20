cantidad  = 0;
altura    = 0;
anchura   = 0;
espera    = 0;
velocidad = 0;
prorrata  = anchura/altura;

function inciarValoresMostrar(cantidadIN ,alturaIN ,anchuraIN ,esperaIN ,velocidadIN ){
	cantidad  = cantidadIN;
	altura    = alturaIN;
	anchura   = anchuraIN;
	espera    = esperaIN;
	velocidad = velocidadIN;
	prorrata  = anchura/altura;
}

function mostrar(idElemento,cantidadIN ,alturaIN ,anchuraIN ,esperaIN ,velocidadIN){
	if(cantidadIN == 0 && alturaIN==0 && anchuraIN == 0 && velocidadIN==0 && esperaIN == 0 ){
		return false;
	}
	else{
		inciarValoresMostrar(cantidadIN ,alturaIN ,anchuraIN ,esperaIN ,velocidadIN);
		document.getElementById(idElemento).style.overflow="hidden";
		animar(idElemento);
	}
}

function ocultar(idElemento){
	elemento = document.getElementById(idElemento);
	elemento.style.overflow="hidden";
	alturaIN = elemento.style.pixelHeig;
    alturaIN = elemento.offsetHeight;
	inciarValoresMostrar(alturaIN ,alturaIN ,elemento.offsetWidth ,1 ,0.5 );
	animar(idElemento);
}

function animar(idElemento){
	if(cantidad==1 || cantidad==altura){
		incremento=(cantidad==1)?velocidad:-velocidad;
		tope=(cantidad==1)?altura:1;
	}	
	elemento=document.getElementById(idElemento);
	cantidad+=incremento;
	elemento.style.height=cantidad+"px";
	elemento.style.width=parseInt(prorrata*cantidad)+"px";
	if(cantidad==tope-1){
		cantidad++;
		cantidad--;
	}
	if(cantidad!=tope){
		setTimeout("animar('"+idElemento+"')",espera);
	}
}
