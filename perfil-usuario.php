<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Minha Conta</title>
	<!-- ***** ESTILIZAÇÃO ***** -->
	<link rel="stylesheet" href="recursos/css/reset.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="recursos/css/geral.css" />
	<link rel="stylesheet" href="recursos/css/header.css" />
	<link rel="stylesheet" href="recursos/css/perfil-usuario.css" />
	<link rel="stylesheet" href="recursos/css/avaliacao-estrelas.css" />
	<link rel="stylesheet" href="recursos/css/acompanhar-entrega.css" />
	<link rel="stylesheet" href="recursos/css/footer.css" />
	<!-- ***** ESTILIZAÇÃO ***** -->
	<!-- ***** PROGRAMAÇÃO ***** -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<script src="recursos/javascript/principal.js"></script>
	<script src="recursos/javascript/pedidos.js"></script>
	<script src="recursos/javascript/perfil-usuario.js"></script>
	<!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<?php include 'header.php'; ?>
	<main class="main-usuario">
		<div class="menu-lateral rounded-bottom">
			<button id="btnPedidos" onclick="exibirTela('section-meus-pedidos', this.id);" class="btn menu-lateral_opcao mt-3 btn-opcaoMenu_selecionado">
				<i class="fa-solid fa-boxes-stacked"></i>
				<p>Pedidos</p>
			</button>
			<button id="btnDados" onclick="exibirTela('section-seus-dados', this.id);" class="btn menu-lateral_opcao">
				<i class="fa-solid fa-address-card"></i>
				<p>Dados</p>
			</button>
			<button id="btnEnderecos" onclick="exibirTela('section-enderecos', this.id);" class="btn menu-lateral_opcao">
				<i class="fa-solid fa-map-location-dot"></i>
				<p>Endereços</p>
			</button>
			<a class="btn menu-lateral_opcao rounded-bottom" href="#" onclick="window.location.href='deslogar.php'; return false;">
				<i class="fa-solid fa-person-walking-arrow-loop-left"></i>
				<p>Sair</p>
			</a>

		</div>
		<section class="section-tela" id="section-meus-pedidos">
			<div class="container-pedidos">
				<div class="container-ped">
					<div class="container-ped_conteudo">
						<div>
							<a href="detalhes-produto.php" class="container-ped_info_img">
								<img src="recursos/imagens/produtos/sala-conjunto_poltrona_egg.jpg">
							</a>
							<h6></h6>
						</div>
						<small>Quantidade: <b>1</b></small>
						<small>Valor: <b>R$ 3.299,00</b></small>
					</div>
					<div class="container-ped_conteudo align-items-center flex-fill">
						<ul class="d-flex">
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-receipt"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-file-invoice-dollar"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-dolly"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-truck-fast"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-house-circle-check"></i></li>
						</ul>
						<small>Status: <b class="text-success">Pedido entregue - 13/06/2023 15:19</b></small>
					</div>
					<div class="container-ped_conteudo border-0 justify-content-between">
						<h5>Resumo da compra</h5>
						<small>Pedido: <b>123456789</b></small>
						<small>Data do pedido <b>08/06/2023</b></small>
						<small>Valor total: <b>R$ 3.299,00</b></small>
						<div class="w-100">
							<a href="#" class="btn btn-detalhes_ped">Ver detalhes</a>
							<button type="button" id="btnAvaliar" onclick="avaliar();" class="btn btn-avaliar_ped"><i class="fa-solid fa-star"></i> Avaliar</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-pedidos">
				<div class="container-ped">
					<div class="container-ped_conteudo">
						<div>
							<a href="detalhes-produto.php" class="container-ped_info_img">
								<img src="recursos/imagens/produtos/sala-sofa_branco2.jpg">
							</a>
							<h6></h6>
						</div>
						<small>Quantidade: <b>1</b></small>
						<small>Valor: <b>R$ 5.299,00</b></small>
					</div>
					<div class="container-ped_conteudo align-items-center flex-fill">
						<ul class="d-flex">
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-receipt"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-file-invoice-dollar"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-dolly"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-truck-fast"></i></li>
							<li class="ped-status_linha"></li>
							<li class="ped-status_etapa"><i class="fa-solid fa-house-circle-check"></i></li>
						</ul>
						<small>Status: <b>Pagamento Confirmado - 08/06/2024 13:49</b></small>
					</div>
					<div class="container-ped_conteudo border-0 justify-content-between">
						<h6>Resumo da compra</h6>
						<small>Pedido: <b>010062024</b></small>
						<small>Data do pedido <b>08/06/2024</b></small>
						<small>Valor total: <b>R$ 5.299,00</b></small>
						<div class="w-100">
							<a href="#" class="btn btn-detalhes_ped mt-2">Ver detalhes</a>
							<button type="button" id="btnAvaliar" onclick="acompanharEntrega();" class="btn btn-acompanhar"><i class="fa-solid fa-location-dot"></i>Acompanhar Entrega</a>
								<button type="button" id="btnAvaliar" class="btn btn-devolver mt-1"><i class="fa-solid fa-xmark"></i>Cancelar Pedido</a>
						</div>
					</div>
				</div>
			</div>
			<div class="container-pedidos">
				<div class="container-ped">
					<div class="container-ped_conteudo">
						<div>
							<a href="detalhes-produto.php" class="container-ped_info_img">
								<img src="recursos/imagens/produtos/quarto-sofa_infantil.jpg">
							</a>
							<h6></h6>
						</div>
						<small>Quantidade: <b>1</b></small>
						<small>Valor: <b>R$ 2.299,00</b></small>
					</div>
					<div class="container-ped_conteudo align-items-center flex-fill">
						<ul class="d-flex">
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-receipt"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-file-invoice-dollar"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-dolly"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-truck-fast"></i></li>
							<li class="ped-status_linha ped_st_sucesso_linha"></li>
							<li class="ped-status_etapa ped_st_sucesso_etapa"><i class="fa-solid fa-house-circle-check"></i></li>
						</ul>
						<small>Status: <b class="text-success">Pedido entregue - 13/11/2023 13:49</b></small>
					</div>
					<div class="container-ped_conteudo border-0 justify-content-between">
						<h5>Resumo da compra</h5>
						<small>Pedido: <b>987654321</b></small>
						<small>Data do pedido <b>11/11/2023</b></small>
						<small>Valor total: <b>R$ 2.299,00</b></small>
						<div class="w-100">
							<a href="#" class="btn btn-detalhes_ped">Ver detalhes</a>
							<a href="#" class="btn btn-devolver"><i class="fa-solid fa-box"></i>Devolver</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="section-tela" id="section-seus-dados" style="display: none;">
			<h4 class="mt-3"><i class="fa-solid fa-code mx-3"></i> Desculpe, essa tela está em fase de desenvolvimento.</h4>
			<p class="mx-3 mt-3">A FutureMob agradece a compreensão.</p>
		</section>
		<section class="section-tela" id="section-enderecos" style="display: none;">
			<h4 class="mt-3"><i class="fa-solid fa-code mx-3"></i> Desculpe, essa tela está em fase de desenvolvimento.</h4>
			<p class="mx-3 mt-3">A FutureMob agradece a compreensão.</p>
		</section>
	</main>
	<footer id="footer"></footer>
</body>

</html>