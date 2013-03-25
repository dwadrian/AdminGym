<!DOCTYPE html>
<html>
<head>
<title>Catalogo de pa&iacute;s, estados y municipios.</title>
<?php 
//incluye todas las hojas de estilo, javascripts y phps.
include_once '../Header/Header.php';
?>
</head>
<body>
	<?php 
	//genera el menu del sitio
	GeneraMenuSitio();

	?>

	<div class="siteWrapper">
		<?php //genera el encabezado de pagina. ?>
		<div class="pageHeader">
			<?php 
			GeneraTituloPagina('Cat&aacute;logo de pa&iacute;s, estados y municipios.', 'Consultar, agregar, editar o eliminar
					regiones al sistema.', '../../Images/Icons/Module/IdCard_Large.png', 'Consultar, agregar, editar o eliminar
					regiones al sistema.');
			?>
		</div>
		<?php //genera el resto de la pagina ?>
		<div class="hr"></div>
		<?php //genera el listado o la tabla del catalogo ?>
		<div class="left card sixtySix">
			<div class="titlePanel">
				<h2>Listado de roles</h2>
			</div>
			<div class="search">
				<input name="" type="text" id="" name="Buscar" /> <input
					type="image" name="" id="" title="Realizar una b�squeda."
					class="imageButton" src="../../Images/Icons/Search.png" /> <a
					style="position: relative; left: 580px; top: -35px;"
					onclick="javascript:setTimeout(function(){ disableButton(document.getElementById(&#39;btnHome&#39;), &#39;&#39;); }, 1250); document.getElementById('cphContenido_upDetail').style.visibility = 'visible';return false;"
					id="btnAgregar" title="Agregar nuevo rol." class="home button">Nuevo
					rol</a>
			</div>
			<?php //seccion en donde va la tabla de contenido en el centro, inicio. ?>
			<div class="complexField">
				<div class="field">
					<div id="cphContenido_upListing">
						<div class="RadGrid RadGrid_Default">
							<?php 
							//Genera la tabla entregandole un stored procedure.
							GenerarTabla("Call GetPaisEstadoCiudad()","../../webPages/Catalogos/Pais","''");
							?>
						</div>
					</div>
				</div>
			</div>
			<?php //seccion en donde va la tabla de contenido en el centro, fin. ?>
		</div>
		<?php //genera el popup para agregar datos ?>
		<div id="cphContenido_upDetail" style="visibility: hidden">
			<div class="right third card" onkeypress="">

				<div class="titlePanel">
					<h2>Datos del registro</h2>
					<input type="image" name=""
						title="Cancelar acci&oacute;n y cerrar forma."
						class="closeButton imageButton" src="../../Images/Icons/Close.png"
						onClick="document.getElementById('cphContenido_upDetail').style.visibility = 'Hidden';" />
				</div>
				<?php //forma que permite guardar los valores?>
				<form method="post" id="frmGuardarRegion" name="frmGuardarRegion"
					action="">
					<div class="regularField">
						<div class="label">
							<label id='lblNombre'>Pa&iacute;s</label>
							 <img class="img" alt="Agregar Pa&iacute;s" src="../../Images/Icons/Add_Black.png" 
							 onclick="document.getElementById('ModalPais').style.visibility = 'visible';"/>
						</div>
						
						<div class="field">
							<?php GenerarComboBox('Call GetPaises()', 'ddlPais', 'ddlPais'); 

							?>
						</div>
						
						<div id="ModalPais" class="modalDialog" Style="visibility: hidden">
							<div>
							<img class="img" alt="Agregar Pa&iacute;s" src="../../Images/Icons/Cancel_Black.png" 
							 onclick="document.getElementById('ModalPais').style.visibility = 'hidden';"/>
							</div>
						</div>
						
						<div class="label">
							<label id='lblEstado'>Estado</label>
							<img class="img" alt="Agregar Pa&iacute;s" src="../../Images/Icons/Add_Black.png" />
						</div>
						<div class="field">
							<?php GenerarComboBox('Call GetEstados()', 'ddlEstado', 'ddlEstado'); 

							?>
						</div>
						<div class="label">
							<label id='lblCiudad'>Municipios</label>
							<img class="img" alt="Agregar Pa&iacute;s" src="../../Images/Icons/Add_Black.png" />
						</div>
						<div class="field">
							<?php GenerarComboBox('Call GetMunicipios()', 'ddlMunicipio', 'ddlMunicipio'); 

							?>
						</div>
					</div>
					<div class="complexField">
						<div class="label">
							<!--  <span>Nuevas regiones</span>-->
						</div>
						<?php //seccion en donde va la tabla en el modalbox de "agregar, inicio.
							//seccion en donde va la tabla en el modalbox de "agregar, fin. ?>
					</div>
					<div class="buttonPanel">
						<a
							onclick="document.frmGuardaNuevoRol.action='';document.frmGuardaNuevoRol.submit();"
							class="full execute button" href="">Guardar</a> <a
							onclick="document.getElementById('cphContenido_upDetail').style.visibility = 'Hidden';"
							class="full cancel button">Cancelar</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php 
	//genera el footer de la pagina
	GetFooter();


	?>
</body>
</html>



