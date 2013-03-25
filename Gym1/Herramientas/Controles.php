<?php
//funcion que genera un dropdown menu desde la base de datos, necesita estar dentro de una forma para funcionar.
function GenerarComboBox($sql,$nombre,$id)
{
	$result = ejecutaQuery($sql);

	if (mysql_num_rows($result)!=0)
	{
		echo '<select name="'.$nombre.'" id="'.$id.'">
		<option value=" " selected="selected">Elige una...</option>';
		while($drop_2 = mysql_fetch_array( $result ))
		{
			echo '<option value="'.$drop_2['Nombre'].'">'.$drop_2['Nombre'].'</option>';
		}
		echo '</select>';

	}
}
?>