function validar(){
    var nombre = document.getElementById('nombre');
    var nombremsg=document.getElementById('nombremsg');

    var asunto = document.getElementById('asunto');
    var asuntomsg=document.getElementById('asuntomsg');

    var mensaje = document.getElementById('mensaje');
    var mensajemsg=document.getElementById('mensajemsg');

    var email = document.getElementById('email');
    var emailmsg=document.getElementById('emailmsg');
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (nombre == null || nombre.value == ("") || nombre.value == ('')){
        //nombre.style.background="#f60";
        //nombretxt.style.border="1";
        nombre.focus();
        nombremsg.textContent="Este campo es obligatorio";
        return false;
    }
    else{nombremsg.textContent="";}
        
        
    
    if (email == null || email.value == ("") || email.value == ('')){
        email.focus(); 
        emailmsg.textContent="Este campo es obligatorio";
        return false;
    }
    else{emailmsg.textContent="";}
    
    if (!re.test(email.value)){
        email.focus();
        emailmsg.textContent="Email incorrecto!!";
        return false;
    }
    else{ emailmsg.textContent="";}
    
    if (asunto == null || asunto.value == ("") || asunto.value == ('')){
        asunto.focus(); 
        asuntomsg.textContent="Este campo es obligatorio";
        return false;
    }
    else{ asuntomsg.textContent=""; }
    
    if (mensaje == null || mensaje.value == ("") || mensaje.value == ('')){
        mensaje.focus();
        mensajemsg.textContent="Este campo es obligatorio";
        return false;
    }
    else{ mensajemsg.textContent="";}

    var conexion;
    if (window.XMLHttpRequest)
        conexion = new XMLHttpRequest();
    else
        conexion = new ActiveXObjet("Microsoft.XMLHttpRequest");

    conexion.onreadystatechange = function () {
        if (conexion.readyState == 4 && conexion.status == 200)
            document.getElementById('lblmsg').innerHTML = conexion.responseText;

    }

    conexion.open("GET", "enviarEmail.php?nombre="+nombre.value+"&asunto="+asunto.value+"&mensaje="+mensaje.value+"&email="+email.value, true);
    conexion.send();
    nombre.value="";
    email.value="";
    asunto.value=""
    mensaje.value="";

    //else {
        //spinner();
        //return true;       
        /*var form =document.getElementById('form');
        form.action="enviarEmail.php";
        form.method="POST";
        form.submit();*/
   // }
    
}

function spinner() {
    var cl = new CanvasLoader('spinner');
    cl.setColor('#f1d761');
    cl.setShape('spiral');
    cl.setDiameter(64);
    cl.setDensity(14);
    cl.setRange(1);
    cl.setSpeed(1);
    cl.setFPS(9);
    cl.show();
    
    cl.


    // This bit is only for positioning - not necessary
    var loaderObj = document.getElementById("canvasLoader");
    loaderObj.style.position = "absolute";
    loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
    loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
}