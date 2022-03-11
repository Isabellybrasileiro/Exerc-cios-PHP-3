<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Execício 1</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 3 - Exercício 1</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Dados do Funcionário</h2>

	<form action="respostas.php" method="post">

		<p>
			<label>Nome:</label><br>
			<input type="text" name="nome" maxlength="40" required>
		</p>

		<p>
			<label>Salário Atual:</label><br>
			<input type="number" name="salario" step="0.01" min="800" max="8000" required>
		</p>

		<p>
			<label>Percentual de aumento:</label><br>
			<input type="number" name="percentual" min="1" max="100" step="0.1" required> 
		</p>

		<p>
			<button type="submit" name="enviarEx1">enviar</button>
		</p>
		
    </form>

</body>
</html>