<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Exercício 2</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 3 - Exercício 2</h1>

	<?php include_once 'menu.php';  ?>

	<h2>Calcular o volume de uma caixa:</h2>

	<form action="respostas.php" method="get">
		
		<p>
			<label>Largura:</label><br>
			<input type="number" name="largura" min="1" required>
		</p>

		<p>
			<label>Altura:</label><br>
			<input type="number" name="altura" min="1" required>
		</p>

		<p>
			<label>Comprimento:</label><br>
            <input type="number" name="comprimento" min="1" required>
		</p>

		<p>
			<button type="subimt" name="ex2">Enviar</button>
		</p>

	</form>

</body>
</html>