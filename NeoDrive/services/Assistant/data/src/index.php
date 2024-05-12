<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css-styles/main.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <script src="scripts/autoredirect.js"></script>
    <title>NeoAssistant | Compra</title>
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
<svg class="gegga">
      <defs>
        <filter id="gegga">
          <feGaussianBlur in="SourceGraphic" stdDeviation="7" result="blur" />
          <feColorMatrix
            in="blur"
            mode="matrix"
            values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 20 -10"
            result="inreGegga"
          />
          <feComposite in="SourceGraphic" in2="inreGegga" operator="atop" />
        </filter>
      </defs>
    </svg>
<svg class="snurra" width="200" height="200" viewBox="0 0 200 200">
      <defs>
        <linearGradient id="linjärGradient">
          <stop class="stopp1" offset="0" />
          <stop class="stopp2" offset="1" />
        </linearGradient>
        <linearGradient
          y2="160"
          x2="160"
          y1="40"
          x1="40"
          gradientUnits="userSpaceOnUse"
          id="gradient"
          xlink:href="#linjärGradient"
        />
      </defs>
      <path
        class="halvan"
        d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
      />
      <circle class="strecken" cx="100" cy="100" r="64" />
    </svg>
<svg class="skugga" width="200" height="200" viewBox="0 0 200 200">
      <path
        class="halvan"
        d="m 164,100 c 0,-35.346224 -28.65378,-64 -64,-64 -35.346224,0 -64,28.653776 -64,64 0,35.34622 28.653776,64 64,64 35.34622,0 64,-26.21502 64,-64 0,-37.784981 -26.92058,-64 -64,-64 -37.079421,0 -65.267479,26.922736 -64,64 1.267479,37.07726 26.703171,65.05317 64,64 37.29683,-1.05317 64,-64 64,-64"
      />
      <circle class="strecken" cx="100" cy="100" r="64" />
    </svg>
    <div style="position: absolute; top: 60%;">
    <h1>
    <div class="container">
  <div class="text"></div>
</div>
</h1>
    </div>
    <script>
          window.addEventListener('DOMContentLoaded', (event) => {
            var TextScramble = class {
                constructor(el) {
                    this.el = el;
                    this.chars = '!<>-_\\/[]{}—=+*^?#________';
                    this.update = this.update.bind(this);
                }

                setText(newText) {
                    var _this = this;
                    var oldText = this.el.innerText;
                    var length = Math.max(oldText.length, newText.length);
                    var promise = new Promise(function (resolve) {
                        return _this.resolve = resolve;
                    });
                    this.queue = [];
                    for (var i = 0; i < length; i++) {
                        var from = oldText[i] || '';
                        var to = newText[i] || '';
                        var start = Math.floor(Math.random() * 40);
                        var end = start + Math.floor(Math.random() * 40);
                        this.queue.push({
                            from: from,
                            to: to,
                            start: start,
                            end: end
                        });
                    }
                    cancelAnimationFrame(this.frameRequest);
                    this.frame = 0;
                    this.update();
                    return promise;
                }

                update() {
                    var output = '';
                    var complete = 0;
                    for (var i = 0, n = this.queue.length; i < n; i++) {
                        var _this$queue$i = this.queue[i],
                            from = _this$queue$i.from,
                            to = _this$queue$i.to,
                            start = _this$queue$i.start,
                            end = _this$queue$i.end,
                            _char = _this$queue$i["char"];
                        if (this.frame >= end) {
                            complete++;
                            output += to;
                        } else if (this.frame >= start) {
                            if (!_char || Math.random() < 0.28) {
                                _char = this.randomChar();
                                this.queue[i]["char"] = _char;
                            }
                            output += "<span class=\"dud\">".concat(_char, "</span>");
                        } else {
                            output += from;
                        }
                    }
                    this.el.innerHTML = output;
                    if (complete === this.queue.length) {
                        this.resolve();
                    } else {
                        this.frameRequest = requestAnimationFrame(this.update);
                        this.frame++;
                    }
                }

                randomChar() {
                    return this.chars[Math.floor(Math.random() * this.chars.length)];
                }
            };

            var phrases = ['Estamos Creando Tu IA', 'Estamos Configurando tu IA', 'Estamos Iniciando tu IA','Estamos Creando la llave De Tu IA'];
            var el = document.querySelector('.text');
            var fx = new TextScramble(el);
            var counter = 0;

            var next = function next() {
                fx.setText(phrases[counter]).then(function () {
                    setTimeout(next, 800);
                });
                counter = (counter + 1) % phrases.length;
            };

            next();
        });
    </script>
    <script>
        window.setTimeout(() => {
    window.location.href = "http://localhost/NeoDrive/services/Assistant/data/src/log/"
}, 7000);
    </script>
</body>
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
</style>
</html>