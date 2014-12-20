<!--<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Desarrollo de aplicaciones web y de escritorio">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>WebsPasto - Aplicaciones Web y Escritorio</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
        <link rel="shortcun icon" href="img/icon.ico" type="image/png">
        <script src="http://code.jquery.com/jquery-2.0.0.js"></script>
        <script src="js/operations.js" type="text/javascript"></script>
        <script>
            var boxOne = document.getElementsByClassName('box')[0];
            function a() {
                if(this.innerHTML === 'Play') 
                { 
                    this.innerHTML = 'Pause';
                    boxOne.classList.add('horizTranslate');
                } else {
                    this.innerHTML = 'Play';
                    var computedStyle = window.getComputedStyle(boxOne),
                            marginLeft = computedStyle.getPropertyValue('margin-left');
                    boxOne.style.marginLeft = marginLeft;
                    boxOne.classList.remove('horizTranslate');
                }  
              }
        </script>
        <style>
            .box {
                margin: 30px;
                height: 50px;
                width: 50px;
                background-color: blue;
            }
            .box.horizTranslate {
                -webkit-transition: 3s;
                -moz-transition: 3s;
                -ms-transition: 3s;
                -o-transition: 3s;
                transition: 3s;
                margin-left: 50% !important;
            }
        </style>
    </head>
    <body>
        <div id="blook">
            <a onclick='overlay()'>Click here to show the overlay</a>
        </div>
        <div id="overlay">
            <div>
                <a onclick='overlay()'>close</a>
                <p>Content you want the user to see goes here.</p>
            </div>
        </div>
        <h3>Pure Javascript</h3>
        <div class='box'></div> 
        <button class='toggleButton' onclick="javascript:a();" value='play'>Play</button>
    </body>
</html>-->

<!DOCTYPE html>
<html>
<head>
    <script>
        function iniciar(){
            rtas=document.getElementsByClassName('qqq');
            for	(i = 0; i < rtas.length; i++) {
                rtas[i].style.visibility = "hidden";
                rtas[i].style.height="0";
            }
            imgs=document.getElementsByClassName('qq11');
            for	(i = 0; i < imgs.length; i++) {
                imgs[i].src="img/img_exito.png";
            }
            lbls=document.getElementsByTagName('label');
            for	(i = 0; i < lbls.length; i++) {
                lbls[i].textContent="Show";
                lbls[i].style.font="normal normal 15px arial,serif";
            }
        }
        function rta(btn,rta,img) {
            var bn = document.getElementById(btn);
            var im = document.getElementById(img);
            var ra = document.getElementById(rta);
            if (ra.style.visibility == "visible"){
                //e[0].style.visibility = "visible";
                bn.textContent="Show";
                bn.style.font="normal normal 15px arial,serif";
                ra.style.visibility = "hidden";
                ra.transition="all 2s";
                ra.style.height="0";
                im.src="img/img_exito.png";
            }
            else{
                iniciar();
                //e[0].style.visibility = "hidden";
                bn.textContent="Hide";
                bn.style.font="normal bold 15px arial,serif";
                ra.style.visibility = "visible";
                ra.transition="all 2s";
                ra.style.height="auto";
                im.src="img/img_error.png";
            }
        }
    </script>
    <style>
        .qqq{
            font-weight: normal;
            width: 150px;
            text-align: justify;
        }
        .qq11{
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>
    <img class="qq11" id="img1"><label id="hide" onclick="rta('hide','p1','img1');"></label>
    <div id="p1" class="qqq">This is a paragraph with little content.<hr></div>
    <img class="qq11" id="img2"><label id="show" onclick="rta('show','p2','img2');"></label>
    <div id="p2" class="qqq">This is another small.<hr></div>
</body>
<script>
    iniciar();
</script>
</html>