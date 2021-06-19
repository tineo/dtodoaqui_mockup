<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$mysqli = new mysqli("localhost", "keines_dtauser21", "pAsskey21-+*", "keines_dtodoaqui");

//SQL
$items = array();

$term = trim(strip_tags($_GET['search_text']));//retrieve the search term that autocomplete sends
$resultado = $mysqli->query("SELECT * FROM busqueda WHERE palabra LIKE '%".$term."%' ORDER BY coincidencia ASC");

for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    	//$items[] = array('"id" => "'.$fila['idpal'].'", "label" => "'.$fila['palabra'].'", "value" => "Value "'.$fila['idpal'].'"');
    	$items[] = array("label" => $fila['palabra']);
}
echo json_encode($items);
?>