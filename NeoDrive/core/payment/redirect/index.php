<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css-styles/main.css">
    <link rel="shortcut icon" href="style/css-styles/imgs/Logo.Ico" type="image/x-icon">
    <script src="scripts/autoredirect.js"></script>
    <title>Tesla | Comprar</title>
</head>
<header>
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
    </nav>
  </header>
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

            var phrases = ['Estamos cargando tu informacion', 'estamos preparando tu vehiculo', 'Estamos preparando tu VIN'];
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
</body>
</html>