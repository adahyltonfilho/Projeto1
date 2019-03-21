    <?php
    //iniciando a conexão com o banco de dados 
    $cx = mysqli_connect("127.0.0.1", "root", "");

    //selecionando o banco de dados 
    $db = mysqli_select_db($cx, "Enem");

    //criando a query de consulta à tabela criada 
    $sql = mysqli_query($cx, "SELECT * FROM Perguntas") or die( 
    mysqli_error($cx) //caso haja um erro na consulta 
    );
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Projeto Enem</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

</head>

<body class="theme-indigo">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Carregando...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="home.html">Projeto Enem</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">

                <ul class="nav navbar-nav navbar-right">
                    <style>
                        a.posicao {
                            position: absolute;
                            right: 65px;

                            top: 20px;
                            display: inline-block;

                        }

                        a.posicao2 {
                            position: absolute;
                            right: 30px;

                            top: 20px;
                            display: inline-block;

                        }

                        a:link {

                            color: white;
                            font-weight: bold;
                            font-size: 1.3em;
                            text-decoration: none;
                        }

                        a:visited {
                            color: white;
                            font-weight: bold;
                            font-size: 1.3em;
                            text-decoration: none;
                        }

                        a:hover {
                            color: white;
                            font-weight: bold;
                            font-size: 1.3em;
                            text-decoration: none;
                        }

                        a:focus {
                            color: white;
                            font-weight: bold;
                            font-size: 1.3em;
                            text-decoration: none;
                        }

                        a:active {
                            color: white;
                            font-weight: bold;
                            font-size: 1.3em;
                            text-decoration: none;
                        }
                    </style>
                    <a class="posicao" href="#" class="teste"><i class="material-icons">exit_to_app</i></a>
                    <a class="posicao2" href="#" class="teste"> Sair</a>

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Adahylton
                        Barlati Tenório
                    </div>
                    <div class="email">adahyltonfilho@gmail.com</div>

                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MÓDULOS</li>
                    <li>
                        <a href="home.html">
                            <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="ListaPerguntas.php">
                            <i class="material-icons">help</i>
                            <span>Cadastro de Perguntas</span>
                        </a>
                    </li>
                    <li>
                        <a href="ListaUsuarios.html">
                            <i class="material-icons">person</i>
                            <span>Cadastro de Usuários</span>
                        </a>
                    </li>
                    <li>
                        <a href="ListaResposta.html">
                            <i class="material-icons">question_answer</i>
                            <span>Respostas</span>
                        </a>
                    </li>


                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 - 2019 <a href="https://www.facebook.com/adahylton.filho"> Google-Microsoft</a>.
                </div>
                <div class="version">
                    <b>Versão: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->

    </section>

    <section class="content">
        <div class="container-fluid">
            <!-- Bordered Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Perguntas Cadastradas
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th align= "center">ID</th>
                                        <th align= "center">Pergunta </th>
                                        <th align= "center">Dificuldade</th>
                                        <th align= "center">Area do Conhecimento </th>
                                        <th align= "center">% de Acertos</th>
                                        <th align= "center">Editar</th>
                                        <th align= "center">Excluir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php while($aux = mysqli_fetch_assoc($sql)) { ?>
                                    <tr>
                                        <td ><?php
                                           echo $aux["ID"]
                                        ?></td>
                                        

                                        <td><?php
                                           echo $aux["Pergunta"]
                                        ?></td>

                                        <td><?php
                                           echo $aux["Dificuldade"]
                                        ?></td>

                                        <td><?php
                                           echo $aux["ID"]
                                        ?>
                                        </td>
                                        <td><?php
                                           echo $aux["ID"]
                                        ?>
                                        </td>
                                        <td align= "center">                                        
                                        <button type="button" class="btn btn-xs btn-info waves-effect">
                                        <i class="material-icons">edit</i>
                                        </button>
                                        
                                        <td align= "center">
                                        <button type="button" class="btn btn-xs btn-danger waves-effect mdl-doc-remove">
                                            <i class="material-icons">delete</i>
                                        </button>
                                        </td>
                                    </tr>
                                    <?php
                                }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Bordered Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html> 