<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="icon" type="image/x-icon" href="img\2 - logo.png">
	<link rel="stylesheet" href="style-login.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>StockEdu - Login</title>
</head>

<body>
	<main>
		<div class="container">
			<form id="login-form">
				<div id="error-message"></div>
				<div id="success-message">
					Cadastro realizado com sucesso!
					<br>
					Clique no link enviado no seu e-mail para entrar na plataforma 
				</div>
				<img id="logo-completa"src="img\3 - Logo-Completa.png" alt="logo-completa-inside-form">
				<hr id="hr-entre-imagem-h2">
                <h1>Novo no StockEdu? Faça o seu cadastro!</h1>
                <br>
                    <input type="text" placeholder="Nome completo">
                    <input type="text" id="email" placeholder="E-mail">
                    <input type="text" placeholder="Usuário">
                    <input type="password" id="password" placeholder="Senha">
				<div id="botoes-main">
					<a id="pagina-registro-a" href="index.php">
						Voltar
					</a>
					<button type="submit" id="entrar-botao-style">
						Cadastrar
					</button>
				</div>
			</form>
		</div>
		<div class="fundo-desktop">
			<div id="solid-transparent-collor"></div>
			<img src="img\1 - main-login.jpg" alt="stars in a sky" id="sky-stars-main-img">
			<img src="img\2 - logo.png" alt="logo in main" id="logo-main">
		</div>
	</main>
	<script src="script-registro.js"></script>
</body>
</html>