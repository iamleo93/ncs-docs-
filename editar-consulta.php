
<h1>Editar Consulta</h1>
<?php
	$sql = "SELECT * FROM consulta AS c
			WHERE id_consulta=".$_REQUEST["id_consulta"];
	
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		$row = $result->fetch_assoc();
?>
<form action="index.php?page=salvar-consulta&acao=editar&id_consulta=<?php print $row["id_consulta"]; ?>" method="POST">
	<div class="form-group">
		<label>Nome da Consulta</label>
		<input type="text" name="nome_consulta" class="form-control" value="<?php print $row["nome_consulta"]; ?>">
	</div>
	<label>Dia</label>
		<input type="date" name="dia_consulta" class="form-control" value="<?php print $row["ano_consulta"]; ?>">
	</div>
	<div class="form-group">
		<label>hora</label>
		<input type="float" name="valor_consulta" class="form-control" value="<?php print $row["valor_consulta"]; ?>">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
<?php
	} //final do if
?>