<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Verbos alemanes</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style type="text/css">
			@import "DataTables-1.9.4/media/css/demo_page.css";
			@import "DataTables-1.9.4/media/css/demo_table.css";
		</style>
		<script type="text/javascript" src="DataTables-1.9.4\media\js\jquery.js"></script>
		<script type="text/javascript" src="DataTables-1.9.4\media\js\jquery.dataTables.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$("#estados").dataTable({
					"aaSorting": [[ 0, "asc" ]],
				} );
			} );
		</script>
	</head>
	<body id="dt_example">
		<div id="container">
			<h1>Estados de EEUU</h1>
			<table cellpadding="0" cellspacing="0" border="0" class="display" id="verbos">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombre</th>
						<th>Abreviatura</th>
					</tr>
				</thead>
				<tbody>
					 
				</tbody>
			</table>
		</div>
	</body>
</html>
