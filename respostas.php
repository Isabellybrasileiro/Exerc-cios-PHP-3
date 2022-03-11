<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Aula 3 - Respostas</title>
	<link rel="stylesheet" type="text/css" href="css/meuestilo.css">
</head>
<body>

	<h1>Aula 3 - Respostas</h1>

	<?php include_once 'menu.php'; ?>

	<h2>Esta página exibe apenas as respostas dos exercícios.</h2>

	<?php 

	//verificar se o formulário que contem o botão enviarEx1 foi enviado.
	if (isset($_POST['enviarEx1'])) 
	{

		//receber os dados do formulário do Ex1.
		$nome = $_POST['nome'];
		$salario = $_POST['salario'];
		$percentual = $_POST['percentual'];

		//processamento
		$percentual_decimal = $percentual/100;
		$aumento = $percentual_decimal * $salario;
		$salario_final = $salario + $aumento;

		echo "<h3>Resposta Ex 1:</h3>";

		echo "<h3>$nome, seu salário atual é R\$ $salario, você recebeu $percentual % de aumento (R\$ $aumento), e seu salário final é R\$ $salario_final</h3>";

		//verificar se o formulário que contem o botão enviarEx2 foi enviado.
		if (isset($GET['enviarEx2'])) 
		{
			$largura = $GET['largura'];
			$altura = $GET['altura'];
			$comprimento = $GET['comprimento'];

			//processamento
			$volume = $largura * $altura * $comprimento;

			$volume = number_format($volume, 1);

			echo "<h3>Resposta Exercício 2:</h3>";

			echo "<h3>Volume da Caixa (L x A x C = $largura x $altura x $comprimento) = $volume cm";
		}




    }

     ?>

</body>
</html>