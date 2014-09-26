<?php
class Conexion{

function _construct(){}

public function obtenerConexion(){

$link = mysql_connect("localhost","root","");
mysql_select_db("bd_ejemplo",$link);

return $link;
}

}

?>
