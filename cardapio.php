<!DOCTYPE html>
<html lang="en">
<?php $title = "Home"; ?>
<?php require_once("inc/head.php"); ?>
<body>
    <?php 
        $nivelAcesso = mt_rand(0,1);

        $filmes = [
            "0" => [
                "imagem" => "assets/img/ruby-codepizza.png",
                "titulo" => "RUBY",
                "sabores" => "molho de tomate, muzzarela especial, manjericão, polvilhada com parmesão ralado, orégano e azeitonas pretas.",
                "preco" => "R$ 80,00"
            ],
            "1" => [
                "imagem" => "assets/img/python-codepizza.png",
                "titulo" => "PYTHON",
                "sabores" => "molho de tomate, calabresa fatiada, cebola, orégano e azeitonas pretas.",
                "preco" => "R$ 85,00"
            ],
            "2" => [
                "imagem" => "assets/img/cSHARP-codepizza.png",
                "titulo" => "C#",
                "sabores" => "molho de tomate, lombo canadense, alho dourado, Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 95,00"
            ],
            "3" => [
                "imagem" => "assets/img/mysql-codepizza.png",
                "titulo" => "Brooklyn Nine Nine",
                "sabores" => "molho de tomate, muzzarela especial, rodelas de tomate, filés de anchova argentina, orégano e azeitonas pretas.",
                "preco" => "R$ 66,30"
            ],
            "4" => [
                "imagem" => "assets/img/C-MAIS-MAIS-CODEPIZZA.png",
                "titulo" => "C++",
                "sabores" => "molho de tomate, muzzarela especial, champignon na manteiga, bacon, orégano e azeitonas pretas.",
                "preco" => "R$ 92,00"
            ],
            "5" => [
                "imagem" => "assets/img/html5-codepizza.png",
                "titulo" => "HTML 5",
                "sabores" => "molho de tomate, lombo defumado Sadia, cebola, orégano e azeitona preta.",
                "preco" => "R$ 45,00"
            ],
            "6" => [
                "imagem" => "assets/img/php-codepizza.png",
                "titulo" => "PHP",
                "sabores" => "molho de tomate, brócoles alho-e-óleo, bacon em cubos, Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 41,50"
            ],
            "7" => [
                "imagem" => "assets/img/css-codepizza.png",
                "titulo" => "CSS",
                "sabores" => "molho de tomate, peito de frango desfiado, coberta com Catupiry, orégano e azeitonas pretas.",
                "preco" => "R$ 78,60"
            ],
            "8" => [
                "imagem" => "assets/img/java-codepizza.png",
                "titulo" => "JAVA",
                "sabores" => "molho de tomate, linguiça calabresa moída, Catupiry, parmesão ralado, orégano e azeitonas pretas.",
                "preco" => "R$ 57,00"
            ]
        ];
    ?>
    <?php require_once("inc/header.php"); ?>
            
    <section class="mt-5 container">
        <h1>Escolha sua Pizza aqui!</h1>
        <p>As melhores pizzas da cidade!!!</p>
        <div class="row">
            <?php foreach($filmes as $key => $value): ?>
                <div class="border mb-5 col-12 col-md-6 col-lg-4">
                    <img class="card-img-top" src="<?php echo $value["imagem"]; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $value["titulo"]; ?></h5>
                        <p class="card-text"><?php echo $value["sabores"]; ?></p>
                        <p class="card-text"><small class="text-muted">CodePizza...</small></p>
                        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModal<?php echo $key; ?>">
                            Saiba mais...
                        </button>
                        <form action="compra.php" method="GET" class="d-inline-block">
                            <input type="hidden" value="<?php echo $value["titulo"]; ?>" name="titulo">
                            <button type="submit" class="btn btn-primary mb-4">
                                Comprar
                            </button>
                        </form>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?php echo $key; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $value["titulo"]; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                
                                    <p><i class="fa fa-pizza-slice mr-2"></i> Ingredientes: <?php echo $value["sabores"]; ?></p>
                                    <p><i class="fa fa-angry mr-2"></i> Preço: <?php echo $value["preco"]; ?></p>
                                                     
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            <?php endforeach; ?>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>