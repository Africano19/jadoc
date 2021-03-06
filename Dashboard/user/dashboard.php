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
    <link rel="shortcut icon" type="image/x-icon" href=" ../assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>JA DOC - DASHBOARD</title>
    <?php session_start();?>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href=" ../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" />


    <!--- FONT-ICONS CSS -->
    <link href=" ../assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href=" ../assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src=" ../assets/images/loader.svg" class="loader-img" alt="Loader">
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
                    if($type!=1){
                      echo "<script>alert('Área Reservada!! Não Têm Permissões para isso!')</script>";
                      echo"<script language='JavaScript' type='text/javascript'>
                      setTimeout('window.history.go(-1)',0);
                      </script>";
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
                <div class="app-header header sticky" id="hate-u">
                    <div class="container-fluid main-container">
                        <div class="d-flex">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                            <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="dashboard.php">
                                <img src=" ../assets/images/brand/logo-1.png" class="header-brand-img light-logo1" style="width: 50 px; height: 50px;" alt="logo">
                            </a>
                            <!-- LOGO -->
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->

                <!--APP-SIDEBAR-->
                <div class="sticky" id="hate-u2">
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
                              <br/>
                                <li class="slide"><center>
                                  <img src=" ../assets/images/users/user.png" alt="profile-user" class=" " style="width:50%; height:50%;">
                                  <?php echo "<br/><br/><h3 style='color:#ffa4a4;font-weight: bold;'><span class='side-menu__label'>".utf8_encode($user)."</span></h3>"; ?>
                                  <hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;">
                                </center>
                               </li>
                               <li class="slide">
                                   <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.php"><i class="side-menu__icon bi bi-archive-fill"></i><span class="side-menu__label">Os meus Casos</span></a>
                               </li>
                               <li class="slide">
                                   <a class="side-menu__item" data-bs-toggle="slide" href="profile.php"><i class="side-menu__icon bi bi-sliders"></i><span class="side-menu__label">O Meu Perfil</span></a>
                               </li>
                               <li class="slide">
                                   <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.php"><i class="side-menu__icon bi bi-map-fill"></i><span class="side-menu__label">Serviços Próximos</span></a>
                               </li>
                               <center><hr style="height:5px;border-width:0;color:gray;background-color:#ffa4a4;width:50%;"></center>
                               <li class="slide">
                                   <a class="side-menu__item" data-bs-toggle="slide" href="../logout.php"><i class="side-menu__icon bi bi-door-open-fill"></i><span class="side-menu__label">Terminar Sessão</span></a>
                               </li>
                            </ul>


                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>



                        </div>
                    </div>
                    <!--/APP-SIDEBAR-->
                </div>

            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div>

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Dashboard</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->


                        <!-- Body Stuff -->

                        <!-- Row -->
                        <div class="row" id ="Services_table_Dash">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Os Meus Casos</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered text-nowrap border-bottom" id="basic-datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Serviço</th>
                                                        <th class="wd-15p border-bottom-0">Descrição</th>
                                                        <th class="wd-15p border-bottom-0">Estado</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>IRS</td>
                                                        <td>Referente ao ano 2021</td>
                                                        <td>Pendente</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Manifestação de Interesse</td>
                                                        <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pharetra suscipit augue id ornare.</td>
                                                        <td>Aguarda Pagamento</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pedido número de Utente</td>
                                                        <td>Nunc pharetra suscipit augue id ornare.</td>
                                                        <td>Concluido</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Reagrupamento Familiar</td>
                                                        <td>Mauris vulputate lectus sit amet posuere hendrerit. </td>
                                                        <td>Pendente</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Row -->

                        <!-- !Body Stuff -->

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
                        <!-- FOOTER END -->

                    </div>
                </div>
            </div>
        </div>
    </div>



                    <!-- BACK-TO-TOP -->
                    <a href="#top" id="back-to-top"><i class="bi bi-chevron-double-up"></i></a>

                    <!-- JQUERY JS -->
                    <script src=" ../assets/js/jquery.min.js"></script>

                    <!-- BOOTSTRAP JS -->
                    <script src=" ../assets/plugins/bootstrap/js/popper.min.js"></script>
                    <script src=" ../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                    <!-- SPARKLINE JS-->
                    <script src=" ../assets/js/jquery.sparkline.min.js"></script>

                    <!-- Sticky js -->
                    <script src=" ../assets/js/sticky.js"></script>

                    <!-- CHART-CIRCLE JS-->
                    <script src=" ../assets/js/circle-progress.min.js"></script>

                    <!-- PIETY CHART JS-->
                    <script src=" ../assets/plugins/peitychart/jquery.peity.min.js"></script>
                    <script src=" ../assets/plugins/peitychart/peitychart.init.js"></script>

                    <!-- MORRIS-CHART JS -->
                    <script src="../assets/plugins/morris/raphael-min.js"></script>
                    <script src="../assets/plugins/morris/morris.js"></script>
                    <script src="../assets/js/morris.js"></script>

                    <!-- SIDEBAR JS -->
                    <script src=" ../assets/plugins/sidebar/sidebar.js"></script>

                    <!-- Perfect SCROLLBAR JS-->
                    <script src=" ../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
                    <script src=" ../assets/plugins/p-scroll/pscroll.js"></script>
                    <script src=" ../assets/plugins/p-scroll/pscroll-1.js"></script>

                    <!-- INTERNAL CHARTJS CHART JS-->
                    <script src=" ../assets/plugins/chart/Chart.bundle.js"></script>
                    <script src=" ../assets/plugins/chart/rounded-barchart.js"></script>
                    <script src=" ../assets/plugins/chart/utils.js"></script>

                    <!-- INTERNAL SELECT2 JS -->
                    <script src=" ../assets/plugins/select2/select2.full.min.js"></script>

                    <!-- INTERNAL Data tables js-->
                    <script src=" ../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
                    <script src=" ../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
                    <script src=" ../assets/plugins/datatable/dataTables.responsive.min.js"></script>

                    <!-- INTERNAL APEXCHART JS -->
                    <script src=" ../assets/js/apexcharts.js"></script>
                    <script src=" ../assets/plugins/apexchart/irregular-data-series.js"></script>

                    <!-- CHARTJS JS -->
                   <script src="../assets/plugins/chart/Chart.bundle.js"></script>
                   <script src="../assets/js/chart.js"></script>

                    <!-- C3 CHART JS -->
                    <script src=" ../assets/plugins/charts-c3/d3.v5.min.js"></script>
                    <script src=" ../assets/plugins/charts-c3/c3-chart.js"></script>

                    <!-- CHART-DONUT JS -->
                    <script src=" ../assets/js/charts.js"></script>

                    <!-- INTERNAL Flot JS -->
                    <script src=" ../assets/plugins/flot/jquery.flot.js"></script>
                    <script src=" ../assets/plugins/flot/jquery.flot.fillbetween.js"></script>
                    <script src=" ../assets/plugins/flot/chart.flot.sampledata.js"></script>
                    <script src=" ../assets/plugins/flot/dashboard.sampledata.js"></script>

                    <!-- INTERNAL Vector js -->
                    <script src=" ../assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
                    <script src=" ../assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

                    <!-- SIDE-MENU JS-->
                    <script src=" ../assets/plugins/sidemenu/sidemenu.js"></script>

                    <!-- INTERNAL INDEX JS -->
                    <script src=" ../assets/js/index1.js"></script>

                    <!-- Color Theme js -->
                    <script src=" ../assets/js/themeColors.js"></script>

                    <!-- CUSTOM JS -->
                    <script src=" ../assets/js/custom.js"></script>

                    <!-- DATA TABLE JS-->
                    <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
                    <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
                    <script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
                    <script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
                    <script src="../assets/plugins/datatable/js/jszip.min.js"></script>
                    <script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
                    <script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
                    <script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
                    <script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
                    <script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
                    <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
                    <script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
                    <script src="../assets/js/table-data.js"></script>

</body>

</html>
