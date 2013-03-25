<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
		<?php 
			$direccionAbsolutaPHP = '/opt/lampp/htdocs/Git/AdminGym/AdminGym/Gym/';
			$direccionAbsolutaHTML = '/Git/AdminGym/AdminGym/Gym/';
		?>
		
		
		<link rel="icon" type="image/png" href="../Images/FavIcon.ico" />
		<link rel="stylesheet" type="text/css"href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<link rel="stylesheet" type="text/css" href="<?php echo $direccionAbsolutaHTML;?>Superfish.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $direccionAbsolutaHTML;?>Styles/Fancybox.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $direccionAbsolutaHTML;?>Styles/Style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $direccionAbsolutaHTML;?>Styles/menu_assets/styles.css" />
		
		<script src="<?php echo $direccionAbsolutaHTML;?>Scripts/jQuery.js" ></script>
	    <script src="<?php echo $direccionAbsolutaHTML;?>Scripts/jQueryEasing.js" ></script>
	    <script src="<?php echo $direccionAbsolutaHTML;?>Scripts/Menu.js" ></script>
	    <script src="<?php echo $direccionAbsolutaHTML;?>Scripts/Fancybox.js" ></script>
	    <script src="<?php echo $direccionAbsolutaHTML;?>Scripts/TBBMs.js" ></script>
	    <script src="<?php echo $direccionAbsolutaHTML;?>Scripts/GenerateMenu.js" ></script>

	    <?php 
	    //incluye conexion a la base de datos
	    include_once $direccionAbsolutaPHP.'Connection/MainConnection.php';
	    //incluye las herramientas
	    include_once $direccionAbsolutaPHP.'Herramientas/GenerarTabla.php';
	    //incluye herramientas de Debug
	    include_once $direccionAbsolutaPHP.'Herramientas/Debug.php';
	    //incluye herramientas de controles
	    include_once $direccionAbsolutaPHP.'Herramientas/Controles.php';
	    //incluye el titulod pagina;
	    include_once $direccionAbsolutaPHP.'webPages/Header/TituloDePagina.php';
	    //incluye el titulod pagina;
	    include_once $direccionAbsolutaPHP.'webPages/Header/GenerarMenuSitio.php';
	    //incluye el footer
	    include_once $direccionAbsolutaPHP.'webPages/Footer/Footer.php';
	    ?>
	   