<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $destinatario = "alexanderbautista501@gmail.com";  
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpo = "Nombre: $nombre\nCorreo: $email\n\nMensaje:\n$mensaje";

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    if (mail($destinatario, $asunto, $cuerpo, $headers)) {
        echo "<script>alert('Mensaje enviado correctamente'); window.location.href='contacto.php';</script>";
    } else {
        echo "<script>alert('Error al enviar el mensaje'); window.history.back();</script>";
    }
} else {
    header("Location: contacto.php");
    exit();
}
?>
