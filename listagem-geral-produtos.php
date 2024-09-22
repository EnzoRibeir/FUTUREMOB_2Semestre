<?php
   	header('Content-Type: text/html; charset=utf-8');
    include 'conexao.php';
	$sql_categorias = mysql_query("SELECT `id_categoria`, `nome`, `descricao`, `caminho_icone` FROM `categorias`");
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureMob</title>
    <!-- ***** ESTILIZAÇÃO ***** -->
    <link rel="stylesheet" href="recursos/css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/geral.css" />
    <link rel="stylesheet" href="recursos/css/listagem-geral-produtos.css" />
    <link rel="stylesheet" href="recursos/css/header.css" />
    <link rel="stylesheet" href="recursos/css/footer.css" />
    <!-- ***** ESTILIZAÇÃO ***** -->
    <!-- ***** PROGRAMAÇÃO ***** -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script src="recursos/javascript/principal.js"></script>
    <script src="recursos/javascript/listagem-geral-produtos.js"></script>
    <!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<?php include 'header.php'; ?>
    <main class="main-listagem">
        <div class="menu-filtros">
            <h4 class="titulo mx-0">Filtros</h4>
            <button onclick="exibirFiltroAcc('acc-categorias');" class="btn btn-filtros_accordion"> Categorias </button>
            <section id="acc-categorias" class="acc">
            <ul class="filtro-lista_categorias">
                <li><a href="#" class="btn btn-categoria_filtro">Todos</a></li>
                <?php while($linha = mysql_fetch_assoc($sql_categorias)) { ?>
                    <li><a href="#" class="btn btn-categoria_filtro"><?php echo $linha['nome']; ?></a></li>  			
				<?php } ?>
            </ul>
            </section>
            <button onclick="exibirFiltroAcc('acc-preco');" class="btn btn-filtros_accordion"> Preço </button>
            <section id="acc-preco" class="acc">
                <div>
                    <div>
                        <label>Mínimo:</label>
                        <input type="number" class="form-control" min="100" value="100">
                    </div>
                    <div class="my-2">
                        <label>Máximo:</label>
                        <input type="number" class="form-control" min="100" max="20000">
                    </div>
                    <button class="btn btn-laranja w-100">Aplicar</button>
                </div>
            </section>
            <button onclick="exibirFiltroAcc('acc-avaliacao');" class="btn btn-filtros_accordion border-0"> Avaliação </button>
            <section id="acc-avaliacao" class="acc border-0 border-top">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filtro-5estrelas">
                    <label class="form-check-label" for="filtro-5estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filtro-4estrelas">
                    <label class="form-check-label" for="filtro-4estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filtro-3estrelas">
                    <label class="form-check-label" for="filtro-3estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filtro-2estrelas">
                    <label class="form-check-label" for="filtro-2estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="filtro-1estrelas">
                    <label class="form-check-label" for="filtro-1estrelas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </label>
                </div>
            </section>
        </div>
        <div class="d-flex flex-column justify-content-center">
            <div class="titulo">
                <h4>Produtos</h4>
                <div class="d-flex justify-content-between">
                    <div class="btn-group border mx-1">
                        <button class="btn btn-light" onclick="visualizarGrid();"><i class="fa-solid fa-grip"></i></button>
                        <button class="btn btn-light" onclick="visualizarLista();"><i class="fa-solid fa-list"></i></button>
                    </div>                      
                    <select class="form-select">
                        <option selected>Ordenar por</option>
                        <option value="1">Relevância</option>
                        <option value="2">Mais vendidos</option>
                        <option value="3">Mais bem avaliados</option>
                        <option value="3">Lançamento</option>
                        <option value="3">Menor preço</option>
                        <option value="3">Maior preço</option>
                    </select>
                </div>
            </div>
            <div class="grid-produtos">
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
                <div href="detalhes-produto.php" class="card-produto_listagem">
                    <a href="detalhes-produto.php"><img class="card-produto_listagem_img" src="recursos/imagens/produtos/cozinha-armario_azul_laranja.jpg"></a>
                    <h6 class="mb-1">Cozinha FutureMob com tecnologia OpenPush</h6>
                    <div class="avaliacao-estrelas mb-2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <small><b>(4.9)</b></small>
                    </div>
                    <small><s>De: R$ 6.599,00</s></small>
                    <p>Por: R$ 4.999,00</p>
                    <small>ou em até 10x de 259,90 s/ juros</small>
                    <a href="pagamento.php" class="btn btn-laranja mt-2">Comprar</a>
                </div>
            </div>            
        </div>

    </main>
    <footer id="footer"></footer>
</body>

</html>