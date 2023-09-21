<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require "../../model/ModeloBase.php";
	
	$output = "";
	$id = $_GET['id'];
	if(ISSET($_GET['id'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Numero</th>
						<th>Codigo</th>
						<th>Fecha</th>
					</tr>
				<tbody>
		";
		
		$query = pg_query($conexion, "SELECT id,numero,codigo,fecha FROM facturas WHERE id = '$id'");
		while($fetch = pg_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id']."</td>
						<td>".$fetch['numero']."</td>
						<td>".$fetch['codigo']."</td>
						<td>".$fetch['fecha']."</td>
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>