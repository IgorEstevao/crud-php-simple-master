<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<script>
	function alerta(){
		console.log("teste")
		return confirm('tem certeza que qr deletar?')
	}
</script>

<body>

<h1>Sistema Simples</h1>

<button></button>
<a href="add.html">adicionar novo usuario</a><br/><br/>

	<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Idade</th>
	  <th scope="col">Email</th>
	  <th scope="col">Editar</th>
	  <th scope="col">Excluir</th>
    </tr>
  </thead>


	<?php 
	include_once("config.php"); //fazendo referencia para o arquivo config, nele faz a conexao com o banco
	
	//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
	$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); //faz um query e retona em ordem de add 
	$teste = 2;
	
	while($res = mysqli_fetch_array($result)) { //while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
		
		echo "<tbody>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['age']."</td>";
		echo "<td>".$res['email']."</td>";
		echo "<td><a type='button' class='btn btn-primary' href=\"edit.php?id=$res[id]\">Editar</a></td>";
		echo "<td><a type='button' class='btn btn-danger' href=\"delete.php?id=$res[id]\"  onClick='alerta()'>Excluir</a></td>";		
		//echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		echo "</tbody>";
	}
	?>
	</table>
</body>
</html>

