<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio Página</title>
</head>
<body>

	<header class="head">Universidad Sanchez</header>
	<ul class="menu" type="square">
		<li><a href="">Inicio</li>
		<li><a href="registrar.php">Registrarse</li>
		<li><a href="">Iniciar Sesión</li>	
	</ul>

	<br>
	<br>
	<hr>
	<hr>

	<form id="form1" action="registrar.php" method="POST">
		
		<div><label for ="matricula">Matricula :</label>
        <input name ="matricula" type="text" id="matricula" value=""required ></div>
        <div><label for ="nombre">Nombre :</label>
        <input name ="nombre" type="text" id="nombre" value=""required ></div>
        <div><label for ="paterno">Apellido Paterno :</label>
        <input name ="paterno" type="text" id="paternomaterno" value=""required ></div>
        <div><label for ="materno">Apellido Materno :</label>
        <input name ="materno" type="text" id="materno" value=""required ></div>
        <div><label for ="domc">Domicilio :</label>
        <input name ="domc" type="text" id="domc" value=""required ></div>
        <div><label for ="tele">Teléfono :</label>
        <input name ="tele" type="text" id="tele" value=""required ></div>
        <div><label for ="correo">Correo :</label>
        <input name ="correo" type="mail" id="correo" value=""required ></div>
        <div><label for ="contraseña">Contraseña :</label>
        <input name ="contraseña" type="password" id="contraseña" value=""required ></div>
        <div><label for ="confirma">Confirma contraseña :</label>
        <input name ="confirma" type="password" id="confirma"required ></div>
        <div><button type="submit">Registra Estudiante</button></div>

	</form>

</body>
</html>