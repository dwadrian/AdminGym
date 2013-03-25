<?php
include '../../MainConnection.php';

//echo 'entro a guardar rol';

// username and password sent from form
$txtNombre=$_POST['txtNombre'];
$txtDescripcion=$_POST['txtDescripcion'];

// To protect MySQL injection (more detail about MySQL injection)
$myNombre = stripslashes($txtNombre);
$myDescripcion = stripslashes($txtDescripcion);
$myNombre = mysql_real_escape_string($txtNombre);
$myDescripcion = mysql_real_escape_string($txtDescripcion);

//crear el queru
$sql= "Call InsertRol('$myNombre','$myDescripcion')";

echo $sql;

//ejecutar quey, funcion de MainConnection.php
ejecutaQuery($sql);


//echo 'ejecucion exitosa';
?>