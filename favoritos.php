<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Favoritos</title>
    <!-- ***** ESTILIZAÇÃO ***** -->
    <link rel="stylesheet" href="recursos/css/reset.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/geral.css" />
    <link rel="stylesheet" href="recursos/css/header.css" />
    <link rel="stylesheet" href="recursos/css/favoritos.css" />
    <link rel="stylesheet" href="recursos/css/footer.css" />
    <!-- ***** ESTILIZAÇÃO ***** -->
    <!-- ***** PROGRAMAÇÃO ***** -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.all.min.js"></script>
    <script src="recursos/javascript/principal.js"></script>
    <script src="recursos/javascript/favoritos.js"></script>
    <!-- ***** PROGRAMAÇÃO ***** -->
</head>

<body>
	<?php include 'header.php'; ?>
    <main>
        <div class="cabecalho-favoritos">
            <h3><i class="fa-solid fa-heart"></i> Seus Favoritos</h3>
            <div class="btn-group">
                <button class="btn btn-light" onclick="visualizarGrid();"><i class="fa-solid fa-grip"></i></button>
                <button class="btn btn-light" onclick="visualizarLista();"><i class="fa-solid fa-list"></i></button>
            </div>
        </div>
        <div id="visualizacaoCards">
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/escritorio-luminaria_rosa.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                    <a href="carrinho.php" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/sala-conjunto_poltrona_egg.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                <a href="carrinho.php" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/quarto-sofa_infantil.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/quarto-beliche_escadas_luzes.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/sala-poltrona_metalica.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
            <div class="card-favorito">
                <a class="card-link_detalhes" href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/escritorio-mesa_reuniao_tampo_vidro.jpg"></a>
                <p class="my-1">
                    <s class="text-muted">De: R$ 2.599,00</s><br>
                    <b>Por: <span style="font-size: 1.5rem;" class="text-success">R$ 2.199,00</span></b>
                </p>
                <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
            </div>
        </div>
        <div id="visualizacaoLista" style="display: none;">
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/escritorio-luminaria_rosa.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 25/10/2024</small>
                    <div>
                        <a href="carrinho.php" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>

                </div>
            </div>
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/sala-conjunto_poltrona_egg.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 05/06/2024</small>
                    <div>
                        <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/quarto-sofa_infantil.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 05/06/2024</small>
                    <div>
                        <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/quarto-beliche_escadas_luzes.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 05/06/2024</small>
                    <div>
                        <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/sala-poltrona_metalica.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 05/06/2024</small>
                    <div>
                        <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
            <div class="item-favorito">
                <div class="item-favorito_conteudo">
                    <a href="detalhes-produto.php"><img class="img-favorito" src="recursos/imagens/produtos/escritorio-mesa_reuniao_tampo_vidro.jpg" /></a>
                    <div class="m-3">
                        <p class="card-produto_titulo"> Luminária Rosa, com detalhes em Ouro Rosé </p>
                        <div class="avaliacao-estrelas mb-3">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <b>(4.9)</b>
                        </div>
                        <p>
                            <s class="text-muted">De: R$ 1.999,00</s><br>
                            <b>Por: <span style="font-size: 1.5rem;">R$ 1.299,00</span></b>
                        </p>
                        <p class="text-success">
                            <b>à vista com pix, ou em 1x no Cartão de Crédito</b>
                        </p>
                        <p> ou em até 10x de 139,90 s/ juros </p>
                    </div>
                </div>
                <div class="item-favorito_opcoes">
                    <small class="text-center">Produto adicionado em 05/06/2024</small>
                    <div>
                        <a href="#" class="btn btn-laranja"><i class="fa-solid fa-cart-plus"></i><b> Adicionar ao Carrinho</b></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="footer"></footer>
</body>

</html>
