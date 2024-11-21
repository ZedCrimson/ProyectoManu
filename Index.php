<!DOCTYPE html>
<html lang="en">

<head>
	<title>Casino</title>
</head>

<body>

    <video autoplay muted loop id="video-background">
        <source src="Recursos/index video.mp4" type="video/mp4">
        Tu navegador no soporta HTML5 video.
    </video>

    <div class="login">
	<div class="container">
		<div class="logo">Casino</div>
		<form class="form" method="POST" action="login.php">
			<input type="usuario" class="input" placeholder="Usuario" name="usuario" required>
			<input type="password" class="input" placeholder="Contraseña" name="contraseña" required>
			<button type="submit" class="button">Iniciar sesión</button>
		</form>
		
</body>

</html>