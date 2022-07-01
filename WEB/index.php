<?php
    // Totalmente a funcionar falta fazer os erros aparecerem num pop-up
?>

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
    <div class="container mt-3" style="width:500px">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="imagem1.png" alt="First slide" height="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem2.png" alt="Second slide" height="300px">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="imagem3.png" alt="Third slide" height="300px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container mt-4">
        <?php
            // servername => localhost
            // username => root
            // password => empty
            // database name => staff
            $conn = mysqli_connect("localhost", "root", "root", "psa_bancada");

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                . mysqli_connect_error());
            }

            $id_maq =  $_REQUEST['id_maq'];
            $id_comp =  $_REQUEST['id_comp'];
            $observacoes = $_REQUEST['observacoes'];
            $manutencoes = $_REQUEST['manutencoes'];
            $data_man = $_REQUEST['data_man'];

            if(isset($_POST['Submit'])){
                $rep1 = "SELECT id_maq FROM maquinas WHERE id_maq = ".$id_maq;
                $result =  mysqli_query($conn, $rep1);                                             
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "ID Máquina : " .$row["id_maq"]. "<br>";
                        
                    }
                } else {
                    echo "Máquina não exixte";
                }

                $rep2 = "SELECT id_comp FROM componentes WHERE id_comp = ".$id_comp;
                $result =  mysqli_query($conn, $rep2);                                             
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "ID Componente : " .$row["id_comp"]. "<br>";
                    }
                } else {
                    echo "<p>"."Componente não exixte";
                } 
                
                if(!empty($id_maq) && !empty($id_comp) && !empty($observacoes) && empty($manutencoes)){ 
                    
                    $sql_1 =  "INSERT INTO `observacoes`(`id_maq`, `id_comp`, `observacoes`) VALUES ('$id_maq','$id_comp','$observacoes')";
                    mysqli_query($conn, $sql_1);  
                }
                if(!empty($id_maq) && !empty($id_comp) && empty($observacoes) && !empty($manutencoes) && !empty($data_man)){ 
                    
                    $sql_2 = "INSERT INTO `manutencoes`(`id_maq`, `id_comp`, `manutencoes`, `data_manutencoes`)VALUES ('$id_maq','$id_comp','$manutencoes','$data_man')";
                    mysqli_query($conn, $sql_2);
                }else{
                    echo "Verifique que preencheu a data corretamente";
                }
                if(!empty($id_maq) && !empty($id_comp) && !empty($observacoes) && !empty($manutencoes) && !empty($data_man)){ 
                    
                    $sql_1 =  "INSERT INTO `observacoes`(`id_maq`, `id_comp`, `observacoes`) VALUES ('$id_maq','$id_comp','$observacoes')";
                    mysqli_query($conn, $sql_1);   
                    
                    $sql_2 = "INSERT INTO `manutencoes`(`id_maq`, `id_comp`, `manutencoes`, `data_manutencoes`) VALUES ('$id_maq','$id_comp','$manutencoes','$data_man')";
                    mysqli_query($conn, $sql_2);
                }else{
                    echo "Verifique que preencheu a data corretamente";
                }
            }

            //Close connection
            mysqli_close($conn); 
        ?>
        <form action="index.php" method="post">
        <div class="row">
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <center><h4> Dados a medir </h4></center>
                    </div>
                    <div class="card-body">
                        <center>
                            <h4 style="margin-bottom:32px"> Insira o ID da máquina e do componente </h4>
                                <p style="margin-bottom:30px">
                                    <label for="id_maq">ID Máquina:</label>
                                    <input type="number" name="id_maq" id="id_maq">
                                </p>
                                <p style="margin-bottom:30px">
                                    <label for="id_comp">ID Componente:</label>
                                    <input type="number" name="id_comp" id="id_comp">
                                </p>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <center><h4 class="card-header-title">Observações e/ou Manutenções</h4></center>
                    </div>
                <div class="card-body">
                    <div  class="card-body">
                        <center>
                            <div style="margin-top: 30px">
                                <p style="margin-bottom:30px">
                                    <label for="observacoes">Observações:</label>
                                    <input type="text" name="observacoes" id="observacoes" size="40"  height="10">
                                </p>
                                <p style="margin-bottom:25px">
                                    <label for="manutencoes">Manutenções:</label>
                                    <input type="text" name="manutencoes" id="manutencoes" size="30"  height="10"><input name="data_man" id="data_man" type="date">
                                </p>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12 col-xl-12 mt-4 mb-5">
            <center>
                <input style="margin-top:20px" type="submit" name = "Submit" value="Submit">
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
