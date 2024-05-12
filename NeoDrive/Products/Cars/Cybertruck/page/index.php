<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="style/imgs/Logo.Ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script/main.js"></script>
    <title>Tesla | Cybertruck</title>
</head>
<header>
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
                    <li class="active"><a href="http://localhost/TESLA/Home/#">Inicio</a></li>
                    <li class="navbar-dropdown">
                        <a href="#" class="dropdown-toggler" data-dropdown="my-dropdown-id">
                            Productos <i class="fa fa-angle-down"></i>
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
                        <li class="separator"></li>
                        <li><a href="http://localhost/TESLA/Products/Cars/Cybertruck/page/">Cybertruck</a></li>
                    </ul>
                </li>
                        </ul>
                    </li>
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
                    header("Location: http://localhost/TESLA/Start/user_start/");
                  }
                  $result->free();
                  $conn->close();
                } else {
                    header("Location: http://localhost/TESLA/Start/user_start/");
                    exit();
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
  document.querySelector('.navbar-toggler')
    .addEventListener('click', () => {
      let navbarMenu = document.querySelector('.navbar-menu')

      if (!navbarMenu.classList.contains('active')) {
        navbarMenu.classList.add('active')
      } else {
        navbarMenu.classList.remove('active')
      }
    })
}
handleSmallScreens()    

</script>
    </nav>
  </header>
<body>
<div class="index" style="z-index: 1 !important;">
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
        <button id="order"> Ordenar Ahora
</button>
        </div>
        </div>
      </section>
   </div>
</div>
</body>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bowlby+One&family=Dosis:wght@200..800&family=Edu+SA+Beginner:wght@400..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lacquer&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ojuju:wght@200..800&family=Permanent+Marker&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Shadows+Into+Light&family=Truculenta:opsz,wght@12..72,100..900&display=swap');
body{
  margin: 0;
}
.MainContainer *{
  z-index: 1;
}
   header{
    padding: 20px;
    background-color: #202020;
   }
a {
  text-decoration: none;
}
.navbar header .dropdown{
  z-index: 999999 !important;
  position: fixed !important;
}
#cars-dropdown-id{
  z-index: 99999999999999 !important;
  position: fixed;
}
.dropdown{
  z-index: 9999999999999999999999999999999999999999999999999999999999999 !important;
}
body{
  z-index: 1;
}
.navbar .navbar-menu .navbar-nav .dropdown {
    position: fixed; 
}
.container2 {
    color: white;
  width: 1170px;
  position: relative;
  margin-left: auto;
  margin-right: auto;
  padding-left: 15px;
  padding-right: 15px;
}

.navbar,
.navbar > .container2 {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
}
@media (max-width: 768px) {
  .navbar,
.navbar > .container2 {
    display: block;
  }
}

.navbar {
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
  background-color: #202020;
  padding: 1rem 1.15rem;
  border-bottom: 1px solid #000000;
}
@media (min-width: 576px) {
  .navbar .container2 {
    max-width: 540px;
  }
}
@media (min-width: 768px) {
  .navbar .container2 {
    max-width: 720px;
  }
}
@media (min-width: 992px) {
  .navbar .container2 {
    max-width: 960px;
  }
}
@media (min-width: 1200px) {
  .navbar .container2 {
    max-width: 1140px;
  }
}
.navbar .navbar-header {
  display: flex;
  align-items: center;
}
@media (max-width: 768px) {
  .navbar .navbar-header {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: row-reverse;
  }
}
.navbar .navbar-header .navbar-toggler {
  cursor: pointer;
  border: none;
  display: none;
  outline: none;
}
@media (max-width: 768px) {
  .navbar .navbar-header .navbar-toggler {
    display: block;
  }
}
.navbar .navbar-header .navbar-toggler span {
  height: 2px;
  width: 22px;
  background-color: #929aad;
  display: block;
}
.navbar .navbar-header .navbar-toggler span:not(:last-child) {
  margin-bottom: 0.2rem;
}
.navbar .navbar-header > a {
  font-weight: 500;
  color: #ffffff;
}
.navbar .navbar-menu {
  display: flex;
  align-items: center;
  flex-basis: auto;
  flex-grow: 1;
}
@media (max-width: 768px) {
  .navbar .navbar-menu {
    display: none;
    text-align: center;
  }
}
.navbar .navbar-menu.active {
  display: flex !important;
}
.navbar .navbar-menu .navbar-nav {
  margin-left: auto;
  flex-direction: row;
  display: flex;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav {
    width: 100%;
    display: block;
    border-top: 1px solid #EEE;
    margin-top: 1rem;
  }
}
.navbar .navbar-menu .navbar-nav > li > a {
  color: #ffffff;
  text-decoration: none;
  display: inline-block;
  padding: 0.5rem 1rem;
}
.navbar .navbar-menu .navbar-nav > li > a:hover {
  color: rgb(255, 0, 0);
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav > li > a {
    border-bottom: 1px solid #eceef3;
  }
}
.navbar .navbar-menu .navbar-nav > li.active a {
  color: rgb(255, 0, 0);
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
  list-style: none;
  position: absolute;
  top: 150%;
  left: 0;
  background-color: #202020;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem;
  min-width: 160px;
  width: auto;
  white-space: nowrap;
  box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
  z-index: 99999;
  border-radius: 0.75rem;
  display: none;
}
@media (max-width: 768px) {
  .navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown {
    position: relative;
    box-shadow: none;
  }
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown li a {
  color: #ffffff;
  padding: 0.25rem 1rem;
  display: block;
}
.navbar .navbar-menu .navbar-nav .navbar-dropdown .dropdown.show {
  display: block !important;
}
.navbar .navbar-menu .navbar-nav .dropdown > .separator {
  height: 1px;
  width: 100%;
  margin-top: 9px;
  margin-bottom: 9px;
  background-color: #202020;
}
.navbar .navbar-dropdown {
  position: relative;
}

.navbar .navbar-header > a span {
  color: rgb(255, 0, 0);
}

.navbar .navbar-header h4 {
  font-weight: 500;
  font-size: 1.25rem;
}
@media (max-width: 768px) {
  .navbar .navbar-header h4 {
    font-size: 1.05rem;
  }
}
.navbar{
  font-size: 16px;
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

    .active {
        color: rgb(255, 55, 55);
    }

    .navbar .navbar-menu .navbar-nav>li>a:hover {
        color: rgb(255, 65, 65);
    }

    @media (max-width: 768px) {
        .navbar .navbar-menu .navbar-nav>li>a {
            border-bottom: 1px solid #eceef3;
        }
    }

    .navbar .navbar-menu .navbar-nav>li.active a {
        color: rgb(255, 65, 65);
    }
    .navbar-menu {
        position: fixed;
        left: 70%;
    }

    .active {
        color: rgb(255, 55, 55);
    }

    .navbar .navbar-menu .navbar-nav>li>a:hover {
        color: rgb(255, 65, 65);
    }

    @media (max-width: 768px) {
        .navbar .navbar-menu .navbar-nav>li>a {
            border-bottom: 1px solid #eceef3;
        }
    }

    .navbar .navbar-menu .navbar-nav>li.active a {
        color: rgb(255, 65, 65);
    }

    .logo {
        position: fixed;
        display: flex;
        align-items: start;
        justify-content: start;
        right: 90%;
    }

    .dropdown a:hover {
        color: red;
        font-size: 17px;
        background-color: rgb(44, 44, 44);
    }

</style>
</html>
  