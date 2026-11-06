<?php
$nombre  = htmlspecialchars($_GET['nombre'] ?? '');
$motivo = htmlspecialchars($_GET['motivo'] ?? '');
$mensaje = htmlspecialchars($_GET['mensaje'] ?? '');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen del formulario</title>
</head>
<body>
    <p>Hola, <?php echo $nombre; ?>,</p>
    <p>Has completado el formulario de contacto con motivo de contacto para: <strong><?php echo $motivo; ?></strong></p>
    <p>El mensaje que has enviado es: <?php echo $mensaje; ?></p>
</body>
</html>