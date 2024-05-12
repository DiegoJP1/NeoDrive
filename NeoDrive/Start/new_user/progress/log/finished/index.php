<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://res.cloudinary.com/dm2uezxs1/image/upload/v1713485413/NeoDrive/w60jswvycgynineyjrdm.png" type="image/x-icon">
    <link rel="stylesheet" href="style/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script.php"></script>
    <script src="scripts/autoredirect.js"></script>

    <title>NeoDrive | Bienvenido</title>
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
    <div class="text"><div class="content"></div><div class="dash"></div></div>
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
</style>
<script>
    window.setTimeout(() => {
    window.location.href = "http://localhost/NeoDrive/Home/#"
},7000);
</script>
</html>
