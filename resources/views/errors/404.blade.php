<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <style>
        html, body{
            margin:0;
            padding:0;
        }
        .wrapper {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: #e43882;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Open Sans', sans-serif;
        }
        .wrapper .box {
            text-align:center;
            color: #efefef;
            width: 50%;
            margin: auto;
        }
        .rotate-center {
            -webkit-animation: rotate-center 0.6s ease-in-out both;
                    animation: rotate-center 0.6s ease-in-out both;
                    transition: transform .6s ease-in;
        }
        /* ----------------------------------------------
        * Generated by Animista on 2020-7-13 12:42:45
        * Licensed under FreeBSD License.
        * See http://animista.net/license for more info. 
        * w: http://animista.net, t: @cssanimista
        * ---------------------------------------------- */

        /**
        * ----------------------------------------
        * animation rotate-center
        * ----------------------------------------
        */
        /**@-webkit-keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                        transform: rotate(0);
            }
            100% {
                -webkit-transform: rotate(360deg);
                        transform: rotate(360deg);
            }
            }**/
            @keyframes rotate-center {
            0% {
                -webkit-transform: rotate(0);
                        transform: rotate(0);
            }
            25% {
                -webkit-transform: rotate(45deg);
                        transform: rotate(45deg);
                        transform: scale(1.5);
            }
            75% {
                -webkit-transform: rotate(-45deg);
                        transform: rotate(-45deg);
            }
            100% {
                -webkit-transform: rotate(0deg);
                        transform: rotate(0deg);
            }
        //}
        a {
            font-size: .2em;
        }
        #text{
            color: white;
            transition-delay: .35s;
            transition-property: color;
            transition-duration: 1s;
           
        }
        .y {
            color: #efefef;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="box" >
            
            <img src="{{ asset('img/pappi.png') }}" alt="Pappi Beda" width="300px" class="rotate-center">
            <h1 class="text-white" id="text"></h1>
            {{-- <a href="{{ ((Auth::user()->level == 'admin') ? '/': (Auth::user()->level == 'operator')) ? '/operator/'.Auth::user()->sekolah_id : '/'.Auth::user()->username.'/beranda' }}" title="Kembali Ke Baranda" style="color:white;">
                <svg width="118" height="46">
                    <use xlink:href="/coreui/vendors/@coreui/icons/svg/free.svg#cil-home"></use>
                </svg>
            </a> --}}
            
        </div>
    </div>
    <script>
        var txt = 'MAAF! SEMENTARA LAMAN INI BELUM DAPAT DIAKSES. HUBUNGI ADMIN UNTUK INFO LEBIH LANJUT.'; /* The text */
        var speed = 25; /* The speed/duration of the effect in milliseconds */
        var i = 0;
        function typeWriter() {
        if (i < txt.length) {
            document.getElementById("text").innerHTML += '<span class="y">'+txt.charAt(i)+'</span>';
            i++;
            setTimeout(typeWriter, speed);
        }
        }

        typeWriter()
    </script>
</body>
</html>