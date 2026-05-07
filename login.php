<?php
 
$host = "localhost";
$user = "root";
$pass = ""; // cambia esto si tu MySQL tiene contraseña
$db   = "login_db";
 
/* CONEXIÓN */
$conexion = new mysqli($host, $user, $pass, $db);
 
/* VERIFICAR */
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
 
/* OPCIONAL: charset (recomendado) */
$conexion->set_charset("utf8");
 
?>