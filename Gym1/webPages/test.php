<?php

//se debe de borrar si se incluye en las otra paginas
//include "../Connection/MainConnection.php";

//obtiene los roles
$sql = "Call GetRoles()";
//ejecuta query para el menu completo
$result = ejecutaQuery($sql);

//variable que controla la impresion de los encabezados, no modificar.
$ImprimirEncabesados = true;

//funcion que genera las tablas dinamicamente con el query de sql
echo '<table cellspacing="0" class="rgMasterTable" style="width:100%;table-layout:auto;empty-cells:show;">';
echo '<colgroup>';
echo '<col style="width:24px" />';
echo '<col  />';
echo '<col style="width:24px" />';
echo '</colgroup>';

if ($result && mysql_num_rows($result)) {
	$numrows = mysql_num_rows($result);
	$rowcount = 1;
	
	echo '<tr class="rgRow">';
	while ($row = mysql_fetch_assoc($result)) {

		//condicion para imprimir solamente una vez los encabezados de la tabla
		if($ImprimirEncabesados != 0)
		{
			//genera el encabezado de la tabla.
			echo '<tr class="">';
			foreach(array_keys($row) as $paramName)
			{
		
				echo '<th class="rgHeader">';
				echo $paramName;
				echo '</th>';
		
			}
			echo '</tr>';
		
			$ImprimirEncabesados= false;
		}
		
		//genera la opcion de editar
		echo '<td style="width:24px;">';
		echo '<input type="image" name="" title="Editar el registro." class="imageButton" src="../Images/Icons/Edit.png" />';
		echo '</td>';
		
		//Genera los renglones de la tabla
		while(list($var, $val) = each($row)) {
			echo '<td style="width:24px;">';
		print "$val<br />";
			echo '</td>';
		}
	
		//genera el boton de borrar
		echo '<td style="width:24px;">';
		echo '<input type="image" name="" title="Eliminar el registro." class="imageButton" src="../Images/Icons/Delete.png" onclick="" />';
		echo '</td>';
		
		echo '</tr>';
		print "<br />";
		++$rowcount;
		}
}
echo '</table>';
	
//echo 'termino el archivo, ejecusion correcta.';
?>