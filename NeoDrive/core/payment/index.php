<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="imgs/Logo copy.Ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">\
    <script src="script/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/imask"></script>
    <title>NeoDrive | pagar</title>
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
    <div class="start">
     
<div class="payment-title">
    <div class="textbox">
<h1 class="text"><?php 
            
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
                ?> &nbsp;completemos tu pago</h1>
            </div>
    </div>
    <div class="container preload">
        <div class="creditcard">
            <div class="front">
                <div id="ccsingle"></div>
                <svg version="1.1" id="cardfront" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <g id="CardBackground">
                            <g id="Page-1_1_">
                                <g id="amex_1_">
                                    <path id="Rectangle-1_1_" class="lightcolor grey" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                            C0,17.9,17.9,0,40,0z" />
                                </g>
                            </g>
                            <path class="darkcolor greydark" d="M750,431V193.2c-217.6-57.5-556.4-13.5-750,24.9V431c0,22.1,17.9,40,40,40h670C732.1,471,750,453.1,750,431z" />
                        </g>
                        <text transform="matrix(1 0 0 1 60.106 295.0121)" id="svgnumber" class="st2 st3 st4">0000 0000 0000 0000</text>
                        <text transform="matrix(1 0 0 1 54.1064 428.1723)" id="svgname" class="st2 st5 st6"></text>
                        <text transform="matrix(1 0 0 1 54.1074 389.8793)" class="st7 st5 st8">cardholder name</text>
                        <text transform="matrix(1 0 0 1 479.7754 388.8793)" class="st7 st5 st8">expiracion</text>
                        <text transform="matrix(1 0 0 1 65.1054 241.5)" class="st7 st5 st8">numero de tarjeta</text>
                        <g>
                            <text transform="matrix(1 0 0 1 574.4219 433.8095)" id="svgexpire" class="st2 st5 st9">00/00</text>
                            <text transform="matrix(1 0 0 1 479.3848 417.0097)" class="st2 st10 st11">VALIDA</text>
                            <text transform="matrix(1 0 0 1 479.3848 435.6762)" class="st2 st10 st11">hasta</text>
                            <polygon class="st2" points="554.5,421 540.4,414.2 540.4,427.9 		" />
                        </g>
                        <g id="cchip">
                            <g>
                                <path class="st2" d="M168.1,143.6H82.9c-10.2,0-18.5-8.3-18.5-18.5V74.9c0-10.2,8.3-18.5,18.5-18.5h85.3
                        c10.2,0,18.5,8.3,18.5,18.5v50.2C186.6,135.3,178.3,143.6,168.1,143.6z" />
                            </g>
                            <g>
                                <g>
                                    <rect x="82" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <rect x="167.4" y="70" class="st12" width="1.5" height="60" />
                                </g>
                                <g>
                                    <path class="st12" d="M125.5,130.8c-10.2,0-18.5-8.3-18.5-18.5c0-4.6,1.7-8.9,4.7-12.3c-3-3.4-4.7-7.7-4.7-12.3
                            c0-10.2,8.3-18.5,18.5-18.5s18.5,8.3,18.5,18.5c0,4.6-1.7,8.9-4.7,12.3c3,3.4,4.7,7.7,4.7,12.3
                            C143.9,122.5,135.7,130.8,125.5,130.8z M125.5,70.8c-9.3,0-16.9,7.6-16.9,16.9c0,4.4,1.7,8.6,4.8,11.8l0.5,0.5l-0.5,0.5
                            c-3.1,3.2-4.8,7.4-4.8,11.8c0,9.3,7.6,16.9,16.9,16.9s16.9-7.6,16.9-16.9c0-4.4-1.7-8.6-4.8-11.8l-0.5-0.5l0.5-0.5
                            c3.1-3.2,4.8-7.4,4.8-11.8C142.4,78.4,134.8,70.8,125.5,70.8z" />
                                </g>
                                <g>
                                    <rect x="82.8" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="82.8" y="117.9" class="st12" width="26.1" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142.4" y="82.1" class="st12" width="25.8" height="1.5" />
                                </g>
                                <g>
                                    <rect x="142" y="117.9" class="st12" width="26.2" height="1.5" />
                                </g>
                            </g>
                        </g>
                    </g>
                    <g id="Back">
                    </g>
                </svg>
            </div>
            <div class="back">
                <svg version="1.1" id="cardback" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    x="0px" y="0px" viewBox="0 0 750 471" style="enable-background:new 0 0 750 471;" xml:space="preserve">
                    <g id="Front">
                        <line class="st0" x1="35.3" y1="10.4" x2="36.7" y2="11" />
                    </g>
                    <g id="Back">
                        <g id="Page-1_2_">
                            <g id="amex_2_">
                                <path id="Rectangle-1_2_" class="darkcolor greydark" d="M40,0h670c22.1,0,40,17.9,40,40v391c0,22.1-17.9,40-40,40H40c-22.1,0-40-17.9-40-40V40
                        C0,17.9,17.9,0,40,0z" />
                            </g>
                        </g>
                        <rect y="61.6" class="st2" width="750" height="78" />
                        <g>
                            <path class="st3" d="M701.1,249.1H48.9c-3.3,0-6-2.7-6-6v-52.5c0-3.3,2.7-6,6-6h652.1c3.3,0,6,2.7,6,6v52.5
                    C707.1,246.4,704.4,249.1,701.1,249.1z" />
                            <rect x="42.9" y="198.6" class="st4" width="664.1" height="10.5" />
                            <rect x="42.9" y="224.5" class="st4" width="664.1" height="10.5" />
                            <path class="st5" d="M701.1,184.6H618h-8h-10v64.5h10h8h83.1c3.3,0,6-2.7,6-6v-52.5C707.1,187.3,704.4,184.6,701.1,184.6z" />
                        </g>
                        <text transform="matrix(1 0 0 1 621.999 227.2734)" id="svgsecurity" class="st6 st7">0000</text>
                        <g class="st8">
                            <text transform="matrix(1 0 0 1 518.083 280.0879)" class="st9 st6 st10">Codigo De Seguridad</text>
                        </g>
                        <rect x="58.1" y="378.6" class="st11" width="375.5" height="13.5" />
                        <rect x="58.1" y="405.6" class="st11" width="421.7" height="13.5" />
                        <text transform="matrix(1 0 0 1 59.5073 228.6099)" id="svgnameback" class="st12 st13"></text>
                    </g>
                </svg>
            </div>
        </div>
    </div>
    <div class="form-container">
    <form action="">
        <div class="field-container">
            <label for="name">Nombre</label>
            <input id="name" maxlength="20" type="text">
        </div>
        <div class="field-container">
            <label for="cardnumber">Numero de tarjeta</label>
            <input id="cardnumber" type="text" >
            <svg id="ccicon" class="ccicon" width="750" height="471" viewBox="0 0 750 471" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">

            </svg>
        </div>
        <div class="field-container">
            <label for="expirationdate">Expiracion (mm/yy)</label>
            <input id="expirationdate" type="text">
        </div>
        <div class="field-container">
            <label for="securitycode">codigo de Seguridad</label>
            <input id="securitycode" type="text"
        </div>
        <button class="button" id="pay">
  <div class="icon_cont">
    <span class="icon">🡪</span>
  </div>
  <span class="text_button">Pagar</span>
</button>
</form>
    </div>
    </div>
    
    <script>
     document.addEventListener("DOMContentLoaded", function() {
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
const pay = document.getElementById("pay")
pay.addEventListener("click",()=>{
    window.location.href = "http://localhost/TESLA/core/payment/addres/#"
})
     }); 
</script>
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
.button {
  --dark: white;
  --light: black;
  --active: 0;

  cursor: pointer;
  position: relative;

  display: flex;
  align-items: center;
  gap: 0.5rem;

  transform-origin: center;

  background-color: transparent;

  border: none;
}

.button:hover {
  --active: 1;
}

.icon_cont {
  overflow: clip;

  display: flex;
  justify-content: center;
  align-items: center;

  width: calc(var(--active) * 1.5rem + (1 - var(--active)) * 0.5rem);
  height: calc(var(--active) * 1.5rem + (1 - var(--active)) * 0.5rem);
  background-color: hsla(0, 0%, 85%, var(--active));

  border: 1px solid var(--light);
  border-radius: 9999px;
  transition: all 0.5s ease-in-out;
}

.icon {
  font-size: 0.75rem;
  color: var(--light);
  line-height: 1rem;

  transform: translateX(calc(-1rem * (1 - var(--active))));
  transition: transform 0.5s ease-in-out;
}

.text_button {
  position: relative;

  display: inline-block;

  padding-block: 0.5rem;

  font-size: 1rem;
  font-weight: 600;
  color: var(--light);

  text-transform: capitalize;
}
.text_button::before {
  content: "";

  position: absolute;
  bottom: 0;
  right: 0;

  width: calc((1 - var(--active)) * 100%);
  height: 1px;
  background-color: var(--light);

  border-radius: 9999px;
  transition: width 0.5s ease-in-out;
}
</style>
</body>
</html>