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
                imgs[i].src="img/quiestion_close.png";
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
                ra.style.height="0px";
                im.src="img/quiestion_close.png";
            }
            else{
                //e[0].style.visibility = "hidden";
                bn.textContent="Hide";
                bn.style.font="normal bold 15px arial,serif";
                ra.style.visibility = "visible";
                ra.transition="all 2s";
                ra.style.height="100px";
                im.src="img/quiestion_open.png";
            }
        }
    </script>
    <style>
        .qqq::-webkit-scrollbar-button:start{
            background: url('img/scroll_top.png') no-repeat;
            background-size: 9px 6px;
            background-position: 50%;
        }

        .qqq::-webkit-scrollbar-button:end{
            background: url('img/scroll_bottom.png') no-repeat;
            background-size: 9px 6px;
            background-position: 50%;
        }

        .qqq::-webkit-scrollbar-button:horizontal:start{
            background: url('img/scroll_left.png') no-repeat;
            background-size: 6px 9px;
            background-position: 50%;
        }

        .qqq::-webkit-scrollbar-button:horizontal:end{
            background: url('img/scroll_right.png') no-repeat;
            background-size: 6px 9px;
            background-position: 50%;
        }

        .qqq::-webkit-scrollbar {
            width: 12px;
            height: 6px;
        }

        .qqq::-webkit-scrollbar:horizontal {
            width: 6px;
            height: 12px;
        }

        .qqq::-webkit-scrollbar-track {
            border-radius: 4px;
            border: 1px solid #D1D1D1;
        }

        .qqq::-webkit-scrollbar-track-piece {
            border-radius: 4px;
            background-color: #EEEEEE;
        }

        .qqq::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: #cccccc;
        }

        .qqq{
            font-weight: normal;
            width: 400px;
            height: 100px;
            text-align: justify;
            overflow: scroll;
            
        }
        .qq11{
            width: 10px;
            height: 10px;
        }
        #contenedor{
            font-weight: normal;
            width: 400px;
            height: 100px;
            text-align: justify;
            overflow: scroll;
            
        }
        #texto{
            width: 500px;
            height: 150px;
        }
        a:hover, label:hover{
            cursor: pointer;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <a onclick="rta('hide','p1','img1');"><img class="qq11" id="img1"><label id="hide"></label></a>
    <div id="p1" class="qqq">
        <div id="texto">
            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
            <hr>
        </div>
    </div>
    <a onclick="rta('show','p2','img2');"><img class="qq11" id="img2"><label id="show"></label></a>
    <div id="p2" class="qqq">
        <div id="texto">
            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
            <hr>
        </div>
    </div>
<!--    <div id="contenedor">
        <div id="texto">
            Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
            Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
            ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
            lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
        </div>
    </div>-->
</body>
<script>
    iniciar();
</script>
</html>