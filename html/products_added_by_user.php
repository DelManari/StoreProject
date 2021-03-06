	<?php 

session_start();
?>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			background-color: darkgray;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>



<?php 

	$dbname = 'storeproject';
	$dbuser = 'root';
	$dbpass = '';
	$dbhost = 'localhost';
	$mysqli = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
		$username = $_SESSION['username'];
	$query = "SELECT id FROM user WHERE username ='$username'";
	$result = $mysqli->query($query);
	$row =  mysqli_fetch_array ($result);
	$id= $row['id'];
	$sql    = "SELECT product.id,product.label,categorie.name,user.username,product.qte,product.prix FROM categorie,user,product where user.id = product.id_seller and product.id_cat = categorie.id and user.id='$id'";
	$result = $mysqli->query($sql);

	?>
	
	<table class="data-table">
		<h1 style="color:#e1edff;    font-family: verdana;font-size: 300%;    text-transform: uppercase;">Products List<h1>
		<thead>
			<tr>
				<th>Id</th>
				<th>Label</th>
				<th>Categorie</th>
				<th>Seller Name</th>
				<th>Quentity Stock</th>
				<th>Prix Unit</th>


			</tr>
		</thead>
		<tbody>
	<?php
		if($result ==  false)echo "errrrr";
		else{
		while ($row = mysqli_fetch_array($result))
		{
			echo '<tr>
					<td>'.$row['id'].'</td>
					<td>'.$row['label'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['username'].'</td>
					<td>'.$row['qte'].'</td>
					<td>'.$row['prix'].'</td>

				</tr>';
			
		}
		}
		?>
		</tbody>

	</table>
	
	
	