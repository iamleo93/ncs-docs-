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
		
		<p></p>
		<font size="3"><B>Usuário de Acesso ao Site</B></p></font>
		<table>	
			<form>
				<tr>
					<td>Nome</td><td><input type=text name="nome"></td>
				<tr>	
					<td>E-mail</td><td><input type=text name="e-mail"></td>
				<tr>	
					<td>Confirmar e-mail</td><td><input type=text></td>
				
			</form>
		</table>	
		<p></p>
		<font size="3"><B>Dados Pessoais</B></p></font>
		<table>
			<form >
				<tr>	
					<td>RG</td><td><input type=text></td>
				<tr>	
					<td>CPF</td><td><input type=text></td>
				<tr>	
					<td>Telefone</td><td><input type=text></td>	
				
			</form>
		</table>	
		<p></p>
		<font size="3"><B>Endereço</B></p></font>
		<table>
			<form>
				<tr>	
					<td>CEP</td><td><input type=text></td>				
				<tr>	
					<td>Número</td><td><input type=text></td>		
				<tr>	
					<td>Complemento</td><td><input type=text></td>
				<tr>	
					<td>Estado</td><td><input type=text></td>
				<tr>	
					<td>Cidade</td><td><input type=text></td>				
				<tr>	
					<td>Bairro</td><td><input type=text></td>
				<tr>
					<td>Login</td><td><input type=text></td>
				<tr>
					<td>Senha</td><td><input type=text></td>
					
				<tr>
				
					<td><input type="submit" value="Enviar"></td>
					<td><input type="reset" value="Limpar"></td>
				
			</form>
		</table>
		<p>
		
	</body>
</html>