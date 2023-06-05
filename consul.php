
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Recupera Senha</title>
	

<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
<script src="https://kit.fontawesome.com/db3a9100e9.js"></script>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://kit.fontawesome.com/db3a9100e9.js"></script>
</head>
<body>

<div class="tabelaVerificaDoador">
		<header class="cabelhoNavegacao">
			<div class="logo">
				<a href="principal.html"><img src="assets/image/logo.png"></a>
			</div>	
			<div class="navegacao">
			     <nav class="nav nav-pills nav-fill">
					 <a style="color:black;" class="nav-item nav-link " href="hemocentro.html">Conheca o Hemocentro</a>
					  <a style="color:black;"class="nav-item nav-link" href="navegacao.html">Seja um Doador</a>
					  <a style="color:black;"class="nav-item nav-link" href="doencaSangue.html">Doenças do Sangue</a>
					  <a style="color:black;"class="nav-item nav-link" href="perguntas.html">Perguntas Frequentes</a>
				 </nav>
			 </div>
		</header>


<?php
session_start();
?>

<?php 
include 'conexao.php';
$cpf = $_POST['cpf'];
//utilizei session para armazenar e levar o cpf para o outro programa.

$_SESSION['cpf']=$cpf;


//sql para fazer a pesquisa no banco de dados
$sql = "SELECT * FROM doador WHERE cpf='$cpf'";
$carregador = mysqli_query($conn,$sql);
if ($campo=mysqli_fetch_array($carregador)) {
	//abrir formulário para o usuário digitar uma nova senha
	?>
 	<!-- html -->
	<div class="tabelaVerificaDoador">
	<h4 class="tamanho"; >Digite nova senha</h4>
    <form action="atualiza_senha.php" method="post">
 		<label for="senha" class="tamanho">Senha</label>
		<br>
		<input type="password"  style="height 25px;text-align: center"size="15" class="tamanho" name="senha" id="senha" placeholder="Digite nova senha" maxlength="8" required>
		<br><br>
		
		<label for="confsenha" class="tamanho">Confirme a senha</label>
		<br>
		<input type="password"  style="height:25px;text-align: center";size="15"class="tamanho" name="confsenha" id="confsenha" placeholder="Confirme a senha" maxlength="8" required onblur="verifica_senha()">
		<br><br>
		<input id="botao_salvar" class="btn btn-info tamanho" type="submit" value="Salvar">
		<p></p>
		<input id="botao_limpar" class="btn btn-danger tamanho" type="reset" value="Limpar">

 	</form>
 	<script>
 			function verifica_senha() {
		 		var senha=document.getElementById('senha').value;

		 		// var senha;
		 		// senha=document.getElementById('senha').value;
		 		var confsenha=document.getElementById('confsenha').value;

		 		//comparar as senhas
		 		if (senha!=confsenha){
		 			alert ("Senhas não conferem");
		 			document.getElementById('senha').value="";
					document.getElementById('confsenha').value="";
		 		}
		 	}
 	</script>


<?php
}
else
	{
	echo "<script>alert ('Usuário não encontrado!!!');
		window.location.href='navegacao.html';
		</script>";
	}

 ?>