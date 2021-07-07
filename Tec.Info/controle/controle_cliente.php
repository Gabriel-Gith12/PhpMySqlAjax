<?php
/// Load Modelo - Star
include($_SERVER['DOCUMENT_ROOT']."/modelo/conexaoBD.php");

/// Load Modelo - End

class Cliente{
	
	public function busca($id = false){
		
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		/// Instrucoes SQL select - Start

		$sql = "SELECT * FROM cliente";
		
		if($id>0){
			
			$sql .= " WHERE idCliente = ".$id;
		}

        $resultado   = mysqli_query($conectar,$sql);
		  $r = 0;
		
        while($dados = mysqli_fetch_assoc($resultado)){	
		$linha[$r]['idCliente']    = $dados['idCliente'];	
	    $linha[$r]['nomeCliente']  = $dados['nomeCliente'];
	    $linha[$r]['idadeCliente'] = $dados['idadeCliente'];
		  $r++;
   }
		
		/// $resultado = 'Mostra Cliente';
		/// Instrucoes SQL select - Start
		
		/// Popular Variáveis
		return $linha; /// Enviar valores para a instancia
		
	}
	
	function insere($nome,$idade){
		$resultado = true;
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlInsert = 
		"INSERT INTO cliente ( 
		     nomeCliente, 
		     idadeCliente
		) VALUES (
		    '".$nome."',
		    '.$idade.');
		    ";
		mysqli_query($conectar,$sqlInsert)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
		
        }
	
	function atualizar($nome,$idade,$id){
		$resultado = true;
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlUpdate = "
		UPDATE cliente set nomeCliente='".$nome."', idadeCliente=".$idade." 
		WHERE idCliente =" . $id;
	
		 /// return $sqlUpdate;
		mysqli_query($conectar,$sqlUpdate)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
	}
	function deletar($id){
		$resultado = true;
		$obj_con  = new ConexaoBD();
		$conectar = $obj_con->con();
		
		/// montar a instrução SQL  e executar
		$sqlDelete = "DELETE FROM cliente WHERE idCliente =" . $id;

		 /// return $sqlUpdate;
		mysqli_query($conectar,$sqlDelete)or die($resultado = false);
		
		if($resultado === false){
			return false;
		}else{
			return true;
		}
	}
}
?>