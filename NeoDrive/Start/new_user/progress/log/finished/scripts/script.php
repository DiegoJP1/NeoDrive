<?php

header("Content-type: text/javascript");
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
      $nombre = "Desconocido";
  }
  $result->free();
  $conn->close();
} else {
  $nombre = "Desconocido";
}

$text = "hola " . $nombre ." ". "te damos la bienvenida a NeoDrive";

echo "var app = {
    text: \"$text\",
    index: 0,
    chars: 0,
    speed: 100,
    container: \".text .content\",
    
    init: function() {
      this.chars = this.text.length;
      this.write();
    },
    
    write: function() {
      $(this.container).append(this.text[this.index]);
      if (this.index < this.chars) {
        this.index++;
        var self = this;
        window.setTimeout(function() {
          self.write();
        }, this.speed);
      }
    }
  };

$(document).ready(function() {
  app.init();
});";
