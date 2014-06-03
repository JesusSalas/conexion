<?php
include "conexion.php";

$query="SELECT * FROM Powercli";
$result=mysql_query($query);

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/jquery-2.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>

	<meta charset=utf-8>

	<title>Virtual Machines</title>
</head>
<body>
	<div class="jumbotron">
	  <h1 ALIGN=center>Virtual Machines</h1><br>
	  <table width="100%" align="center" border=0 cellspacing=2>
	  	<tr>
	  		<th>Nombre</th>
	  		<th>Cluster</th>
	  		<th>Folder</th>
	  		<th>CPU</th>
	  		<th>MemoryGB</th>
	  		<th>Fecha</th>
	  	</tr>
	  	<?php
	  	while($res=mysql_fetch_row($result)){
	  		?>
	  		<tr>
	  			<td>
	  				<?php echo $res[0];?>
	  			</td>
	  			<td>
	  				<?php echo $res[1];?>
	  			</td>
	  			<td>
	  				<?php echo $res[2];?>
	  			</td>
	  			<td>
	  				<?php echo $res[3];?>
	  			</td>
	  			<td>
	  				<?php echo $res[4];?>
	  			</td>
	  			<td>
	  				<?php echo $res[5];?>
	  			</td>
	  		</tr>
	  	<?php
	  	} ?>
	  </table>
	</div>
</body>
</html>