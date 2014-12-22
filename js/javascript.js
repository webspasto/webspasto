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
		document.getElementById(idElemento).style.overflow="scroll";
		animar(idElemento);
	}
}

function ocultar(idElemento,velocidadIN){
	elemento = document.getElementById(idElemento);
	elemento.style.overflow="scroll";
	alturaIN = elemento.style.pixelHeig;
    alturaIN = elemento.offsetHeight;
	inciarValoresMostrar(alturaIN ,alturaIN ,elemento.offsetWidth ,1 ,velocidadIN);
	animar(idElemento);
}

function animar(idElemento){
	if(cantidad==1 || cantidad==altura){
		incremento=(cantidad==1)?velocidad:-velocidad;
		tope=(cantidad==1)?altura:0;
	}	
	elemento=document.getElementById(idElemento);
	cantidad+=incremento;
	elemento.style.height=cantidad+"px";
	elemento.style.width=parseInt(prorrata*cantidad)+"px";
	if((cantidad==1 || cantidad < 0) && tope ==0){
		cantidad=tope;
		elemento.style.height=0+"px";
		elemento.style.width=0+"px";
	}
	if(cantidad!=tope){
		setTimeout("animar('"+idElemento+"')",espera);
	}
}

function acordeon(idElementoAnimar,idDivPadre)
{
    abrir = false;
    if(!estaAbierto(idElementoAnimar))
        abrir=true;
    padre = document.getElementById(idDivPadre);  
        array = padre.getElementsByTagName('div');
        for(i = 0; i<array.length ;i++){
            div = array[i];
            id=div.getAttribute('id')
            if(estaAbierto(id) && id !=idElementoAnimar)
                setTimeout("ocultar('"+id+"',1)",1); 
    }

    if(abrir)
        setTimeout("mostrar('"+idElementoAnimar+"',1,100,320,1,3)",500); 
    else
        setTimeout("ocultar('"+idElementoAnimar+"',1)",1); 
}
function estaAbierto(idElemento){
    elemento = document.getElementById(idElemento);  
    alturaIN = elemento.style.pixelHeig;
    alturaIN = elemento.offsetHeight;
    anchura  = elemento.offsetWidth;

    if(alturaIN == 0 || anchura == 0)
        return false;
    return true;
}
