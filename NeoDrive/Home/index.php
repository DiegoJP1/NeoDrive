<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NeoDrive | Inicio</title>
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
<link rel="stylesheet" href="style/style.css">
</head>
<header>
    <div class="navigation">
        <div class="nav">
            <div class="logo">
                <a href="#"><img src="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" alt="Logo de NeoDrive" width="90px"></a>
            </div>
            <div class="menu">
                <a href="#" id="home">Inicio</a>
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
                        <a href="">tus Productos</a>
                        <br>
                        <a href="">configuracion</a>
                        <br>
                        <a href="">cuenta</a>
                        <br>
                        <a href="" class="cart">carrito</a>
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
                        <a href="http://localhost/NeoDrive/services/Assistant/">NeoAssistant</a>
                        <br>
                        <a href="">NeoServ</a>
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
    </header>
<body>
    <div class="Cars" id="vehicles">

 
<div class="container1">
    <div class="card">
        <div class="image">
            <img src="https://th.bing.com/th/id/OIG1.G0jr9WTFTkTJ.oKajmBR?pid=ImgGn" alt="Model(1)" width="450px">
        </div>
        <div class="text">
            <h2>
                <span class="animated-letter">N</span><span class="animated-letter">e</span><span class="animated-letter">o</span><span class="animated-letter">D</span><span class="animated-letter">r</span><span class="animated-letter">i</span><span class="animated-letter">v</span><span class="animated-letter">e</span>
                <span class="space">&nbsp;</span>
                <span class="animated-letter">M</span><span class="animated-letter">o</span><span class="animated-letter">d</span><span class="animated-letter">e</span><span class="animated-letter">l</span>
                <span class="animated-letter">(</span>
                <span class="animated-letter">1</span>
                <span class="animated-letter">)</span>
            </h2>
            <h3>
                Velocidad lujo tecnologia y accesibilidad en uno el futuro en el presente
            </h3>
        </div>
        <div class="btn">
<button class="learn-more">
  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Ver Mas</span>
</button>
        </div>
    </div>
</div>

<div class="container2">
<div class="card">
        <div class="image">
            <img src="https://th.bing.com/th/id/OIG3._jo0p3CgQP59BI6SZbq9?pid=ImgGn" alt="Model(faster)" width="450px">
        </div>
        <div class="text">
            <h2>
                <span class="animated-letter">N</span><span class="animated-letter">e</span><span class="animated-letter">o</span><span class="animated-letter">D</span><span class="animated-letter">r</span><span class="animated-letter">i</span><span class="animated-letter">v</span><span class="animated-letter">e</span>
                <span class="space">&nbsp;</span>
                <span class="animated-letter">(</span>
                <span class="animated-letter">Ibay</span>
                <span class="animated-letter">)</span>
            </h2>
            <h3>
                El futuro no solo es brillante es veloz futurista y comodo Para toda la Familia 
            </h3>
        </div>
        <div class="btn">
<button class="learn-more">
  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Ver Mas</span>
</button>
        </div>
    </div>
</div>
<div class="container3">
<div class="card">
        <div class="image">
            <img src="https://th.bing.com/th/id/OIG1.vUMMKDYfbKvqs_5IJdZP?pid=ImgGn" alt="Model(faster)" width="450px">
        </div>
        <div class="text">
            <h2>
                <span class="animated-letter">N</span><span class="animated-letter">e</span><span class="animated-letter">o</span><span class="animated-letter">D</span><span class="animated-letter">r</span><span class="animated-letter">i</span><span class="animated-letter">v</span><span class="animated-letter">e</span>
                <span class="space">&nbsp;</span>
                <span class="animated-letter">(</span>
                <span class="animated-letter">Terra</span>
                <span class="animated-letter">)</span>
            </h2>
            <h3>
                Sin Limites, el futuro de la exploracion y carga en uno solo
            </h3>
        </div>
        <div class="btn">
<button class="learn-more">
  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Ver Mas</span>
</button>
        </div>
    </div>
</div>
<div class="container4">
<div class="card">
        <div class="image">
            <img src="https://th.bing.com/th/id/OIG1.Iyuy6fvdhPbydBIn3bT4?pid=ImgGn" alt="Model(faster)" width="450px">
        </div>
        <div class="text">
            <h2>
                <span class="animated-letter">N</span><span class="animated-letter">e</span><span class="animated-letter">o</span><span class="animated-letter">D</span><span class="animated-letter">r</span><span class="animated-letter">i</span><span class="animated-letter">v</span><span class="animated-letter">e</span>
                <span class="space">&nbsp;</span>
                <span class="animated-letter">(</span>
                <span class="animated-letter">Pista</span>
                <span class="animated-letter">)</span>
            </h2>
            <h3>
             el futuro de la Velocidad en el presente
            </h3>
        </div>
        <div class="btn">
<button class="learn-more">
  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Ver Mas</span>
</button>
        </div>
    </div>
</div>
</div>
<div class="Info-container1" id="about">
<div class="Info-card">
<div class="Info-text">
    <div class="Info-title2">
    <h2 class="H2-title">
NeoDrive
</h2>
    </div>
<div class="Info-info">
  
<p>Somos NeoDrive, la empresa líder en automoción y tecnología  </p>
<p> Nos destacamos por nuestros diseños llamativos,modernos, tecnológicos y futuristas </p>
    <p>que te transportan directamente al futuro.</p>
<p>En NeoDrive, creemos que la innovación es la clave para avanzar </p>
    <p> nos esforzamos por estar a la vanguardia de la tecnología.</p>
<p>Nuestros vehículos no son solo medios de transporte, son una declaración de intenciones.</p>
<p>Cada modelo de NeoDrive está diseñado con la más alta calidad y atención al detalle</p>
    <p> garantizando una experiencia de conducción inigualable.</p>
 <p>En NeoDrive, no solo construimos coches, construimos el futuro.</p>
  <p>Nuestro eslogan, “Be The Future”,</p
    <p>es más que una frase, es nuestra filosofía.</p>  
</div>
</div>
</div>
</div>
<div class="Info-container2" id="vision">
<div class="Info-card">
<div class="Info-text">
    <div class="Info-title2">
    <h2 class="H2-title2">
Nuestra Vision
</h2>
    </div>
<div class="Info-info2">
  
<p>Nosotros Queremos ser el futuro queremos mejorar la vida al maximo. <p> nos esforzamos para elaborar,diseñar y crear lo mejor para ti</p> <p>No solo somos Nosotros los que decidimos</p></p>
<p>Tu tambien decides por que tu tambien eres parte del futuro que queremos <p>probamos,buscamos y ingeniamos la mejor manera de llegar a ti</p></p>
<p>
 <p>Tu eres parte de la innovación</p></p>
</div>
</div>
</div>
</div>
<script> 
const letters = document.querySelectorAll('.animated-letter');
letters.forEach((letter,card, index) => {
    letter.addEventListener('mouseover', () => {
                setTimeout(() => {
                    letter.style.color = 'blue';
                    letter.style.fontSize = '40px';
                }, index * 500);
            });
            letter.addEventListener('mouseout', () => {
                letter.style.color = 'black';
                letter.style.fontSize = '40px';
            });
        });</script>
        
</body>
<div class="footer-align">
        <footer>
            <div class="footer-title">
<h3>NeoDrive</h3>
            </div>
            <div class="footer-copy">
<h4>CopyRight &copy; 2024 - 2077 Todos los derechos reservados</h4>
            </div>
            <div class="footer-sec1-text-up">
                <h3>Descubrir</h3>
            </div>
            <div class="footer-sec1-align">
<ul class="footer-sec1-ul">
<li><a href="">Nuestros Vehiculos</a></li>
<li><a href="">Sobre Nosotros</a></li>
<li><a href="">Nuestra Vision</a></li>
</ul>
            </div>
            <div class="footer-sec2-text-up">
            <h3>Innovaciones</h3>
            </div>
            <div class="footer-sec2-align">
                <ul class="footer-sec2-ul">
                    <li><a href="http://localhost/NeoDrive/services/NeoRive/">NeoRive</a></li>
                    <li><a href="">NeoServ</a></li>
                    <li><a href="http://localhost/NeoDrive/services/Assistant/">NeoAssistan</a></li>
                </ul>
            </div>
        </footer>
</div>
</html>
