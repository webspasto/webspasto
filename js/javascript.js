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
/*para el formulario*/
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
function ocultar(idElemento,velocidadIN){
	elemento = document.getElementById(idElemento);
	elemento.style.overflow="hidden";
	alturaIN = elemento.style.pixelHeig;
    alturaIN = elemento.offsetHeight;
	inciarValoresMostrar(alturaIN ,alturaIN ,elemento.offsetWidth ,1 ,velocidadIN);
	animar(idElemento);
}
/*para las preguntas*/
function abrirAcordeon(idElemento,cantidadIN ,alturaIN ,anchuraIN ,esperaIN ,velocidadIN){
	if(cantidadIN == 0 && alturaIN==0 && anchuraIN == 0 && velocidadIN==0 && esperaIN == 0 ){
		return false;
	}
	else{
		inciarValoresMostrar(cantidadIN ,alturaIN ,anchuraIN ,esperaIN ,velocidadIN);
		document.getElementById(idElemento).style.overflow="auto";
		document.getElementById(idElemento).className="abrirAcordeon";
		animar(idElemento);
	}
}

function cerrarAcordeon(idElemento,velocidadIN){
	elemento = document.getElementById(idElemento);
	elemento.className="cerrarAcordeon";
	elemento.style.overflow="auto";
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
	if((cantidad>=tope-incremento && cantidad<=tope+incremento) || cantidad==tope){
		cantidad=tope;
	}
	if(cantidad!=tope){
		setTimeout("animar('"+idElemento+"')",espera);
	}
}

function acordeon(elementoAccion,idElementoAnimar,idDivPadre)
{
    abrir = false;
    otroAbierto = false;

    if(!estaAbierto(idElementoAnimar))
        abrir=true;

    padre = document.getElementById(idDivPadre);  
    array = padre.getElementsByTagName('div');

        for(i = 0; i<array.length ;i++){
            div = array[i];
            id=div.getAttribute('id')
            if(estaAbierto(id) && id !=idElementoAnimar){
            	setTimeout("cerrarAcordeon('"+id+"',10)",001); 
            	setTimeout(function() {
            		h2 = padre.getElementsByClassName('tituloAbierto')[0];
			        h2.style.font="normal normal 20px sans-serif";	
			        h2.className="";
            		imagen = h2.getElementsByTagName('img')[0];
			        imagen.className="";			   
	            	imagen.src="img/quiestion_open.png";
            	},5,padre);
            	otroAbierto=true;
            }
                
    }
    w = 100;
    if(!otroAbierto){ w=0;}

    if(abrir){
    	setTimeout("abrirAcordeon('"+idElementoAnimar+"',1,200,800,1,005)",w); 
    	setTimeout(function() {
	    	h2=elementoAccion.getElementsByTagName('h2')[0];
	    	h2.style.font="normal bold 20px sans-serif";
	    	h2.className="tituloAbierto";
	        imagen=h2.getElementsByTagName('img')[0];
	    	imagen.src="img/quiestion_close.png";
	    	imagen.className="tituloAbierto";
	    },5,elementoAccion);
    }     
    else{
    	//setTimeout("cerrarAcordeon('"+id+"',10)",001); 
    	setTimeout("cerrarAcordeon('"+idElementoAnimar+"',10)",001); 
    	setTimeout(function() {
	    	h2=elementoAccion.getElementsByTagName('h2')[0];
	    	h2.style.font="normal normal 20px sans-serif";
	    	h2.className="";
	        imagen=h2.getElementsByTagName('img')[0];
	    	imagen.src="img/quiestion_open.png";
	    	imagen.className="";
    	},5,elementoAccion);
    }
        
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

