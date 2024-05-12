<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="imgs/Logo.Ico" type="image/x-icon">
    <title>Tesla | direccion</title>
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
            <div class="header">
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
<video autoplay muted loop id="video-bg">
  <source src="https://digitalassets.tesla.com/tesla-contents/video/upload/f_auto,q_auto/Homepage-Demo-Drive-Desktop-NA.mp4" type="video/mp4">
</video>

<div class="overlay"></div>
<div class="sidebar">
    <div class="forms">
  <form class="form">
  <h2 style="color: aliceblue;">Ya casi terminamos <?php 
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
              header("Location: http://localhost/TESLA/Start/user_start/");
              exit();
            }
            echo $nombre
            ?></h2>
    <label for="city">ciudad:</label><br>
    <input type="text" id="city" name="city" required><br>
    <label for="province">provincia:</label><br>
    <input type="text" id="province" name="province" requierd><br>
    <label for="street">calle:</label><br>
    <input type="text" id="street" name="street" required><br>
    <label for="postalcode">codigo postal:</label><br>
    <input type="text" id="postalcode" name="postalcode" required><br>
    <label for="unit">interior:</label><br>
    <input type="text" id="unit" name="unit" required><br><br>
    <label for="extra">extra:</label><br>
    <input type="text" id="extra" name="extra"><br><br>
    <button class="cssbuttons-io-button" id="send">
  Enviar
  <div class="icon">
    <svg
      height="24"
      width="24"
      viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path d="M0 0h24v24H0z" fill="none"></path>
      <path
        d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
        fill="currentColor"
      ></path>
    </svg>
  </div>
  <script>
    var send =document.getElementById("send").addEventListener("click",()=>{
      window.location.href = "http://localhost/TESLA/core/payment/redirect/#"
    })
  </script>
</button>


  </form>
  </div>
</div>

</body>
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
document.getElementById("send").addEventListener("click",()=>{
    window.location.href=""
})
     }); 
</script>
<style>

      .form{
    position: fixed;
    bottom: 30%;
    right: 88%;
  }
  form input{
    max-width:350px ;
    width: 350px;
  }
  form input[type="text"]{
    align-items: center;
    justify-content: center;
    max-width:350px ;
    width: 250px;
  }
  .sidebar{
    background-color: black;
  }
  .cssbuttons-io-button {
  background: red;
  color: white;
  font-family: inherit;
  padding: 0.35em;
  padding-left: 1.2em;
  font-size: 17px;
  font-weight: 500;
  border-radius: 0.9em;
  border: none;
  letter-spacing: 0.05em;
  display: flex;
  align-items: center;
  box-shadow: inset 0 0 1.6em -0.6em #714da6;
  overflow: hidden;
  position: relative;
  height: 2.8em;
  padding-right: 3.3em;
  cursor: pointer;
}

.cssbuttons-io-button .icon {
  background: white;
  margin-left: 1em;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 2.2em;
  width: 2.2em;
  border-radius: 0.7em;
  box-shadow: 0.1em 0.1em 0.6em 0.2em red;
  right: 0.3em;
  transition: all 0.3s;
}

.cssbuttons-io-button:hover .icon {
  width: calc(100% - 0.6em);
}

.cssbuttons-io-button .icon svg {
  width: 1.1em;
  transition: transform 0.3s;
  color: #7b52b9;
}

.cssbuttons-io-button:hover .icon svg {
  transform: translateX(0.1em);
}

.cssbuttons-io-button:active .icon {
  transform: scale(0.95);
}
.navbar-menu{
  display: flex;
  text-align: end;
  align-items: end;
  justify-content: flex-end;
}
.header{
  display: flex;
  justify-content: flex-end;
  align-items: flex-end;
  text-align: end;
}
</style>
</html>