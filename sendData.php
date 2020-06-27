<?php
include 'conexion.php';

$name = utf8_decode($_POST['nombre']);
$telefono = utf8_decode($_POST['telefono']);
$correo = utf8_decode($_POST['correo']);
$interes = utf8_decode($_POST['productos']);


if (!empty($name) && !empty($telefono) && !empty($correo) ) {
    $query = "INSERT INTO curso(nombre, telefono, correo, interes) VALUES ('$name', '$telefono', '$correo', '$interes')";
    if ($conexion->query($query)) {
        echo "<script>location='gracias'</script>";
    } else {
        die($conexion->error);
    }
} else {
    echo 'hubo un error al procesar la solicitud';
}
