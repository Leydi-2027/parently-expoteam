<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login Pro</title>
<link rel="stylesheet" href="style.css">
 
<!-- ICONOS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
 
</head>
<body>
 
<div class="container">
 
<div class="left">
<h1 id="title">Crear cuenta</h1>
 
<form id="form" action="registro.php" method="POST">
 
<div class="input-group">
<input type="text" name="usuario" placeholder="Usuario" required>
<i class="fa fa-user"></i>
</div>
 
<div class="input-group" id="emailBox">
<input type="email" name="email" placeholder="Email">
<i class="fa fa-envelope"></i>
</div>
 
<div class="input-group">
<input type="password" name="password" placeholder="Contraseña" required>
<i class="fa fa-lock"></i>
</div>
 
<button id="btn">Registrarse</button>
 
</form>
 
<p onclick="toggle()" style="cursor:pointer;color:#7a1c2f;">

Cambiar a login
</p>
 
</div>
 
<div class="right">
<h1 id="sideTitle">Bienvenido 🔥</h1>
<p id="sideText">¿Ya tienes cuenta?</p>
<button onclick="toggle()">Iniciar sesión</button>
</div>
 
</div>
 
<script src="script.js"></script>
 
</body>
</html>