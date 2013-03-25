<?php
$direccionAbsolutaPHP = '/opt/lampp/htdocs/Git/AdminGym/AdminGym/Gym/';
$direccionAbsolutaHTML = '/Git/AdminGym/AdminGym/Gym/';

//funcion que general la tabla con encabezados y las opciones de editar y borrar.
function GenerarTabla($sql,$UrlRegreso, $UrlAccion){
	//agarra la variable global
	global $direccionAbsolutaPHP;
	global $direccionAbsolutaHTML;

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

		//echo '<tr class="rgRow">';
		while ($row = mysql_fetch_assoc($result)) {

			//condicion para imprimir solamente una vez los encabezados de la tabla
			if($ImprimirEncabesados != 0)
			{
				//prepara el encabezado
				echo '<thead>';
					
				//genera el encabezado de la tabla.
				echo '<tr class="">';
					
				//genera el encabezado para el boton de editar
				echo '<th class="rgHeader">';
				echo 'Editar';
				echo '</th>';
					
				foreach(array_keys($row) as $paramName)
				{

					if($paramName == 'Id')
					{
						//mete el id en la tabla sin embargo lo oculta
						echo '<th style="display:none;">';
						echo $paramName;
						echo '</th>';
							
					} else {
						echo '<th class="rgHeader" style="text-align:left">';
						echo $paramName;
						echo '</th>';
					}

				}
					
				//Genera el encabezado para el botond de borrar
				echo '<th class="rgHeader">';
				echo 'Borrar';
				echo '</th>';
					
				//termina el encabezado y cambia la variable para que ya no se imprima de nuevo el encabezado.
				echo '</tr>';
				echo '</thead>';
				$ImprimirEncabesados= false;
					
				//prepara el cuerpo de la tabla
				echo '<tbody>';
					
			}

			echo '<form method="post" accion="'.$UrlAccion.'">';
			echo '<tr>';
			//genera la opcion de editar
			echo '<td style="width:24px;text-align:center;">';
			echo '<input type="image" name="" title="Editar el registro." src="'.$direccionAbsolutaHTML.'Images/Icons/Edit.png" />';
			echo '</td>';

			//Genera los renglones de la tabla
			while(list($var, $val) = each($row)) {
				if($var == 'Id')
				{
					//mete el id en la tabla sin embargo lo oculta
					echo '<td style="display:none;">';
					echo '<input type="label" id="Id" name="Id" value="'.$val.'"/>';
					echo '</td>';
				}else{
					echo '<td style="width:24px;text-align:left">';
					print "$val";
					echo '</td>';
				}
			}

			//genera el boton de borrar
			echo '<td style="width:24px;text-align:center;">';
			echo '<input type="image" name="" title="Eliminar el registro." class="imageButton" src="'.$direccionAbsolutaHTML.'Images/Icons/Delete.png" href="'.$UrlRegreso.'" onclick="action='.$UrlAccion.';document.this.submit();" />';
			echo '</td>';

			echo '</tr>';
			echo '</form>';
			//print "<br />";
			++$rowcount;
		}
	}
	//cierra el cuerpo de la tabla y la tabla
	echo '</tbody>';
	echo '</table>';
}

//funcion que genera una tabla con checkbox y las opciones de ver, editar, borrar para la pantalla de roles.
function GenerarTablaCheckBox($sql){
	//agarra la variable global
	global $direccionAbsolutaPHP;
	global $direccionAbsolutaHTML;
	
	//ejecuta query para el menu completo
	$result = ejecutaQuery($sql);

	//variable que controla la impresion de los encabezados, no modificar.
	$ImprimirEncabesados = true;

	//funcion que genera las tablas dinamicamente con el query de sql
	echo '<table cellspacing="0" class="rgMasterTable">';
	echo '<colgroup>';
	echo '<col style="width:24px" />';
	echo '<col  />';
	echo '<col style="width:24px" />';
	echo '</colgroup>';

	if ($result && mysql_num_rows($result)) {
		$numrows = mysql_num_rows($result);
		$rowcount = 1;

		//echo '<tr class="rgRow">';
		while ($row = mysql_fetch_assoc($result)) {

			//condicion para imprimir solamente una vez los encabezados de la tabla
			if($ImprimirEncabesados != 0)
			{
				//prepara el encabezado
				echo '<thead>';
					
				//genera el encabezado de la tabla.
				echo '<tr class="">';
					
				foreach(array_keys($row) as $paramName)
				{

					if($paramName == 'Id')
					{
						//mete el id en la tabla sin embargo lo oculta
						echo '<th style="display:none;">';
						echo $paramName;
						echo '</th>';
							
					} else {
						echo '<th class="rgHeader">';
						echo $paramName;
						echo '</th>';
					}

				}
					
				//Imprimer las opciones de ver, editar y borrar.
				echo '<th class="rgHeader" style="text-align:center;">';
				echo '<img id="imgCanAccess" src="'.$direccionAbsolutaHTML.'Images/Icons/View.png" title="Permitir acceso." />';
				echo '</th>';
					
				echo '<th class="rgHeader" style="text-align:center;">';
				echo '<img id="imgCanEdit" src="'.$direccionAbsolutaHTML.'Images/Icons/Edit_White.png" title="Editar acceso." />';
				echo '</th>';
					
				echo '<th class="rgHeader" style="text-align:center;">';
				echo '<img id="imgCanDelete" src="'.$direccionAbsolutaHTML.'Images/Icons/Delete_White.png" title="Borrar acceso." />';
				echo '</th>';
					
				//termina el encabezado y cambia la variable para que ya no se imprima de nuevo el encabezado.
				echo '</tr>';
				echo '</thead>';
				$ImprimirEncabesados= false;
					
				//prepara el cuerpo de la tabla
				echo '<tbody>';

			}

			echo '<tr>';
			//Genera los renglones de la tabla
			while(list($var, $val) = each($row)) {
				if($var == 'Id')
				{
					//mete el id en la tabla sin embargo lo oculta
					echo '<td style="display:none;">';
					print "$val";
					echo '</td>';
				}else{
					echo '<td style="width:24px;">';
					print "$val";
					echo '</td>';

					//imprimer los 3 checkbox
					echo '<td style="width:30px;text-align:center;">';
					echo '<input type="checkbox" name=""></input>';
					echo '</td>';
					echo '<td style="width:30px;text-align:center;">';
					echo '<input type="checkbox" name=""></input>';
					echo '</td>';
					echo '<td style="width:30px;text-align:center;">';
					echo '<input type="checkbox" name=""></input>';
					echo '</td>';
				}
			}

			echo '</tr>';
			//print "<br />";
			++$rowcount;
		}
	}
	//cierra el cuerpo de la tabla y la tabla
	echo '</tbody>';
	echo '</table>';

}


//echo 'termino el archivo, ejecusion correcta.'
?>