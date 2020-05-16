<?php
 $destino= "daniel_vpalomares@alumnos.udg.mx";
 $nombre= $_POST["nombre"];
 $nombre= $_POST["correo"];
 $nombre= $_POST["telefono"];
 $nombre= $_POST["mensaje"];
 $contenido= "Nombre: " . $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: ". $mensaje;
 mail($destino,"Contacto", $contenido);
 header("Location:gracias.html")
?>
