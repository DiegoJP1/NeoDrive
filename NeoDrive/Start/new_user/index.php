<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <title>NeoDrive | registrarse</title>
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
<div class="panel_blur"></div>
<div class="panel">
  <div class="panel__form-wrapper">
    <ul class="panel__headers">
      <li class="panel__header active text"><h2>NeoDrive</h2> </li>
      <li><p>Registrarse</p></li>
    </ul>

    <div class="panel__forms">
      <form class="form panel__login-form" id="login-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form__row">
            <input type="text" id="register-email" class="form__input" name="name" data-validation="email" data-error="Invalid email address." required>
            <span class="form__bar"></span>
            <label for="register-email" class="form__label">Nombre</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="email" id="register-password" class="form__input" name="email" data-validation="length" data-validation-length="8-25" data-error="Password must contain 8-25 characters" required>
            <span class="form__bar"></span>
            <label for="register-password" class="form__label">Correo Electronico</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="password" id="register-password-check" class="form__input" name="password" data-validation="confirmation" data-validation-confirm="register-pass" data-error="Your passwords did not match." required>
            <span class="form__bar"></span>
            <label for="register-password-check" class="form__label">Contraseña</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="text" id="register-password-check" class="form__input" name="address" data-validation="confirmation" data-validation-confirm="register-pass" data-error="Your passwords did not match." required>
            <span class="form__bar"></span>
            <label for="register-password-check" class="form__label">Pais</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="tel" id="register-password-check" class="form__input" name="phone" data-validation="confirmation" data-validation-confirm="register-pass" data-error="Your passwords did not match." required>
            <span class="form__bar"></span>
            <label for="register-password-check" class="form__label">Numero de telefono</label>
            <span class="form__error"></span>
          </div>
          <div class="form__row">
            <input type="submit" class="form__submit" value="Registrar">
          </div>
          <p>¿Ya Tienes cuenta? <a href="http://localhost/NeoDrive/Start/user_start/">Inicia Sesion</a></p>
      </form>
    </div>
  </div>
</div>
<?php
session_start();

if (isset($_SESSION["user"])) {
    header("location: http://localhost/NeoDrive/Home/#");
    exit;
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['name'];
    $correo = $_POST['email'];
    $contraseña = $_POST['password'];
    $direccion = $_POST['address'];
    $telefono = $_POST['phone'];

    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = "El correo electrónico no es válido";
    } elseif (strlen($contraseña) < 8) {
        $error = "La contraseña debe tener al menos 8 caracteres";
    } else {
        include 'script/conection.php';

        $stmt_check = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt_check->bind_param("s", $correo);
        $stmt_check->execute();
        $stmt_check->store_result();

        if ($stmt_check->num_rows > 0) {
            $error = "El correo electrónico ya está registrado";
        } else {
            $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);
            $stmt_insert = $conn->prepare("INSERT INTO users (nombre, email, password, telefono, pais) 
            VALUES (?, ?, ?, ?, ?)");
$stmt_insert->bind_param("sssss", $nombre, $correo, $contraseña_hash, $telefono,$direccion);
            if ($stmt_insert->execute()) {
                $_SESSION["user"] = $correo;
                header("location:http://localhost/NeoDrive/Start/new_user/progress/log/working/");
                                  
                exit;
            } else {
              echo "Error al insertar en la base de datos: " . $conn->error;
                          
              exit;
            }
        }

        $stmt_check->close();
        $stmt_insert->close();
        $conn->close();
    }
}

if ($error) {
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
?>
</body>
<script>
  document.querySelector(".error__close").addEventListener("click",()=>{
    document.querySelector(".error").style.display = "none"
  })
</script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Bowlby+One&family=Dosis:wght@200..800&family=Edu+SA+Beginner:wght@400..700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lacquer&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&family=M+PLUS+Rounded+1c:wght@700&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Ojuju:wght@200..800&family=Permanent+Marker&family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&family=Shadows+Into+Light&family=Tilt+Neon&family=Truculenta:opsz,wght@12..72,100..900&display=swap');
  .text h2{
      display: flex;
    text-align: center;
    justify-content: center;
        color: #b2b2b2;
        font-family: "Tilt Neon", sans-serif;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings:
          "XROT" 0,
          "YROT" 0;
          font-size: 40px;
          color: white;
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
.login-text{
display: flex;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html, body {
  width: 100%;
  height: 100%;
}

body,
a,
button,
input {
  font-family: "Montserrat", sans-serif;
  color: #fff;
  font-weight: 400;
  font-size: 0.938rem;
  line-height: 1.15;
}

body {
  position: relative;
  background: url("https://th.bing.com/th/id/OIG1.Y51THQR.z8KeT87KlJvS?pid=ImgGn") no-repeat center fixed;
  background-size: 100% 100%;
  overflow-y: auto;
}
@media screen and (min-width: 768px) {
  body {
    min-height: 100%;
    height: auto;
    max-height: auto;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    overflow-y: visible;
  }
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

button {
  padding: 0;
  border: none;
  background: none;
  cursor: pointer;
}
button:active, button:hover {
  outline: 0;
}

a {
  text-decoration: none;
  cursor: pointer;
}
a:active, a:hover {
  outline: 0;
}

.panel_blur,
.panel {
  width: 100%;
  height: 100%;
  overflow-y: auto;
}
@media screen and (min-width: 768px) {
  .panel_blur,
  .panel {
    width: 350px;
    height: 600px;
    overflow-y: visible;
  }
}

.panel_blur {
  position: absolute;
  background: url("https://th.bing.com/th/id/OIG1.Y51THQR.z8KeT87KlJvS?pid=ImgGn") no-repeat center fixed;
  background-size: 100% 100%;
  filter: blur(5px);
}
.panel {
  position: relative;
  z-index: 1;
}
.panel__register-form, .panel__password-form {
  display: none;
}
.panel__register-form .form__submit {
  margin-top: 30px !important;
}
.panel__form-wrapper {
  width: 100%;
  height: 100%;
  padding: 30%;
  background-color: rgba(0, 0, 0, 0.5);
  overflow-y: auto;
}
@media screen and (min-width: 768px) {
  .panel__form-wrapper {
    padding: 10% 15%;
    border-radius: 10px;
    overflow-y: visible;
  }
}
.panel__prev-btn {
  width: 24px;
  height: 20px;
  background: none;
  padding: 0;
}
.panel__prev-btn svg {
  transition: fill 0.3s;
}
.panel__prev-btn:hover > svg {
  fill: #ff1552;
}
.panel__headers {
  padding: 10px 0;
  text-align: center;
}
.panel__header {
  font-size: 1.375rem;
}
.panel__header:first-child {
  padding-bottom: 5px;
}
.panel__header.active > .panel__link {
  color: #ff1552;
  font-size: 3rem;
}
.panel__link {
  color: inherit;
  transition: all 0.3s;
  font-weight: 600;
}
.form__row {
  position: relative;
  padding-top: 40px;
}
.form__row.has-error > .form__error:after {
  display: block;
}
.form__input {
  width: 100%;
  padding: 5px 0;
  border: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.5);
  background: none;
}
.form__input:focus, .form__input:active {
  outline: 0;
}
.form__input:focus ~ .form__label, .form__input:active ~ .form__label, .form__input:valid ~ .form__label {
  bottom: 30px;
  font-size: 0.75rem;
}
.form__input:focus ~ .form__bar, .form__input:active ~ .form__bar {
  left: 0;
  right: 0;
  width: 100%;
}
.form__bar {
  position: absolute;
  bottom: 0;
  left: 50%;
  right: 50%;
  display: block;
  width: 0;
  height: 2px;
  background-color: white;
  transition: all 0.3s;
}
.form__label {
  position: absolute;
  bottom: 5px;
  left: 0;
  width: 100%;
  transition: all 0.3s;
  pointer-events: none;
}
.form__submit {
  width: 100%;
  padding: 10px 0;
  margin-top: 30px;
  border: none;
  color: black;
  border-radius: 10px;
  font-weight: 600;
  background-color: white;
  cursor: pointer;
}
.form__retrieve-pass {
  display: block;
  padding: 15px 0;
  text-align: center;
  color: rgba(255, 255, 255, 0.5);
  transition: all 0.3s;
}
.form__retrieve-pass:hover {
  color: #fff;
}
.form__error {
  position: absolute;
  bottom: -20px;
  display: block;
  width: 100%;
  height: 20px;
  color: #ff1552;
  font-size: 0.75rem;
  line-height: 20px;
}
.form__error:after {
  content: "x";
  position: absolute;
  bottom: 20px;
  right: -20px;
  display: none;
  width: 20px;
  height: 25px;
  font-size: 1.125rem;
  line-height: 25px;
  text-align: center;
  color: #ff1552;
}
.form__info {
  text-align: center;
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
  bottom: 13%;
}
</style>
</html>