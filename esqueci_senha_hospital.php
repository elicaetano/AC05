<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Recupera Senha</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="assets/css/estilo.css">

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

    <h3 style="text-align: center;color:black;">Recuperando Senha</h3><br>

	<form action="consulta_senha_hospital.php" method="post">
		<p><label style="color: black;" class="tamanho" for="cnpj">CNPJ</label><br>
		<input class="tamanho" type="cnpj" id="cnpj" name="cnpj" placeholder="Digite seu CNPJ" maxlength="15" required autocomplete="off"></p>
			
		<input type="submit" class="btn btn-outline-danger tamanho" id="botaoConsulta" value="Consulta">	
	</form>
	<br>

	<P classe="tamanho">
		<a href="navegacao.html"><button id="botao_volta_esqueci_senha" class="btn btn-primary tamanho" >Voltar</button></a>
	</P>	

</body>
