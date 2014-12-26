function validar() {
    var nombre = document.getElementById('nombre');
    var nombremsg = document.getElementById('nombremsg');

    var asunto = document.getElementById('asunto');
    var asuntomsg = document.getElementById('asuntomsg');

    var mensaje = document.getElementById('mensaje');
    var mensajemsg = document.getElementById('mensajemsg');

    var email = document.getElementById('email');
    var emailmsg = document.getElementById('emailmsg');
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (nombre == null || nombre.value == ("") || nombre.value == ('')) {
        nombre.focus();
        nombremsg.textContent = "Este campo es obligatorio";
        return false;
    }
    else {
        nombremsg.textContent = "";
    }

    if (email == null || email.value == ("") || email.value == ('')) {
        email.focus();
        emailmsg.textContent = "Este campo es obligatorio";
        return false;
    }
    else {
        emailmsg.textContent = "";
    }

    if (!re.test(email.value)) {
        email.focus();
        emailmsg.textContent = "Email incorrecto!!";
        return false;
    }
    else {
        emailmsg.textContent = "";
    }

    if (asunto == null || asunto.value == ("") || asunto.value == ('')) {
        asunto.focus();
        asuntomsg.textContent = "Este campo es obligatorio";
        return false;
    }
    else {
        asuntomsg.textContent = "";
    }

    if (mensaje == null || mensaje.value == ("") || mensaje.value == ('')) {
        mensaje.focus();
        mensajemsg.textContent = "Este campo es obligatorio";
        return false;
    }
    else {
        mensajemsg.textContent = "";
    }
    var enlace = document.getElementById('submit');
    enlace.setAttribute("onclick", "");
    enlace.className = "ocultar";

    var spinnerimg = document.getElementById('loading');
    spinnerimg.src = "img/loader.gif";

    var conexion;
    if (window.XMLHttpRequest)
        conexion = new XMLHttpRequest();
    else
        conexion = new ActiveXObjet("Microsoft.XMLHttpRequest");

    conexion.onreadystatechange = function () {
        if (conexion.readyState == 4 && conexion.status == 200) {
            document.getElementById('lblmsg').innerHTML = conexion.responseText;
            mostrar('lblmsg', 1, 45, 319, 1, 0.5);
            nombre.value = "";
            email.value = "";
            asunto.value = ""
            mensaje.value = "";
            spinnerimg.src = "img/vacio.png";
            enlace.setAttribute("onclick", "validar();");
            enlace.className = "";
            setTimeout("ocultar('lblmsg',0.3)", 3000);
        }
    }

    conexion.open("GET", "enviarEmail.php?nombre=" + nombre.value + "&asunto=" + asunto.value + "&mensaje=" + mensaje.value + "&email=" + email.value, true);
    conexion.send();
}

function limpiarContacto() {
    document.getElementById('nombre').innerHTML = "";
    document.getElementById('nombremsg').innerHTML = "";
    document.getElementById('asunto').innerHTML = "";
    document.getElementById('asuntomsg').innerHTML = "";
    document.getElementById('mensaje').innerHTML = "";
    document.getElementById('mensajemsg').innerHTML = "";
    document.getElementById('email').innerHTML = "";
    document.getElementById('emailmsg').innerHTML = "";
    document.getElementById('loading').src = "img/vacio.png";
    document.getElementById('lblmsg').innerHTML = "";
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


    // This bit is only for positioning - not necessary
    var loaderObj = document.getElementById("canvasLoader");
    loaderObj.style.position = "absolute";
    loaderObj.style["top"] = cl.getDiameter() * -0.5 + "px";
    loaderObj.style["left"] = cl.getDiameter() * -0.5 + "px";
}

function validarNombre() {
    var nombre = document.getElementById('nombre');
    var nombremsg = document.getElementById('nombremsg');
    limpiarMensajes();
    if (nombre == null || nombre.value == ("") || nombre.value == ('')) {
        //nombre.focus();
        nombremsg.textContent = "Este campo es obligatorio";
        return true;
    }
}

function validarEmail() {
    var email = document.getElementById('email');
    var emailmsg = document.getElementById('emailmsg');
    emailmsg.textContent = "";
    limpiarMensajes();
    if (email == null || email.value == ("") || email.value == ('')) {
        //email.focus();
        emailmsg.textContent = "Este campo es obligatorio";
        return true;
    }
    else {
        if (esEmail(email)) {
            //email.focus();
            emailmsg.textContent = "Email incorrecto!!";
            return true;
        }
    }
}

function esEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(email.value)) {
        //email.focus();
        return true;
    }
}

function validarAsunto() {
    var asunto = document.getElementById('asunto');
    var asuntomsg = document.getElementById('asuntomsg');
    limpiarMensajes();
    if (asunto == null || asunto.value == ("") || asunto.value == ('')) {
        //asunto.focus();
        asuntomsg.textContent = "Este campo es obligatorio";
        return true;
    }
}

function validarMensaje() {
    var mensaje = document.getElementById('mensaje');
    var mensajemsg = document.getElementById('mensajemsg');
    limpiarMensajes();
    if (mensaje == null || mensaje.value == ("") || mensaje.value == ('')) {
        //mensaje.focus();
        mensajemsg.textContent = "Este campo es obligatorio";
        return true;
    }
}

function limpiarMensajes() {
    var nombremsg = document.getElementById('nombremsg').innerHTML = "";
    var asuntomsg = document.getElementById('asuntomsg').innerHTML = "";
    var mensajemsg = document.getElementById('mensajemsg').innerHTML = "";
    var emailmsg = document.getElementById('emailmsg').innerHTML = "";
}

function overlay() {
    e = document.getElementsByTagName('body');
    d = document.getElementById('blook');
    el = document.getElementById('overlay');
    if (el.style.visibility == "visible") {
        e[0].style.background = "url('img/vacio.png')";
        d.style.opacity = "1";
        el.style.visibility = "hidden";
        el.style.opacity = "1";
        //e[0].style.visibility = "visible";
    }
    else {
        //e[0].style.visibility = "hidden";
        e[0].style.background = "url('img/modal.png')";
        d.style.opacity = "0.5";
        el.style.visibility = "visible";
        el.style.opacity = "1";
    }
}

function acordeonSimple(elementoAnimar, idDivPadre) {
    padre = document.getElementById(idDivPadre);
    arrayH2 = padre.querySelectorAll('a h2:first-child');
    for (i = 0; i < arrayH2.length; i++)
        arrayH2[i].style.font = "normal normal 20px sans-serif";
    divAnimar = elementoAnimar.nextElementSibling;
    if (divAnimar.style.display == 'inherit') {
        divAnimar.style.display = 'none';
        elementoAnimar.getElementsByTagName('h2')[0].getElementsByTagName('img')[0].src = 'img/question_open.png';
    }
    else {
        divArray = padre.getElementsByTagName('div');
        for (i = 0; i < divArray.length; i++) {
            if (divArray[i].style.display == 'inherit') {
                divArray[i].style.display = 'none';
                divArray[i].previousElementSibling.getElementsByTagName('h2')[0].getElementsByTagName('img')[0].src = 'img/question_open.png';
            }
        }
        divAnimar.style.display = 'inherit';
        elementoAnimar.getElementsByTagName('h2')[0].style.font = "normal bold 20px sans-serif";
        elementoAnimar.getElementsByTagName('h2')[0].getElementsByTagName('img')[0].src = 'img/question_close.png';
    }
}