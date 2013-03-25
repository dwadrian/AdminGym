<?php
include '../../MainConnection.php';

//echo 'entro a eliminar rol';

// username and password sent from form
$id=$_POST['Id'];



// To protect MySQL injection (more detail about MySQL injection)
$myid = stripslashes($id);
$myid = mysql_real_escape_string($id);


//crear el queru
$sql= "Call EliminaRol('$myid')";

//echo $sql;

//ejecutar quey, funcion de MainConnection.php
ejecutaQuery($sql);


//echo 'ejecucion exitosa';
?>
<script type="text/javascript">

//history.go(-1);
window.location.replace(document.referrer);

</script>
