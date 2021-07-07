<?php include("../controle/controle_cliente.php")?>
<?php $id = $_POST["id"]?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulário de Edição</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script type="application/javascript" src="../js/cliente.js">
		
	</script>
</head>
	<?php
	/// instanciar clase cliente - Start
	$obj_cliente = new Cliente(); 
    /// instanciar clase cliente - End
	
	/// Chama metodo - Start
    $arrayCliente = $obj_cliente->busca($id);
	/// Chama metodo - End
?>
<body>
	<form action="" >
		Nome:  <input type="text" name="nome" id="nome" value = "<?php echo $arrayCliente[0]['nomeCliente']?>"><br><br>		
		Idade: <input type="text" name="idade" id="idade" value = "<?php echo $arrayCliente[0]['idadeCliente']?>" >
		
		<input type="hidden" name="id" id="id" value="<?php echo $arrayCliente[0]['idCliente']?>">
		
		<input type="button" id = "atualizar" onClick="editar();" value="Alterar">
		<input type="hidden" name="acao" value="Altera">
		
	</form>
		<br>
		<input type="button" onClick="telaListar();" value="Tela de Editar Clientes">
</body>
</html>