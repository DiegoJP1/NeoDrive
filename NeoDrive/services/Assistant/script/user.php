<?php
session_start();

if(isset($_SESSION['user'])) {
    $correoUsuario = filter_var($_SESSION['user'], FILTER_VALIDATE_EMAIL);

    if($correoUsuario === false) {
        echo "Error: El correo del usuario no es válido.";
        exit;
    }

    function generarLlaveAleatoria($length) {
        $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $caracteresLength = strlen($caracteres);
        $llave = '';
        for ($i = 0; $i < $length; $i++) {
            $llave .= $caracteres[rand(0, $caracteresLength - 1)];
        }
        return $llave;
    }

    $software = "Assistant";
    $llave = generarLlaveAleatoria(10);
    $status = "pendiente";

    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "nombre_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO softwares (usuario, software, llave, status) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $correoUsuario, $software, $llave, $status);

    if ($stmt->execute()) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar los datos: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Error: El usuario no ha iniciado sesión.";
}
?>
<script>
function buy() {
    var software = "Assistant";
    var status = "pendiente";
    var datos = {
        software: software,
        llave: generarLlaveAleatoria(10),
        status: status
    };

    fetch('<?php echo $_SERVER['PHP_SELF']; ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(datos),
    })
    .then(response => {
        if (response.ok) {
            console.log('Datos insertados correctamente');
            header("location:http://localhost/NeoDrive/services/Assistant/data/src/")
        } else {
            console.error('Error al insertar los datos');
        }
    })
    .catch(error => {
        console.error('Error en la solicitud:', error);
    });
}

function generarLlaveAleatoria(length) {
    var result = '';
    var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var caracteresLength = caracteres.length;
    for (var i = 0; i < length; i++) {
        result += caracteres.charAt(Math.floor(Math.random() * caracteresLength));
    }
    return result;
}
</script>