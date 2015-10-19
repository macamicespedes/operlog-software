<?php 
defined("CLAVE5") or die ("Acceso No Autorizado");

$bd1=new subase();
$sql="SELECT m.id_menu,titulo,global from aux_perfiles_menus a LEFT JOIN menus m ON a.id_menu=m.id_menu where a.id_perfil=".$_SESSION["AUT"]["id_perfil"]." ORDER BY m.global DESC";
//echo "$sql";
if ($tabla=$bd1->sub_tuplas($sql)){

	foreach ($tabla as $fila) {
		
		echo '<a  href="'.PROGRAMA.'?opcion='.$fila["id_menu"].'">'.$fila["titulo"].'</a></br>';
			
	}
}else{
		echo"No posee opciones de menu, Consulte con su administrador.";
	}

?>	