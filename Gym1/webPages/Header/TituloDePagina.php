<?php 

function GeneraTituloPagina($titulo, $descripcion, $foto, $fotoDescripcion)
{
	echo '<table style="margin: 50px auto">
	<tr>
		<td class="pageIcon" rowspan="2"><img id="imgPageIcon"
			title="'.$fotoDescripcion.'"
			src="'.$foto.'" alt="Icono" />
		</td>';
	echo '<td class="title1 titleText" colspan="2">'.$titulo.'</td>';
	echo '</tr>
		  <tr>';
	echo '<td class="title3 titleText">'.$descripcion.'</td>';
	echo '<td class="shortcutButtons">
			<div class="right">
				<a
					onclick="javascript:setTimeout(function(){ disableButton(document.getElementById(&#39;btnHome&#39;), &#39;&#39;); }, 1250); return false;"
					id="btnHome" title="Ir a la p&aacute;gina de inicio."
					class="home button" href="">Regresar a inicio</a> <a
					onclick="javascript:setTimeout(function(){ disableButton(document.getElementById(&#39;btnLogout&#39;), &#39;&#39;); }, 1250); return false;"
					id="btnLogout" title="Cerrar sesi&oacute;n." class="logout button"
					href="">Cerrar sesi&oacute;n</a>
			</div>
		</td>
	</tr>
</table>';
}
?>



