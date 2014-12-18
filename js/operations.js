function validar(){
    var nombre = document.getElementById('nombre').value;
    var asunto = document.getElementById('asunto').value;
    var mensaje = document.getElementById('mensaje').value;
    var email = document.getElementById('email').value;
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (nombre == null || nombre == ("") || nombre == (''))
        return false;
    
    else if (email == null || email == ("") || email == (''))
        return false;
    
    else if (!re.test(email)){
        document.getElementById('email').focus();
        alert("Email incorrecto!!");
        return false;
    }
    else if (asunto == null || asunto == ("") || asunto == (''))
        return false;

    else if (mensaje == null || mensaje == ("") || mensaje == (''))
        return false;

    else {
        spinner();
        var form =document.getElementById('form');
        form.action="enviarEmail.php";
        form.method="POST";
        form.submit();
    }
    
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