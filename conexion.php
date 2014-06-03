<?php
$conexion=mysql_connect("localhost","powercli","powercli")or die(mysql_error());
mysql_select_db("vspherepowercli",$conexion)or die(mysql_error());

?>