<?php  

// Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Datos para el correo
$destinatario = "leonardofallardi@gmail.com";
$asunto = $_POST['asunto'];

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header('Location:index.html');

// if ($mail) {
//   echo "<script type="text/javascript">
//         alert("Su consulta fue enviada satisfactoriamente!");</script>"
// }

?>