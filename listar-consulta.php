<!DOCTYPE html>

<html lang="pt-BR">


	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>NCS</title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet" >
	</head>
	<body class="bg-primary">
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand"><i class="fas fa-briefcase-medical"></i></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item active">
                        <a class="nav-link" href="pagina_inicial.php">Home</a>
					</li>
					<li class="nav-item active">
                        <a class="nav-link" href="cadastro.php">Cadastro de Paciente</a>
					</li>
					<li class="nav-item active dropdown">
						<a class="nav-link" href="agendar-consulta.php">Agendar Consulta</a>
					
					</li>
					
					<li class="nav-item active dropdown">
						<a class="nav-link" href="listar-consulta.php">Ver Consultas </a>
					
					</li>
					<li class="nav-item active">
                    <a class="nav-link" href="logout.php"><h4>sair</h4></a>
					</li>
				</ul>
			</div>
		</nav>
<br>
<h1>Listar Consulta</h1>
<?php
	$sql = "SELECT * FROM consulta";
	
	$result = $conn->query($sql);
	
	$qtd = $result-> num_rows;
	
	if($qtd > 0){
		print "<br>Encontrou <b>$qtd</b> resultado(s)";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>Especialidade</th>";
		print "<th>Dia</th>";
		print "<th>Hora</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $result->fetch_assoc()){	
			print "<tr>";
			print "<td>".$row["id_consulta"]."</td>";
			print "<td>".$row["especialidade_consulta"]."</td>";
			print "<td>".$row["dia_consulta"]."</td>";
			print "<td>".$row["hora_consulta"]."</td>";
			print "<td>
					
					<button class='btn btn-success' onclick=\"location.href='listar-consulta.php?page=edit-consulta&id_consulta=".$row["id_consulta"]."';\"><i class='fa fa-edit'></i></button>
					
					<button class='btn btn-danger' onclick=\"location.href='listar-consulta.php?page=salvar-consulta&acao=excluir&id_consulta=".$row["id_consulta"]."';\"><i class='fa fa-trash'></i></button>
					
				   </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultados";
	}
	
?>