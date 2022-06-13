<!DOCTYPE html>
<html>

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

    <title>Insert Page</title>
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
    <center>
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

        // Taking all values from the form data (input)
        $id_maq =  $_REQUEST['id_maq'];
        $nome_maq = $_REQUEST['nome_maq'];
        $descricao_maq =  $_REQUEST['descricao_maq'];

        $id_comp1 =  $_REQUEST['id_comp1'];
        $nome_comp1 = $_REQUEST['nome_comp1'];
        $descricao_comp1 =  $_REQUEST['descricao_comp1'];
        $checkbox1_1 = $_REQUEST['temperatura1'];
        $checkbox1_2 = $_REQUEST['humidade1'];
        $checkbox1_3 = $_REQUEST['vibracao1'];
        $checkbox1_4 = $_REQUEST['ruido1'];

        $id_comp2 =  $_REQUEST['id_comp2'];
        $nome_comp2 = $_REQUEST['nome_comp2'];
        $descricao_comp2 =  $_REQUEST['descricao_comp2'];
        $checkbox2_1 = $_REQUEST['temperatura2'];
        $checkbox2_2 = $_REQUEST['humidade2'];
        $checkbox2_3 = $_REQUEST['vibracao2'];
        $checkbox2_4 = $_REQUEST['ruido2'];

        $id_comp3 =  $_REQUEST['id_comp3'];
        $nome_comp3 = $_REQUEST['nome_comp3'];
        $descricao_comp3 =  $_REQUEST['descricao_comp3'];
        $checkbox3_1 = $_REQUEST['temperatura3'];
        $checkbox3_2 = $_REQUEST['humidade3'];
        $checkbox3_3 = $_REQUEST['vibracao3'];
        $checkbox3_4 = $_REQUEST['ruido3'];

        $a = 0;

        if(empty($checkbox1_1)){
            $checkbox1_1 = (0);
        }
        if(empty($checkbox1_2)){
            $checkbox1_2 = (0);
        }
        if(empty($checkbox1_3)){
            $checkbox1_3 = (0);
        }
        if(empty($checkbox1_4)){
            $checkbox1_4 = (0);
        }
        if(empty($checkbox2_1)){
            $checkbox2_1 = (0);
        }
        if(empty($checkbox2_2)){
            $checkbox2_2 = (0);
        }
        if(empty($checkbox2_3)){
            $checkbox2_3 = (0);
        }
        if(empty($checkbox2_4)){
            $checkbox2_4 = (0);
        }
        if(empty($checkbox3_1)){
            $checkbox3_1 = (0);
        }
        if(empty($checkbox3_2)){
            $checkbox3_2 = (0);
        }
        if(empty($checkbox3_3)){
            $checkbox3_3 = (0);
        }
        if(empty($checkbox3_4)){
            $checkbox3_4 = (0);
        }

        $sql1 = "INSERT INTO maquinas (id_maq, nome_maq, descricao_maq) VALUES ('$id_maq',
        '$nome_maq','$descricao_maq')";
        if(mysqli_query($conn, $sql1)){
           echo "<h3>Dados guardados com sucesso</h3>";

           echo nl2br("\n$id_maq\n $nome_maq\n "
           . "$descricao_maq\n");
        } else{
            echo "<h3>Obrigatório preencher toda a informação sobre a maquina."
                    ."</h3>";
        }

        if(empty($id_comp1) && empty($id_comp2) && empty($id_comp3)){
            echo "<h3>Obrigatório preencher pelo menos uma dos componentes."
            ."</h3>";
        }else{
                if(!empty($id_comp1)){
                    $sql2 = "INSERT INTO componentes (id_maq, id_comp, nome_comp, descricao_comp, temperatura, humidade, vibracao, ruido) VALUES ('$id_maq', '$id_comp1',
                    '$nome_comp1','$descricao_comp1','$checkbox1_1','$checkbox1_2','$checkbox1_3','$checkbox1_4')";
                    if(mysqli_query($conn, $sql2)){
                        echo "<h3>Dados guardados com sucesso</h3>";

                        echo nl2br("\n$id_comp1\n $nome_comp1\n "
                            . "$descricao_comp1\n");

                    } else{
                        echo "ERROR: Lamentamos, algo correu mal!! $sql2. "
                            . mysqli_error($gogn);
                    }                    

                }

                if(!empty($id_comp2)){
                    $sql3 = "INSERT INTO componentes (id_maq, id_comp, nome_comp, descricao_comp, temperatura, humidade, vibracao, ruido) VALUES ('$id_maq', '$id_comp2',
                    '$nome_comp2','$descricao_comp2','$checkbox2_1','$checkbox2_2','$checkbox2_3','$checkbox2_4')";

                    if(mysqli_query($conn, $sql3)){
                        echo "<h3>Dados guardados com sucesso</h3>";

                        echo nl2br("\n$id_comp2\n $nome_comp2\n "
                            . "$descricao_comp2\n");
                    } else{
                        echo "ERROR: Lamentamos, algo correu mal!! $sql3. "
                            . mysqli_error($conn);
                    }
                }

                if(!empty($id_comp3)){
                    $sql4 = "INSERT INTO componentes (id_maq, id_comp, nome_comp, descricao_comp, temperatura, humidade, vibracao, ruido) VALUES ('$id_maq', '$id_comp3',
                    '$nome_comp3','$descricao_comp3','$checkbox3_1','$checkbox3_2','$checkbox3_3','$checkbox3_4')";

                    if(mysqli_query($conn, $sql4)){
                        echo "<h3>Dados guardados com sucesso</h3>";

                        echo nl2br("\n$id_comp3\n $nome_comp3\n "
                            . "$descricao_comp3\n");
                    } else{
                        echo "ERROR: Lamentamos, algo correu mal!! $sql4. "
                            . mysqli_error($conn);
                    }
                }
            }

        //Close connection
        mysqli_close($conn);
        ?>

    </center>
    <nav class="navbar navbar-dark bg-dark text-white">
        <div class="container">
            <h6 class="navbar" style="padding-top:10px">&copy;PSA - Projeto em Sistemas de Automação</h6>
        </div>
    </nav>
</body>

</html>