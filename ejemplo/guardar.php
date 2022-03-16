<?php 
print_r($_POST);

 if (!isset($_POST['oculto'])) {
 	exit();
 }
  include("conectar.php");
  $name = $_POST['txtname'];
  $tipe = $_POST['txtipo'];
  $pass = $_POST['contraseña'];
  $conf = $_POST['confirma'];

  $sentencia = $db->prepare("INSERT INTO usuarios(Nombre_usuario,Tipo_usuario,Password,Confirma) VALUES (?,?,?,?);");
  $resultado = $sentencia->execute([$name,$tipe,$pass,$conf]);

  if ($resultado === TRUE) {
  	header("Location: registroalumno.php");
  }else{
  	echo "Error";
  }


 ?>