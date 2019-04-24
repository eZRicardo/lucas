<?php
	session_start();

	if(!isset($_SESSION['id'])){
		header("Location: logout.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Formulário Setor</title>
</head>
<body>

</body>
</html>