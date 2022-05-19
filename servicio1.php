<?php 

$nombre=$_POST["txtNombre"];
$correo=$_POST["txtCorreo"];
$equipo=$_POST["txtEquipo"];
$descripcion=$_POST["txtDescripcion"];

$conexion=mysqli_connect("localhost","root","","dbTechcology");

$sql="INSERT INTO tblServicio VALUES('','$nombre','$correo','$equipo','$descripcion')";

mysqli_query($conexion,$sql);

mysqli_close($conexion);

header("Location: index.html");

 ?>