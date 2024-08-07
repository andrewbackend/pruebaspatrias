<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);

  
    echo "Gracias, $nombre. Hemos recibido tu email: $email.";
} else {
    echo "Acceso no permitido.";
}
?>
