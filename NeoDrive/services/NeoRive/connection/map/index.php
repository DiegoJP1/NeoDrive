<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script/map.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <title>NeoRive | Cerca De Ti</title>
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
  <div id="pattern" class="pattern">
    <div class="map">
    </div>
  </div>
  <div class="align-button">
  <button class="Btn" onclick="GoBack()">
  
  <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
  
  <div class="text">Volver</div>
</button>
<script>
  function GoBack(){
    window.location.href = "http://localhost/NeoDrive/services/NeoRive/"
  }
</script>
  </div>
  <div class="cars-container">
  <div class="disponible-cars">
<h2>Lo lamentamos... Parece Que no tenemos vehiculos Disponibles en tu ubicacion</h2>
  </div>
  </div>
</body>
<style>
  header .nav .dropdown #home{
    color: blue;
  }
.static-img {
  display: block; 
}

iframe {
   max-width: 100%; 
}
.map-container {
  width: 100%;
  margin: 0 auto;
  height: 100%;
  padding-top: 38%;
  position: relative;
  display: none; 
  iframe {
    width: 100%;
    height: 100%; 
    position: absolute;
    top: 0; 
    right: 0;
    left: 0; 
    bottom: 0;   
  }
}

@media all and (min-width: 34.375em) {
  .map-container {
    display: block;
  } 
  .static-img {
    display: none; 
  }
}
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
.cars-container{
    position: absolute;
    left: 35%;
    top: 85%;
    transform: translate(-50% -50%);
}
.Btn {
  --black: #000000;
  --ch-black: #141414;
  --eer-black: #1b1b1b;
  --night-rider: #2e2e2e;
  --white: #ffffff;
  --af-white: #f3f3f3;
  --ch-white: #e1e1e1;
  display: flex;
  align-items: center;
  justify-content: flex-start;
  width: 45px;
  height: 45px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
  box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
  background-color: var(--af-white);
}

.sign {
  width: 100%;
  transition-duration: .3s;
  display: flex;
  align-items: center;
  justify-content: center;
}

.sign svg {
  width: 17px;
}

.sign svg path {
  fill: var(--night-rider);
}
.text {
  position: absolute;
  right: 0%;
  width: 0%;
  opacity: 0;
  color: var(--night-rider);
  font-size: 1.2em;
  font-weight: 600;
  transition-duration: .3s;
}
.Btn:hover {
  width: 170px;
  border-radius: 5px;
  transition-duration: .3s;
}

.Btn:hover .sign {
  width: 30%;
  transition-duration: .3s;
  padding-left: 20px;
}
.Btn:hover .text {
  opacity: 1;
  width: 70%;
  transition-duration: .3s;
  padding-right: 10px;
}
.Btn:active {
  transform: translate(2px ,2px);
}
::-webkit-scrollbar {
  background: transparent;
  width: 0;
  height: 0;
}
</style>
<script>
    $(document).ready(function(){
    if ("geolocation" in navigator) {
      navigator.geolocation.getCurrentPosition(function(position) {
        var userLat = position.coords.latitude;
        var userLng = position.coords.longitude;
        buildMap(userLat, userLng);
      });
    } else {
      buildMap(40.440625, -79.995886); 
    }
  });
  
  var sw = document.body.clientWidth,
      bp = 550,
      $map = $('.map');
  var static = "https://maps.google.com/maps/api/staticmap?center=40.440625,-79.995886&zoom=13&markers=40.440625,-79.995886&size=640x320&sensor=true";
  var embed = '<iframe width="980" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=pittsburgh,+pa&amp;aq=&amp;sll=38.003385,-79.420925&amp;sspn=5.54782,11.612549&amp;ie=UTF8&amp;hq=&amp;hnear=Pittsburgh,+Allegheny,+Pennsylvania&amp;t=m&amp;ll=40.440676,-79.995918&amp;spn=0.117583,0.336113&amp;z=12&amp;iwloc=A&amp;output=embed">';
  
  function buildMap(userLat, userLng) {
    if(sw > bp) {
      if($('.map-container').length < 1) {
        buildEmbed(userLat, userLng);
      }
    } else {
      if($('.static-img').length < 1) { 
        buildStatic(userLat, userLng);
      }
    }
  };
  
  function buildEmbed(userLat, userLng) { 
    var embedUrl = "https://maps.google.com/maps?q=" + userLat + "," + userLng + "&z=13&output=embed";
    var embedIframe = '<iframe width="980" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="' + embedUrl + '"></iframe>';
    $('<div class="map-container"/>').html(embedIframe).prependTo($map);
  };
    
  function buildStatic(userLat, userLng) { 
    var staticUrl = "https://maps.google.com/maps/api/staticmap?center=" + userLat + "," + userLng + "&zoom=13&markers=" + userLat + "," + userLng + "&size=640x320&sensor=true";
    var staticImg = '<img class="static-img" src="' + staticUrl + '" />';
    $('<a/>').attr('href', staticUrl).html(staticImg).prependTo($map); 
  }
  
  $(window).resize(function() {
    sw = document.body.clientWidth;
    buildMap();
  });
</script>
</html>