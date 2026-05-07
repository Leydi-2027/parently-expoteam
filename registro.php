<?php
include("conexion.php");
 
$usuario=$_POST['usuario'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);
 
$stmt=$conexion->prepare("INSERT INTO usuarios(usuario,email,password) VALUES(?,?,?)");
$stmt->bind_param("sss",$usuario,$email,$password);
 
if($stmt->execute()){
    echo "Registrado <a href='index.php'>volver</a>";
}else{
    echo "Error";
}
?>