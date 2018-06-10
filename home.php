<?php 
	require ("db.php");
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header ("Location: index.php?msg=2");
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body><br>
	<center><h2>Bem Vindo ao Sistema.</h2></center>
	<br>
</body>
</html>


<p align="center"><iframe src="https://calendar.google.com/calendar/embed?src=neocaresystem%40gmail.com&ctz=America%2FSao_Paulo" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe></p>
<a target="_blank" href="https://calendar.google.com/event?action=TEMPLATE&amp;tmeid=MnB1NjUzbjl2a2wwZXAxNjVoNzFrdGh1MWcgbmVvY2FyZXN5c3RlbUBt&amp;tmsrc=neocaresystem%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_pt-BR.gif"></a>