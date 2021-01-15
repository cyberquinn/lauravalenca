<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato</title>

        <link rel="stylesheet" href="plugins/Bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icomoon/" />
        <link rel="stylesheet" href="css/cadastro.css" />
        <link rel="stylesheet" href="img/imgviagem.jpeg" />
    </head>
    <body>

        <header class="container ">
            <!--!--cabeçalho-->
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="img/imgviagem.jpeg" alt="Primeiro Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img2.jpeg" alt="Segundo Slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/img3.jpeg" alt="Terceiro Slide">
                    </div>
                </div>
            </div>
            <div><img src="" alt="" />
                <!--navegação-->
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(página atual)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Ação</a>
                                    <a class="dropdown-item" href="#">Outra ação</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Algo mais aqui</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#">Desativado</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                        </form>
                    </div>
                </nav>
                <!-- fim navegação-->
        </header> 


        <div class="container background my-5">
            <form action="" class="p-3">
                <h2 class="text-center py-5">Contato</h2>
                <div class="row">
                    <div class="col">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nome</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Telefone</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">E-mail</label>
                                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Mensagem</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-group padding text-right"> <button class=" btn btn-success btn-block arredodamento" type="submit">Cadastrar</button></div>
                    </div>
                    <div class="col">
                        <img class="img-fluid" src="http://placehold.it/530x400" alt="">
                    </div>

                </div>

            </form>
        </div>

        <footer>
            <!--rodapé-->
        </footer>

        <!--Scripts => js-->
        <!--jquery-->
        <script src="js/jquery.js"></script>
        <script src="plugins/Bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>