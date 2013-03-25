<!DOCTYPE html>
<html>
<head>
<title>Catalogo de roles</title>
<?php 
//incluye todas las hojas de estilo y los javascripts
include 'Header/Header.php';
//incluye las herramientas
//include '../Herramientas/GenerarTabla.php';
//include '../Herramientas/Debug.php';
//incluye el titulod pagina;
//include 'Header/TituloDePagina.php';
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
			GeneraTituloPagina('Cat&aacute;logo de roles', 'Consultar, agregar, editar o eliminar
					privilegios del sistema.', '../Images/Icons/Module/IdCard_Large.png', 'Consultar, agregar, editar o eliminar
					privilegios del sistema.');
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
					class="imageButton" src="../Images/Icons/Search.png" /> <a
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
							GenerarTabla("Call GetRoles()","../../webPages/CatalogoRoles","'../Connection/ConnectionBySection/Rol/EliminarRol.php'");
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
						class="closeButton imageButton" src="../Images/Icons/Close.png"
						onClick="document.getElementById('cphContenido_upDetail').style.visibility = 'Hidden';" />
				</div>
				<form method="post" id="frmGuardaNuevoRol" name="frmGuardaNuevoRol"
					action="">
					<div class="regularField">
						<div class="label">
							<label id='lblNombre'>Nombre</label>
						</div>
						<div class="field">
							<input type="text" id="txtNombre" name="txtNombre" />
						</div>
						<div class="label">
							<label id='lblDescripcion'>Descripci&oacute;n</label>
						</div>
						<div class="field">
							<input type="text" id="txtDescripcion" name="txtDescripcion" />
						</div>
					</div>
					<div class="complexField">
						<div class="label">
							<span>Privilegios de acceso</span>
						</div>

						<?php //seccion en donde va la tabla con checkbox en el modalbox de "agregar, inicio.

							//metodo que genera la tabla de checbos GeneraTablaCheckBox(sql,id,action)
							GenerarTablaCheckBox("Call GetModulos()");

							//seccion en donde va la tabla con checkbox en el modalbox de "agregar, fin. ?>

					</div>
					<div class="buttonPanel">
						<a
							onclick="document.frmGuardaNuevoRol.action='../Connection/ConnectionBySection/Rol/GuardarRol.php';document.frmGuardaNuevoRol.submit();"
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
		GetFooter(); ?>

</body>
</html>



