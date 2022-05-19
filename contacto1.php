<?php 

$nombre=$_POST["txtNombre"];
$correo=$_POST["txtCorreo"];
$empresa=$_POST["txtEmpresa"];
$direccion=$_POST["txtDireccion"];

$conexion=mysqli_connect("localhost","root","","dbTechcology");

$sql="INSERT INTO tblContacto VALUES('$nombre','$correo','$empresa','$direccion')";

mysqli_query($conexion,$sql);

mysqli_close($conexion);

header("Location: index.html");

 ?>