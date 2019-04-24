<?php
session_start();

if(!isset($_SESSION['id'])){
	header("Location: logout.php");
}

include 'connection.php';
// include 'util/filtro.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Associados</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/setor.css">
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/setor.js"></script>
</head>
<body>
<?php include 'navbar.html'; ?>
<center>
<br>
<h1>Setores</h1>
<table id="tabelasetor" class="table table-striped">
	<tr>
		<th>Nome</th>
		<th>Qtd de Pessoas</th>
		<th></th>
	</tr>
	<?php
	$sql = "SELECT S.id as setorId, S.nome, count(A.id) as qtdpessoas FROM associado A 
					RIGHT JOIN setor S ON A.id_setor = S.id 
					GROUP BY  S.id ";
	$result = $conn->query($sql);

	if($result){
		while($row = $result->fetch_assoc()){
			echo "<tr>";
			echo "<td>".$row['nome']."</td>";
			echo "<td>".$row['qtdpessoas']."</td>";

			$urlId = "idSetor=".$row['setorId'];

			$viewbutton = "<a href='formsetor.php?modo=view&$urlId'><img src='assets/viewbutton.png'></a> ";
			$editbutton = "<a href='formsetor.php?modo=edit&$urlId'><img src='assets/editbutton.png'></a> ";
			$deletebutton = "<a href='formactionsetor.php?$urlId'><img src='assets/deletebutton.png'></a> ";

			$links = $viewbutton.$editbutton.$deletebutton;

			echo "<td>".$links."</td>";
			echo "</tr>";	
		}
	} else {
		die("deu ruim");
	}

	?>
</table>
</center>

</body>
</html>