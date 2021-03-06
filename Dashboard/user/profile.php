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
    <link rel="shortcut icon" type="image/x-icon" href=" assets/images/brand/favicon.ico" />

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
                        $email=$dados['Username'];
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
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Perfil</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                         <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Alterar Password</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center chat-image mb-5">
                                            <div class="avatar avatar-xxl bradius cover-image">
                                                <a class="" href="profile.php"><img alt="avatar" src="assets/images/brand/logo-2.png" class="brround"></a>
                                            </div>
                                            <div class="main-chat-msg-name">
                                                <a href="profile.php">
                                                    <?php echo "<center><h5 class='page-title'>".utf8_encode($user)."</h5></center>"; ?>
                                                </a>
                                            </div>
                                            <?php
                                                    if($type==5){
                                                        echo "<p class'text-muted mt-0 mb-0 pt-0 fs-13'>Administrador</p>";
                                                    }else if($type==4){
                                                        echo "<p class'text-muted mt-0 mb-0 pt-0 fs-13'>Gestora</p>";
                                                    }else if($type==3){
                                                        echo "<p class'text-muted mt-0 mb-0 pt-0 fs-13'>Funcionária</p>";
                                                    }else if($type==2){
                                                        echo "<p class'text-muted mt-0 mb-0 pt-0 fs-13'>Contabilista</p>";
                                                    }
                                                ?>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password Atual</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="Current Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Nova Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="New Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirme a Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="Confirm Password">
                                            </div>
                                            <!-- <input type="password" class="form-control" value="password"> -->
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary">Alterar</a>
                                        <a href="javascript:void(0)" class="btn" style="background-color:#fff;">Cancelar</a>
                                    </div>
                                </div>

                                <div class="card panel-theme">
                                    <div class="card-header">
                                        <div class="float-start">
                                            <h3 class="card-title">Contact</h3>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="card-body no-padding">
                                        <ul class="list-group no-margin">
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href=""><i class="fe fe-mail"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">support@jadoc.pt</a>
                                            </li>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href=""><i class="fe fe-globe"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">www.jadoc.pt</a>
                                            </li>
                                            <li class="list-group-item d-flex ps-3">
                                                <div class="social social-profile-buttons me-2">
                                                    <a class="social-icon text-primary" href=""><i class="fe fe-phone"></i></a>
                                                </div>
                                                <a href="javascript:void(0)" class="my-auto">+351 913 205 793</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Alterar Prefil</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputname">Nome</label>
                                            <?php echo "<input type='text' class='form-control' id='exampleInputname' placeholder=".utf8_encode($user).">"; ?>

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <?php echo "<input type='email' class='form-control' id='exampleInputEmail1' placeholder=".utf8_encode($email).">"; ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Contacto Telefónico</label>
                                            <input type="number" class="form-control" id="exampleInputnumber" placeholder="935415275">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Morada</label>
                                            <input type="text" class="form-control" id="exampleInputadress" placeholder="AV./ RUA/ PRAC./ ...">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Código Postal</label>
                                            <input type="text" class="form-control" id="exampleInputZipCode" placeholder="0000-000">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Cidade</label>
                                            <input type="text" class="form-control" id="exampleInputZone" placeholder="ex: Lisboa">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Data de Nascimento</label>
                                            <div class="row">
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Date</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Mon</option>
                                                            <option value="1">Jan</option>
                                                            <option value="2">Feb</option>
                                                            <option value="3">Mar</option>
                                                            <option value="4">Apr</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">Aug</option>
                                                            <option value="9">Sep</option>
                                                            <option value="10">Oct</option>
                                                            <option value="11">Nov</option>
                                                            <option value="12">Dec</option>
                                                        </select>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Year</option>
                                                            <option value="1">2018</option>
                                                            <option value="2">2017</option>
                                                            <option value="3">2016</option>
                                                            <option value="4">2015</option>
                                                            <option value="5">2014</option>
                                                            <option value="6">2013</option>
                                                            <option value="7">2102</option>
                                                            <option value="8">2012</option>
                                                            <option value="9">2011</option>
                                                            <option value="10">2010</option>
                                                            <option value="11">2009</option>
                                                            <option value="12">2008</option>
                                                            <option value="13">2007</option>
                                                            <option value="14">2006</option>
                                                            <option value="15">2005</option>
                                                            <option value="16">2004</option>
                                                            <option value="17">2003</option>
                                                            <option value="18">2002</option>
                                                            <option value="19">2001</option>
                                                            <option value="20">1999</option>
                                                            <option value="21">1998</option>
                                                            <option value="22">1997</option>
                                                            <option value="23">1996</option>
                                                            <option value="24">1995</option>
                                                            <option value="25">1994</option>
                                                            <option value="26">1993</option>
                                                            <option value="27">1992</option>
                                                            <option value="28">1991</option>
                                                            <option value="29">1990</option>
                                                            <option value="30">1989</option>
                                                            <option value="31">1988</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <a href="javascript:void(0)" class="btn btn-primary">Alterar</a>
                                        <a href="javascript:void(0)" class="btn" style="background-color:#fff;">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                          </div>
                        <!-- ROW-1 CLOSED -->


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
            <!-- FOOTER END -->

        </div>

        <!--JS ocultar consoante o tipo de user-->

        <script>

            <?php
            if($type==4){
            ?>
                document.getElementById("Adm").style.display = "none";
            <?php

            } else if($type==3){

            ?>
                document.getElementById("Contabilidade").style.display = "none";
                document.getElementById("Gestao").style.display = "none";
                document.getElementById("contab_dash").style.display = "none";
                document.getElementById("Adm").style.display = "none";

            <?php

            } else if($type==2){

            ?>
                document.getElementById("Servicos").style.display = "none";
                document.getElementById("Gestao").style.display = "none";
                document.getElementById("Services_Dash").style.display = "none";
                document.getElementById("Services_table_Dash").style.display = "none";
                document.getElementById("Adm").style.display = "none";
            <?php

            }

            ?>

        </script>

        <!-- BACK-TO-TOP -->
      <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

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

</body>

</html>
