function validar(){
    var nombre = document.getElementById('nombre').value;
    if (nombre == null || nombre == ("") || nombre == (''))
        return true;

    var email = document.getElementById('email').value;
    if (email == null || email == ("") || email == (''))
        return true;
    
    if (email.indexOf("@")<1)
        return true;
    
    var arr = email.split("@");
    if (arr[1]==null || arr[1]==("") || arr[1]==('') )
        return true;
    
    if (arr[1].indexOf(".")<1)
        return true;
    
    if (arr[1].length>2)
        return true;

    var asunto = document.getElementById('asunto').value;
    if (asunto == null || asunto == ("") || asunto == (''))
        return true;

    var mensaje = document.getElementById('mensaje').value;
    if (mensaje == null || mensaje == ("") || mensaje == (''))
        return true;

    spinner();
    document.getElementById('form').submit();
}

function validarEmail( email ) {
    expr = /^([a-zA-Z0-9_\.\])+\@(([a-zA-Z0-9\])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!expr.test(email))
        alert("Error: La dirección de correo " + email + " es incorrecta.");
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