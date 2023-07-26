<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	include "../modelo/conexion.php";
	
	$output = "";
	$id = $_GET['id'];
	if(ISSET($_GET['id'])){
		$output .="
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>NAME</th>
						<th>DISTRICT</th>
						<th>POPULATION</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conexion, "SELECT id,name,district,population FROM cities");
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						<td>".$fetch['id']."</td>
						<td>".$fetch['name']."</td>
						<td>".$fetch['district']."</td>
						<td>".$fetch['population']."</td>
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