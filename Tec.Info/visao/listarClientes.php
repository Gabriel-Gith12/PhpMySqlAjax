<?php include("../controle/controle_cliente.php")?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Listar Clientes</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js">
		
		
	</script>
</head>
	
	<?php
    // instanciar clase cliente - Start
	$obj_cliente = new Cliente(); 
    // instanciar clase cliente - End
    $arrayClientes = $obj_cliente->busca();

	  ?>
	
<body>
	
	<table border="1">
		<tr>
			<td>Nome</td>	
			<td>Idade</td>
			<td>Ação</td>
			<td>Ação</td>
		</tr>
	
	<?php
	foreach($arrayClientes as $value){ /// Laço do retorno	
	?>
		<tr>
			<td><?php echo $value['nomeCliente']?> </td>
			<td><?php echo $value['idadeCliente']?> </td>
			<td><input type="button" onClick="telaEditar(<?php echo $value['idCliente']?>);" value="Editar"</td>
			<td><input type="button" onClick="deletar(<?php echo $value['idCliente']?>);" value="Deletar"</td>		
		</tr>
	<?php
	}
	  ?>
	</table>
	<br>
		<input type="button" onClick="telaCadastrar();" value="Tela de Cadastro">
	
	<form id="formulario" action="formEditarCadastro.php" method="POST">
		<input type="hidden" id="idFormulario" name="id">
	</form>	  
</body>
</html>