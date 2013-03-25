
<?php 
function GeneraMenuSitio(){

//obtiene el menu completo
$sqlCompleto = "Call GetMenu('862a262f-5215-11e2-b711-c8bcc88c0ecc')";
//ejecuta query para el menu completo
$result = ejecutaQuery($sqlCompleto);


/**No modificar, estas funcionens hacen el menu **/
// Create a multidimensional array to conatin a list of items and parents
$menu = array(
		'items' => array(),
		'parents' => array()
);
// Builds the array lists with data from the menu table
while ($items = mysql_fetch_assoc($result))
{
	// Creates entry into items array with current menu item id ie. $menu['items'][1]
	$menu['items'][$items['Id']] = $items;

	// Creates entry into parents array. Parents array contains a list of all items with children
	$menu['parents'][$items['IdPadre']][] = $items['Id'];

}

/**No modificar, estas funciones hacen el menu **/
// Menu builder function, parentId 0 is the root
function buildMenu($parent, $menu)
{
	$html = "";
	if (isset($menu['parents'][$parent]))
	{
		$html .= "
		<ul>\n";
		foreach ($menu['parents'][$parent] as $itemId)
		{
			if(!isset($menu['parents'][$itemId]))
			{
				$html .= "<li>\n  <a href='".$menu['items'][$itemId]['Url']."'>".$menu['items'][$itemId]['Nombre']."</a>\n</li> \n";
			}
			if(isset($menu['parents'][$itemId]))
			{
				$html .= "
				<li class='has-sub'>\n  <a href='".$menu['items'][$itemId]['Url']."'><span>".$menu['items'][$itemId]['Nombre']."</span></a> \n";
				$html .= buildMenu($itemId, $menu);
				$html .= "</li> \n";
			}
		}
		$html .= "</ul> \n";
	}
	return $html;
}

//tiene que tener el ID del MenuBase, el cual es padre de todas las paginas web
echo "<div id='cssmenu' class='headerPanel'>";
echo buildMenu('eef8a0a2-52d3-11e2-bc0e-c8bcc88c0ecc', $menu);
echo '</div>';
}
?>




