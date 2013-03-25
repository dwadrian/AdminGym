<?php
  //para testiar si entro a main connection;
  //echo 'entro a mainConnection';

  //funcion que ejecuta un query, regresa el resultado y cierra la conexion, se debe de usar esta funcion para cualquier query.
  function ejecutaQuery($sql)
  {
  	//Variable for connecting to BD
	$host="localhost";  // Host name
	$username="root"; // Mysql username 
	$password="phenonMX99"; // Mysql password 
	$db_name="administraciongym"; // Database name
  	
  //Connecto to database
	$con = mysql_connect($host,$username,$password);
	if (!$con)
	  {
	  die('Could not connect: ' . mysql_error());
	  }

	// Select a database
	$db_selected=mysql_select_db($db_name,$con);
	
	if (!$db_selected)
	  {
	  die ("Can\'t use administraciongym : " . mysql_error());
	  }
  	
  	//busca al usuario con el password encryptado
	$result=mysql_query($sql);
	mysql_close($con);
	
	if ($result === FALSE) {
		echo 'Query mal formado';
    	die(mysql_error());
	}
  	
	return $result;
  }  
?>
