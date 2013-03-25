<?php

//no funcionan, hay que implementar todavia.
//include_once 'GenerarTabla.php';

function GenerarGridCentral($funcion)
{
	
	echo '<div class="complexField">
	<div class="field">
	<div id="cphContenido_upListing">
	<div class="RadGrid RadGrid_Default">';
		
	//Genera la tabla entregandole un stored procedure.
	GenerarTabla($funcion);
		
	echo '</div>
	</div>
	</div>
	</div>';
	
}

?>

