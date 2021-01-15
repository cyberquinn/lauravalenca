<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>

        <link rel="stylesheet" href="plugins/Bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="plugins/icomoon/" />
        <link rel="stylesheet" href="css/estilo.css" />    
    </head>

    <body>



        <div class="container mt-5">
            <h1> Novo cadastro </h1>
            <hr />
            <a class="btn btn-dark btn-outline-secondary" >Pessoa física</a>
            <a class="btn btn-danger">Pessoa jurídica</a>
            <form action="">
                <div class="row">
                    <div class="col">

                        <div class="form-group">
                            <h4>Dados da empresa</h4>
                            <hr />
                            <label for="exampleFormControlInput1">*Razão social</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Razão social">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Nome fantasia</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nome fantasia">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect2">*CNPj</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="X.XXX.XXX/XXX-XX">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">*Inscrição estadual</label>
                            <input type="email"class="form-control" id="exampleFormControlTextarea1" placeholder="Inscrição estadual">
                            <h3 class="pt-2">Dados  pessoais </h3>
                            <hr />

                            <div>
                                <label for="exampleFormControlTextarea1">*Nome completo</label>
                                <input type="email"class="form-control" id="exampleFormControlTextarea1" placeholder="">
                            </div>  

                            <label for="exampleFormControlTextarea1">*Data de nascimento</label>
                            <input type="email"class="form-control" id="exampleFormControlTextarea1" placeholder="dd/mm/aaaa"> <br />

                            <div>
                                <select class="form-control" id="exampleFormControlSelect1">s
                                    <option>Selecione</option>
                                    <option>Femenino</option>
                                    <option>Masculino</option>
                                    <option>Não binário</option>
                                </select>
                            </div> 

                            <div>
                                <label for="exampleFormControlTextarea1">*Telefone</label>
                                <input type="email"class="form-control" id="exampleFormControlTextarea1" placeholder="(xx) xxxx-xxxx">
                            </div>

                        </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                            <h4>Acesso ao site</h4>
                            <hr />
                            <label for="exampleFormControlInput1">*Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="fulanodetal@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">*Confira o Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="fulanodetal@gmail.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">*Login</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Usuário">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">*Senha</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxxxxx">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">*Confirme a Senha</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xxxxxxxx">
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Desejo receber boletins de ofertas</label>
                        </div>
                    </div>

                    <div class="col">
                        <h4>Endereço</h4>
                        <hr />
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Nome Identificador</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex: Casa, Trabalho">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*CEP</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="xx.xxx-xxx">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Endereço</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Rua, Avenida">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Bairro</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">*Estado</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Selecione</option>
                            </select>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">*Cidade</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>Selecione</option>
                                </select>

                            </div>

                        </div>

                    </div>
                </div>
                <hr />
                <div class="form-group"> <button class="btn  btn-danger btn-block" type="submit">Cadastrar</button>   </div> 

            </form>  

        </div>






    </body>
</html>