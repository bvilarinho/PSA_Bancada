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
        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h4>Dados dos Sensores</h4>
                    </div>
                    <div class="card-body">
                        <canvas id="chart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-header-title">Filtros</h4>
                    </div>
                    <div class="card-body">
                        <div class="container options">
                            <div class="container pt-3" style="float left">
                                <label style="font-weight: bolder;" for="maquinas">Escolha uma máquina:</label>
                                <p><select name="maquinas" id="maquinas">
                                    <option value="tapete">Tapete</option>
                                    <option value="central hidraulica ">Central Hidráulica</option>
                                    <option value="mesa gravacao a laser">Mesa Gravação a Laser</option>
                                </select></p>
                            </div>
                            <div class="container pt-3" style="float left">
                                <label style="font-weight: bolder;" for="componentes">Escolha um componente:</label>
                                <p><select name="componentes" id="componentes">
                                    <option value="estrutura">Estrutura</option>
                                    <option value="motor ac">Motor AC</option>
                                </select></p>
                            </div>
                            <div class="container pt-3" style="float left">
                                <label style="font-weight: bolder;" for="componentes">ID:</label>
                                <p><select name="id_generico" id="id_generico">
                                    <option value=".">.</option>
                                    <option value=".">.</option>
                                </select></p>
                            </div>
                            <div class="container pt-3" style="float left">
                                <label style="font-weight: bolder;" for="tipoSensor">Escolha um tipo de dados:</label>
                                <p><select name="tipoSensor" id="tipoSensor">
                                    <option value="temperatura">Temperatura</option>
                                    <option value="humidade">Humidade</option>
                                    <option value="vibracao">Vibração</option>
                                    <option value="ruido">Ruido</option>
                                </select></p>
                            </div>
                            </div>
                            <div class="container pt-3" style="width: 260px; float:left">
                                <div style="float:left; text-align: center; margin-bottom:7px">
                                    <b> Início: </b>
                                    <p><input id="data_inicio" type="date"></p>
                                </div>
                                <div style="float:right; text-align: center; margin-bottom:7px">
                                    <b> Fim: </b>
                                    <p><input id="data_fim" type="date"></p>
                                </div>
                            </div>
                            <div class="container pt-3" style="float:left">
                                <p><button style="color:blue" type="button" onclick="atualizarDados()">Atualizar Dados</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-xl-4 col-xl">
                    <div class="card">
                        <div class="card-body mb-5">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <div style="margin-bottom:27px">
                                        <img src="info.png" alt="Alertas" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-5">
                                        Informações
                                    </h5>
                                    <p><span class="h6"> Máquina: </span>
                                    <p><span class="h6"> Componente: </span>
                                    <p><span class="h6"> Nome: </span>
                                    <p><span class="h6"> ID: </span>
                                    <p><span class="h6"> Características: </span>

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
                                        <img src="Manutenção.png" alt="Manutenção" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-5">
                                        Manutenções
                                    </h5>
                                    <div>
                                        <p><span class="text-center h6"> Última Manutenção: </span>
                                        <p><span class="text-center h6"> DD/MM/AA </span>
                                        <p><span class="text-center h6"> Reparação </span>
                                        <p><span class="text-center h6"> Próxima Manutenção: </span>
                                        <p><span class="text-center h6"> DD/MM/AA </span>
                                        <p><span class="text-center h6"> Rotina </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 col-xl">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center gx-0">
                                <div class="col">
                                    <div style="margin-bottom:20px">
                                        <img src="alerta.png" alt="Alertas" width="100" height="100" style="margin:auto; display: block">
                                    </div>
                                    <h5 class="text-uppercase text-center text-muted mb-4">
                                        Avisos
                                    </h5>
                                    <p><span class="h6"> Caudal: </span>
                                    <p><span class="h6"> Temperatura: </span>
                                    <p><span class="h6"> Pressão: </span>
                                    <p><span class="h6"> Vibração: </span>
                                    <p><span class="h6"> Ruido: </span>
                                    <p><span class="h6"> Qualidade do ar: </span>
                                    <p><span class="h6"> Níveis de CO2: </span>
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
                                    <tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/04/18 </time>
                                        </td>
                                        <td class="goal-observacao"> Observação </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/05/18 </time>
                                        </td>
                                        <td class="goal-observacao"> Observação </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/06/18 </time>
                                        </td>
                                        <td class="goal-observacao"> Observação </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/07/18 </time>
                                        </td>
                                        <td class="goal-observacao"> Observação </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/08/18 </time>
                                        </td>
                                        <td class="goal-observacao"> Observação </td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <div class="container" style="float:left">
                                        <b> Obervações: </b>
                                    </div>
                                    <form action="data.php" method="post">
                                    <div class="container" style="float:left">
                                        <p>
                                            <input type="text" name="observacoes" id="observacoes" size="40"  height="10" minlength="0" maxlength="300" >
                                        </p>
                                    </div>
                                    </form>
                                    <form action="data.php" method="get">
                                    <div class="container mb-2" style="float:left">
                                        <center>
                                            <button style="margin-top:20px" name="subject" type="submit" value="observacoes">Submit</button>
                                        </center>
                                    </div>
                                    </form>
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
                                        <th><a class="text-uppercase text-center text-muted" data-sort="goal-tipo"> Tipo </a></th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    <tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/04/18 </time>
                                        </td>
                                        <td class="goal-descricao"> Descrição </td>
                                        <td class="goal-tipo"> Rotina </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/05/18 </time>
                                        </td>
                                        <td class="goal-descricao"> Descrição </td>
                                        <td class="goal-tipo"> Rotina </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/06/18 </time>
                                        </td>
                                        <td class="goal-descricao"> Descrição </td>
                                        <td class="goal-tipo"> Rotina </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/07/18 </time>
                                        </td>
                                        <td class="goal-descricao"> Descrição </td>
                                        <td class="goal-tipo"> Reparação </td>
                                    </tr><tr>
                                        <td class="goal-data">
                                            <time datetime="2018-10-24"> 07/08/18 </time>
                                        </td>
                                        <td class="goal-descricao"> Descrição </td>
                                        <td class="goal-tipo"> Rotina </td>
                                    </tr>
                                    </tbody>
                                </table>
                                    <div class="container" style="float:left">
                                        <b> Manutenção: </b>
                                    </div>
                                    <form action="data.php" method="post">
                                    <div class="container" style="float:left; margin-right:100px">
                                        <p>
                                            <input type="text" name="manutencoes" id="manutencoes" size="40"  height="10" minlength="0" maxlength="300" >
                                        </p>
                                    </div>
                                    </form>
                                    <div class="dropdown" style="float: right; margin-top:-50px; margin-right:50px">
                                        <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tipo
                                            <i class="fe fe-more-vertical"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a href="#!" class="dropdown-item"> Rotina </a>
                                            <a href="#!" class="dropdown-item"> Reparação </a>
                                        </div>
                                    </div>
                                    <form action="data.php" method="get">
                                    <div class="container mb-2" style="float:left">
                                        <center>
                                            <button style="margin-top:20px" name="subject" type="submit" value="manutencoes">Submit</button>
                                        </center>
                                    </div>
                                    </form>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
  <script>
     const ctx = document.getElementById("chart").getContext('2d');
     const myChart = new Chart(ctx, {
       type: 'line',
       data: {
         labels: ["04/14", "05/14", "06/14", "07/14", "08/14", "09/14"],
         datasets: [{
                label: 'Temperatura (ºC)',
                borderColor: 'rgb(47, 128, 237)',
                data: [0.5, 1, 0.8, 0.6, 0.2, 2],
            },
            {
                label: 'Caudal (bar)',
                borderColor: 'rgb(255, 0, 0)',
                data: [1, 4, 10, 5, 6, 7],
          }]
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
  <style>
        #chart{
            width:25%;
            height:25%;
        }
</style>
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