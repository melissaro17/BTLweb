<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $departamento = $_POST['departamento'];
    $mensaje = $_POST['mensaje'];

    $to = "danielberrio.u@gmail.com";
    $subject = "Prueba página web";
    $message = "Nombre: $nombre\nEmail: $email\nCiudad: $city\nDepartamento: $departamento\nMensaje: $mensaje";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Mensaje enviado con éxito.";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, inténtelo de nuevo.";
    }
}
?>
