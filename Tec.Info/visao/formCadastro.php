<?php include("../controle/controle_cliente.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Cadastro</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js">
		
	</script>
</head>

<body>
	<form action="" >
		Nome:  <input type="text" name="nome" id="nome" ><br><br>
		Idade: <input type="text" name="idade" id="idade" >
		
		<input type="button" id="inserir" onClick="cadastrar();" value="Gravar">
		<input type="hidden" name="acao" value="insere">
		
	</form>
		<br>
		<input type="button" onClick="telaListar();" value="Tela de Listar Clientes">  
</body>
</html>