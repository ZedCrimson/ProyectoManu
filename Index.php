<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="index.css">
	<title>Casino</title>
</head>

<body>

    <video autoplay="autoplay" loop="loop" id="video_background" preload="auto" volume="50"/>
        <source src="Recursos/index video.mp4" type="video/mp4" />
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