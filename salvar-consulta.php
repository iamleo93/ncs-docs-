<br>
<?php
	$especialidade   = @$_REQUEST["especialidade_consulta"];
	$dia             = @$_REQUEST["dia_consulta"];
	$hora            = @$_REQUEST["hora_consulta"];
	
	switch($_REQUEST["acao"]){
		case "agendar":
			$sql = "INSERT INTO consulta (especialidade_consulta, dia_consulta, hora_consulta) VALUES ('{$especialidade}', '{$dia}', '{$hora}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
		break;
		case "editar":
			$sql = "UPDATE consulta SET
                        especialidade_consulta='{$especialidade}',
						dia_consulta='{$dia}',
						hora_consulta='{$hora}',
					WHERE
						id_consulta=".$_REQUEST["id_consulta"];
						
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Editou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível editar</div>"; 
			}
		break;
		case "excluir":
			$sql = "DELETE FROM consulta WHERE id_consulta=".$_REQUEST["id_consulta"];
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
		break;
	}
?>






