<?php

include 'MainConnection.php';

// username and password sent from form 
$myusername=$_POST['txtUsuario']; 
$mypassword=$_POST['txtContrasenia']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

//encrypta el passwod con md5
$mypasswordEncripted= md5($mypassword);
$sql= "CALL LogIn('$myusername','$mypasswordEncripted')";

//manda a ejecutar el query
$result=ejecutaQuery($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION["usuario"] =$myusername;
$_SESSION["password"] =$mypasswordEncripted;

//redirige a login success 
header("location: login_success.php");

}
else {
echo "Wrong Username or Password";
}

?>