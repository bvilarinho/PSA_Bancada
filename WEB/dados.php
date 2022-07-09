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

        $arquivo = fopen('ID_comp.txt','r');
        $id_comp = "";
        while(!feof($arquivo)){
            $id_comp=fgets($arquivo,1024);
        }
        fclose($arquivo);

/////////////////////////////////////////////////////////////////////////////////////////

        if(isset($_POST["Submit1"])){

            $lin = file('temperatura.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp = fopen('temperatura.txt', 'w'); 
            fwrite($fp, implode(PHP_EOL, $lin)); 
            fclose($fp);
    
            $lin1 = file('humidade.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp1 = fopen('humidade.txt', 'w'); 
            fwrite($fp1, implode(PHP_EOL, $lin1)); 
            fclose($fp1);
    
            $lin2 = file('vibracao.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp2 = fopen('vibracao.txt', 'w'); 
            fwrite($fp2, implode(PHP_EOL, $lin2)); 
            fclose($fp2);
    
            $lin3 = file('ruido.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp3 = fopen('ruido.txt', 'w'); 
            fwrite($fp3, implode(PHP_EOL, $lin3)); 
            fclose($fp3);

            $lin4 = file('timestamp_temp_hum.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp4 = fopen('timestamp_temp_hum.txt', 'w'); 
            fwrite($fp4, implode(PHP_EOL, $lin4)); 
            fclose($fp4);
    
            $lin5 = file('timestamp_vib.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp5 = fopen('timestamp_vib.txt', 'w'); 
            fwrite($fp5, implode(PHP_EOL, $lin5)); 
            fclose($fp5);
    
            $lin6 = file('timestamp_ruido.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp6 = fopen('Timestamp_ruido.txt', 'w'); 
            fwrite($fp6, implode(PHP_EOL, $lin6)); 
            fclose($fp6);
   
            $lin7 = file('tempo_amostragem_vib.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp7 = fopen('tempo_amostragem_vib.txt', 'w'); 
            fwrite($fp7, implode(PHP_EOL, $lin7)); 
            fclose($fp7);

            $lin8 = file('tempo_amostragem_ruido.txt',FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
            $fp8 = fopen('tempo_amostragem_ruido.txt', 'w'); 
            fwrite($fp8, implode(PHP_EOL, $lin8)); 
            fclose($fp8);

///////////////////////////////////////////////////////////////////////////////////

            $exTemp = false;
            $exHum = false;
            $exVib = false;
            $exRui = false;

            $result1 = "SHOW COLUMNS FROM `$id_comp` LIKE 'temperatura'";
            $exists = mysqli_query($conn, $result1);
            if ($exists->num_rows > 0) {
                // output data of each row
                $number = "SELECT id FROM `$id_comp` WHERE temperatura is null";
                $n = mysqli_query($conn, $number);
                $exTemp = true;
                if ($n->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    $j = 0;
                    $k = 0;
                    $f =  file('temperatura.txt');
                    $linhas = count($f);
                    $valores = array();
                    while(($row = $n->fetch_assoc()) && $k < $linhas) {
                        $alter = "UPDATE `$id_comp` SET temperatura = '$f[$i]' WHERE id = ".$row["id"];
                        $update = mysqli_query($conn, $alter);
                        $i++;
                        $k++;
                    }
                    foreach($f as $lines){
                        if($j >= $i){
                            $insert1 = "INSERT INTO `$id_comp`(`temperatura`) VALUES ('$lines')";
                            $i2 = mysqli_query($conn, $insert1); 
                        }
                        $j++;
                    }
                } else {
                    $f = fopen('temperatura.txt',"r");
                    while(!feof($f)){
                        $line = fgets($f);
                        $insert = "INSERT INTO `$id_comp`(`temperatura`) VALUES ('$line')";
                        $i1 = mysqli_query($conn, $insert);
                        
                    }
                    fclose($f);
                }
            } else {
                $err = "Não foi possível gravar os dados";
            }

///////////////////////////////////////////////////////////////////////////////            

            $result2 = "SHOW COLUMNS FROM `$id_comp` LIKE 'humidade'";
            $exists1 = mysqli_query($conn, $result2);
            if ($exists1->num_rows > 0) {
                // output data of each row
                $number1 = "SELECT id FROM `$id_comp` where humidade is null";
                $n1 = mysqli_query($conn, $number1);
                $exHum = true;
                if ($n1->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    $j = 0;
                    $k = 0;
                    $f =  file('humidade.txt');
                    $linhas = count($f);
                    $valores = array();
                    while(($row = $n1->fetch_assoc()) && $k < $linhas) {
                        $alter1 = "UPDATE `$id_comp` SET humidade = '$f[$i]' WHERE id = ".$row["id"];
                        $update1 = mysqli_query($conn, $alter1);
                        $i++;
                        $k++;
                    }
                    foreach($f as $lines){
                        if($j >= $i){
                            $insert2 = "INSERT INTO `$id_comp`(`humidade`) VALUES ('$lines')";
                            $i3 = mysqli_query($conn, $insert2); 
                        }
                        $j++;
                    }

                } else {
                    $f = fopen('humidade.txt',"r");
                    while(!feof($f)){
                        $line = fgets($f);
                        $insert3 = "INSERT INTO `$id_comp`(`humidade`) VALUES ('$line')";
                        $i3 = mysqli_query($conn, $insert3);
                    }
                    fclose($f);
                }
            } else {
                $err = "Não foi possível gravar os dados";
            }
/////////////////////////////////////////////////////////////////
            
            if($exTemp == true || $exHum == true){
                $x = file("id.txt");
                $lineid = $x[0];
                if($exHum == true && $exTemp == false){
                    $temData = "SELECT id FROM `$id_comp` WHERE humidade IS NOT NULL AND id > $lineid";
                }elseif($exTemp == true && $exHum == false){
                    $temData = "SELECT id FROM `$id_comp` WHERE temperatura IS NOT NULL AND id > $lineid";
                }else{
                    $temData = "SELECT id FROM `$id_comp` WHERE (temperatura IS NOT NULL OR humidade IS NOT NULL) AND id > $lineid";
                }
                $rD = mysqli_query($conn, $temData);
                if($rD -> num_rows > 0){
                    $i = 0;
                    $fD = file('timestamp_temp_hum.txt');
                    while($rowD = $rD->fetch_assoc()) {
                        //echo $fD[$i];
                        $alter = "UPDATE `$id_comp` SET data_temp_hum = '$fD[$i]' WHERE id = ".$rowD["id"];
                        $update = mysqli_query($conn, $alter);
                        $i++;
                        $lineid = $rowD["id"];
                    }
                }
                $linhas = $lineid."\n".$x[1].$x[2];
                $x = fopen("id.txt","wb");
                fwrite($x,$linhas);
                fclose($x);
            }
////////////////////////////////////////////////////////////////                

            $result3 = "SHOW COLUMNS FROM `$id_comp` LIKE 'vibracao'";
            $exists2 = mysqli_query($conn, $result3);
            if ($exists2->num_rows > 0) {
                $exVib = true;
                // output data of each row
                $number2 = "SELECT id FROM `$id_comp` where vibracao is null";
                $n2 = mysqli_query($conn, $number2);
                if ($n2->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    $j = 0;
                    $f =  file('vibracao.txt');
                    while($row = $n2->fetch_assoc()) {
                        $alter2 = "UPDATE `$id_comp` SET vibracao = '$f[$i]' WHERE id = ".$row["id"];
                        $update2 = mysqli_query($conn, $alter2);
                        $i++;
                    }
                    foreach($f as $lines){
                        if($j >= $i){
                            $insert4 = "INSERT INTO `$id_comp`(`vibracao`) VALUES ('$lines')";
                            $i4 = mysqli_query($conn, $insert4); 
                        }
                        $j++;
                    }

                } else {
                    $f = fopen('vibracao.txt',"r");
                    while(!feof($f)){
                        $line = fgets($f);
                        $insert5 = "INSERT INTO `$id_comp`(`vibracao`) VALUES ('$line')";
                        $i5 = mysqli_query($conn, $insert5);
                    }
                    fclose($f);
                }
/////////////////////////////////////////////////////////////////////////

                $x = file("id.txt");
                $lineVid = $x[1];
                $vibData = "SELECT id FROM `$id_comp` WHERE vibracao IS NOT NULL  AND id > $lineVid";
                $rDV = mysqli_query($conn, $vibData);
                if($rDV -> num_rows > 0){
                    $datasV = array();
                    while($row = mysqli_fetch_assoc($rDV)){
                        array_push($datasV, $row["id"]);
                    }
                }
                $count = 200;
                $idx = 0;
                $fV = file('timestamp_vib.txt');
                foreach($fV as $lineV){
                    for($idx; $idx < $count; $idx++){
                        $alter = "UPDATE `$id_comp` SET `data_vib` = '$lineV' WHERE id = $datasV[$idx]";
                        $update = mysqli_query($conn, $alter);
                    }
                    $count += 200; //$count = $count + $count;
                }
                $lineVid = $datasV[$idx-1];
                $idx = 0;
                $count = 200;
                $fAV = file('tempo_amostragem_vib.txt');
                foreach($fAV as $lineV){
                    for($idx; $idx < $count; $idx++){
                        $alter = "UPDATE `$id_comp` SET `temp_amost_vib` = '$lineV' WHERE id = $datasV[$idx]";
                        $update = mysqli_query($conn, $alter);
                    }
                    $count += 200; //$count = $count + $count;
                }
                $linhas = $x[0].$lineVid."\n".$x[2];
                $x = fopen("id.txt","wb");
                fwrite($x,$linhas);
                fclose($x);
            } else {
                $err = "Não foi possível gravar os dados";
            }

////////////////////////////////////////////////////////////////////////////////

            $result4 = "SHOW COLUMNS FROM `$id_comp` LIKE 'ruido'";
            $exists3 = mysqli_query($conn, $result4);
            if ($exists3->num_rows > 0) {
                $exRui = true;
                // output data of each row
                $number3 = "SELECT id FROM `$id_comp` where ruido is null";
                $n3 = mysqli_query($conn, $number3);
                if ($n3->num_rows > 0) {
                    // output data of each row
                    $i = 0;
                    $j = 0;
                    $f =  file('ruido.txt');
                    while($row = $n3->fetch_assoc()) {
                        $alter3 = "UPDATE `$id_comp` SET ruido = '$f[$i]' WHERE id = ".$row["id"];
                        $update3 = mysqli_query($conn, $alter3);
                        $i++;
                    }
                    foreach($f as $lines){
                        if($j >= $i){
                            $insert6 = "INSERT INTO `$id_comp`(`ruido`) VALUES ('$lines')";
                            $i6 = mysqli_query($conn, $insert6); 
                        }
                        $j++;
                    }

                } else {
                    $f = fopen('ruido.txt',"r");
                    while(!feof($f)){
                        $line = fgets($f);
                        $insert7 = "INSERT INTO `$id_comp`(`ruido`) VALUES ('$line')";
                        $i7 = mysqli_query($conn, $insert7);
                        
                    }
                    fclose($f);
                }

///////////////////////////////////////////////////////////////////////////

                $x = file("id.txt");
                $lineRu = $x[2];
                $ruData = "SELECT id FROM `$id_comp` WHERE ruido IS NOT NULL  AND id > $lineRu";
                $rDR = mysqli_query($conn, $ruData);
                if($rDR -> num_rows > 0){
                    $datasR = array();
                    while($row = mysqli_fetch_assoc($rDR)){
                        array_push($datasR, $row["id"]);
                    }
                }
                $count = 200;
                $idx = 0;
                $fR = file('timestamp_ruido.txt');
                foreach($fR as $lineR){
                    for($idx; $idx < $count; $idx++){
                        $alter = "UPDATE `$id_comp` SET `data_ru` = '$lineR' WHERE id = $datasR[$idx]";
                        $update = mysqli_query($conn, $alter);
                    }
                    $count += 200; //$count = $count + $count;
                }
                $lineRu = $datasR[$idx-1];
                $idx = 0;
                $count = 200;
                $fAR = file('tempo_amostragem_ruido.txt');
                foreach($fAR as $lineR){
                    for($idx; $idx < $count; $idx++){
                        $alter = "UPDATE `$id_comp` SET `temp_amost_rui` = '$lineR' WHERE id = $datasR[$idx]";
                        $update = mysqli_query($conn, $alter);
                    }
                    $count += 200; //$count = $count + $count;
                }
                $linhas = $x[0].$x[1].$lineRu;
                $x = fopen("id.txt","wb");
                fwrite($x,$linhas);
                fclose($x);
            } else {
                $err = "Não foi possível gravar os dados";
            }

////////////////////////////////////////////////////////////////////////////////

            $ai = "SELECT * FROM KM0 WHERE id_comp = ".$id_comp;
            $res =  mysqli_query($conn, $ai);                                             
            if ($res->num_rows > 0) {
                // output data of each row
                $falertas = file("alertas.txt"); 
                $i = 0;
                foreach($falertas as $line){
                    if(!empty(trim($line))){
                        $valmaq = "SELECT id_maq FROM `componentes` where id_comp = $id_comp";
                        $maqRes = mysqli_query($conn, $valmaq);
                        if($maqRes -> num_rows > 0){
                            $row = $maqRes->fetch_assoc();
                            $id_maq = $row["id_maq"];
                            $insAv = "INSERT INTO `avarias`(`id_avarias`, `id_maq`, `id_comp`, `avaria`) VALUES ($i, $id_maq, $id_comp, $line)";
                            $av = mysqli_query($conn, $insAv);
                        }
                    }
                    $i++;
                }
            }else {
                $falertas = file("KM0_novo.txt");
                $fValues = array();
                foreach($falertas as $valAl){
                    array_push($fValues, $valAl);
                }
                if($exTemp == true){
                    
                    $t = "INSERT INTO `KM0`(`id_comp`, `temperatura_media`, `temperatura_max`, `temperatura_min`) VALUES ('$id_comp', '$fValues[2]', '$fValues[1]', '$fValues[0]')";
                    mysqli_query($conn, $t);
                    if($exHum == true){
                        $h = "UPDATE `KM0`SET `humidade_media`= $fValues[5],`humidade_max`= $fValues[4],`humidade_min`= $fValues[3] WHERE `id_comp`= $id_comp";
                        mysqli_query($conn, $h);
                    }
                    if($exVib == true){
                        $v = "UPDATE `KM0`SET `vibracao_media` = $fValues[8],`vibracao_max`= $fValues[7],`vibracao_min`= $fValues[6] WHERE `id_comp`= $id_comp";
                        mysqli_query($conn, $v);
                    }
                    if($exRui == true){
                        $r = "UPDATE `KM0`SET `ruido_media` = $fValues[11],`ruido_max`= $fValues[10],`ruido_min`= $fValues[9] WHERE `id_comp`= $id_comp";
                        mysqli_query($conn, $r);
                    }
                }else{
                    if($exHum == true){
                        $h = "INSERT INTO `KM0`(`id_comp`, `humidade_media`, `humidade_max`, `humidade_min`) VALUES ($id_comp, $fValues[5], $fValues[4], $fValues[3])";
                        mysqli_query($conn, $h);
                        if($exVib == true){ 
                            $v = "UPDATE `KM0`SET `vibracao_media` = $fValues[8],`vibracao_max`= $fValues[7],`vibracao_min`= $fValues[6] WHERE `id_comp`= $id_comp";
                            mysqli_query($conn, $v);
                        }
                        if($exRui == true){
                            $r = "UPDATE `KM0`SET `ruido_media` = $fValues[11],`ruido_max`= $fValues[10],`ruido_min`= $fValues[9] WHERE `id_comp`= $id_comp";
                            mysqli_query($conn, $r);
                        }

                    }else{
                        if($exVib == true){
                            $v = "INSERT INTO `KM0`(`id_comp`, `vibracao_media`, `vibracao_max`, `vibracao_min`) VALUES ($id_comp, $fValues[8], $fValues[7], $fValues[6])";
                            mysqli_query($conn, $v);
                            if($exRui == true){
                                $r = "UPDATE `KM0`SET `ruido_media` = $fValues[11],`ruido_max`= $fValues[10],`ruido_min`= $fValues[9] WHERE `id_comp`= $id_comp";
                                mysqli_query($conn, $r);
                            }
                        }else{
                            $r = "INSERT INTO `KM0`(`id_comp`, `ruido_media`, `ruido_max`, `ruido_min`) VALUES ($id_comp, $fValues[11], $fValues[10], $fValues[9])";
                            mysqli_query($conn, $r);
                        }

                    }
                }
            } 

            $ig = false; 
            if (unlink('KM0.txt')) {
                $ig = true;
                $mens = "Ficheiro(s) apagado(s) com sucesso";
            } else {
                $erro = "Ficheiro(s) não existe(m)";
            }
            
        }

        //Close connection
        mysqli_close($conn);
    ?>
    <form action="dados.php" method="post">
    <div class=" container col-12 col-xl-12 mt-5 mb-5">
        <div class="card">
            <div class="card-header">
                <h4 class="card-header-title">Gravação de dados <?php echo "<span style = 'color: red; font-size: 20px;'>".$err."</span>";?></h4>
            </div>
            <div class="card-body">
                <center>
                    <h4 style="text-align:center; margin-bottom: 30px; margin-top: 30px">Verifique o ID do componente</h4>
                    <p></p>    
                    <h5 style="text-align:center; margin-bottom: 5px;  margin-top: 30px">ID Componente</h5>
                    <br>
                    <h6 style="text-align:center; margin-bottom: 10px"><?php echo "$id_comp" ?></h6>  
                    <h5 style="text-align:center; margin-top: 40px; margin-bottom:20px">Carregue no botão</h5>  
                    <a class="nav-link active" aria-current="page">
                        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-cloud-download" viewBox="0 0 16 16">
                            <path d="M4.406 1.342A5.53 5.53 0 0 1 8 0c2.69 0 4.923 2 5.166 4.579C14.758 4.804 16 6.137 16 7.773 16 9.569 14.502 11 12.687 11H10a.5.5 0 0 1 0-1h2.688C13.979 10 15 8.988 15 7.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 2.825 10.328 1 8 1a4.53 4.53 0 0 0-2.941 1.1c-.757.652-1.153 1.438-1.153 2.055v.448l-.445.049C2.064 4.805 1 5.952 1 7.318 1 8.785 2.23 10 3.781 10H6a.5.5 0 0 1 0 1H3.781C1.708 11 0 9.366 0 7.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383z"/>
                            <path d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z"/>
                        </svg>
                        <br>
                    </a>
                    <div class="col-12 col-xl-12 mt-3 mb-5">
                        <input style="margin-top:20px" type="submit" name = "Submit1" value="Gravar Dados">
                        <?php 
// Verificar!!!                        
                        if ($ig == false)
                            echo "<span style = 'color: red; font-size: 20px;'>".$erro."</span>";
                        else
                            echo $mens;
                        ?>    
                    </div>
                </center>
            </div>
        </div>
    </div>
    </form>
    <nav class="navbar navbar-dark bg-dark text-white">
        <div class="container">
            <h6 class="navbar" style="padding-top:10px">&copy;PSA - Projeto em Sistemas de Automação</h6>
        </div>
     </nav>
  </body>
</html>