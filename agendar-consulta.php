<!DOCTYPE html>

<html lang="pt-BR">


	<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Neo Care System - NCS</title>
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
	
<h1>Cadastrar Consulta</h1>
<form action="listar-consulta.php?page=listar-consulta&acao=agendar" method="POST">
	<div class="form-group">
		
	</div>
	<div class="form-group">
		<label>Especialidade da Consulta</label>
		<input type="text" name="especialidade_consulta" class="form-control">
	</div>
	<div class="form-group">
		<label>Dia</label>
		<input type="date" name="dia_consulta" class="form-control">
	</div>
	<div class="form-group">
		<label>Hora</label>
		<input type="time" name="hora_consulta" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>