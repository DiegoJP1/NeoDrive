<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <link rel="stylesheet" href="style/css/style.css">
    <title>NeoDrive | Completado</title>
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
<div class="container">
  <div class="title">Bienvenido al futuro</div>
  <div class="subtitle"> Tu IA esta esperando en el carrito </div>
</div>
</body>
<style>
    .container{
        position: absolute;
        top: 40%;
        left: 30%;
    }
</style>
<script>
    setTimeout(() => {
        window.location.href = "http://localhost/NeoDrive/Home/"
    }, 2000);
</script>
</html>