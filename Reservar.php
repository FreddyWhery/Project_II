<!DOCTYPE html>
<?php

require_once 'php/usuario.php';
$l = new Usuario;

?>

<html lang="pt">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Formulario.css">


    <title>Reservas</title>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">HOTEL SKY</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Início</a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Produto.html">Produtos</a>
                    </li>


                    </li>
                </ul>

            </div>
        </div>

    </nav>

    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>

            <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/1.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">Tenha as Melhores Noites no SKY</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/4.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">No SKY, equilibras o corpo e espírito de viver.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/3.jpg" alt="d-block w-100" alt="" imagem>
                <div class="carousel-caption d-none d-md-block">

                    <p class="lead">Acorde na companhia de óptima disposição ^_^ </p>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>

            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="text-center col-md-4">

                <h1 class="display-4">Hotel Sky</h1>

                <p class="lead"><b><i>Sinta a Doçura da Vida!</i></b></p>

            </div>

            <h4 class="text-justify col-md-8">
<hr>
                Reserve já o seu quarto!
<hr>
            </h4>

            <div class="container mt-5">
                <h1 class="text-center display-4">CADASTRE-SE PARA RESERVAR:</h1>
    
                <hr>
 <div id="CorpoForm">             
<form method="Post">
    <input type="text" placeholder="Nome Completo" maxlength="30" name="nome">
    <input type="text" placeholder="Contacto" maxlength="9" name="contacto">
    <input type="text" placeholder="Nome do Quarto" maxlength="30" name="nomequarto">
 

   

    <input type="date" maxlength="12" name="datareser" min="2023-06-06"  max="2023-06-07" >

    <hr>
    <h4 class="text-justify col-md-8" id="DTEntrada">Data de Entrada</h4>
    
    <input type="date" maxlength="12" name="dataentrada" min="2023-06-04"  max="2023-07-04">
    <h4 class="text-justify col-md-8" id="DTEntrada">Data de Saída</h4>
    <input type="date" maxlength="12" name="datasaída" min="2023-06-04"  >

    <input type="submit" value="Reservar">
    
</form>
</div>



<?php

//Verificar se clicou no botão
if (isset($_POST['nome'])){

    $nome = addslashes($_POST['nome']);
    $contacto = addslashes($_POST['contacto']);
    $nomequarto = addslashes($_POST['nomequarto']);
    $datareser = addslashes($_POST['datareser']);
    $dataentrada = addslashes($_POST['dataentrada']);
    $datasaída = addslashes($_POST['datasaída']);

//Verificar campos vazio
if(!empty($nome) && !empty($contacto) && !empty($nomequarto) && !empty($datareser) && !empty($dataentrada) && !empty($datasaída)){

    $l->conectar("cadastrar","localhost","root","");
if ($l->msgErro ==""){

if ($l->cadastrar($nome, $contacto, $nomequarto, $datareser, $dataentrada, $datasaída)){

    ?>
    <div class="Msgbox">
    Cadastro da Reserva Sucesso!

    <a class="nav-link" href="Produto.html"></a>
</div>
 
 <?php
} else{
?>
    <div class="Msgbox-erro">
 Reserva já Existe no Banco de Dados!
    </div>
<?php

}

}else{
echo "Erro: ".$l->msgErro;
}
}else{
    ?>

    <div class="Msgbox-aviso">
  Preencha todos os Campos vazios!
    </div>

    <?php
}
}

?>



<hr id="hrlogin">                
                </div>



                <div class="container">
                    <div class="row justify-content-sm-center">


                        <div class="col-sm-3">
                            <img src="img/ClientSatisfei/AS.gif" alt="">
                        </div>
                    </div>
                </div>

                <footer class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 mb-3">
                      
                        </div>
                        </div>

                        <div class="col-12 mt-3">
                            <blockquote class="blockquote text-center">
                                <p>Todos os Direitos Reservados</p>
                                <p>Grupo Nº 1, O Grupo da Arte Criativa</p>

                                <div class="blockquote-footer">Copyright-2023<cite title="Título"> Hotel Sky</cite>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </footer>

            </div>
            <script src="js/bootstrap.js"></script>



            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <div class="container">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">

                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                    </div>
                </div>

            </nav>





</body>

</html>