<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cadastrar-se</title>
	<!-- ***** ESTILIZAÇÃO ***** -->
	<link href="recursos/css/reset.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<link href="recursos/css/geral.css" rel="stylesheet">
	<link href="recursos/css/header.css" rel="stylesheet">
	<!-- ***** ESTILIZAÇÃO ***** -->
	<!-- ***** PROGRAMAÇÃO ***** -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<script src="recursos/javascript/principal.js"></script>
	<script src="recursos/javascript/cadastro.js"></script>
	<!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<header>
		<nav class="navbar">
			<h2 style="font-family: 'Josefin Sans', sans-serif; color: #ff4400; margin-bottom: 0;">FUTUREMOB</h2>
		</nav>
	</header>
	<main class="container">
		<form id="formCadastro" method="post" name="Diogao" class="formulario w-100">	
			<h3 class="m-1 mt-5 mb-3">Cadastre-se</h1>
			<!-- Nome, Nasc., CPF e RG -->
			<div class="form-floating m-1">
				<input onfocusout="validarNome('txtNome', 'txtNomeErro');" id="txtNome" type="text" class="form-control" placeholder="Nome completo" name="txt_nome" required>
				<label for="txtNome">Nome completo</label>
				<div id="txtNomeErro" class="invalid-feedback">
				</div>
			</div>
			<div class="d-flex flex-wrap">
				<div class="form-floating flex-fill m-1">
					<input onfocusout="validarDataNascimento('dtNasc', 'dtNascErro');" id="dtNasc" type="date" class="form-control" min="1900-01-01" max="2024-01-01" name="date" required>
					<label for="dtNasc">Data de nascimento</label>
					<div id="dtNascErro" class="invalid-feedback">
					</div>
				</div>
				<div class="form-floating flex-fill m-1">
					<input onfocusout="validarCPF('txtCPF', 'txtCPFerro');" oninput="aplicarMascaraCPF(this);" id="txtCPF" type="text" maxlength="14" class="form-control" placeholder="CPF" name="txt_cpf" required>
					<label for="txtCPF">CPF</label>
					<div id="txtCPFerro" class="invalid-feedback">
					</div>
				</div>
				<div class="form-floating flex-fill m-1">
					<input oninput="aplicarMascaraRG(this);" id="txtRG" type="text" maxlength="12" class="form-control" placeholder="RG" name="txt_rg" required>
					<label for="txtRG">RG</label>
					<div id="txtRGerro" class="invalid-feedback">
					</div>
				</div>
			</div>
			<!-- Contato e senha -->
			<h5 class="m-1 my-3">Contato</h5>
			<div class="d-flex flex-wrap">
				<div class="form-floating flex-fill m-1">
					<input oninput="aplicarMascaraTelefone(this);" id="txtTelefone" type="tel" class="form-control" placeholder="Telefone" name="txt_telefone" required>
					<label for="txtTelefone">Celular com DDD</label>
					<div id="txtTelefoneErro" class="invalid-feedback">
					</div>
				</div>
				<div class="form-floating flex-fill m-1">
					<input onfocusout="validarEmail('txtEmail', 'txtEmailErro');" id="txtEmail" type="email" class="form-control" placeholder="E-mail" name="txt_email" required>
					<label for="txtEmail">E-mail</label>
					<div id="txtEmailErro" class="invalid-feedback">
					</div>
				</div>
				<div class="form-floating flex-fill m-1">
					<input onfocusout="validarComparacaoCampos('txtEmail', 'txtConfirmarEmail', 'txtConfirmarEmailErro', 'Os e-mails não coincidem.');" id="txtConfirmarEmail" type="email" class="form-control" placeholder="Confirmar e-mail" autocomplete="off" name="txt_confirmar_email" required>
					<label for="txtConfirmarEmail">Confirmar e-mail</label>
					<div id="txtConfirmarEmailErro" class="invalid-feedback">
					</div>
				</div>
			</div>
			<div class="d-flex flex-wrap">
				<div class="flex-fill flex-sm-fill m-1">
					<div class="form-floating ">
						<input onfocusout="validarCriteriosSenha('txtSenha', 'txtSenhaErro');" id="txtSenha" type="password" class="form-control" placeholder="Senha" name="txt_senha" required>
						<label for="txtSenha">Senha</label>
						<i onclick="visualizarSenha('txtSenha');" class="fa-solid fa-eye-slash olho-senha"></i>
					</div>
					<div id="txtSenhaErro" class="invalid-feedback">
					</div>
				</div>
				<div class="form-floating flex-fill m-1">
					<input onfocusout="validarComparacaoCampos('txtSenha', 'txtConfirmarSenha', 'txtConfirmarSenhaErro', 'As senhas não coincidem.');" id="txtConfirmarSenha" type="password" class="form-control" placeholder="Confirmar senha" name="txt_confirmar_senha" required>
					<label for="txtConfirmarSenha">Confirmar senha</label>
					<div id="txtConfirmarSenhaErro" class="invalid-feedback">
					</div>
				</div>
			</div>
			<small class="form-text text-muted m-1"> A sua senha deve ter, no mínimo, 10 caracteres alfanuméricos, uma letra maiúscula e um caractere especial. </small>
			<!-- Botões -->
			<div class="d-flex justify-content-end flex-wrap mt-3 mb-5">
				<a href="login.php" class="btn btn-lg btnCancelar m-1 flex-fill"><strong>Cancelar</strong></a>
				<button id="btnCadastrar" type="button" onclick="confirmarFormulario('formCadastro', 'cadastrar.php')" type="submit" class="btn btn-lg btnCadastrar m-1 flex-fill"><strong>Cadastrar</strong></button>
			</div>
		</form>
	</main>
</body>

</html>