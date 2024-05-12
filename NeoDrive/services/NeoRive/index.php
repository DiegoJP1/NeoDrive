<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <title>NeoRive | inicio</title>
</head>
<header>
    <div class="header">

    <div class="navigation">

  
        <div class="nav">
            <div class="logo">
                <a href="#"><img src="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" alt="Logo de NeoDrive"></a>
            </div>
            <div class="menu">
                <a href="http://localhost/NeoDrive/Home/">Inicio</a>
                    <div class="dropdown5">
                    <a href="#" class="dropbtn5">Vehiculos</a>
                    <div class="dropdown-content5">
                        <a href="">NeoDrive Model(1)</a>
                        <br>
                        <a href="">NeoDrive (Ibay)</a>
                        <br>
                        <a href="">NeoDrive (faster)</a>
                        <br>
                        <a href="">NeoDrive (Terra)</a>
                        <br>
                        <a href="">NeoDrive Model(2)</a>
                        <br>
                        <a href="">NeoDrive (pista)</a>
                        <br>
                        <a href="">NeoDrive (Neo)</a>
                    </div>
                    </div>
                <div class="dropdown6">
                    <a href="#" class="dropbtn6">dispositivos portátiles</a>
                    <div class="dropdown-content6">
                         <a href="" class="unavailable">NeoPhone(1)</a>
                         <br>
                         <a href="" class="unavailable">NeoGlasses(1)</a>
                         <br>
                         <a href="" class="unavailable">NeoEar(1)</a>
                         <br>
                         <a href="" class="unavailable">NeoWatch(1)</a>
                    </div>
                </div>
                <div class="dropdown7">
                    <a href="#" class="dropbtn7">Robotica</a>
                    <div class="dropdown-content7">
                         <a href="" class="unavailable">NeoSpider</a>
                         <br>
                         <a href="" class="unavailable">NeoDron</a>
                         <br>
                         <a href="" class="unavailable">NeoHeal</a>
                         <br>
                         <a href="" class="unavailable">NeoFred</a>
                    </div>
                </div>
                <div class="dropdown4">
                    <a href="#" class="dropbtn4"><?php 
                session_start();
                if(isset($_SESSION['user'])) {
                  $correo = $_SESSION['user'];
                  $servername = "localhost";
                  $username = "root";
                  $password = "";
                  $database = "neodrive";

                  $conn = new mysqli($servername, $username, $password, $database);
                  if ($conn->connect_error) {
                      die("Conexión fallida: " . $conn->connect_error);
                  }
                  $sql = "SELECT nombre FROM users WHERE email = '$correo'";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      $nombre = $row["nombre"];
                  } else {
                    header("Location: http://localhost/NeoDrive/Start/user_start/");
                  }
                  $result->free();
                  $conn->close();
                } else {
                    header("Location: http://localhost/NeoDrive/Start/user_start/");
                    exit();
                }
                echo $nombre
                ?></a>
                <div class="dropdown-content4">
                        <a href="">tus Vehiculos</a>
                        <br>
                        <a href="">configuracion</a>
                        <br>
                        <a href="">asistencia</a>
                        <br>
                        <a href="">cuenta</a>
                        <br>
                        <a id="destroy_session">cerrar Sesion</a>
                            <script>
                              document.getElementById("destroy_session").addEventListener("click", function(event) {
    event.preventDefault();

    fetch("", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded" 
        },
        body: "cerrar_sesion=true" 
    })
    .then(response => {
        if (!response.ok) {
            throw new Error("Error al cerrar la sesión");
        }
        return response.text();
    })
    .then(data => {
        console.log(data); 
        window.location.href = "http://localhost/NeoDrive/Start/user_start/";
    })
    .catch(error => {
        console.error("Error:", error);
    });
});
                            </script>
                                <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cerrar_sesion"])) {
    session_start();
    $_SESSION = array();
    session_destroy();
}
?>
                    </div>
                </div>
                <div class="dropdown3">
                    <a href="#" class="dropbtn3">Innovaciones</a>
                <div class="dropdown-content3">
                    <a href="" id="home">NeoRive</a>
                    <br>
                        <a href="http://localhost/NeoDrive/services/Assistant/#">NeoAssistant</a>
                        <br>
                        <a href="">NeoConnect</a>
                        <br>
                        <a href="">NeoFred</a>
                        <br>
                        <a href="">NeoHeal</a>
                    </div>
                </div>
                <div class="dropdown2">
                    <a href="#" class="dropbtn2">Descubrir</a>
                <div class="dropdown-content2">
                <a href="#vehicles">Nuestros Vehiculos</a>
                        <a href="#about">Sobre NeoDrive</a>
                        <a href="#vision">Nuestra Vision</a>
                    </div></div>
                    
            </div>
        </div>
        </div>    
    </div>
    </header>
<body>
    <div class="body">
        <main>
            <section>
              <h1>NeoRive</h1>
            </section>
            <div class="content">
              <svg viewBox="0 0 1440 4096" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g class="backers">
                  <path d="M-3317 96H387c276.142 0 500 223.858 500 500v1064.51c0 99.41-80.589 180-180 180H434.99c-99.412 0-180.001 80.58-180.001 180V4248" stroke="red" stroke-width="100" stroke-linecap="round"/>
                  <path d="M4379 804H1387c-276.14 0-499.997 223.86-499.997 500v356.51c0 99.41-80.589 180-180 180H434.991c-99.411 0-180 80.59-180 180V4248" stroke="red" stroke-width="100" stroke-linecap="round"/>
                  <path d="M4423 96H1387.02c-276.14 0-500.001 223.858-500.001 500.001V1660.51c0 99.41-80.589 180-180 180H434.995c-99.411 0-180 80.59-180 180l.001 2227.49" stroke="red" stroke-width="100" stroke-linecap="round"/>
                </g>
                <g class="fillers">
                  <path d="M-3317 96H387c276.142 0 500 223.858 500 500v1064.51c0 99.41-80.589 180-180 180H434.99c-99.412 0-180.001 80.58-180.001 180V4248" stroke="red" stroke-width="100" stroke-linecap="round"/>
                  <path d="M4379 804H1387c-276.14 0-499.997 223.86-499.997 500v356.51c0 99.41-80.589 180-180 180H434.991c-99.411 0-180 80.59-180 180V4248" stroke="red" stroke-width="100" stroke-linecap="round"/>
                  <path d="M4423 96H1387.02c-276.14 0-500.001 223.858-500.001 500.001V1660.51c0 99.41-80.589 180-180 180H434.995c-99.411 0-180 80.59-180 180l.001 2227.49" stroke="red" stroke-width="100" stroke-linecap="round"/>
                </g>
              </svg>
              <section>
                <div class="card-container-1">
                    <div class="card">
                        <div class="image">
                            <img src="https://th.bing.com/th/id/OIG2.uJdC5Y03ItWUQz_A1qbu?pid=ImgGn" alt="Model(1)" width="450px">
                        </div>
                        <div class="text">
                            <h2 style="color: #000000;">Taxis mas que Veloces</h2>
                            <h3 style="color: black;  font-family: 'Roboto', sans-serif;">
                                Nuestros Taxis totalmente autonomos son capaces de manejar hasta una velocidad de 530 km/h de forma segura gracias a nuestras mas avanzadas tecnologias de IA
                            </h3>
                        </div>
                    </div>
                </div>
               
              </section>
              <section>
                <div class="card-container-2">
                    <div class="card">
                        <div class="image">
                            <img src="https://th.bing.com/th/id/OIG2.wCpPh5KSwyKfOQnHLkcz?pid=ImgGn" alt="Model(1)" width="450px">
                        </div>
                        <div class="text">
                            <h2 style="color: black;">Mas que comodos</h2>
                            <h3 style="color: black;  font-family: 'Roboto', sans-serif;">
                               Preparamos nuestros Taxis para ser lo mas comodo y agradable posible a la vez que avanzados para poder dar una experiencia unica a nuestros pasajeros
                            </h3>
                        </div>
                    </div>
                </div>
               
              </section>
              <section>
                <div class="card-container-3">
                    <div class="card">
                        <div class="image">
                            <img src="https://th.bing.com/th/id/OIG1.NCaCT2yr_tTMyD9dkfFG?pid=ImgGn" alt="Model(1)" width="450px">
                        </div>
                        <div class="text">
                            <h2 style="color: black;">Variedad Sin Parar</h2>
                            <h3 style="color: black;  font-family: 'Roboto', sans-serif;">
                               preparamos varios vehiculos de NeoDrive para NeoRive y tener la mejor variedad para nuestros pasajeros
                            </h3>
                        </div>
                    </div>
                </div>
              </section>
              <section>
                <div class="card-container-4">
                    <div class="card">
                        <div class="image">
                            <img src="https://th.bing.com/th/id/OIG3.CO3rIsyDeKBXYBCshDax?pid=ImgGn" alt="Model(1)" width="450px">
                        </div>
                        <div class="text">
                            <h2 style="color: black;">Mas que seguros</h2>
                            <h3 style="color: black;  font-family: 'Roboto', sans-serif;">
                               Creamos Taxis totalmente autonomos con la mas alta tecnologia tanto de conduccion como de seguridad para que nuestros pasajeros puedan disfrutar de una experiencia unica
                            </h3>
                        </div>
                    </div>
                </div>
              </section>
              <section>
                <div class="align-button">
                    <div class="button-body">
                    <button class="button" onclick=GoToMap()>Solicitar un NeoRive a mi ubicacion</button>
                    </div>
                </div>
           
              </section>
            </div>
          </main>
    </div>
</body>
<script>
    function GoToMap(){
        window.location.href = "http://localhost/NeoDrive/services/NeoRive/connection/map/"
    }
</script>
<style>
header{
    font-family: 'Roboto', sans-serif;
        background: white;
        color: black;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        animation: gradient 5s ease-in-out infinite;
        overflow: visible;
  }
.header{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
        margin: 0;
    }
    @keyframes gradient {
        0% {background-position: 0% 50%;}
        50% {background-position: 100% 50%;}
        100% {background-position: 0% 50%;}
    }
    .nav {
        display: flex;
        justify-content: space-between;
        background: rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
    }
    .nav a {
        color: black;
        text-decoration: none;
        margin-left: 20px;
    }
    .nav .logo {
        flex-grow: 1;
    }
    .nav .menu {
        display: flex;
        align-items: center;
    }
    .nav .menu a {
        color: black;
        text-decoration: none;
        margin-left: 20px;
    }
    .dropdown {
        position: relative;
        display: inline-block;
    }
    #home{
        color: blue;
    }
    .nav a:hover{
        color: blue;
    }
    .logo img{
        width: 90px;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background: rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        padding: 12px 16px;
        z-index: 1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
    html {
  font-size: 100%;
  box-sizing: border-box;
}
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bowlby+One&family=Dosis:wght@200..800&family=Edu+SA+Beginner:wght@400..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lacquer&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ojuju:wght@200..800&family=Permanent+Marker&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Shadows+Into+Light&family=Tilt+Neon&family=Truculenta:opsz,wght@12..72,100..900&display=swap');
.dropdown-content,
.dropdown-content2,
.dropdown-content3,
.dropdown-content4,
.dropdown-content5,
.dropdown-content6,
.dropdown-content7 {
    display: none;
    position: absolute;
    background: rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content,
.dropdown2:hover .dropdown-content2,
.dropdown3:hover .dropdown-content3,
.dropdown4:hover .dropdown-content4,
.dropdown5:hover .dropdown-content5,
.dropdown6:hover .dropdown-content6,
.dropdown7:hover .dropdown-content7 {
    display: block;
}
#destroy_session:hover{
    color: red;
    cursor: pointer;
}
.unavailable:hover{
color: red;
}
dropdown-content6 a:hover{
    color: red;
}
header .nav a:hover{
    font-size: 19px;
}
header .nav a:active{
    font-size: 19px;
}
@import "normalize.css";

@font-face {
  font-family: "Geist Sans";
  src: url("https://assets.codepen.io/605876/GeistVF.ttf") format("truetype");
}


.body {
	min-height: 100vh;
	font-family:  "Geist Sans", "SF Pro Text", "SF Pro Icons", "AOS Icons", "Helvetica Neue", Helvetica, Arial, sans-serif, system-ui;
	font-weight: 100;
	color: hsl(0, 0%, 100%);
}

.body  h1 {
	font-weight: 140;
	font-size: clamp(2rem, 4vw + 1rem, 6rem);
	background: linear-gradient(hsl(0 0% 50%), hsl(0 0% 20%));
	-webkit-background-clip: text;
	background-clip: text;
	color: transparent;
	animation: scale-down linear both;
	animation-timeline: scroll();
	animation-range: 0 50vh;
}

@keyframes scale-down {
	to { scale: 0.75; }
}

.content {
    background: rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(10px);
  width: 100%;
  position: relative;
  overflow: hidden;
  scale: 0.95;
}

@supports (animation-timeline: scroll()) {
	.content {
	  view-timeline: --content;
	  animation: grow linear both;
	  animation-timeline: scroll();
	  animation-range: 0 50vh;
	}
}

@keyframes grow {
	to { scale: 1; }
}

.content svg {
  height: 100%;
  position: absolute;
  right: 0%;
  top: 0;
  overflow: visible !important;
  z-index: -1;
}

.content svg path {
  stroke-width: clamp(2rem, 2vw, 4rem);
}

@media only screen and (orientation: portrait) {
  svg {
    display: none;
  }
}

.body  section {
  height: 100vh;
}

.body  main > section {
  height: 80vh;
  display: grid;
  place-items: center;
  position: sticky;
  top: 0;
}

.body  main {
  width: 100%;
}

.backers path {
	stroke: hsl(0 0% 50%);
}

.fillers path {
	stroke: hsl(0 100% 50% / 1);
}

.fillers path:nth-of-type(1) {
	--len: 8620;
	stroke: hsl(140 80% 60%);
}
.fillers path:nth-of-type(2) {
	--len: 7200;
	stroke: hsl(140 90% 60%);
}
.fillers path:nth-of-type(3) {
	--len: 7952;
	stroke: hsl(140 90% 50%);
}

.fillers path {
	stroke-dasharray: var(--len);
	stroke-dashoffset: var(--len);
}

@supports (animation-timeline: scroll()) {
	.fillers path {
		animation: fill linear both;
		animation-timeline: --content;
		animation-range: entry-crossing -38% exit 12%;
	}
}

@keyframes fill {
	to { stroke-dashoffset: 0; }
}

.content section {
	display: grid;
	align-content: center;
	padding: 0 6rem;
}

.body  section h2 {
	font-size: clamp(2rem, 4vw + 1rem, 4rem);
	font-weight: 120;
	color: hsl(0, 0%, 0%);
	width: 10ch;
  white-space: nowrap;
}

.body section:nth-of-type(3),
.body section:nth-of-type(4) {
	justify-items: end;
}

.body a {
	width: 56px;
	display: inline-block;
	aspect-ratio: 1;
	position: fixed;
	top: 1rem;
	left: 1rem;
	z-index: 10;
	border-radius: 50%;
	background: hsl(0 0% 100%);
	display: grid;
	place-items: center;
}

.body a img {
	width: 80%;
}
::-webkit-scrollbar {
  background: transparent;
  width: 5px;
  height: 5px;
}

::-webkit-scrollbar-thumb {
  background-color: #000000;
}

::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.3);
}

.card{
        padding: 70px;
        position: absolute;
        width: 1130px;
        padding:0;
    background-color: rgba(0, 0, 0, 0.1) ;
    box-shadow: 0px 8px 16px 0px black;
    }
    .card .image{
        padding: 0;
        margin: 0;
        width: 40%;
    }
    .card .text{
        position: inherit;
        left: 70%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    .card .text h2{
      display: flex;
    text-align: center;
    justify-content: center;
        color: #b2b2b2;
        font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
          font-size: 40px;
    }
    .animated-letter {
      color: black;
      font-size: 40px;
      transition: color 0.5s, font-size 0.5s;
    }
    .card:hover{
      width: 1160px;
    }
   
    .button {
  display: inline-block;
  padding: 12px 24px;
  border: 1px solid #4f4f4f;
  border-radius: 4px;
  transition: all 0.2s ease-in;
  position: relative;
  overflow: hidden;
  font-size: 19px;
  cursor: pointer;
  color: black;
  z-index: 1;
}

.button:before {
  content: "";
  position: absolute;
  left: 50%;
  transform: translateX(-50%) scaleY(1) scaleX(1.25);
  top: 100%;
  width: 140%;
  height: 180%;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button:after {
  content: "";
  position: absolute;
  left: 55%;
  transform: translateX(-50%) scaleY(1) scaleX(1.45);
  top: 180%;
  width: 160%;
  height: 190%;
  background-color: #39bda7;
  border-radius: 50%;
  display: block;
  transition: all 0.5s 0.1s cubic-bezier(0.55, 0, 0.1, 1);
  z-index: -1;
}

.button:hover {
  color: #ffffff;
  border: 1px solid #39bda7;
}

.button:hover:before {
  top: -35%;
  background-color: #39bda7;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

.button:hover:after {
  top: -45%;
  background-color: #39bda7;
  transform: translateX(-50%) scaleY(1.3) scaleX(0.8);
}

@media screen and (min-width: 1800px) {
    .card-container-1{
        position: absolute;
        bottom: 94%;
        left: 1%;
    }
    .card-container-2{
        position: absolute;
        bottom: 67%;
    }
    .card-container-3{
        position: absolute;
        bottom: 45%;
        left: 50%;
    }
    .card-container-4{
        position: absolute;
        bottom: 25%;
        left: 50%;
    }
    .align-button{
        position: absolute;
        left: 42%;
        bottom: 10%;
    }
}
@media screen and (min-width: 1024px) and (max-width: 1800px) { 
   .card{
    width: 850px;
   }
   .card:hover{
      width: 890px;
    }
    .card .image img{
        padding: 0;
        margin: 0;
        width: 400px;
    }
    .card .text{
        position: inherit;
        left: 73%;
        top: 50%;
        transform: translate(-50%,-50%);
    }
    .card .text h2{
      display: flex;
    text-align: center;
    justify-content: center;
        color: #b2b2b2;
        font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
          font-size: 40px;
    }
    .card-container-1{
        position: absolute;
        bottom: 94%;
        left: -3%;
    }
    .card-container-2{
        position: absolute;
        bottom: 67%;
    }
    .card-container-3{
        position: absolute;
        bottom: 45%;
        left: 50%;
    }
    .card-container-4{
        position: absolute;
        bottom: 25%;
        left: 50%;
    }
    .align-button{
        position: absolute;
        left: 40%;
        bottom: 10%;
    }
}
::-webkit-scrollbar {
  background: transparent;
  width: 0;
  height: 0;
}
</style>
<script>
    if (!CSS.supports('animation-timeline: scroll()')) {
  gsap.registerPlugin(ScrollTrigger)
  gsap.to('.content', {
    scrollTrigger: {
      trigger: 'body',
      scrub: 0.5,
      start: "top top",
      end: window.innerHeight * 0.4,
    },
    scale: 1
  })
  gsap.to('.fillers path', {
    scrollTrigger: {
      trigger: '.content',
      scrub: 0.5,
      ease: 'power4.in',
      start: "top bottom+=20%",
      end: "bottom bottom-=50%",
    },
    strokeDashoffset: 0
  })
}
</script>
</html>