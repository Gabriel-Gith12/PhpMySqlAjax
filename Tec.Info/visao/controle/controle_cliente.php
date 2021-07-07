<title>Usuarios Registrado</title>
<?php
/// Modulos - Start
include("../../controle/controle_cliente.php");
	
/// Modulos - End

/// Recebe Valores - Start
$nomeCliente  = $_POST["nome"];
$idadeCliente = $_POST["idade"];
$idCliente    = $_POST["id"];

$acao         = $_POST["acao"];
/// Recebe Valores - End

/// instanciar clase cliente - Start
$obj_cliente = new Cliente(); 
/// instanciar clase cliente - End

if($acao == "insere"){	

	/// Chama metodo - Start
    $result = $obj_cliente->insere($nomeCliente, $idadeCliente );
	/// Chama metodo - End
	
}else if($acao == "Altera"){
	
	/// Chama metodo - Start
    $result = $obj_cliente->atualizar($nomeCliente, $idadeCliente, $idCliente );
	/// Chama metodo - End
	
}else if($acao == "deletar"){
	
	/// Chama metodo - Start
    $result = $obj_cliente->deletar($idCliente );
	/// Chama metodo - End
}
?>