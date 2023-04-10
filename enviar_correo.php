<?php
if(isset($_POST['email'])) {

  // Correo electrónico donde se enviará el mensaje
  $correo_destino = "facuprn54@gmail.com";

  // Información del remitente
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  // Crear el cuerpo del mensaje
  $cuerpo = "Nombre: " . $nombre . "\n";
  $cuerpo .= "Email: " . $email . "\n";
  $cuerpo .= "Asunto: " . $asunto . "\n";
  $cuerpo .= "Mensaje: " . $mensaje;

  // Enviar el mensaje de correo electrónico
  mail($correo_destino, $asunto, $cuerpo);

  // Redirigir al usuario a una página de confirmación
  header('Location: confirmacion.html');
} else {
  echo "Error al enviar el mensaje.";
}
?>