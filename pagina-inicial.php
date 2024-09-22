<?php
   	header('Content-Type: text/html; charset=utf-8');
    include 'conexao.php';
	$sql_categorias = mysql_query("SELECT `id_categoria`, `nome`, `descricao`, `caminho_icone` FROM `categorias`");
?>
<html lang="pt-br">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Future Mob</title>
	<!-- ***** ESTILIZAÇÃO ***** -->
	<link rel="stylesheet" href="recursos/css/reset.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="recursos/css/geral.css" />
	<link rel="stylesheet" href="recursos/css/header.css" />
	<link rel="stylesheet" href="recursos/css/pagina-inicial.css" />
	<link rel="stylesheet" href="recursos/css/footer.css" />
	<!-- ***** ESTILIZAÇÃO ***** -->
	<!-- ***** PROGRAMAÇÃO ***** -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
	<script src="recursos/javascript/principal.js"></script>
	<script src="recursos/javascript/pagina-inicial.js"></script>
	<!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<?php include 'header.php'; ?>
	<main>
		<div id="carrossel-pagina_inicial" class="carrossel">
			<div class="carrossel-container">
				<div class="carrossel-item active" style="background-image: url('recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg');">
					<div class="carrossel-conteudo">
						<h1>Cozinha</h1>
						<p class="opacity-75"> Nossa exclusiva tecnologia OpenPush dispensa o uso de puxadores em nossos armários. </p>
						<div>
							<a class="btn btn-lg btn-gradiente" href="detalhes-produto.php">Venha conferir!</a>
						</div>
					</div>
				</div>
				<div class="carrossel-item" style="background-image: url('recursos/imagens/produtos/sala-poltrona_metalica.jpg');">
					<div class="carrossel-conteudo">
						<h1>Poltrona</h1>
						<p class="opacity-75"> A exclusiva poltrona com estrutura em aço inoxidável. </p>
						<div>
							<a class="btn btn-lg btn-gradiente" href="detalhes-produto.php">Venha conferir!</a>
						</div>
					</div>
				</div>
				<div class="carrossel-item" style="background-image: url('recursos/imagens/produtos/sala-sofa_vermelho_torcido.jpg');">
					<div class="carrossel-conteudo">
						<h1>Um sofá ou uma obra de arte? Os dois!</h1>
						<p class="opacity-75"> O sofá que reune elegância e conforto, em um só produto. </p>
						<div>
							<a class="btn btn-lg btn-gradiente" href="detalhes-produto.php">Venha conferir!</a>
						</div>
					</div>
				</div>
			</div>
			<button class="carrossel-btn_anterior" onclick="slideAnterior('#carrossel-pagina_inicial');"> ❮ </button>
			<button class="carrossel-btn_proximo" onclick="proximoSlide('#carrossel-pagina_inicial');"> ❯ </button>
		</div>
		<section class="conteudo-pagina_inicial">
			<nav class="menu-categoria">
				<?php while($linha = mysql_fetch_assoc($sql_categorias)) { ?>
					<a class="btn-vertical" href="listagem-geral-produtos.php">
						<img class="img-categoria" src="<?php echo $linha['caminho_icone']; ?>" alt="categoria-sala_estar" />
						<span><?php echo $linha['nome']; ?></span>
					</a>    			
				<?php } ?>
			</nav>
			<div class="ofertas-relampago">
				<h3 class="produtos_titulo"><i class="fa-solid fa-bolt"></i> Ofertas relâmpago!</h3>
				<div class="produtos_cards">
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/escritorio-luminaria_rosa.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
							<p>
								<s class="text-muted">De: R$ 1.999,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 139,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/escritorio-mesa_reuniao_tampo_vidro.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Mesa para sala de reuniões suspensa, com tampo de vidro </p>
							<p>
								<s class="text-muted">De: R$ 2.999,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 1.999,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 199,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/quarto-beliche_escadas_luzes.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Beliche com escada e teto iluminado </p>
							<p>
								<s class="text-muted">De: R$ 2.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 1.899,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 189,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/quarto-sofa_infantil.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Sofá para quarto infantil, com fundo iluminado </p>
							<p>
								<s class="text-muted">De: R$ 1.999,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 1.599,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 159,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-conjunto_poltrona_egg.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Poltrona Egg com pés em aço inoxidável </p>
							<p>
								<s class="text-muted">De: R$ 2.999,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 2.399,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 239,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-poltrona_cinza2.jpeg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Poltrona Egg retroiluminada </p>
							<p>
								<s class="text-muted">De: R$ 3.999,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 2.899,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 139,90 s/ juros </p>
						</div>
					</a>
				</div>
			</div>
			<div class="novidades">
				<div class="d-flex justify-content-between align-items-center">
					<h3 class="produtos_titulo"><i class="fa-solid fa-face-grin-stars"></i> Novidades!</h3>
					<a href="listagem-geral-produtos.php" class="btn btn-verMaisProdutos">Ver produtos <i class="fa-solid fa-arrow-right" style="margin-left: .25rem;"></i></a>
				</div>
				<div class="produtos_cards">
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/quarto-cama_couro_veludo.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Cama com molas ensacadas, em couro e veludo </p>
							<p>
								<s class="text-muted">De: R$ 2.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 2.199,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 259,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-poltrona_cinza3.jpeg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Poltrona massageadora com controle por voz </p>
							<p>
								<s class="text-muted">De: R$ 7.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 6.199,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 619,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-poltrona_cinza4.jpeg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Poltrona Massageadora </p>
							<p>
								<s class="text-muted">De: R$ 5.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 4.199,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 419,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-poltrona_metalica.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Poltrona em estrutura metálica (aço inoxidável) e assento em couro </p>
							<p>
								<s class="text-muted">De: R$ 2.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 2.099,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 209,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos/sala-sofa_branco2.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Sofá branco em couro </p>
							<p>
								<s class="text-muted">De: R$ 5.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 3.199,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 319,90 s/ juros </p>
						</div>
					</a>
					<a href="detalhes-produto.php" class="card-produto">
						<img src="recursos/imagens/produtos//sala-sofa_branco4.jpg" class="card-produto_img" alt="..." />
						<div class="card-produto_conteudo">
							<p class="card-produto_titulo"> Sofá branco para área externa, em couro </p>
							<p>
								<s class="text-muted">De: R$ 2.599,00</s><br>
								<b>Por: <span style="font-size: 1.5rem;">R$ 2.199,00</span></b>
							</p>
							<p class="text-success">
								<b>à vista com pix, ou em 1x no Cartão de Crédito</b>
							</p>
							<p> ou em até 10x de 219,90 s/ juros </p>
						</div>
					</a>
				</div>
			</div>
		</section>
	</main>
	<footer id="footer"></footer>
</body>

</html>