<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <title>NeoDrive | inicio de sesion</title>
</head>
<header>
  <div class="header">
    <div class="navigation">
        <div class="nav">
            <div class="logo">
                <a href="#"><img src="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" alt="Logo de NeoDrive"></a>
            </div>
        </div>
    </div>
        </div>
    </header>
<body>
    <form class="login-form" style="color: white;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="text">
        <p class="login-text text">
                NeoDrive
        </p>
        </div>
       
        <input  type="email" class="login-username" autofocus="true" required="true" placeholder="Correo Electronico" name="email" />
        <input  type="password" class="login-password" required="true" placeholder="contraseña" name="password" />
        <input  type="submit" name="Login" value="Iniciar Sesion" class="login-submit" />
        <p class="lostpswd">¿Olvidaste tu contraseña? <a href="">restablecela</a></p>
      </form>
      <p class="signin">¿No Tienes Cuenta?<a href="http://localhost/NeoDrive/Start/new_user/">&nbsp;Registrate</a></p>
      <div class="underlay-photo"></div>
      <div class="underlay-black"></div> 
      <?php
session_start();

if (isset($_SESSION["user"])) {
    header("location: http://localhost/TESLA/Home/#");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $contraseña = $_POST['password'];
    if (empty($correo) || empty($contraseña)) {
        $error = "Por favor, ingrese tanto su correo electrónico como su contraseña.";
    } else {
      define('DB_SERVER', 'localhost');
      define('DB_USERNAME', 'root');
      define('DB_PASSWORD', '');
      define('DB_NAME', 'neodrive');
      
      $conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
      
      if ($conn->connect_error) {
          die("Error de conexión: " . $conn->connect_error);
      }
        $stmt = $conn->prepare("SELECT email,password FROM users WHERE email = ?");
        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($correo_bd, $contraseña_bd);
            $stmt->fetch();
            if (password_verify($contraseña, $contraseña_bd)) {
                $_SESSION["user"] = $correo_bd;
                
                header("location: http://localhost/NeoDrive/Home/#");
                exit;
            } else {
                $error = "La contraseña ingresada es incorrecta";
            }
        } else {
            $error = "El correo electrónico ingresado no está registrado";
        }
        if (!empty($error)) {
            echo '
            <div class="error-container">
            <div class="error">
                <div class="error__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none"><path fill="#393a37" d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z"></path></svg>
                </div>
                <div class="error__title">' . $error . '</div>
                <div class="error__close"><svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20"><path fill="#393a37" d="m15.8333 5.34166-1.175-1.175-4.6583 4.65834-4.65833-4.65834-1.175 1.175 4.65833 4.65834-4.65833 4.6583 1.175 1.175 4.65833-4.6583 4.6583 4.6583 1.175-1.175-4.6583-4.6583z"></path></svg></div>
            </div>
            </div>';
            
        }

        $stmt->close();
        $conn->close();
    }
}
?> 
</body>
<script>
  document.querySelector(".error__close").addEventListener("click",()=>{
    document.querySelector(".error").style.display = "none"
  })
</script>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bowlby+One&family=Dosis:wght@200..800&family=Edu+SA+Beginner:wght@400..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lacquer&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ojuju:wght@200..800&family=Permanent+Marker&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Shadows+Into+Light&family=Tilt+Neon&family=Truculenta:opsz,wght@12..72,100..900&display=swap');
    .signin{
        position: absolute;
        bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: 0.5rem;
    }
    .signin a{
        color: red;
        text-decoration: none;
    }
    .signin a:hover{
        font-size: 15px;
    }
    
    .text p{
    text-align: center;
    justify-content: center;
        font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
          font-size: 40px;
          color: white;
          font-size: 40px;
    }
  header{
    font-family: 'Roboto', sans-serif;
        background: white;
        color: black;
        margin: 0;
        padding: 0;
        overflow-x: hidden;
        animation: gradient 5s ease-in-out infinite;
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
        width: 70px;
    }
.login-text{
    display: flex;
}
@import url(https://fonts.googleapis.com/css?family=Open+Sans:100,300,400,700);
@import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);
body, html {
  height: 100%;
}

body {
  font-family: "Open Sans";
  font-weight: 100;
  display: flex;
  overflow: hidden;
}

input ::-webkit-input-placeholder {
  color: black;
}
input ::-moz-placeholder {
  color: black;
}
input :-ms-input-placeholder {
  color: black;
}
input:focus {
  outline: 0 transparent solid;
}
input:focus ::-webkit-input-placeholder {
  color: black;
}
input:focus ::-moz-placeholder {
  color: black;
}
input:focus :-ms-input-placeholder {
  color: black;
}

.login-form {
  min-height: 10rem;
  margin: auto;
  max-width: 50%;
  padding: 0.5rem;
}

.login-text {
  color: white;
  font-size: 1.5rem;
  margin: 0 auto;
  max-width: 50%;
  padding: 0.5rem;
  text-align: center;
}
.login-text .fa-stack-1x {
  color: black;
}

.login-username, .login-password {
  background: transparent;
  border: 0 solid;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  color: white;
  display: block;
  margin: 1rem;
  padding: 0.5rem;
  transition: 250ms background ease-in;
  width: calc(100% - 3rem);
}
.login-username:focus, .login-password:focus {
  background: white;
  color: black;
  transition: 250ms background ease-in;
}

.login-forgot-pass {
  bottom: 0;
  color: white;
  cursor: pointer;
  display: block;
  font-size: 75%;
  left: 0;
  opacity: 0.6;
  padding: 0.5rem;
  position: absolute;
  text-align: center;
  width: 100%;
}
.login-forgot-pass:hover {
  opacity: 1;
}

.login-submit {
  border: 1px solid white;
  background: transparent;
  color: white;
  display: block;
  margin: 1rem auto;
  min-width: 1px;
  padding: 0.25rem;
  transition: 250ms background ease-in;
}
.login-submit:hover, .login-submit:focus {
  background: white;
  color: black;
  transition: 250ms background ease-in;
}

[class*=underlay] {
  left: 0;
  min-height: 100%;
  min-width: 100%;
  position: fixed;
  top: 0;
}

.underlay-photo {
  background: url("https://th.bing.com/th/id/OIG1.On65SpVMmtNuWKwI.6Nw?pid=ImgGn");
  background-repeat: no-repeat;
  background-size: cover;
  z-index: -1;
}

.underlay-black {
  z-index: -1;
}
::-webkit-scrollbar {
  background: transparent;
  width: 0px;
  height: 0px;
}

::-webkit-scrollbar-thumb {
  background-color: #000000;
}

::-webkit-scrollbar-thumb:hover {
  background-color: rgba(0, 0, 0, 0.3);
}
.error {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  width: 320px;
  padding: 12px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: start;
  background: #EF665B;
  border-radius: 8px;
  box-shadow: 0px 0px 5px -3px #111;
}

.error__icon {
  width: 20px;
  height: 20px;
  transform: translateY(-2px);
  margin-right: 8px;
}

.error__icon path {
  fill: #fff;
}

.error__title {
  font-weight: 500;
  font-size: 14px;
  color: #fff;
}

.error__close {
  width: 20px;
  height: 20px;
  cursor: pointer;
  margin-left: auto;
}

.error__close path {
  fill: #fff;
}
.error-container{
  position: absolute;
  top: 65%;
  left: 43%;
}
.lostpswd{
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  font-size: 15px;
}
.lostpswd a{
  color: white;
}
.lostpswd a:hover{
  font-size: 17px;
}
</style>
</html>
