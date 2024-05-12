<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style.css">
    <title>NeoAssistant | Inicio</title>
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
                        <a href="">NeoDrive (Terra)</a>
                        <br>
                        <a href="">NeoDrive (pista)</a>
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
                        <a href="">Pendiente</a>
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
                    <a href="http://localhost/NeoDrive/services/NeoRive/">NeoRive</a>
                    <br>
                        <a id="home">NeoAssistant</a>
                        <br>
                        <a href="">NeoServ</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        </div>    
    </div>
    </header>
<body>
  <div class="body-cards">
<div class="text-line-1">
    <h2>Redefiniendo el Futuro de la Vida en el Hogar</h2>
    <div class="text-inner-align-1">
    <div class="text-inner">
<h4>Simplifica la vida con comandos simples para gestionar tu hogar de manera eficiente. </h4>
    </div>
    </div>
    <div class="button-align-1">
    <div class="dropdown9">
                    <a href="#" class="dropbtn9"><button>
  <div class="text">
    <span>Ver</span>
    <span>Mas</span>
  </div>
  <div class="clone">
    <span>Deslizar</span>
    <span>afuera</span>
    <span>para</span>
    <span>ocultar</span>
  </div>
  <svg
    stroke-width="2"
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-6 w-6"
    xmlns="http://www.w3.org/2000/svg"
    width="20px"
  >
    <path
      d="M14 5l7 7m0 0l-7 7m7-7H3"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</button></a>
                    <div class="dropdown-content9">
                    <h6>
                    el control de tu hogar es tan fácil como hablar o tocar un botón. Desde ajustar la temperatura hasta encender las luces, todo se realiza con simples comandos de voz o toques en tu dispositivo móvil.
</h6>
                    </div>
                </div>
    </div>
    </div>
    <!--Card 2-->
   <div class="text-line-2">
    <h2>Mas que compatible</h2>
    <div class="text-inner-align-2">
    <div class="text-inner">
<h4> conectando cada aspecto de tu hogar con la tecnología del mañana.</h4>
    </div>
    </div>
    <div class="button-align-2">
    <div class="dropdown8">
                    <a href="#" class="dropbtn8"><button>
  <div class="text">
    <span>Ver</span>
    <span>Conectividad</span>
  </div>
  <div class="clone">
    <span>Deslizar</span>
    <span>afuera</span>
    <span>para</span>
    <span>ocultar</span>
  </div>
  <svg
    stroke-width="2"
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-6 w-6"
    xmlns="http://www.w3.org/2000/svg"
    width="20px"
  >
    <path
      d="M14 5l7 7m0 0l-7 7m7-7H3"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</button></a>
                    <div class="dropdown-content8">
                    <h6>
                      mas que libertad con NeoDrive 
                      <div class="complete">
                      <ul>
    <li>Conectividad Inalámbrica Avanzada: Compatible con Wi-Fi estándar y protocolos de comunicación inalámbrica de última generación para una conectividad rápida y confiable.</li>
    <li>Integración con Dispositivos Inteligentes: Conecta y controla una amplia gama de dispositivos inteligentes para el hogar, incluyendo luces, termostatos, cerraduras, cámaras y electrodomésticos.</li>
    <li>Compatibilidad con Plataformas de Hogar Inteligente: Interactúa con las principales plataformas de hogar inteligente, como Amazon Alexa, Google Assistant y Apple HomeKit, para una integración perfecta en tu ecosistema existente.</li>
    <li>Actualizaciones de Software Automáticas: Recibe actualizaciones de software automáticas para garantizar que NeoAssistant esté siempre equipado con las últimas características y mejoras de seguridad.</li>
    <li>Control Remoto a Través de Aplicaciones Móviles: Accede y controla tu hogar desde cualquier lugar a través de aplicaciones móviles intuitivas y fáciles de usar, disponibles para dispositivos iOS y Android.</li>
    <li>NeoAutoUpdate&trade;: actualizaciones ilimitadas y Personalizadas</li>
  </ul>
                      </div>
                      <div class="recorted">
                      <ul>
    <li>Conectividad Inalámbrica Avanzada.</li>
    <li>Integración con Dispositivos Inteligentes.</li>
    <li>Compatibilidad con Plataformas de Hogar Inteligente.</li>
    <li>Actualizaciones de Software Automáticas.</li>
    <li>Control Remoto a Través de Aplicaciones móviles.</li>
    <li>NeoAutoUpdate&trade;.</li>
  </ul>
                      </div>

</h6>
                    </div>
                </div>
    </div>
    </div>
    <div class="card2-img">
      <img src="https://th.bing.com/th/id/OIG3.1xSEPytPG0rY9.CPIgU0?pid=ImgGn" alt="" width="500px">
    </div>
    <!--card 3-->
    <div class="text-line-3">
    <h2>Seguro</h2>
    <div class="text-inner-align-3">
    <div class="text-inner">
<h4> Protegiendo tu hogar y tu paz con la mas alta tecnologia </h4>
    </div>
    </div>
    <div class="button-align-3">
    <div class="dropdown10">
                    <a href="#" class="dropbtn10"><button>
  <div class="text">
    <span>Ver</span>
    <span>Sistemas</span>
    <span>de</span>
    <span>seguridad</span>
  </div>
  <div class="clone">
    <span>Deslizar</span>
    <span>afuera</span>
    <span>para</span>
    <span>ocultar</span>
  </div>
  <svg
    stroke-width="2"
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-6 w-6"
    xmlns="http://www.w3.org/2000/svg"
    width="20px"
  >
    <path
      d="M14 5l7 7m0 0l-7 7m7-7H3"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</button></a>
                    <div class="dropdown-content10">
                    <h6>
                      En NeoDrive Nos preocupamos por tu seguridad para implementamos la mayor tecnologia en seguridad.

<div class="complete">
<ul>
    <li> Detección de Intrusos Inteligente: Reconocimiento facial, análisis de comportamiento.</li>
    <li> Acceso Seguro por Reconocimiento de Voz: Biométrico, reconocimiento de voz.</li>
    <li> Monitorización de Actividad en Tiempo Real: Cámaras HD, sensores de movimiento. </li>
    <li>Cifrado de Datos Avanzado: Protección de privacidad, cifrado seguro.</li>
    <li>Integración con Servicios de Emergencia: Activación automática, notificación de emergencia.</li>
    <li>NeoLive&trade;: Reconocimiento Inteligente de estado de salud y posibles situaciones de riesgo</li>
</ul>
</div>
<div class="recorted">
<ul>
    <li> Detección de Intrusos Inteligente.</li>
    <li> Acceso Seguro por Reconocimiento de Voz.</li>
    <li> Monitorización de Actividad en Tiempo Real. </li>
    <li>Cifrado de Datos Avanzado.</li>
    <li>Integración con Servicios de Emergencia.</li>
    <li>NeoLive&trade;</li>
</ul>
</div>
</h6>
                    </div>
                </div>
    </div>
    </div>
    <div class="card3-img">
<img src="https://th.bing.com/th/id/OIG2.R2g2ncCywESaYrXv5Wx.?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="" width="500px">
    </div>
    <!--card 4-->
    <div class="text-line-4">
    <h2>Dale Vida</h2>
    <div class="text-inner-align-4">
    <div class="text-inner">
<h4> Tu hogar, tu mundo, tu experiencia personalizada. </h4>
    </div>
    </div>
    <div class="button-align-4">
    <div class="dropdown11">
                    <a href="#" class="dropbtn11"><button>
  <div class="text">
    <span>Ver</span>
    <span>capacidad</span>
    <span>de</span>
    <span>Personalizacion</span>
  </div>
  <div class="clone">
    <span>Deslizar</span>
    <span>afuera</span>
    <span>para</span>
    <span>ocultar</span>
  </div>
  <svg
    stroke-width="2"
    stroke="currentColor"
    viewBox="0 0 24 24"
    fill="none"
    class="h-6 w-6"
    xmlns="http://www.w3.org/2000/svg"
    width="20px"
  >
    <path
      d="M14 5l7 7m0 0l-7 7m7-7H3"
      stroke-linejoin="round"
      stroke-linecap="round"
    ></path>
  </svg>
</button></a>
                    <div class="dropdown-content11">
                    <h6>
                     En NeoDrive te damos la opcion de personalizacion sin igual
                     <div class="complete">
                     <ul>
    <li>Aprendizaje de Preferencias: NeoAssistant registra y analiza las preferencias del usuario para adaptar el ambiente del hogar según gustos individuales.</li>
    <li> Programación de Rutinas Personalizadas: Permite al usuario crear rutinas específicas, como ajustar la iluminación y la temperatura según la hora del día o la actividad.</li>
    <li> Reconocimiento de Usuarios: Identifica a los miembros de la familia mediante reconocimiento facial o de voz, personalizando las respuestas y acciones según cada usuario.</li>
    <li>Historial de Interacciones: Almacena y analiza el historial de interacciones para mejorar la precisión de las respuestas y anticipar las necesidades del usuario.</li>
    <li>Integración de Preferencias Externas: Se sincroniza con otros servicios y dispositivos, como calendarios y aplicaciones de música, para personalizar aún más la experiencia del usuario.</li>
    <li>NeoPersonality&trade;: La Tecnologia mas avanzada que hace posible que tu asistente tenga una personalidad unica y como ninguna otra </li>
</ul>
                     </div>
                     <div class="recorted">
                     <ul>
    <li>Aprendizaje de Preferencias.</li>
    <li> Programación de Rutinas Personalizadas</li>
    <li> Reconocimiento de Usuarios</li>
    <li>Historial de Interacciones</li>
    <li>Integración de Preferencias Externas</li>
    <li>NeoPersonality&trade; </li>
</ul>
                     </div>

</h6>
                    </div>
                </div>
    </div>
    </div>
    <div class="card4-img">
<img src="https://th.bing.com/th/id/OIG1.ohaiIVolDzE8lnJZzHo8?w=1024&h=1024&rs=1&pid=ImgDetMain" alt="" width="500px">
    </div>
  </div>
    <!--Card5-->
    <div class="text-line-5">
      <div class="text-line-5-align">
      <h2>Da Un Paso Mas Al Futuro</h2>
      </div>
    <div class="text-inner-align-5">
    <div class="text-inner">
<h4>Juntos llegaremos mas alla del futuro Que Soñamos</h4>
    </div>
    </div>
    <div class="button-align-5">
    <button class="btn" name="buy" onclick="<?php buy() ?>">
    <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
        <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
    </svg>

    <span class="text" onclick="redirect()">Comprar ahora</span>
</button>
<br>
<br>
<br>
<br>
<br>
                </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="footer-space">
  <br>
  &nbsp;
  <br>
  </div>
</body>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bowlby+One&family=Dosis:wght@200..800&family=Edu+SA+Beginner:wght@400..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lacquer&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ojuju:wght@200..800&family=Permanent+Marker&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Shadows+Into+Light&family=Tilt+Neon&family=Truculenta:opsz,wght@12..72,100..900&display=swap');

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
.dropdown-content,
.dropdown-content2,
.dropdown-content3,
.dropdown-content4,
.dropdown-content5,
.dropdown-content6,
.dropdown-content7,
.dropdown-content8,
.dropdown-content9,
.dropdown-content10,
.dropdown-content11 {
    display: none;
    position: absolute;
    background: rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(10px);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    padding: 12px 16px;
    z-index: 1;
}
.body-cards{
  .dropdown-content,
.dropdown-content2,
.dropdown-content3,
.dropdown-content4,
.dropdown-content5,
.dropdown-content6,
.dropdown-content7,
.dropdown-content8,
.dropdown-content9,
.dropdown-content10,
.dropdown-content11 {
font-size: 23px;
}
}

.dropdown:hover .dropdown-content,
.dropdown2:hover .dropdown-content2,
.dropdown3:hover .dropdown-content3,
.dropdown4:hover .dropdown-content4,
.dropdown5:hover .dropdown-content5,
.dropdown6:hover .dropdown-content6,
.dropdown7:hover .dropdown-content7,
.dropdown8:hover .dropdown-content8,
.dropdown9:hover .dropdown-content9,
.dropdown10:hover .dropdown-content10,
.dropdown11:hover .dropdown-content11 {
    display: block;
    .recorted{
          display: none;
        }
}
#destroy_session:hover{
    color: red;
    cursor: pointer;
}
.unavailable:hover{
color: red;
}
header .nav a:hover{
    font-size: 15px;
}
header .nav a:active{
    font-size: 15px;
}
.text-line-1{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-line-1 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-2{
        position: absolute;
        top: 140%;
        left: 60%;
        transform: translate(-50%, -50%);
       
    }
    .text-line-2 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-3{
        position: absolute;
        top: 200%;
        left: 20%;
        transform: translate(-50%, -50%);
    }
    .text-line-3 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-4{
        position: absolute;
        top: 260%;
        left: 60%;
        transform: translate(-50%, -50%);
    }
    .text-line-4 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-5{
        position: absolute;
        top: 330%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-line-5 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-inner{
        margin-top: 90px;
        font-size: 30px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
          width: 100%;
    }
    .text-inner-align-1{
        position: absolute;
        top: 40%;
    }
    .button-align-1{
        position: absolute;
        top: 200%;
    }
  .body-cards  button {
  height: 56px;
  overflow: hidden;
  border: none;
  color: black;
  background: none;
  position: relative;
  padding-bottom: 2em;
  cursor: pointer;
}
.body-cards button:hover{
    width: 300px;
}
.body-cards button > div,
.body-cards button > svg {
  position: absolute;
  width: 100%;
  height: 100%;
  display: flex;
}

.body-cards button:before {
  content: "";
  position: absolute;
  height: 2px;
  bottom: 0;
  left: 0;
  width: 100%;
  transform: scaleX(0);
  transform-origin: bottom right;
  background: currentColor;
  transition: transform 0.25s ease-out;
}

.body-cards button:hover:before {
  transform: scaleX(1);
  transform-origin: bottom left;
}

.body-cards button .clone > *,
.body-cards button .text > * {
  opacity: 1;
  font-size: 1.3rem;
  transition: 0.2s;
  margin-left: 4px;
}

.body-cards button .clone > * {
  transform: translateY(60px);
}

.body-cards button:hover .clone > * {
  opacity: 1;
  transform: translateY(0px);
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}

.body-cards button:hover .text > * {
  opacity: 1;
  transform: translateY(-60px);
  transition: all 0.2s cubic-bezier(0.215, 0.61, 0.355, 1) 0s;
}

.body-cards button:hover .clone > :nth-child(1) {
  transition-delay: 0.15s;
}

.body-cards button:hover .clone > :nth-child(2) {
  transition-delay: 0.2s;
}

.body-cards button:hover .clone > :nth-child(3) {
  transition-delay: 0.25s;
}

.body-cards button:hover .clone > :nth-child(4) {
  transition-delay: 0.3s;
}
.body-cards button svg {
  width: 20px;
  right: 0;
  top: 50%;
  transform: translateY(-50%) rotate(-50deg);
  transition: 0.2s ease-out;
}

.body-cards button:hover svg {
  transform: translateY(-50%) rotate(-90deg);
}
::-webkit-scrollbar {
  background: transparent;
  width: 0;
  height: 0;
}
.card2-img{
    position: absolute;
    top: 120%;
    left: 10%;
    border-radius: 30px;
}
.card3-img{
  position: absolute;
    top: 185%;
    left: 50%;
    border-radius: 30px;
}
.card4-img{
  position: absolute;
    top: 240%;
    left: 10%;
    border-radius: 30px;
}
.btn {
  border: none;
  width: 15em;
  height: 5em;
  border-radius: 3em;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  background: #1C1A1C;
  cursor: pointer;
  transition: all 450ms ease-in-out;
}

.sparkle {
  fill: #AAAAAA;
  transition: all 800ms ease;
}

.text {
  font-weight: 600;
  color: #AAAAAA;
  font-size: medium;
}

.btn:hover {
  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
  transform: translateY(-2px);
}

.btn:hover .text {
  color: white;
}

.btn:hover .sparkle {
  fill: white;
  transform: scale(1.2);
} 
.button-align-5{
  position: absolute;
  left: 35%;
  top: 110%;
}
.footer-space{
  width: 100%;
}
.text-line-5-align{
  justify-content: center;
  text-align: center;
  align-items: center;
  align-self: center;
  justify-self: center;
}
.dropbtn8 button{
  width: 200px;
}
.dropbtn9 button{
  width: 120px;
}
.dropbtn10 button {
  width: 300px;
}
.dropbtn11 button{
  width: 360px;
}
@media screen and (min-width: 1024px) and (max-width: 1800px) {
  .dropbtn8 button{
  width: 200px;
}
.dropbtn9 button{
  width: 120px;
}
.dropbtn10 button {
  width: 300px;
}
.dropbtn11 button{
  width: 360px;
}

.text-line-1{
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-line-1 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-2{
        position: absolute;
        top: 130%;
        left: 70%;
        transform: translate(-50%, -50%);
    }
    .text-line-2 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-3{
        position: absolute;
        top: 210%;
        left: 30%;
        transform: translate(-50%, -50%);
    }
    .text-line-3 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-4{
        position: absolute;
        top: 290%;
        left: 70%;
        transform: translate(-50%, -50%);
    }
    .text-line-4 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
    .text-line-5{
        position: absolute;
        top: 370%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .text-line-5 h2{
font-size: 50px;
font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
    }
}
.card2-img{
    position: absolute;
    top: 100%;
    left: 10%;
    border-radius: 30px;
}
.card3-img{
  position: absolute;
    top: 183%;
    left: 70%;
    border-radius: 30px;
}
.card4-img{
  position: absolute;
    top: 260%;
    left: 10%;
    border-radius: 30px;
}

.dropdown:hover .dropdown-content,
.dropdown2:hover .dropdown-content2,
.dropdown3:hover .dropdown-content3,
.dropdown4:hover .dropdown-content4,
.dropdown5:hover .dropdown-content5,
.dropdown6:hover .dropdown-content6,
.dropdown7:hover .dropdown-content7,
.dropdown8:hover .dropdown-content8,
.dropdown9:hover .dropdown-content9,
.dropdown10:hover .dropdown-content10,
.dropdown11:hover .dropdown-content11 {
    display: block;
    .recorted{
          display: block;
        }
        .complete{
          display: none;
        }
}
</style>
<?php
function buy() {
    global $conn;

    if(isset($_SESSION['user'])) {
        $correoUsuario = filter_var($_SESSION['user'], FILTER_VALIDATE_EMAIL);

        if($correoUsuario === false) {
            echo "Error: El correo del usuario no es válido.";
            exit;
        }

        function generarLlaveAleatoria($length) {
            $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            $caracteresLength = strlen($caracteres);
            $llave = '';
            for ($i = 0; $i < $length; $i++) {
                $llave .= $caracteres[rand(0, $caracteresLength - 1)];
            }
            return $llave;
        }

        $software = "Assistant";
        $llave = generarLlaveAleatoria(10);
        $status = "pendiente";

        $stmt = $conn->prepare("INSERT INTO softwares (usuario, software, llave, status) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $correoUsuario, $software, $llave, $status);

        if ($stmt->execute()) {
          header("location:http://localhost/NeoDrive/services/Assistant/data/src/");
        } else {
            echo "Error al insertar los datos: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: El usuario no ha iniciado sesión.";
    }
}
?>

<script>
function buy() {
    var software = "Assistant";
    var status = "pendiente";
    var datos = {
        software: software,
        llave: generarLlaveAleatoria(10),
        status: status
    };

    fetch('<?php echo $_SERVER['PHP_SELF']; ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(datos),
    })
    .then(response => {
        if (response.ok) {
            console.log('Datos insertados correctamente');
            header("location:http://localhost/NeoDrive/services/Assistant/data/src/")
        } else {
            console.error('Error al insertar los datos');
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
}

function generarLlaveAleatoria(length) {
    var result = '';
    var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var caracteresLength = caracteres.length;
    for (var i = 0; i < length; i++) {
        result += caracteres.charAt(Math.floor(Math.random() * caracteresLength));
    }
    return result;
}
function redirect() {
  window.location.href = "http://localhost/NeoDrive/services/Assistant/data/src/"
}
</script>
</html>