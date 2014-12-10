<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Verbos alemanes</title>
	</head>
	<body id="dt_example">
		<div id="container">
			<h1>Estados de EEUU</h1>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="estados">
				<thead>
					<tr>
						<th>id </th>
						<th>Nombre </th>
						<th>Abreviatura </th>
					</tr>
				</thead>
				<tbody>
					<?php		
						include 'db_connect.php';
						print "PRUEBA PHP!! <br>";
					 /*mysql.hostinger.es*/
						//$idConn = mysql_connect("$mysql_service.address.public:$mysql_service.port","$mysql_service.username","$mysql_service.password");
						//mysql_select_db('prueba',$idConn);
						//$query = 'SELECT * FROM prueba.estados';
						//$res = mysql_query($query, $idConn) or die(mysql_error());
						$get = new Connection("db1");
						$res = $get->query("SELECT * FROM estados");
						print "Numero de estados: ";
						print mysql_num_rows($res);
						print "\n\r";
						$rowarray = $get->fetch($res);
						print "<table>\n\r";  
						foreach ($rowarray as $row) {
  						 print "<tr>\n\r";  
    					foreach ($row as $col) {
        				print "\t<td>$col</td>\n\r";
  						}
  						 print "</tr>\n\r";
						}
					?>


					 
				</tbody>
			</table>
		</div>
	</body>
</html>
