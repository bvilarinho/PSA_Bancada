<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cdbootstrap/css/cdb.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" rel="stylesheet"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/cdb.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/cdbootstrap/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/9d1d9a82d2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>WebApp_PSA_2021/2022 - Add</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <h1><img class="navbar-brand" style="float: left; height: 60px" src="logo.svg" alt=""> </h1>
            <h1 style="font-size:30px" class=" navbar-brand"> Diagnóstico</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" id="home" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" fill="#f7f7f7"></path>
                        </svg>
                        Home
                    </a>
                    <a class="nav-link active" aria-current="page" href="dashboard.php">
                        <svg class="bi d-block mx-auto mb-1 " width="24" height="24" id="speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" fill="#f7f7f7"></path>
                            <path d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" fill="#f7f7f7"></path>
                        </svg>
                        Dashboard
                    </a>
                    <a class="nav-link active" aria-current="page" href="add.php">
                        <svg class="bi d-block mx-auto mb-1 " width="24" height="24" id="circle plus" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" fill="#f7f7f7"></path>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" fill="#f7f7f7"></path>
                        </svg>
                        Add
                    </a>
                </div>
            </div>
        </div>
    </nav>
     <div class="container mt-5">
        <form action="insert.php" method="post">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Máquinas</h4>
                    </div>
                    <div class="card-body">
                        <center>
                            <h4 style="margin-bottom:20px">Adicione uma máquina à base de dados</h4>
                                <p>
                                    <label for="id_maq">ID Máquina:</label>
                                    <input type="number" name="id_maq" id="id_maq">
                                </p>
                                <p style="margin-top:5px">
                                    <label for="nome_maq">Nome:</label>
                                    <input type="text" name="nome_maq" id="nome_maq">
                                </p>
                                <p>
                                    <label for="descricao_maq">Descrição:</label>
                                    <input type="text" name="descricao_maq" id="descricao_maq">
                                </p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">Notas</h4>
                    </div>
                    <div class="card-body mt-2">
                        <div>
                            <h6>1. Por favor preencha os dados com extrema atenção.</h6>
                            <h6>2. Evite repetições de ID.</h6>
                            <h6>3. Submeta apenas quando tiver todos os dados pretendidos preenchidos.</h6>
                            <h6>4. Em caso de dúvida contacte o seu superior.</h6>
                            <h6>5. Em caso de erro contacte os serviços informáticos.</h6>
                            <p>
                                <h4>Obrigado!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-12 mt-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-header-title">Componentes</h4>
                </div>
                <div class="card-body">
                    <div  class="card-body">
                        <center>
                            <h4 style="text-align:center, margin-bottom:30px">Adicione um componente à base de dados</h4>
                            <p></p>
                        </center>
                    </div>
                    <div class="col-12 col-xl-4" style="float:left">
                        <div>
                            <p>
                                <label for="id_comp1">ID Componente 1:</label>
                                <input type="number" name="id_comp1" id="id_comp1">
                            </p>
                            <p>
                                <label for="nome_comp">Nome:</label>
                                <input type="text" name="nome_comp1" id="nome_comp1">
                            </p>
                            <p>
                                <label for="descricao_comp1">Descrição:</label>
                                <input type="text" name="descricao_comp1" id="descricao_comp1">
                            </p>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="temperatura" name="checkbox1[]" id="sensor1" checked>Temperatura
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="humidade" name="checkbox1[]" id="sensor1">Humidade
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="vibracao" name="checkbox1[]" id="sensor1">Vibração
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="ruido" name="checkbox1[]" id="senso1r">Ruído
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4" style="float:left">
                        <div>
                            <p>
                                <label for="id_comp2">ID Componente 2:</label>
                                <input type="number" name="id_comp2" id="id_comp2">
                            </p>
                            <p>
                                <label for="nome_comp2">Nome:</label>
                                <input type="text" name="nome_comp2" id="nome_comp2">
                            </p>
                            <p>
                                <label for="descricao_comp2">Descrição:</label>
                                <input type="text" name="descricao_comp2" id="descricao_comp2">
                            </p>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="temperatura2" name="checkbox2[]" checked>Temperatura
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="humidade2" name="checkbox2[]">Humidade
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="vibracao2" name="checkbox2[]">Vibração
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ruido2" name="checkbox2[]">Ruído
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-4" style="float:right">
                        <div>
                            <p>
                                <label for="id_comp3">ID Componente 3:</label>
                                <input type="number" name="id_comp3" id="id_comp3">
                            </p>
                            <p>
                                <label for="nome_comp3">Nome:</label>
                                <input type="text" name="nome_comp3" id="nome_comp3">
                            </p>
                            <p>
                                <label for="descricao_comp3">Descrição:</label>
                                <input type="text" name="descricao_comp3" id="descricao_comp3">
                            </p>
                        </div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="temperatura3" name="checkbox3[]" checked>Temperatura
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="humidade3" name="checkbox3[]">Humidade
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="vibracao3" name="checkbox3[]">Vibração
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ruido3" name="checkbox3[]">Ruído
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-12 mt-5 mb-5">
            <center>
                <input style="margin-top:20px" type="submit" value="Submit">
            </center>
        </div>
        </form>
     </div>
     <nav class="navbar navbar-dark bg-dark text-white">
        <div class="container">
            <h6 class="navbar" style="padding-top:10px">&copy;PSA - Projeto em Sistemas de Automação</h6>
        </div>
     </nav>
</body>
</html>