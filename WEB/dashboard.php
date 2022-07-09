<?php
    // Filtros da data funcionam ??
    // Datas de manutenção
    // Avisos
    // Tabelas do fim
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

    <title>WebApp_PSA_2021/2022 - Dashboard</title>

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
                    <a class="nav-link active" aria-current="page" href="dados.php">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                        </svg>
                        <br>
                        Save
                    </a>
                    <a class="nav-link active" aria-current="page" href="dashboard.php">
                        <svg class="bi d-block mx-auto mb-1 " width="24" height="24" id="speedometer2" viewBox="0 0 16 16">
                            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" fill="#f7f7f7"></path>
                            <path d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" fill="#f7f7f7"></path>
                        </svg>
                        Data
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
        <div>
        <?php 
            $conn = mysqli_connect("localhost", "root", "root", "psa_bancada");

            // Check connection
            if($conn === false){
                die("ERROR: Could not connect. "
                    . mysqli_connect_error());
            }

            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            if(isset($_POST["Atualizar"])){
                $comp_id = $_REQUEST['id_comp'];
                if (empty($_POST["tipo_sensor"])) {
                    $tipo_sensor = "Escolha o tipo de dados que quer ver";
                  } else {
                    $tipo_sensor = test_input($_POST["tipo_sensor"]);
                }
                if(!empty($comp_id) && !empty($tipo_sensor)){
                    
                    $r_1 = "SHOW COLUMNS FROM `$comp_id` LIKE '$tipo_sensor'";
                    $e = mysqli_query($conn, $r_1);
                    if ($e->num_rows > 0) {
                        $dataI = $_REQUEST['data_inicio'];
                        $dataU = $_REQUEST['data_fim'];
                        if(empty($dataI) && empty($dataU)){
                            $testar = "SELECT * FROM `$comp_id` WHERE `$tipo_sensor` IS NOT NULL";
                        }elseif(!empty($dataI) && !empty($dataU) && $dataU >= $dataI){
                            if($tipo_sensor == 'temperatura' || $tipo_sensor == "humidade"){
                                $testar = "SELECT * FROM `$comp_id` WHERE `$tipo_sensor` IS NOT NULL AND data_temp_hum BETWEEN '$dataI' and '$dataU'";
                            }else{
                                $testar = "SELECT * FROM `$comp_id` WHERE `$tipo_sensor` IS NOT NULL AND data_vib_rui BETWEEN '$dataI' and '$dataU'";
                            }
                        }else{
                            $message = "<span style = 'color: red'> Preencha as duas datas corretamente</span>";
                        }
                        
                        $mqry = mysqli_query($conn, $testar);
                        $i=0;
                        $values = array();
                        if($mqry -> num_rows > 0){
                            while($row = mysqli_fetch_assoc($mqry)){
                                $values[] = $row;
                            }
                        }
                        $vals = array();
                        $datas = array();
                        foreach($values as $val){
                            array_push($vals, $val[$tipo_sensor]);
                            array_push($datas, $val['id']);
                            //SE ALTERARES PARA DATE A COLUNA data FAZER E APAGAR O QUE ESTÁ EMBAIXO, DENTRO DO FOREACH:
                            //array_push($manutencoesData, $val['data']);
                            //$separar = explode(" ", $val['data_temp_hum']);
                            //array_push($datas, $separar[0]);
                        }
                    }else{
                        $tipo_sensor = "Tipo de dados não existe!";
                    }
                }else{
                    $message = "<span style = 'color: red'> - Verifique o ID Componente e o tipo de sensor</span>";
                }
            }
            //print_r($dataU);

            mysqli_close($conn);
        ?>
        </div>
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header"> 
                        <h4>Dados dos Sensores - <?php echo "<span style = 'color: red'>".$tipo_sensor."</span>";?></h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">Filtros <?php echo $message;?></h4>
                    </div>
                    <div class="card-body">
                        <form action="dashboard.php" method="post">
                        <div class="container options">
                            <div class="container pt-4" style="float: left">
                                <label style="font-weight: bolder;" for="id_maq">ID Máquina:</label>
                                    <p>
                                        <input type="number" name="id_maq" id="id_maq" size="40"  height="10" minlength="0" maxlength="300" >
                                    </p>
                            </div>
                            <div class="container pt-2 pb-2" style="float: left">
                                <label style="font-weight: bolder;" for="id_comp">ID Componente:</label>
                                    <p>
                                        <input type="number" name="id_comp" id="id_comp" size="40"  height="10" minlength="0" maxlength="300" >
                                    </p>
                            </div>
                            <div class="container">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_sensor" id="temperatura" value="temperatura">
                                    <label class="form-check-label" for="temperatura">Temperatura</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_sensor" id="humidade" value="humidade">
                                    <label class="form-check-label" for="humidade">Humidade</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_sensor" id="vibracao" value="vibracao">
                                    <label class="form-check-label" for="vibracao">Vibração</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="tipo_sensor" id="ruido" value="ruido">
                                    <label class="form-check-label" for="ruido">Ruído</label>
                                </div>
                            </div>
                        </div>
                        <div class="container pt-2" style="width: 260px; float:center">
                            <div style="float:left; text-align: center; margin-bottom:10px; margin-top:22px">
                                <b> Início: </b>
                                <p><input name="data_inicio" id="data_inicio" type="date"></p>
                            </div>
                            <div style="float:right; text-align: center; margin-bottom:10px; margin-top:22px">
                                <b> Fim: </b>
                                <p><input name="data_fim" id="data_fim" type="date"></p>
                            </div>
                        </div>
                        <center>
                            <div class="container pt-2" style="float:left">
                                <p><input style="margin-top:22px" type="submit" value="Atualizar" name="Atualizar"></p>
                            </div>
                        </center>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-xl-4 col-xl">
                    <div class="card">
                        <div class="card-body mb-3">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <div style="margin-bottom:20px">
                                        <img src="info.png" alt="Alertas" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-5">
                                        Informações
                                    </h5>
                                    <p><span class="h6"> Máquina:
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

                                            $sql1 = "SELECT nome_maq FROM maquinas WHERE id_maq = ".$id_maq;
                                            $result =  mysqli_query($conn, $sql1);

                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result->fetch_assoc()) {
                                                  echo $row["nome_maq"]. "<br>";
                                                }
                                            } else {
                                                echo "0 resultados";
                                            }

                                            //Close connection
                                            mysqli_close($conn);
                                        ?>
                                        </span>
                                    <p><span class="h6"> Componente:
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

                                            $id_comp =  $_REQUEST['id_comp'];

                                            $sql2 = "SELECT nome_comp FROM componentes WHERE id_comp = ".$id_comp;

                                            $result1 =  mysqli_query($conn, $sql2);
                                            if ($result1->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result1->fetch_assoc()) {
                                                echo $row["nome_comp"]. "<br>";
                                                }
                                            } else {
                                                echo "0 resultadoss";
                                            }
                                            //Close connection
                                            mysqli_close($conn);
                                        ?>
                                        </span>
                                    <p><span class="h6"> ID:
                                        <?php
                                            $id_maq =  $_REQUEST['id_maq'];
                                            $id_comp =  $_REQUEST['id_comp'];
                                            echo "$id_maq - $id_comp";
                                        ?>
                                        </span>
                                    <p><span class="h6"> Características: </span>
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

                                            $id_comp = $_REQUEST['id_comp'];

                                            $sql3 = "SELECT descricao_comp FROM componentes WHERE id_comp = ".$id_comp;

                                            $result2 =  mysqli_query($conn, $sql3);
                                            if ($result2->num_rows > 0) {
                                                // output data of each row
                                                while($row = $result2->fetch_assoc()) {
                                                echo $row["descricao_comp"]. "<br>";
                                                }
                                            } else {
                                                echo "0 resultados";
                                            }
                                            //Close connection
                                            mysqli_close($conn);
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                        
                        if(isset($_POST["Atualizar"])){
                            $query = "SELECT DISTINCT data_manutencoes FROM `manutencoes` WHERE id_maq = $id_maq AND id_comp = $id_comp ORDER BY data_manutencoes DESC";
                            $res = mysqli_query($conn, $query);
                            date_default_timezone_set('Europe/Lisbon');
                            $dataNow=date('Y-m-d');
                            $teste = $res -> num_rows;
                            $dataUlt = "";
                            $dataProx = "";
                            $d = array();
                            if($res -> num_rows > 0){
                                while($row = $res->fetch_assoc()) {
                                    /*$i = explode(" ",$row["data_manutencoes"]);
                                    $j = explode("-", $i);
                                    $data = explode("-", $dataNow);
                                    $dataProx = $data[2];*/
                                    $d[] = $row;
                                }
                            }
                            $manutencoesData = array();
                            foreach($d as $d1){
                                $sep = explode(" ", $d1['data_manutencoes']);
                                array_push($manutencoesData, $sep[0]);
                                //SE ALTERARES PARA DATE A COLUNA data_manutencoes FAZER E APAGAR O QUE ESTÁ EM CIMA, DENTRO DO FOREACH::
                                //array_push($manutencoesData, $d1['data_manutencoes']);
                            }

                            $dataProx = "0 resultados";
                            $dataUlt = "0 resultados";
                            $pos = 0;
                            $ant = count($d)-1;
                            foreach($d as $verif){
                                $dataProx = $manutencoesData[$pos] > $dataNow ? $manutencoesData[$pos]: $dataProx;
                                $dataUlt = $manutencoesData[$ant] < $dataNow ? $manutencoesData[$ant] : $dataUlt;
                                $pos++;
                                $ant--;
                            }
                            
                        }

                        //Close connection
                        mysqli_close($conn);
                    ?>
                <div class="col-12 col-xl-4 col-xl">
                    <div class="card">
                        <div class="card-body mb-3">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <div style="margin-bottom:20px">
                                        <img src="Manutenção.png" alt="Manutenção" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-5">
                                        Manutenções
                                    </h5>
                                    <div>
                                        <center>
                                            <p><span class="text-center h6"> Última Manutenção: </span>
                                            <p><span class="text-center h6"> <?php echo $dataUlt;?> </span>
                                            <p><span class="text-center h6"> Próxima Manutenção: </span>
                                            <p><span class="text-center h6"> <?php echo $dataProx;?> </span>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-xl">
                    <div class="card">
                        <div class="card-body mb-3">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <div style="margin-bottom:20px">
                                        <img src="alerta.png" alt="Alertas" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-5">
                                        Avisos
                                    </h5>
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
                                        
                                        //id_avaria = 0 --> temperatura
                                        //id_avaria = 1 --> humidade
                                        //id_avaria = 2 --> vibracao
                                        //id_avaria = 3 --> ruido

                                        $id_comp = $_REQUEST['id_comp'];
                                        $veri = "SELECT * FROM `avarias` WHERE id_comp = $id_comp AND id_avarias = 0 ORDER BY 'data' DESC LIMIT 1";                                    
                                        $ql = mysqli_query($conn, $veri); 
                                        if ($ql->num_rows > 0) {                                
                                            $av_temp = "Anomalia Detetada ";
                                            $row = mysqli_fetch_assoc($ql);
                                            $row = explode(" ",$row['data']);
                                            $UltAv = $row[0];
                                        } else {
                                            $av_temp = "0 results";
                                        }
                                        $veri1 = "SELECT * FROM `avarias` WHERE id_comp = $id_comp AND id_avarias = 1 ORDER BY 'data' DESC LIMIT 1" ;                                    
                                        $qle = mysqli_query($conn, $veri1); 
                                        if ($qle->num_rows > 0) {                                
                                            $av_hum = "Anomalia Detetada ";
                                            $rowh = mysqli_fetch_assoc($qle);
                                            $rowh = explode(" ",$rowh['data']);
                                            $UltAvh = $rowh[0];                                            
                                        } else {
                                            $av_hum = "0 results";
                                        }
                                        $veri2 = "SELECT * FROM `avarias` WHERE id_comp = $id_comp AND id_avarias = 2 ORDER BY 'data' DESC LIMIT 1" ;                                    
                                        $qlv = mysqli_query($conn, $veri2); 
                                        if ($qlv->num_rows > 0) {                                
                                            $av_vib = "Anomalia Detetada ";
                                            $rowv = mysqli_fetch_assoc($qlv);
                                            $rowv = explode(" ",$rowv['data']);
                                            $UltAvv = $rowv[0];                                            
                                        } else {
                                            $av_vib = "0 results";
                                        }
                                        $veri3 = "SELECT * FROM `avarias` WHERE id_comp = $id_comp AND id_avarias = 3 ORDER BY 'data' DESC LIMIT 1" ;                                    
                                        $qlr = mysqli_query($conn, $veri3); 
                                        if ($qlr->num_rows > 0) {                                
                                            $av_ru = "Anomalia Detetada ";
                                            $rowr = mysqli_fetch_assoc($qlr);
                                            $rowr = explode(" ",$rowr['data']);
                                            $UltAvr = $rowr[0];
                                        } else {
                                            $av_ru = "0 results";
                                        }

                                        //Close Connection
                                        mysqli_close($conn);
                                    ?>
                                    <p><span class="h6"> Temperatura:  <?php echo $av_temp. "  "; echo $UltAv;?></span>
                                    <p><span class="h6"> Humidade: <?php echo $av_hum; echo $UltAvh;?></span>
                                    <p><span class="h6"> Vibração: <?php echo $av_vib; echo $UltAvv;?></span>
                                    <p><span class="h6"> Ruido: <?php echo $av_ru; echo $UltAvr;?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-5 pb-5">
                <div class="row">
                    <div class="col-12 col-xl-6 col-xl">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <h4 class="card-header-title">
                                            Observações
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive" data-list="{&quot;valueNames&quot;: [ &quot;goal-data&quot;, &quot;goal-descricao&quot;]}">
                                <table class="table table-sm table-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th><a class="text-uppercase text-center text-muted" data-sort="goal-data"> Data </a></th>
                                        <th><a class="text-uppercase text-center text-muted" data-sort="goal-descricao"> Descrição </a></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
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

                                        $qry = "SELECT * FROM `observacoes` WHERE id_comp = $id_comp ORDER BY 'data' DESC LIMIT 5";
                                        $execute = mysqli_query($conn, $qry);
                                        if($execute -> num_rows > 0){
                                            while($row = $execute -> fetch_assoc()){
                                                $datObs= explode(" ", $row['data']);
                                                echo "<tr><td class='goal-data'>".$datObs[0].
                                                "</td><td class='goal-observacao'>".$row['observacoes'] ."</td></tr>";
                                            }
                                        }
                                        //Close Connection
                                        mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6 col-xl">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center gx-0">
                                    <div class="col">
                                        <h4 class="card-header-title">
                                            Manutenção
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive" data-list="{&quot;valueNames&quot;: [ &quot;goal-data&quot;, &quot;goal-descricao&quot;]}">
                                <table class="table table-sm table-nowrap card-table">
                                    <thead>
                                    <tr>
                                        <th><a class="text-uppercase text-center text-muted" data-sort="goal-data"> Data </a></th>
                                        <th><a class="text-uppercase text-center text-muted" data-sort="goal-descricao"> Descrição </a></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
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

                                        $qry1 = "SELECT * FROM `manutencoes` WHERE id_comp = $id_comp ORDER BY 'data_manutencoes' DESC LIMIT 5";
                                        $execute2 = mysqli_query($conn, $qry1);
                                        if($execute2 -> num_rows > 0){
                                            while($row = $execute2 -> fetch_assoc()){
                                                $datMan= explode(" ", $row['data_manutencoes']);
                                                echo "<tr><td class='goal-data'>".$datMan[0].
                                                "</td><td class='goal-manutencoes'>".$row['manutencoes'] ."</td></tr>";
                                            }
                                        }
                                        //Close Connection
                                        mysqli_close($conn);
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-dark bg-dark text-white">
            <div class="container">
                <h6 class="navbar" style="padding-top:10px">&copy;PSA - Projeto em Sistemas de Automação</h6>
            </div>
        </nav>
    </body>

  <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>-->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--<canvas id="myChart" width="400" height="400"></canvas>-->
  <script>
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

        $sql1 = "SELECT temperatura FROM `1` WHERE temperatura IS NOT NULL ";
        $result =  mysqli_query($conn, $sql1);
        $dados_temperatura = array();
        //$dados_temperatura = array($result);
        if ($result->num_rows > 0) {
            // output data of each row
            /*while($row = $result->fetch_assoc()) {
                $dados_temperatura = array($row["temperatura"]);
                //echo var_dump($dados_temperatura);                                  
            }*/
            while($row  = mysqli_fetch_array($result)){
                $dados_temperatura[] = $row;
            }                                       
        } else {
            echo "0 resultados";
        }

        //Close connection
        mysqli_close($conn);
    ?>
    var dados_t2 = <?php echo json_encode($vals); ?>;
    var datas_t = <?php echo json_encode($datas); ?>;
    var legend = <?php echo json_encode($tipo_sensor);?>;
    const ctx = document.getElementById("chart").getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
         labels: datas_t,
         datasets: [{
                label: legend,
                borderColor: 'rgb(47, 128, 237)',
                data: dados_t2
            }]//,
            //{
                //label: 'Caudal (bar)',
                //borderColor: 'rgb(255, 0, 0)',
                //data: [1.4, 4, 10, 5, 6, 7],
          //}]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: true,
              }
            }]
          }
        },
      });
    </script>
<script>
    function atualizarDados() {
        var maquina = document.getElementById("maquinas").options[document.getElementById("maquinas").selectedIndex].value;
        var componentes = document.getElementById("componentes").options[document.getElementById("componentes").selectedIndex].value;
        var tipoSensor = document.getElementById("tipoSensor").options[document.getElementById("tipoSensor").selectedIndex].value;
        $.get("http://localhost:3000/getInfoDB/" + maquina + "/" + componentes + "/" + tipoSensor, function (data, status) {
            alert("Data: " + data + "\nStatus: " + status);
        }).fail(function(err){
            alert("Erro: " + err.status + " | " + err.statusText);
            console.log(err)
        });
    }
</script>

</html>