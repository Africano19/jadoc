<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <?php header("Content-type: text/html; charset=utf-8"); ?>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>JA DOC - DASHBOARD</title>
    <?php session_start();?>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--Conexão a base de dadps para a verificação de conta iniciada-->
            <?php
                Include('../../config.php');
                $id= $_SESSION["ID"];
                $sql= "SELECT * FROM users where ID_User= '".$id."'";
                $result= mysqli_query($con,$sql) or die("Sql Error".mysql_error());
                $num_rows= mysqli_num_rows($result);
                if($num_rows>0)
                {
                    while($dados = mysqli_fetch_array($result)){
                        $user=$dados['Name'];
                        $type=$dados['Tipo_User'];
                    }
                }
                else
                {
                    echo "<script>alert('Área Reservada!! Efetue um login primeiro!')</script>";
                    $url = '../login.php';
                    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                }

                ?>

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="dashboard.php">
                            <img src=" ../assets/images/brand/logo-1.png" class="header-brand-img light-logo1" style="width: 50 px; height: 50px;" alt="logo">
                        </a>
                        <!-- LOGO -->
                        <div class="main-header-center ms-3 d-none d-lg-block">
                            <input class="form-control" placeholder="Search for results..." type="search">
                            <button class="btn px-0 pt-2"><i class="fe fe-search" aria-hidden="true"></i></button>
                        </div>
                        <div class="d-flex order-lg-2 ms-auto header-right-icons">
                            <div class="dropdown d-none">
                                <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <div class="input-group-text btn btn-primary">
                                            <i class="fe fe-search" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- SEARCH -->
                            <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                            </button>
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <div class="dropdown d-lg-none d-flex">
                                            <a href="javascript:void(0)" class="nav-link icon" data-bs-toggle="dropdown">
                                                <i class="fe fe-search"></i>
                                            </a>
                                            <div class="dropdown-menu header-search dropdown-menu-start">
                                                <div class="input-group w-100 p-2">
                                                    <input type="text" class="form-control" placeholder="Search....">
                                                    <div class="input-group-text btn btn-primary">
                                                        <i class="fa fa-search" aria-hidden="true"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown  d-flex notifications">
                                            <a class="nav-link icon" data-bs-toggle="dropdown"><i class="fe fe-bell"></i><span class=" pulse"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading border-bottom">
                                                    <div class="d-flex">
                                                        <h6 class="mt-1 mb-0 fs-16 fw-semibold text-dark">Notifications
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="notifications-menu">
                                                    <a class="dropdown-item d-flex" href="#">
                                                        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="fe fe-mail"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Novos casos por aprovar.
                                                            </h5>
                                                            <span class="notification-subtext">Ontem</span>
                                                        </div>
                                                    </a>
                                                    <a class="dropdown-item d-flex" href="#">
                                                        <div class="me-3 notifyimg  bg-primary brround box-shadow-primary">
                                                            <i class="bi bi-exclamation-triangle"></i>
                                                        </div>
                                                        <div class="mt-1 wd-80p">
                                                            <h5 class="notification-label mb-1">Faltam 3 dias para o fim do limite de entrega dos sfats.
                                                            </h5>
                                                            <span class="notification-subtext">Hoje</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a href="#" class="dropdown-item text-center p-3 text-muted">Ver Mais
                                                    Notificações</a>
                                            </div>
                                        </div>
                                        <!-- NOTIFICATIONS -->
                                        <!-- SIDE-MENU -->
                                        <div class="dropdown d-flex profile-1">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src=" ../assets/images/brand/logo-2.png" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <?php echo "<h5 class'text-dark mb-0 fs-14 fw-semibold'>&nbsp".utf8_encode($user)."</h5>"; ?>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="../profile.php">
                                                    <i class="dropdown-icon fe fe-user"></i> Prefil
                                                </a>
                                                <a class="dropdown-item" href="../logout.php">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Sair
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

             <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="dashboard.php">
                            <img src=" ../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src=" ../assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src=" ../assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src=" ../assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>


                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Main</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="../dashboard.php"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="../calendar.php"><i class="side-menu__icon bi bi-calendar2-week-fill"></i><span class="side-menu__label">Agenda</span></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="../notes.php"><i class="side-menu__icon bi bi-journal-bookmark-fill"></i><span class="side-menu__label">As Minhas Notas</span></a>
                                </li>

                            <div  id="Servicos">
                              <center><hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;"></center>
                                <li class="sub-category" id="title_service">
                                    <h3>SERVIÇOS</h3>
                                </li>
                                <li class="slide" id="service1">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Casos</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Casos</a></li>
                                        <li><a href="servicos.php#open" class="slide-item"> Abertos</a><span class="badge bg-primary side-badge">18</span></li>
                                        <li><a href="servicos.php#pendent" class="slide-item"> Pendentes</a><span class="badge bg-primary side-badge">24</span></li>
                                        <li><a href="servicos.php#waitpaying" class="slide-item"> Por Pagar</a><span class="badge bg-primary side-badge">8</span></li>
                                        <li><a href="servicos.php#closed" class="slide-item"> Finalizados</a><span class="badge bg-primary side-badge">247</span></li>
                                    </ul>

                                </li>
                                <li class="slide" id="service2">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i>
                                        <span class="side-menu__label">Clientes</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Clientes</a></li>
                                        <li><a href="active-users.php" class="slide-item"> Ativos</a></li>
                                        <li><a href="inactive-users.php" class="slide-item"> Inativos</a></li>
                                    </ul>
                                </li>

                            </div>


                            <div id="Contabilidade">
                                <center><hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;"></center>
                                <li class="sub-category" id="title_contab">
                                    <h3>CONTABILIDADE</h3>
                                </li>
                                <li class="slide" id="contab1">
                                <li class="slide" id="contab2">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon bi bi-archive-fill"></i><span class="side-menu__label">Organizada</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Organizada</a></li>
                                        <li><a href="#" class="slide-item"> # </a></li>
                                        <li><a href="#" class="slide-item"> # </a></li>
                                    </ul>

                                </li>
                                <li class="slide" id="contab3">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon bi bi-archive"></i>
                                        <span class="side-menu__label">Não Organizada</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Não Organizada</a></li>
                                        <li><a href="#" class="slide-item"> # </a></li>
                                        <li><a href="#" class="slide-item"> # </a></li>
                                    </ul>
                                </li>
                                <li class="slide" id="contab4">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i>
                                        <span class="side-menu__label">Clientes</span><i class="angle fe fe-chevron-right"></i></a>
                                    <ul class="slide-menu">
                                        <li class="side-menu-label1"><a href="javascript:void(0)">Clientes</a></li>
                                        <li><a href="#" class="slide-item"> Ativos</a></li>
                                        <li><a href="#" class="slide-item"> Inativos</a></li>
                                    </ul>
                                </li>

                            </div>

                            <div id="Gestao">
                                <center><hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;"></center>
                                <li class="sub-category" id="adm_title">
                                    <h3>GESTÃO</h3>
                                </li>
                                <li class="slide" >
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Gestor de Ficheiros</span><span class="badge bg-primary side-badge">4</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                </li>
                                <li class="slide" >
                                    <a class="side-menu__item" data-bs-toggle="slide" href="../user-magement.php"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Gerir Utilizadores</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                </li>
                            </div>

                            <div id="Adm">
                                <center><hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;"></center>
                                <li class="sub-category" id="adm_title">
                                    <h3>Administração</h3>
                                </li>
                                <li class="slide" >
                                    <a class="side-menu__item" data-bs-toggle="slide" href="#"><i class="side-menu__icon bi bi-globe"></i><span class="side-menu__label">LandingPage</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon bi bi-sliders"></i><span class="side-menu__label">Gerir Serviços</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                                </li>
                            </div>


                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                            </ul>


                            </div>
                            </div>
                            <!--/APP-SIDEBAR-->
            </div>
            <!--/APP-SIDEBAR-->

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Utilizadores</h1>
                            <div>
                                <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Utilizadores</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Ativos</h3>
                                    </div>
                                    <div class="card-body">
                                        <button id="table2-new-row-button" class="btn btn-primary mb-4"> Add New Row</button>
                                        <div class="table-responsive">
                                            <table class="table table-bordered border text-nowrap mb-0" id="new-edit">
                                                <thead>
                                                    <tr>
                                                        <th>First name</th>
                                                        <th>Last name</th>
                                                        <th>Position</th>
                                                        <th>Start date</th>
                                                        <th>Salary</th>
                                                        <th>E-mail</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Bella</td>
                                                        <td>Chloe</td>
                                                        <td>System Developer</td>
                                                        <td>2018/03/12</td>
                                                        <td>$654,765</td>
                                                        <td>b.Chloe@datatables.net</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Donna</td>
                                                        <td>Bond</td>
                                                        <td>Account Manager</td>
                                                        <td>2012/02/21</td>
                                                        <td>$543,654</td>
                                                        <td>d.bond@datatables.net</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harry</td>
                                                        <td>Carr</td>
                                                        <td>Technical Manager</td>
                                                        <td>20011/02/87</td>
                                                        <td>$86,000</td>
                                                        <td>h.carr@datatables.net</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lucas</td>
                                                        <td>Dyer</td>
                                                        <td>Javascript Developer</td>
                                                        <td>2014/08/23</td>
                                                        <td>$456,123</td>
                                                        <td>l.dyer@datatables.net</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Karen</td>
                                                        <td>Hill</td>
                                                        <td>Sales Manager</td>
                                                        <td>2010/7/14</td>
                                                        <td>$432,230</td>
                                                        <td>k.hill@datatables.net</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dominic</td>
                                                        <td>Hudson</td>
                                                        <td>Sales Assistant</td>
                                                        <td>2015/10/16</td>
                                                        <td>$654,300</td>
                                                        <td>d.hudson@datatables.net</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW CLOSED -->
                    </div>
                    <!-- CONTAINER CLOSED -->
                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">JADOC</a>. Designed by <a href="javascript:void(0)"> Ruben, Ana & Marta </a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!--JS ocultar consoante o tipo de user-->
    <script>

    <?php
    if($type==4){
    ?>
        document.getElementById("Admin").style.display = "none";
    <?php

    } else if($type==3){

    ?>
        document.getElementById("Contabilidade").style.display = "none";
        document.getElementById("Gestao").style.display = "none";
        document.getElementById("Adm").style.display = "none";
        document.getElementById("contab_dash").style.display = "none";

    <?php

    } else if($type==2){

    ?>
        document.getElementById("Servicos").style.display = "none";
        document.getElementById("Gestao").style.display = "none";
        document.getElementById("Adm").style.display = "none";
        document.getElementById("Services_Dash").style.display = "none";
        document.getElementById("Services_table_Dash").style.display = "none";

    <?php

    }

    ?>

    </script>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../assets/js/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../assets/js/circle-progress.min.js"></script>

    <!-- C3 CHART JS -->
    <script src="../assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="../assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../assets/plugins/sidebar/sidebar.js"></script>

    <!-- Select2 JS-->
    <script src="../assets/plugins/select2/select2.full.min.js"></script>
    <script src="../assets/js/select2.js"></script>

    <!-- INTERNAL Edit-Table JS -->
    <script src="../assets/plugins/edit-table/bst-edittable.js"></script>
    <script src="../assets/plugins/edit-table/edit-table.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll.js"></script>
    <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../assets/js/custom.js"></script>

</body>

</html>
