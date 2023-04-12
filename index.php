<?php
session_start();

if (isset($_SESSION['username'])) {
  // echo '<script>alert("YA ESTAS LOGUEADO");</script>';
  // Usuario ha iniciado sesión, hacer algo aquí
} else {
  // Usuario no ha iniciado sesión, hacer algo aquí
  
  // Muestra un mensaje "NO ESTAS LOGUEADO" en un pop-up y oculta el botón "INGRESAR"
  // Puedes cambiar el mensaje y el selector del botón según tus necesidades
}


if (isset($_POST['chau'])) {
    header("Location: cierre.php");
    session_destroy();
  
        exit();
}
?>
<!DOCTYPE html>
<head>

<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delicious+Handrawn&display=swap" rel="stylesheet">
<link rel="stylesheet" href="est.css">

<!-- PARTICULAS -->
<!-- <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> -->

<html style="font-size: 16px;" lang="es"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Mi pagina WEB</title>
<!-- 
    <div id="loader">
  <div class="loader-text">Cargando...</div>
  <div class="loader"></div>
</div> -->




</head>
<footer>
<form method="POST">
  <button id="chau" type="submit" name="chau">Cerrar Sesion</button>
</form>
</footer>
<header>

<svg style="display:none;">
  <defs>

    <g id="home">
      <path fill="#90A4AE" d="M42,48H6c-3.3,0-6-2.7-6-6V6c0-3.3,2.7-6,6-6h36c3.3,0,6,2.7,6,6v36C48,45.3,45.3,48,42,48z"/>
      <path fill="#212121" d="M20.8,35.5v-9.6h6.4v9.6h8V22.7H40L24,8.3L8,22.7h4.8v12.8H20.8z"/>
    </g>

    <g id="search">
      <path fill="#90A4AE" d="M22.9,20.1h-1.5l-0.5-0.5c1.8-2.1,2.9-4.8,2.9-7.7C23.8,5.3,18.5,0,11.9,0S0,5.3,0,11.9s5.3,11.9,11.9,11.9
	    c3,0,5.7-1.1,7.7-2.9l0.5,0.5v1.4l9.1,9.1l2.7-2.7L22.9,20.1z M11.9,20.1c-4.5,0-8.2-3.7-8.2-8.2s3.7-8.2,8.2-8.2s8.2,3.7,8.2,8.2
	    S16.4,20.1,11.9,20.1z"/>
    </g>

    <g id="map">
      <path fill="#90A4AE" d="M16,14.2c-1,0-1.8,0.8-1.8,1.8s0.8,1.8,1.8,1.8c1,0,1.8-0.8,1.8-1.8S17,14.2,16,14.2z M16,0
	    C7.2,0,0,7.2,0,16c0,8.8,7.2,16,16,16s16-7.2,16-16C32,7.2,24.8,0,16,0z M19.5,19.5L6.4,25.6l6.1-13.1l13.1-6.1L19.5,19.5z"/>
    </g>

    <g id="planner">
  <path d="M33.84,4.08h-23.6a.79.79,0,0,0-.8.79V27.9a.8.8,0,0,0,.8.8H33.84a.8.8,0,0,0,.8-.8V4.87A.79.79,0,0,0,33.84,4.08ZM10.53,7.5h5.44v5.44H10.53Zm7.32,19.56H10.53V20.93h7.32Zm0-7.74H10.53V13.19h7.32Zm0-7.75H10.53V5.25h7.32Zm11.16,15.49H18.69V20.93h10.32Zm0-7.74H18.69V13.19h10.32Zm0-7.75H18.69V5.25h10.32Z"/>
</g>

  </defs>
</svg>



<nav class="nav__cont">


    <ul class="nav">

    <li class="nav__items ">
    <?xml version="1.0" standalone="no"?>
<!-- Generator: SVG Circus (http://svgcircus.com) -->
<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
<svg id="SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55" version="1.1" xmlns="http://www.w3.org/2000/svg" 
xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" 
preserveAspectRatio="xMidYMid meet">
<circle id="actor_12" cx="50" cy="50" r="29" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(123,14,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_11" cx="50" cy="50" r="45" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(123,14,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_10" cx="50" cy="50" r="36.5" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(123,14,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_9" cx="50" cy="50" r="48" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(123,14,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_8" cx="50" cy="50" r="40.5" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(123,14,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_7" cx="50" cy="50" r="32.5" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(14,69,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_6" cx="50" cy="50" r="25" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(0,94,181,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_5" cx="50" cy="50" r="20" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(26,148,186,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_4" cx="50" cy="50" r="15" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(21,167,176,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_3" cx="50" cy="50" r="29" opacity="0.43" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(22,184,135,1)" stroke-width="13" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_2" cx="50" cy="50" r="26" opacity="1" fill="rgba(0,0,0,0)" fill-opacity="1" stroke="rgba(27,181,126,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><circle id="actor_1" cx="50" cy="50" r="10" opacity="1.00" fill="rgba(255,255,255,0)" fill-opacity="1" stroke="rgba(60,199,116,1)" stroke-width="2" stroke-opacity="1" stroke-dasharray=""></circle><script type="text/ecmascript"><![CDATA[(function(){var actors={};actors.actor_1={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_1"),type:"circle",cx:50,cy:50,dx:20,dy:30,opacity:1.00};actors.actor_2={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_2"),type:"circle",cx:50,cy:50,dx:52,dy:30,opacity:1};actors.actor_3={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_3"),type:"circle",cx:50,cy:50,dx:58,dy:30,opacity:0.43};actors.actor_4={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_4"),type:"circle",cx:50,cy:50,dx:30,dy:30,opacity:1};actors.actor_5={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_5"),type:"circle",cx:50,cy:50,dx:40,dy:30,opacity:1};actors.actor_6={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_6"),type:"circle",cx:50,cy:50,dx:50,dy:30,opacity:1};actors.actor_7={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_7"),type:"circle",cx:50,cy:50,dx:65,dy:30,opacity:1};actors.actor_8={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_8"),type:"circle",cx:50,cy:50,dx:81,dy:30,opacity:1};actors.actor_9={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_9"),type:"circle",cx:50,cy:50,dx:96,dy:30,opacity:1};actors.actor_10={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_10"),type:"circle",cx:50,cy:50,dx:73,dy:30,opacity:1};actors.actor_11={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_11"),type:"circle",cx:50,cy:50,dx:90,dy:30,opacity:1};actors.actor_12={node:document.getElementById("SVG-Circus-85e505f5-43d3-a005-170b-5524d1a92a55").getElementById("actor_12"),type:"circle",cx:50,cy:50,dx:58,dy:30,opacity:1};var tricks={};tricks.trick_1=(function(t,i){i=(function(n){return 1==n?1:1-Math.pow(2,-10*n)})(i)%1,i=0>i?1+i:i;var _=t.node;0.6>=i?_.setAttribute("opacity",i*(t.opacity/0.6)):i>=0.9?_.setAttribute("opacity",t.opacity-(i-0.9)*(t.opacity/(1-0.9))):_.setAttribute("opacity",t.opacity)});var scenarios={};scenarios.scenario_1={actors: ["actor_1","actor_2","actor_3","actor_4","actor_5","actor_6","actor_7","actor_8","actor_9","actor_10","actor_11","actor_12"],tricks: [{trick: "trick_1",start:0.00,end:1.00}],startAfter:0,duration:1000,actorDelay:200,repeat:0,repeatDelay:0};var _reqAnimFrame=window.requestAnimationFrame||window.mozRequestAnimationFrame||window.webkitRequestAnimationFrame||window.oRequestAnimationFrame,fnTick=function(t){var r,a,i,e,n,o,s,c,m,f,d,k,w;for(c in actors)actors[c]._tMatrix=[1,0,0,1,0,0];for(s in scenarios)for(o=scenarios[s],m=t-o.startAfter,r=0,a=o.actors.length;a>r;r++){if(i=actors[o.actors[r]],i&&i.node&&i._tMatrix)for(f=0,m>=0&&(d=o.duration+o.repeatDelay,o.repeat>0&&m>d*o.repeat&&(f=1),f+=m%d/o.duration),e=0,n=o.tricks.length;n>e;e++)k=o.tricks[e],w=(f-k.start)*(1/(k.end-k.start)),tricks[k.trick]&&tricks[k.trick](i,Math.max(0,Math.min(1,w)));m-=o.actorDelay}for(c in actors)i=actors[c],i&&i.node&&i._tMatrix&&i.node.setAttribute("transform","matrix("+i._tMatrix.join()+")");_reqAnimFrame(fnTick)};_reqAnimFrame(fnTick);})()]]></script>
</svg>
      

      <a href="log/index.php">LOGUEO</a>
    </li>
    
    <li class="nav__items ">
  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <use xlink:href="#search"></use>
      </svg>
      <a href="reg/index.php">REGISTRO</a>
    </li>
      
    <li class="nav__items ">
<svg viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>cha-rect-swear</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="General" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="SLICES-64px" transform="translate(-180.000000, -100.000000)"> </g> <g id="ICONS" transform="translate(-175.000000, -95.000000)"> <g id="cha-rect-swear" transform="translate(180.000000, 104.000000)"> <path d="M24.1602,40 L51.0002,40 C52.6572,40 54.0002,38.657 54.0002,37 L54.0002,3 C54.0002,1.343 52.6572,0 51.0002,0 L3.0002,0 C1.3432,0 0.0002,1.343 0.0002,3 L0.0002,37 C0.0002,38.657 1.3432,40 3.0002,40 L10.0002,40 C11.1042,40 12.0002,40.896 12.0002,42 L12.0002,50 L22.1412,40.78 C22.6942,40.278 23.4132,40 24.1602,40" id="Fill-383" fill="#FFFFFF"> </path> <path d="M24.1602,40 L51.0002,40 C52.6572,40 54.0002,38.657 54.0002,37 L54.0002,3 C54.0002,1.343 52.6572,0 51.0002,0 L3.0002,0 C1.3432,0 0.0002,1.343 0.0002,3 L0.0002,37 C0.0002,38.657 1.3432,40 3.0002,40 L10.0002,40 C11.1042,40 12.0002,40.896 12.0002,42 L12.0002,50 L22.1412,40.78 C22.6942,40.278 23.4132,40 24.1602,40 Z" id="Stroke-384" stroke="#1E69A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M8,26 L12,14" id="Stroke-385" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M12,26 L16,14" id="Stroke-386" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M6,22 L17,22" id="Stroke-387" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M7,18 L18,18" id="Stroke-388" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M42,14 L42,20" id="Stroke-389" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <polyline id="Stroke-390" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="38 26 42 20 46 26"> </polyline> <polyline id="Stroke-391" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" points="36 18 42 20 48 18"> </polyline> <path d="M30,20 C30,21.104 29.104,22 28,22 C26.896,22 26,21.104 26,20 C26,18.896 26.896,18 28,18 C29.104,18 30,18.896 30,20 Z" id="Stroke-392" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M28,22 C30.209,22 32,20.209 32,18 C32,15.791 30.209,14 28,14 C24.687,14 22,16.687 22,20 C22,23.313 24.375,26 28,26 C29.388,26 30.739,25.414 31.878,24.69" id="Stroke-393" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> </g> </g> </g> </g></svg>
    <use xlink:href="#map"></use>
      </svg>
     <a href="">CONTACTO</a>
    </li>
      
    <li class="nav__items ">
      
    <svg viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>gen-pill</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="General" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="SLICES-64px" transform="translate(-90.000000, 0.000000)"> </g> <g id="ICONS" transform="translate(-85.000000, 5.000000)"> <g id="gen-pill" transform="translate(92.000000, 2.000000)"> <path d="M3.8077,27.8076 C-1.2693,32.8846 -1.2693,41.1156 3.8077,46.1926 C8.8847,51.2696 17.1157,51.2696 22.1927,46.1926 L34.1927,34.1926 L15.8077,15.8076 L3.8077,27.8076 Z" id="Fill-289" fill="#4BAADC"> </path> <path d="M46.1924,3.8076 C41.1154,-1.2694 32.8844,-1.2694 27.8074,3.8076 L15.8074,15.8076 L34.1924,34.1926 L46.1924,22.1926 C51.2694,17.1156 51.2694,8.8846 46.1924,3.8076" id="Fill-290" fill="#FFFFFF"> </path> <path d="M46.1924,22.1924 C51.2694,17.1154 51.2694,8.8844 46.1924,3.8074 C41.1154,-1.2696 32.8844,-1.2696 27.8074,3.8074 L3.8074,27.8074 C-1.2696,32.8844 -1.2696,41.1154 3.8074,46.1924 C8.8844,51.2694 17.1154,51.2694 22.1924,46.1924 L46.1924,22.1924 Z" id="Stroke-291" stroke="#1E69A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M15.8077,15.8076 L34.1927,34.1926" id="Stroke-292" stroke="#1E69A0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> <path d="M43.3643,6.6357 C39.8493,3.1207 34.1503,3.1207 30.6353,6.6357" id="Stroke-293" stroke="#4BAADC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> </path> </g> </g> </g> </g></svg>

    <a href="">JUEGOS</a>
    </li>
        
    <li class="nav__items ">
    <?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 24 24" width="512" height="512"><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm8.647,7H17.426a19.676,19.676,0,0,0-2.821-4.644A10.031,10.031,0,0,1,20.647,7ZM16.5,12a10.211,10.211,0,0,1-.476,3H7.976A10.211,10.211,0,0,1,7.5,12a10.211,10.211,0,0,1,.476-3h8.048A10.211,10.211,0,0,1,16.5,12ZM8.778,17h6.444A19.614,19.614,0,0,1,12,21.588,19.57,19.57,0,0,1,8.778,17Zm0-10A19.614,19.614,0,0,1,12,2.412,19.57,19.57,0,0,1,15.222,7ZM9.4,2.356A19.676,19.676,0,0,0,6.574,7H3.353A10.031,10.031,0,0,1,9.4,2.356ZM2.461,9H5.9a12.016,12.016,0,0,0-.4,3,12.016,12.016,0,0,0,.4,3H2.461a9.992,9.992,0,0,1,0-6Zm.892,8H6.574A19.676,19.676,0,0,0,9.4,21.644,10.031,10.031,0,0,1,3.353,17Zm11.252,4.644A19.676,19.676,0,0,0,17.426,17h3.221A10.031,10.031,0,0,1,14.605,21.644ZM21.539,15H18.1a12.016,12.016,0,0,0,.4-3,12.016,12.016,0,0,0-.4-3h3.437a9.992,9.992,0,0,1,0,6Z"/></svg>
<a href="">MUNDITO</a>
</li>
  </ul>
</nav>
</header>
  <body>
  <button class="btn-user"><?php 
  if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    
    // Usuario ha iniciado sesión, hacer algo aquí
  } else {
    echo '"NO ESTAS LOGUEADO"';
    echo '<style>
    #chau{display:none;}
    </style>';
    // Usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
    //header("Location: login.php");
    // echo"no se ha logueado";
    
    // header("Location: log/index.php");
    // exit();
  }
  
  ?></button>
<!-- <div>

<ul id="company-results"></ul>
  <img id="movie-image" />

</div> -->
  <div class="wrapper">

  </div>
  <ul id="company-results"></ul>
<script>
   
    </script>
<!--  -->
<script>

</script>
<script src="js.js"></script>


<?php 


include("registrar.php");
/*session deleted. if you try using this you've got an error*/

?>
</html>
