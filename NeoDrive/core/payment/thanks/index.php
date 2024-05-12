<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   
<div class="text">
<article>
  <h1>Gracias por tu compra <?php 
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
            ?></h1>
            <br>
            <br>
  <p>Dentro de poco te daremos el VIN de tu <?php
  
  ?></p>
</article>
   Greacias por tu compra <?php 
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
            }
            echo $nombre
            ?>
    </div>
</body>
<style>
header{
    display: flex;
    margin-top: 0;
    background-color: #151515;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    }
    
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
article {
  background: linear-gradient(
    to right, 
    hsl(98 100% 62%), 
    hsl(204 100% 59%)
  );
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  text-align: center;
}

h1 {
  font-size: 10vmin;
  line-height: 1.1;
}

body {
  background: hsl(204 100% 5%);
  
  min-block-size: 100%;
  min-inline-size: 100%;
  box-sizing: border-box;
  display: grid;
  place-content: center;
  font-family: system-ui;
  font-size: min(200%, 5vmin);
}

h1, p, body {
  margin: 0;
}

p {
  font-family: "Dank Mono", ui-monospace, monospace;
}

html {
  block-size: 100%;
  inline-size: 100%;
}
</style>
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
let duration = 0.8;
let delay = 0.3;
let revealText = document.querySelector(".reveal");
let letters = revealText.textContent.split("");
revealText.textContent = "";
let middle = letters.filter(e => e !== " ").length / 2;
letters.forEach((letter, i) => {
  let span = document.createElement("span");
  span.textContent = letter;
  span.style.animationDelay = `${delay + Math.abs(i - middle) * 0.1}s`;
  revealText.append(span);
});

     }); 
</script>
</html>