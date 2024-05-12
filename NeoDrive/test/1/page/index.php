<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Tesla | Cybertruck</title>
</head>
<header >
  <nav class="navbar">
    <div class="container2">
        <div class="navbar-header">
            <button class="navbar-toggler" data-toggle="open-navbar1">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <div class="logo">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1780138/logoTesla.svg" alt="" width="190px">
            </div>
        </div>
        <div class="navbar-menu" id="open-navbar1">
            <ul class="navbar-nav">
                <li><a href="#">Inicio</a></li>
                <li class="navbar-dropdown active" >
                    <a href="#" class="dropdown-toggler active" data-dropdown="my-dropdown-id">
                        Productos | Cybertruck <i class="fa fa-angle-down active"></i>
                    </a>
                    <ul class="dropdown" id="my-dropdown-id">
                        <li><a href="#"></a></li>
                        <li><a href="#">Energia</a></li>
                        <li><a href="#">Carga</a></li>
                        <li class="navbar-dropdown active">
                    <a href="#" class="dropdown-toggler active" data-dropdown="cars-dropdown-id">
                      Vehiculos <i class="fa fa-angle-down active"></i>
                    </a>
                    <ul class="dropdown" id="cars-dropdown-id">
                        <li><a href="#">Model 3</a></li>
                        <li class="separator"></li>
                        <li><a href="">Model S</a></li>
                        <li class="separator"></li>
                        <li><a href="">Model Y</a></li>
                        <li class="separator"></li>
                        <li><a href="">Model X</a></li>
                        <li class="separator"></li>
                        <li><a href="">Semi truck</a></li>
                        <li class="separator"></li>
                        <li><a href="">Roadster</a></li>
                    </ul>
                </li>
                    </ul>
                <li><a href="#">Descubrir</a></li>
                <li class="navbar-dropdown">
                    <a href="#" class="dropdown-toggler" data-dropdown="cuenta-dropdown-id">
                    <?php 
            session_start();
            if(isset($_SESSION['user'])) {
              $correo = $_SESSION['user'];
              $servername = "localhost";
              $username = "root";
              $password = "";
              $database = "tesla";

              $conn = new mysqli($servername, $username, $password, $database);
              if ($conn->connect_error) {
                  die("Conexión fallida: " . $conn->connect_error);
              }
              $sql = "SELECT nombre FROM usuarios WHERE correo = '$correo'";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  $row = $result->fetch_assoc();
                  $nombre = $row["nombre"];
              } else {
                  $nombre = "Desconocido";
              }
              $result->free();
              $conn->close();
            } else {
              $nombre = "Desconocido";
            }
            echo $nombre
            ?> <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown" id="cuenta-dropdown-id">
                        <li><a href="#">configuración</a></li>
                        <li class="separator"></li>
                        <li><a href="">Mis Productos</a></li>
                        <li class="separator"></li>
                        <li><a id="destroy_session">cerrar Sesion</a></li>
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
    window.location.href = "http://localhost/TESLA/Start/user_start/";
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
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
</header>
<body>
    <div class="MainContainer">

        <div class="ParallaxContainer">
          <h1>
            Explora Sin Limites
          </h1>
        </div>
      
        <div class="ContentContainer">
          <div class="Content">
            <div class="align">
            <div class="cards" style="display: grid;">
            <div class="card">
    <div class="card-video-container">
        <video class="card-video" autoplay loop muted>
            <source src="https://res.cloudinary.com/dm2uezxs1/video/upload/v1712356917/nf4uiwlbqxyaq9zwv6fc.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="glow"></div>
    </div>
    <div class="card-text">
        <h2>HECHO PARA CUALQUIER PLANETA</h2>
        <p>LO SUFICIENTEMENTE DURADERO Y RESISTENTE PARA IR A CUALQUIER PARTE. ATACA CUALQUIER CAMINO CON UNA SUSPENSIÓN NEUMÁTICA QUE SE ADAPTA ELECTRÓNICAMENTE, TIENE 305 MM DE RECORRIDO Y 406 MM DE ALTURA LIBRE SOBRE EL SUELO.</p>
    </div>
</div>
<div class="card-2-2">
    <div class="card-2-2-video-container">
        <video class="card-2-2-video" autoplay loop muted>
            <source src="https://res.cloudinary.com/dm2uezxs1/video/upload/v1712356913/hveuffyuufpdebfaievh.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="glow"></div>
    </div>
    <div class="card-2-2-text">
        <h2>SIN PINTURA, NO SE DESPOSTILLA</h2>
        <p>UN EXOESQUELETO DE ACERO INOXIDABLE ULTRADURO AYUDA A REDUCIR LAS ABOLLADURAS, LOS DAÑOS Y LA CORROSIÓN A LARGO PLAZO. LAS REPARACIONES SON SIMPLES Y RÁPIDAS.</p>
    </div>
</div>
<div class="card3">
    <div class="card3-text">
        <h2>RESISTE LOS IMPACTOS</h2>
        <p>EL VIDRIO BLINDADO PUEDE RESISTIR EL IMPACTO DE UNA PELOTA DE BEISBOL A 112 KM/H O GRANIZO DE CLASE 4. EL VIDRIO ACÚSTICO AYUDA A QUE LA CABINA SEA TAN SILENCIOSA COMO EL ESPACIO EXTERIOR</p>
    </div>
    <div class="card3-video-container">
        <video class="card3-video" autoplay loop muted>
            <source src="https://res.cloudinary.com/dm2uezxs1/video/upload/v1712356905/jypntsxrlrn0pqgfck3b.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="glow"></div>
    </div>
</div>

<div class="card5">
    <div class="card5-video-container">
        <video class="card5-video" autoplay loop muted>
            <source src="https://digitalassets.tesla.com/tesla-contents/video/upload/Cybertruck-Dopamine-On-Tap-Desktop.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="glow"></div>
        <div class="dynamic-lines"></div>
    </div>
    <div class="card5-text">
        <h2>
DOPAMINA CON RUEDAS</h2>
        <p>ACELERA DE 0 A 100 KM/H EN TAN SOLO 2.7 SEGUNDOS† EN MODO BESTIA, MIENTRAS MANTIENES LA ESTABILIDAD A ALTA VELOCIDAD. CON LA DIRECCIÓN ELECTRÓNICA Y LA DIRECCIÓN TRASERA, OBTIENES EL MANEJO DE UN DEPORTIVO Y UN MEJOR RADIO DE GIRO QUE LA MAYORÍA DE LOS SEDANES.</p>
    </div>
</div>
<div class="card6">
        <div class="card6-img">
            <img src="https://digitalassets.tesla.com/tesla-contents/image/upload/f_auto,q_auto/Cybertruck-Human-Meet-Machine-Desktop.png" alt="Imagen Futurista de Lujo">
        </div>
        <div class="card6-content">
            <h2>RESISTENTE POR FUERA Y CÓMODO POR DENTRO</h2>
            <div class="line"></div>
            <p class="blurred-text">DISFRUTA DE UN INTERIOR QUE TIENE NUESTRA TECNOLOGÍA Y ENTRETENIMIENTO MÁS AVANZADOS.</p>
        </div>
    </div>
    <div class="card7">
        <div class="card7-video">
            <video autoplay loop muted>
                <source src="https://digitalassets.tesla.com/tesla-contents/video/upload/Cybertruck-Keep-the-Adventure-Going-Desktop.mp4" type="video/mp4">
            </video>
        </div>
        <div class="card7-content">
            <h2>AVENTURAS INTERMINABLES</h2>
            <div class="line"></div>
            <p class="blurred-text">EXPLORA LAS OPCIONES QUE OFRECE TESLA PARA CADA ESCENARIO. LOS ACCESORIOS SE VENDEN POR SEPARADO.</p>
        </div>
    </div>
            </div>
            </div>
            <div class="card4">
    <div class="card4-video-container">
        <video class="card4-video" autoplay loop muted>
            <source src="https://res.cloudinary.com/dm2uezxs1/video/upload/v1712356897/ph6alfbuieqjteinklyz.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="glow"></div>
    </div>
    <div class="card4-text">
        <h2>
            MÁS QUE PREPARADO</h2>
        <p>TRANSPORTA TODO LO QUE NECESITES CON SUS 1,134 KG DE CARGA ÚTIL Y UNA CAPACIDAD DE REMOLQUE DE 4,990 KG; EL EQUIVALENTE A UN ELEFANTE AFRICANO. LA CAJA ESTÁ HECHA CON UN COMPUESTO SÚPER RESISTENTE QUE NO NECESITA REVESTIMIENTO Y ES LO SUFICIENTEMENTE GRANDE PARA MATERIALES DE CONSTRUCCIÓN DE 4'X8'.</p>
    </div>
</div>
<div class="align2"> 
<div class="cards2">
              <div class="blog-card">

    <div class="meta">
      <div class="photo" style="background-image: url(https://res-console.cloudinary.com/dm2uezxs1/media_explorer_thumbnails/5f334ee7e642a9846cd7157556152f07/detailed)"></div>
    </div>
    <div class="description">
      <h2>UN CINE SOBRE RUEDAS</h2>
      <p>UNA ENORME PANTALLA TÁCTIL INFINITY DE 18.5" EN LA PARTE DELANTERA Y UNA PANTALLA TÁCTIL DE 9.4" EN LA PARTE TRASERA CON UNA INTERFAZ DE USUARIO COMPLETAMENTE NUEVA.</p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(https://res-console.cloudinary.com/dm2uezxs1/media_explorer_thumbnails/9bb324f86f6b1fbcd5a510a199654081/detailed)"></div>
    </div>
    <div class="description">
      <h2>AUDIO SUBLIME</h2>
      <p>LA CALIDAD DEL SONIDO DINÁMICO ES COMO EL DE UN ESTUDIO DE GRABACIÓN. TIENE 15 BOCINAS, INCLUYENDO 2 SUBWOOFERS DEDICADOS Y AMPLIFICADORES DISTRIBUIDOS.</p>
    </div>
  </div>
  <div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(https://digitalassets.tesla.com/tesla-contents/image/upload/f_auto,q_auto/Cybertruck-Human-Meet-Machine-Carousel-Slide-3-Charging-Desktop.png)"></div>
    </div>
    <div class="description">
      <h2>CARGA TODO</h2>
      <p>CARGA RÁPIDAMENTE Y DE MANERA INALÁMBRICA TU TELÉFONO, COMPUTADORA PORTÁTIL O HERRAMIENTAS DESDE EL ASIENTO DELANTERO, EL ASIENTO TRASERO O LA CAJA. ADEMÁS, TIENES PUERTOS USB-C DE 65 W Y TOMACORRIENTES DE 120 V / 240 V.</p>
    </div>
    
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(https://digitalassets.tesla.com/tesla-contents/image/upload/f_auto,q_auto/Cybertruck-Human-Meet-Machine-Carousel-Slide-4-HEPA-Desktop.png)"></div>
    </div>
    <div class="description">
      <h2>MODO DE DEFENSA CONTRA ARMAS BIOLÓGICAS</h2>
      <p>LA CALIDAD DEL FILTRO HEPA TIENE EL NIVEL DE LOS DE UN HOSPITAL Y TE PROTEGE CONTRA EL 99.97% DE LAS PARTÍCULAS EN EL AIRE.</p>
    </div>
    
  </div>
                </div>
                </div>
                <button> Ordenar Ahora
</button>
                </div>
                </div>
              </section>
           </div>
      <script>
      let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
        let dropdownIsOpen = false
        if (dropdowns.length) {
          dropdowns.forEach((dropdown) => {
            dropdown.addEventListener('click', (event) => {
              let target = document.querySelector(`#${event.target.dataset.dropdown}`)
        
              if (target) {
                if (target.classList.contains('show')) {
                  target.classList.remove('show')
                  dropdownIsOpen = false
                } else {
                  target.classList.add('show')
                  dropdownIsOpen = true
                }
              }
            })
          })
        }
        window.addEventListener('mouseup', (event) => {
          if (dropdownIsOpen) {
            dropdowns.forEach((dropdownButton) => {
              let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
              let targetIsDropdown = dropdown == event.target
        
              if (dropdownButton == event.target) {
                return
              }
        
              if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
                dropdown.classList.remove('show')
              }
            })
          }
        })
        function handleSmallScreens() {
          document.querySelector('.navbar-toggler').addEventListener('click', () => {
              let navbarMenu = document.querySelector('.navbar-menu')
        
              if (!navbarMenu.classList.contains('active')) {
                navbarMenu.classList.add('active')
              } else {
                navbarMenu.classList.remove('active')
              }
            })
        }
        
        handleSmallScreens()    </script>
</body>
<style>
.logo{
  position: fixed;
  display: flex;
  align-items: start;
  justify-content:start;
  right: 90%;
}
.dropdown a:hover{
color: red;
font-size: 17px;
background-color:rgb(44, 44, 44) ;
}
p {
  margin: 75px 0;
}
html, body {
  font-family: Open Sans;
  font-size: 18px;
  line-height: 28px;
  scroll-behavior: smooth;
}

h1 {
  letter-spacing: -15px;
  font-family: Open Sans;
  color: white;
  text-align: center;
  font-size: 200px;
  font-weight: 800;
  line-height: 200px;
}

.MainContainer {
  perspective: 1px;
  transform-style: preserve-3d;
  height: 100vh;
  overflow-x: hidden;
  overflow-y: scroll;
}

.ContentContainer {
  position: relative;
  display: block;
  background-color: white;
  z-index: 1;
}

.Content {
  max-width: 750px;
  margin: 0 auto;
  padding: 75px 0;
}


.blog-card {
  display: flex;
  flex-direction: column;
  margin: 1rem auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: #5ad67d;
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.2s;
}
.blog-card .details,
.blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left 0.2s;
  background: #262626;
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f007";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "\f133";
}
.blog-card .details .tags ul:before {
  font-family: FontAwesome;
  content: "\f02b";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
.blog-card .description h1,
.blog-card .description h2 {
  font-family: Poppins, sans-serif;
}
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}
.blog-card .description .read-more a {
  color: #5ad67d;
  display: inline-block;
  position: relative;
}
.blog-card .description .read-more a:after {
  content: "\f061";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #5ad67d;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    transform: skewX(-3deg);
    content: "";
    background: #fff;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}
.content{
  background-color: #202020;
}


    
.card {
        width: 1000px;
        height: 400px;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
        display: flex;
        background: linear-gradient(135deg, #191919 0%, #000 100%);
    }
    
    .card-video-container {
        width: 70%; 
        position: relative;
        overflow: hidden;
    }
    
    .card-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .card-text {
        width: 40%;
        padding: 20px;
        color: #fff;
    }
    
    .card-text h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #29b6f6;
        font-family: 'Roboto', sans-serif;
    }
    
    .card-text p {
        font-size: 16px;
        line-height: 1.6;
    }
    
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        z-index: 1;
    }
    
    .glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
    }
    
    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
        50% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.9;
        }
        100% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
    }
    .card-2-2 {
        width: 800px;
        height: 500px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        background-color: #1c1c1c;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .card-2-2-video-container {
        width: 60%;
        height: 100%;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }

    .card-2-2-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card-2-2-text {
        position: absolute;
        top: 0;
        right: 0;
        width: 40%;
        height: 100%;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card-2-2-text h2 {
        font-size: 32px;
        margin-bottom: 10px;
        color: #29b6f6;
        font-family: 'Roboto', sans-serif;
    }

    .card-2-2-text p {
        font-size: 18px;
        line-height: 1.6;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        z-index: 1;
    }

    .glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
        z-index: 2;
    }

    .card3 {
        width: 800px;
        height: 500px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        background-color: #1c1c1c;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        display: flex;
    }

    .card3-video-container {
        width: 60%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .card3-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card3-text {
        width: 40%;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card3-text h2 {
        font-size: 32px;
        margin-bottom: 10px;
        color: #29b6f6;
        font-family: 'Roboto', sans-serif;
    }

    .card3-text p {
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        z-index: 1;
    }

    .glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
        z-index: 2;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
        50% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.9;
        }
        100% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
    }
    .card4 {
        width: 1100px;
        height: 750px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        background-color: #1c1c1c;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
    }

    .card4-video-container {
        width: 100%;
        height: 70%;
        overflow: hidden;
        position: relative;
    }

    .card4-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card4-text {
        width: 100%;
        height: 30%;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .card4-text h2 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #29b6f6;
        font-family: 'Roboto', sans-serif;
    }

    .card4-text p {
        font-size: 16px;
        line-height: 1.6;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        z-index: 1;
    }

    .glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
        z-index: 2;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
        50% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.9;
        }
        100% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
    }

    
    .card5 {
        width: 1000px;
        height: 600px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        margin: 20px auto;
        background-color: #1c1c1c;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        display: flex;
    }

    .card5-video-container {
        width: 70%;
        height: 100%;
        overflow: hidden;
        position: relative;
    }

    .card5-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .card5-text {
        width: 30%;
        height: 100%;
        padding: 20px;
        background-color: rgba(0, 0, 0, 0.8);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .card5-text h2 {
        font-size: 36px;
        margin-bottom: 20px;
        color: #29b6f6;
        font-family: 'Roboto', sans-serif;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .card5-text p {
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0) 100%);
        z-index: 1;
    }

    .glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 250px;
        height: 250px;
        background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(0,0,0,0) 70%);
        border-radius: 50%;
        animation: pulse 3s ease-in-out infinite;
        z-index: 2;
    }

    @keyframes pulse {
        0% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
        50% {
            transform: translate(-50%, -50%) scale(1);
            opacity: 0.9;
        }
        100% {
            transform: translate(-50%, -50%) scale(0.9);
            opacity: 0.7;
        }
    }

    .dynamic-lines {
        position: absolute;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(to bottom, rgba(255,255,255,0) 0%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0) 100%);
        z-index: 3;
        animation: move-lines 5s linear infinite;
    }

    @keyframes move-lines {
        0% {
            transform: translateY(-100%);
        }
        100% {
            transform: translateY(100%);
        }
    }
        .cards{
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        padding: 20px;
    }
    .align2 {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-gap: 20px;
        margin: 20px;
    }
    .align{
     display: flex;
     align-items: center;
     justify-content: center;
    }
    .align2{
     display: flex;
     align-items: center;
     justify-content: center;
    }


    .card6 {
            width: 800px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            margin: 20px auto;
            background-color: #1c1c1c;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            display: flex;
        }

        .card6-img {
            width: 70%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .card6-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card6-content {
            width: 30%;
            height: 100%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card6-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #29b6f6;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card6-content p {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin-bottom: 20px;
        }
        .ParallaxContainer{
          background-repeat: no-repeat;
          background-size: cover;
          background-color: #1c1c1c;
        }
        .content{
          background-color: #191919;
        }
        .ContentContainer{
          background-color: #ccc;
        }
        
        .card7 {
            width: 900px;
            height: 500px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            margin: 20px auto;
            background-color: #1c1c1c;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
            display: flex;
        }

        .card7-video {
            width: 80%;
            height: 100%;
            overflow: hidden;
            position: relative;
        }

        .card7-video video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card7-content {
            width: 50%;
            height: 100%;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.8);
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .card7-content h2 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #29b6f6;
            font-family: 'Roboto', sans-serif;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .card7-content p {
            font-size: 18px;
            line-height: 1.6;
            text-align: justify;
        }

        .line {
            width: 100%;
            height: 1px;
            background-color: #ccc;
            margin-bottom: 20px;
        }
        button {
 --color: Red;
 font-family: inherit;
 display: inline-block;
 width: 8em;
 height: 2.6em;
 line-height: 2.5em;
 margin: 20px;
 position: relative;
 overflow: hidden;
 border: 2px solid var(--color);
 transition: color .5s;
 z-index: 1;
 font-size: 17px;
 border-radius: 6px;
 font-weight: 500;
 color: var(--color);
}

button:before {
 content: "";
 position: absolute;
 z-index: -1;
 background: var(--color);
 height: 150px;
 width: 200px;
 border-radius: 50%;
}

button:hover {
 color: white;
}

button:before {
 top: 100%;
 left: 100%;
 transition: all .7s;
}

button:hover:before {
 top: -30px;
 left: -30px;
}

button:active:before {
 background: #3a0ca3;
 transition: background 0s;
}
</style>
</html>
  