<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="app.css">
    <title>Plataforma IoT</title>
</head>

<body>

<?php
    session_start();
    if( !isset($_SESSION['username'])){
        header( "refresh:5;url=index.php");
    }
    else{
        die( "Acesso restrito.");
    }
?>
    <div class="dashboard">
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                </li>
                <button class="">Logout</button>
            </ul>
        </div>
    </nav>

    <header>
        <div class="container">

            <div class="card">
                <div class="card-header">
                    <img src="Lab03_CSS_Imagens/imagens/estg.png" width="320px" class="float-end">
                    <h1>Servidor IOT</h1>
                    <h2> Bem vindo <b>Utilizador Xpto</b> </h2>
                    <p class="pt-3">Tecnologias de internet - Engenharia Informática</p>
                </div>
            </div>
        </div>
    </header>

    <main>

        <section>
            <div class="container">
                <div class="row text-center m-2">
                    <div class="col">
                        <div class="card">
                            <div class="card-header sensor">
                                <h4 class="card-title">Temperatura: </h4>
                            </div>
                            <div class="card-body ">
                                <img src="Lab03_CSS_Imagens/imagens/temperature-high.png">
                                <p class="card-text"><b>Atualização:</b> date: hour: <a href="#">Historico</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header sensor">
                                <h4 class="card-title">Humidade: </h4>
                            </div>
                            <div class="card-body ">
                                <img src="Lab03_CSS_Imagens/imagens/humidity-high.png">
                                <p class="card-text"><b>Atualização:</b> date: hour: <a href="#">Historico</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-header atuador">
                                <h4 class="card-title">Led Arduino: </h4>
                            </div>
                            <div class="card-body ">
                                <img src="Lab03_CSS_Imagens/imagens/light-on.png">
                                <p class="card-text"><b>Atualização:</b> date: hour: <a href="#">Historico</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>

            <div class="container mt-5">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Tipo Dispositivo IoT</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Data de Atualização</th>
                            <th scope="col">Estado de alertas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Temperatura</th>
                            <td>value</td>
                            <td>date</td>
                            <td><span class="badge text-bg-primary">Primary</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Humidade</th>
                            <td>value</td>
                            <td>date</td>
                            <td><span class="badge text-bg-danger">Primary</span></td>
                        </tr>
                        <tr>
                            <th scope="row">Led Arduino</th>
                            <td>value</td>
                            <td>date</td>
                            <td><span class="badge text-bg-sucess">Primary</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

    </main>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>