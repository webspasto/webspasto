function iniciar() {
    rtas = document.getElementsByClassName('rtapreg');
    for (i = 0; i < rtas.length; i++) {
        rtas[i].style.visibility = "hidden";
        rtas[i].style.height = "0";
    }
    imgs = document.getElementsByClassName('imgpreg');
    for (i = 0; i < imgs.length; i++) {
        imgs[i].src = "img/question_open.png";
    }
    lbls = document.getElementsByClassName('lblpreg');
    for (i = 0; i < lbls.length; i++) {
        lbls[i].textContent = "Show";
        lbls[i].style.font = "normal normal 15px arial,serif";
    }
}
function rta(btn, rta, img) {
    var bn = document.getElementById(btn);
    var im = document.getElementById(img);
    var ra = document.getElementById(rta);
    if (ra.style.visibility == "visible") {
        bn.textContent = "Show";
        bn.style.font = "normal normal 15px arial,serif";
        ra.style.visibility = "hidden";
        ra.transition = "all 2s";
        ra.style.height = "0";
        im.src = "img/question_open.png";
    }
    else {
        iniciar();
        bn.textContent = "Hide";
        bn.style.font = "normal bold 15px arial,serif";
        ra.style.visibility = "visible";
        ra.transition = "all 2s";
        ra.style.height = "auto";
        im.src = "img/question_close.png";
    }
}