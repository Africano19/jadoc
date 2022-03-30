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
    <link id="style" href=" assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />


    <!--- FONT-ICONS CSS -->
    <link href=" assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href=" assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src=" assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- /GLOBAL-LOADER -->

    <!-- PAGE -->
    <div class="page">
        <div class="page-main">
            <!--Conexão a base de dadps para a verificação de conta iniciada-->
            <?php
                Include('../config.php');
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
                            <img src=" assets/images/brand/logo-1.png" class="header-brand-img light-logo1" style="width: 50 px; height: 50px;" alt="logo">
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
                                                <img src=" assets/images/brand/logo-2.png" alt="profile-user" class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <?php echo "<h5 class'text-dark mb-0 fs-14 fw-semibold'>&nbsp".utf8_encode($user)."</h5>"; ?>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="#">
                                                    <i class="dropdown-icon fe fe-user"></i> Prefil
                                                </a>
                                                <a class="dropdown-item" href="logout.php">
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
                            <img src=" assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src=" assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src=" assets/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src=" assets/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo">
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
                                <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.html"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.html"><i class="side-menu__icon bi bi-calendar2-week-fill"></i><span class="side-menu__label">Agenda</span></a>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="dashboard.html"><i class="side-menu__icon bi bi-journal-bookmark-fill"></i><span class="side-menu__label">As Minhas Notas</span></a>
                            </li>

                        </ul>


                        <ul class="side-menu" id="Servicos">

                            <li class="sub-category" id="title_service">
                                <h3>SERVIÇOS</h3>
                            </li>
                            <li class="slide" id="service1">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-slack"></i><span class="side-menu__label">Casos</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Casos</a></li>
                                    <li><a href="#" class="slide-item"> Abertos</a><span class="badge bg-primary side-badge">18</span></li>
                                    <li><a href="#" class="slide-item"> Pendentes</a><span class="badge bg-primary side-badge">24</span></li>
                                    <li><a href="#" class="slide-item"> Por Pagar</a><span class="badge bg-primary side-badge">8</span></li>
                                    <li><a href="#" class="slide-item"> Finalizados</a><span class="badge bg-primary side-badge">247</span></li>
                                </ul>

                            </li>
                            <li class="slide" id="service2">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i>
                                    <span class="side-menu__label">Clientes</span><i class="angle fe fe-chevron-right"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu-label1"><a href="javascript:void(0)">Clientes</a></li>
                                    <li><a href="#" class="slide-item"> Ativos</a></li>
                                    <li><a href="#" class="slide-item"> Inativos</a></li>
                                </ul>
                            </li>

                        </ul>


                        <ul class="side-menu" id="Contabilidade">

                            <li class="sub-category" id="title_contab">
                                <h3>CONTABILIDADE</h3>
                            </li>
                            <li class="slide" id="contab1">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)" onclick="hideservices()"><i class="side-menu__icon bi bi-bar-chart-fill"></i>
                                    <span class="side-menu__label">Mapas</span></a>
                            </li>
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

                        </ul>

                        <ul class="side-menu" id="Gestao">
                            <li class="sub-category" id="adm_title">
                                <h3>GESTÃO</h3>
                            </li>
                            <li class="slide" >
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">Gestor de Ficheiros</span><span class="badge bg-primary side-badge">4</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                            </li>
                            <li class="slide" >
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">Gerir Utilizadores</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
                            </li>
                            <li class="slide" id="adm">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i class="side-menu__icon bi bi-sliders"></i><span class="side-menu__label">Gerir Serviços</span><i class="angle fe fe-chevron-right hor-angle"></i></a>
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
                            <h1 class="page-title">Prefil</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Prefil</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row" id="user-profile">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="wideget-user mb-2">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="row">
                                                        <div class="panel profile-cover">
                                                            <div class="profile-cover__action bg-img"></div>
                                                            <div class="profile-cover__img">
                                                                <div class="profile-img-1">
                                                                    <img src="../assets/images/users/21.jpg" alt="img">
                                                                </div>
                                                                <div class="profile-img-content text-dark text-start">
                                                                    <div class="text-dark">
                                                                        <h3 class="h3 mb-2">Percy Kewshun</h3>
                                                                        <h5 class="text-muted">Web Developer</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="btn-profile">
                                                                <button class="btn btn-primary mt-1 mb-1"> <i class="fa fa-rss"></i> <span>Follow</span></button>
                                                                <button class="btn btn-secondary mt-1 mb-1"> <i class="fa fa-envelope"></i> <span>Message</span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="">
                                                            <div class="social social-profile-buttons mt-5 float-end">
                                                                <div class="mt-3">
                                                                    <a class="social-icon text-primary" href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
                                                                    <a class="social-icon text-primary" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
                                                                    <a class="social-icon text-primary" href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube"></i></a>
                                                                    <a class="social-icon text-primary" href=""><i class="fa fa-rss"></i></a>
                                                                    <a class="social-icon text-primary" href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"></i></a>
                                                                    <a class="social-icon text-primary" href="https://myaccount.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="main-profile-contact-list">
                                                    <div class="me-5">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-secondary bradius me-3 mt-1">
                                                                <i class="fe fe-edit fs-20 text-white"></i>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Posts</span>
                                                                <div class="fw-semibold fs-25">
                                                                    328
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-5 mt-5 mt-md-0">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-danger bradius text-white me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-users fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Followers</span>
                                                                <div class="fw-semibold fs-25">
                                                                    937k
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-0 mt-5 mt-md-0">
                                                        <div class="media">
                                                            <div class="media-icon bg-primary text-white bradius me-3 mt-1">
                                                                <span class="mt-3">
                                                                    <i class="fe fe-cast fs-20"></i>
                                                                </span>
                                                            </div>
                                                            <div class="media-body">
                                                                <span class="text-muted">Following</span>
                                                                <div class="fw-semibold fs-25">
                                                                    2,876
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">About</div>
                                            </div>
                                            <div class="card-body">
                                                <div>
                                                    <h5>Biography<i class="fe fe-edit-3 text-primary mx-2"></i></h5>
                                                    <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                                                        <a href="javascript:void(0)">Read more</a>
                                                    </p>
                                                </div>
                                                <hr>
                                                <div class="d-flex align-items-center mb-3 mt-3">
                                                    <div class="me-4 text-center text-primary">
                                                        <span><i class="fe fe-briefcase fs-20"></i></span>
                                                    </div>
                                                    <div>
                                                        <strong>San Francisco, CA </strong>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3 mt-3">
                                                    <div class="me-4 text-center text-primary">
                                                        <span><i class="fe fe-map-pin fs-20"></i></span>
                                                    </div>
                                                    <div>
                                                        <strong>Francisco, USA</strong>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3 mt-3">
                                                    <div class="me-4 text-center text-primary">
                                                        <span><i class="fe fe-phone fs-20"></i></span>
                                                    </div>
                                                    <div>
                                                        <strong>+125 254 3562 </strong>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center mb-3 mt-3">
                                                    <div class="me-4 text-center text-primary">
                                                        <span><i class="fe fe-mail fs-20"></i></span>
                                                    </div>
                                                    <div>
                                                        <strong>georgeme@abc.com </strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Skills</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="tags">
                                                    <a href="javascript:void(0)" class="tag">Laravel</a>
                                                    <a href="javascript:void(0)" class="tag">Angular</a>
                                                    <a href="javascript:void(0)" class="tag">HTML</a>
                                                    <a href="javascript:void(0)" class="tag">Vuejs</a>
                                                    <a href="javascript:void(0)" class="tag">Codiegniter</a>
                                                    <a href="javascript:void(0)" class="tag">JavaScript</a>
                                                    <a href="javascript:void(0)" class="tag">Bootstrap</a>
                                                    <a href="javascript:void(0)" class="tag">PHP</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Work & Education</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="main-profile-contact-list">
                                                    <div class="me-5">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-primary  mb-3 mb-sm-0 me-3 mt-1">
                                                                <svg style="width:24px;height:24px;margin-top:-8px" viewBox="0 0 24 24">
                                                                    <path fill="#fff" d="M12 3L1 9L5 11.18V17.18L12 21L19 17.18V11.18L21 10.09V17H23V9L12 3M18.82 9L12 12.72L5.18 9L12 5.28L18.82 9M17 16L12 18.72L7 16V12.27L12 15L17 12.27V16Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="font-weight-semibold mb-1">Web Designer at <a href="" class="btn-link">Spruko</a></h6>
                                                                <span>2018 - present</span>
                                                                <p>Past Work: Spruko, Inc.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="me-5 mt-5 mt-md-0">
                                                        <div class="media mb-4 d-flex">
                                                            <div class="media-icon bg-success text-white mb-3 mb-sm-0 me-3 mt-1">
                                                                <svg style="width:24px;height:24px;margin-top:-8px" viewBox="0 0 24 24">
                                                                    <path fill="currentColor" d="M20,6C20.58,6 21.05,6.2 21.42,6.59C21.8,7 22,7.45 22,8V19C22,19.55 21.8,20 21.42,20.41C21.05,20.8 20.58,21 20,21H4C3.42,21 2.95,20.8 2.58,20.41C2.2,20 2,19.55 2,19V8C2,7.45 2.2,7 2.58,6.59C2.95,6.2 3.42,6 4,6H8V4C8,3.42 8.2,2.95 8.58,2.58C8.95,2.2 9.42,2 10,2H14C14.58,2 15.05,2.2 15.42,2.58C15.8,2.95 16,3.42 16,4V6H20M4,8V19H20V8H4M14,6V4H10V6H14M12,9A2.25,2.25 0 0,1 14.25,11.25C14.25,12.5 13.24,13.5 12,13.5A2.25,2.25 0 0,1 9.75,11.25C9.75,10 10.76,9 12,9M16.5,18H7.5V16.88C7.5,15.63 9.5,14.63 12,14.63C14.5,14.63 16.5,15.63 16.5,16.88V18Z" />
                                                                </svg>
                                                            </div>
                                                            <div class="media-body">
                                                                <h6 class="font-weight-semibold mb-1">Studied at <a href="" class="btn-link">University</a></h6>
                                                                <span>2004-2008</span>
                                                                <p>Graduation: Bachelor of Science in Computer Science</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <form class="profile-edit">
                                                    <textarea class="form-control" placeholder="What's in your mind right now" rows="7"></textarea>
                                                    <div class="profile-share border-top-0">
                                                        <div class="mt-2">
                                                            <a href="javascript:void(0)" class="me-2" title="Audio" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-mic"></i></span></a>
                                                            <a href="javascript:void(0)" class="me-2" title="Video" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-video"></i></span></a>
                                                            <a href="javascript:void(0)" class="me-2" title="Image" data-bs-toggle="tooltip" data-bs-placement="top"><span class="text-muted"><i class="fe fe-image"></i></span></a>
                                                        </div>
                                                        <button class="btn btn-sm btn-success ms-auto"><i class="fa fa-share ms-1"></i> Share</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="card border p-0 shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="media mt-0">
                                                        <div class="media-user me-2">
                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                            <small class="text-muted">just now</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="dropdown show">
                                                            <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0)">Edit Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Delete Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Personal Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <h4 class="fw-semibold mt-3">There is nothing more beautiful.</h4>
                                                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer user-pro-2">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                            <span class="avatar brround text-primary">+28</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex mt-1">
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                            <a class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border p-0 shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="media mt-0">
                                                        <div class="media-user me-2">
                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                            <small class="text-muted">Sep 26 2019, 10:14am</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="dropdown show">
                                                            <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0)">Edit Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Delete Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Personal Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="d-flex">
                                                        <a href="gallery.html" class="w-30 m-2"><img src="../assets/images/media/22.jpg" alt="img" class="br-5"></a>
                                                        <a href="gallery.html" class="w-30 m-2"><img src="../assets/images//media/24.jpg" alt="img" class="br-5"></a>
                                                    </div>
                                                    <h4 class="fw-semibold mt-3">There is nothing more beautiful.</h4>
                                                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer user-pro-2">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                            <span class="avatar brround text-primary">+28</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex mt-1">
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                            <a class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card border p-0 shadow-none">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="media mt-0">
                                                        <div class="media-user me-2">
                                                            <div class=""><img alt="" class="rounded-circle avatar avatar-md" src="../assets/images/users/16.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mt-1">Peter Hill</h6>
                                                            <small class="text-muted">Sep 24 2019, 09:14am</small>
                                                        </div>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="dropdown show">
                                                            <a class="new option-dots" href="JavaScript:void(0);" data-bs-toggle="dropdown">
                                                                <span class=""><i class="fe fe-more-vertical"></i></span>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="javascript:void(0)">Edit Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Delete Post</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">Personal Settings</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <div class="d-flex">
                                                        <a href="gallery.html" class="w-30 m-2"><img src="../assets/images/media/26.jpg" alt="img" class="br-5"></a>
                                                        <a href="gallery.html" class="w-30 m-2"><img src="../assets/images/media/23.jpg" alt="img" class="br-5"></a>
                                                        <a href="gallery.html" class="w-30 m-2"><img src="../assets/images/media/21.jpg" alt="img" class="br-5"></a>
                                                    </div>
                                                    <h4 class="fw-semibold mt-3">There is nothing more beautiful.</h4>
                                                    <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="card-footer user-pro-2">
                                                <div class="media mt-0">
                                                    <div class="media-user me-2">
                                                        <div class="avatar-list avatar-list-stacked">
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/12.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/9.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/2.jpg)"></span>
                                                            <span class="avatar brround" style="background-image: url(../assets/images/users/4.jpg)"></span>
                                                            <span class="avatar brround text-primary">+28</span>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-0 mt-2 ms-2">28 people like your photo</h6>
                                                    </div>
                                                    <div class="ms-auto">
                                                        <div class="d-flex mt-1">
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-heart"></i></span></a>
                                                            <a class="new me-2 text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-message-square"></i></span></a>
                                                            <a class="new text-muted fs-16" href="JavaScript:void(0);"><span class=""><i class="fe fe-share-2"></i></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Followers</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="media overflow-visible">
                                                        <img class="avatar brround avatar-md me-3" src="../assets/images/users/18.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle mt-2">
                                                            <a href="" class=" fw-semibold text-dark">John Paige</a>
                                                            <p class="text-muted mb-0">johan@gmail.com</p>
                                                        </div>
                                                        <div class="media-body valign-middle text-end overflow-visible mt-2">
                                                            <button class="btn btn-sm btn-primary" type="button">Follow</button>
                                                        </div>
                                                    </div>
                                                    <div class="media overflow-visible mt-sm-5">
                                                        <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                                        <div class="media-body valign-middle mt-2">
                                                            <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                                            <p class="text-muted mb-0">lilliangore</p>
                                                        </div>
                                                        <div class="media-body valign-middle text-end overflow-visible mt-1">
                                                            <button class="btn btn-sm btn-secondary" type="button">Follow</button>
                                                        </div>
                                                    </div>
                                                    <div class="media overflow-visible mt-sm-5">
                                                        <img class="avatar brround avatar-md me-3" src="../assets/images/users/2.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle mt-2">
                                                            <a href="" class="text-dark fw-semibold">Harry Fisher</a>
                                                            <p class="text-muted mb-0">harryuqt</p>
                                                        </div>
                                                        <div class="media-body valign-middle text-end overflow-visible mt-1">
                                                            <button class="btn btn-sm btn-danger" type="button">Follow</button>
                                                        </div>
                                                    </div>
                                                    <div class="media overflow-visible mt-sm-5">
                                                        <span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
                                                        <div class="media-body valign-middle mt-2">
                                                            <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                                            <p class="text-muted mb-0">harris@gmail.com</p>
                                                        </div>
                                                        <div class="media-body valign-middle text-end overflow-visible mt-1">
                                                            <button class="btn btn-sm btn-success" type="button">Follow</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Our Latest News</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div class="media media-xs overflow-visible">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/12.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">John Paige</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/2.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Peter Hill</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/9.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/4.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class="fw-semibold text-dark">Harry Fisher</a>
                                                            <p class="text-muted mb-0">There are many variations of passages of Lorem Ipsum available ...</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Friends</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="user-pro-1">
                                                    <div class="media media-xs overflow-visible">
                                                        <img class="avatar brround avatar-md me-3" src="../assets/images/users/18.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle">
                                                            <a href="" class=" fw-semibold text-dark">John Paige</a>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-facebook"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-twitter"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <span class="avatar cover-image avatar-md brround bg-pink me-3">LQ</span>
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="fw-semibold text-dark">Lillian Quinn</a>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-facebook"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-twitter"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <img class="avatar brround avatar-md me-3" src="../assets/images/users/2.jpg" alt="avatar-img">
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="text-dark fw-semibold">Harry Fisher</a>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-facebook"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-twitter"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media media-xs overflow-visible mt-5">
                                                        <span class="avatar cover-image avatar-md brround me-3 bg-primary">IH</span>
                                                        <div class="media-body valign-middle mt-0">
                                                            <a href="" class="fw-semibold text-dark">Irene Harris</a>
                                                            <p class="text-muted mb-0">Web Designer</p>
                                                        </div>
                                                        <div class="">
                                                            <div class="social social-profile-buttons float-end">
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-facebook"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-twitter"></i></a>
                                                                <a class="social-icon bg-white" href=""><i class="fa fa-linkedin"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- COL-END -->
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!-- CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content closed-->
        </div>

        <!-- Sidebar-right -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="panel panel-primary card mb-0 shadow-none border-0">
                <div class="tab-menu-heading border-0 d-flex p-3">
                    <div class="card-title mb-0"><i class="fe fe-bell me-2"></i><span class=" pulse"></span>Notifications</div>
                    <div class="card-options ms-auto">
                        <a href="javascript:void(0);" class="sidebar-icon text-end float-end me-3 mb-1" data-bs-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x text-white"></i></a>
                    </div>
                </div>
                <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
                    <div class="tabs-menu border-bottom">
                        <!-- Tabs -->
                        <ul class="nav panel-tabs">
                            <li class=""><a href="#side1" class="active" data-bs-toggle="tab"><i class="fe fe-settings me-1"></i>Feeds</a></li>
                            <li><a href="#side2" data-bs-toggle="tab"><i class="fe fe-message-circle"></i> Chat</a></li>
                            <li><a href="#side3" data-bs-toggle="tab"><i class="fe fe-anchor me-1"></i>Timeline</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="side1">
                            <div class="p-3 fw-semibold ps-5">Feeds</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-user text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New user registered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-shopping-cart text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New order delivered</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-bell text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">You have pending tasks</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-gitlab text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New version arrived</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-database text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Server #1 overloaded</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-info brround bg-info-transparent"><i class="fe fe-check-circle text-info"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">New project launched</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                    <a href="javascript:void(0)"><i class="fe fe-x"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3 fw-semibold ps-5">Settings</div>
                            <div class="card-body pt-2">
                                <div class="browser-stats">
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle brround bg-primary-transparent"><i class="fe fe-settings text-primary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">General Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-secondary brround bg-secondary-transparent"><i class="fe fe-map-pin text-secondary"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Map Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-danger brround bg-danger-transparent"><i class="fe fe-headphones text-danger"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Support Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-warning brround bg-warning-transparent"><i class="fe fe-credit-card text-warning"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Payment Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-sm-2 mb-sm-0 mb-3">
                                            <span class="feeds avatar-circle avatar-circle-pink brround bg-pink-transparent"><i class="fe fe-bell text-pink"></i></span>
                                        </div>
                                        <div class="col-sm-10 ps-sm-0">
                                            <div class="d-flex align-items-end justify-content-between ms-2">
                                                <h6 class="">Notification Settings</h6>
                                                <div>
                                                    <a href="javascript:void(0)"><i class="fe fe-settings me-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side2">
                            <div class="list-group list-group-flush">
                                <div class="pt-3 fw-semibold ps-5">Today</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available.... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Rose Bush</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/10.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Claude Strophobia</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/13.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Eileen Dover</div>
                                            <p class="mb-0 fs-12 text-muted"> New product Launching... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/12.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Willie Findit</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/15.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Manny Jah</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted"> Hey! there I' am available....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="pt-3 fw-semibold ps-5">Yesterday</div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/7.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Simon Sais</div>
                                            <p class="mb-0 fs-12 text-muted">Schedule Realease...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Laura Biding</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/2.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Addie Minstra</div>
                                            <p class="mb-0 fs-12 text-muted">Contact me for details....</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/9.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Ivan Notheridiya</div>
                                            <p class="mb-0 fs-12 text-muted"> Hi we can explain our new project...... </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/14.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Dulcie Veeta</div>
                                            <p class="mb-0 fs-12 text-muted"> Okay...I will be waiting for you </p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/11.jpg"></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Florinda Carasco</div>
                                            <p class="mb-0 fs-12 text-muted">New product Launching...</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex align-items-center">
                                    <div class="me-2">
                                        <span class="avatar avatar-md brround cover-image" data-bs-image-src="../assets/images/users/4.jpg"><span class="avatar-status bg-success"></span></span>
                                    </div>
                                    <div class="">
                                        <a href="chat.html">
                                            <div class="fw-semibold text-dark" data-bs-toggle="modal" data-target="#chatmodel">Cherry Blossom</div>
                                            <p class="mb-0 fs-12 text-muted">cherryblossom@gmail.com</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="side3">
                            <ul class="task-list timeline-task">
                                <li class="d-sm-flex mt-4">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">05 July 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">New Comment<span class="text-muted fs-11 mx-2 fw-normal">25 June 2021</span></h6>
                                        <p class="text-muted fs-12">Victoria commented on Project <a href="javascript:void(0)" class="fw-semibold"> AngularJS Template</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">14 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Overdue<span class="text-muted fs-11 mx-2 fw-normal">29 June 2021</span></h6>
                                        <p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="javascript:void(0)" class="fw-semibold"> Integrated management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                                <li class="d-sm-flex">
                                    <div>
                                        <i class="task-icon1"></i>
                                        <h6 class="fw-semibold">Task Finished<span class="text-muted fs-11 mx-2 fw-normal">09 July 2021</span></h6>
                                        <p class="text-muted fs-12">Adam Berry finished task on<a href="javascript:void(0)" class="fw-semibold"> Project Management</a></p>
                                    </div>
                                    <div class="ms-auto d-md-flex me-3">
                                        <a href="javascript:void(0)" class="text-muted me-2"><span class="fe fe-edit"></span></a>
                                        <a href="javascript:void(0)" class="text-muted"><span class="fe fe-trash-2"></span></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Sidebar-right-->

    

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
                            document.getElementById("adm").style.display = "none";    
                        <?php
                        
                        } else if($type==3){
                        
                        ?>
                            document.getElementById("Contabilidade").style.display = "none"; 
                            document.getElementById("Gestao").style.display = "none"; 
                            
                        <?php
                        
                        } else if($type==2){
                        
                        ?>
                            document.getElementById("Servicos").style.display = "none"; 
                            document.getElementById("Gestao").style.display = "none";  
                            document.getElementById("Services_Dash").style.display = "none";  
                        <?php
                        
                        }
                        
                        ?>
                        
                    </script>
                
                    <!-- BACK-TO-TOP -->
                    <a href="#top" id="back-to-top"><i class="bi bi-chevron-double-up"></i></a>

                    <!-- JQUERY JS -->
                    <script src=" assets/js/jquery.min.js"></script>

                    <!-- BOOTSTRAP JS -->
                    <script src=" assets/plugins/bootstrap/js/popper.min.js"></script>
                    <script src=" assets/plugins/bootstrap/js/bootstrap.min.js"></script>

                    <!-- SPARKLINE JS-->
                    <script src=" assets/js/jquery.sparkline.min.js"></script>

                    <!-- Sticky js -->
                    <script src=" assets/js/sticky.js"></script>

                    <!-- CHART-CIRCLE JS-->
                    <script src=" assets/js/circle-progress.min.js"></script>

                    <!-- PIETY CHART JS-->
                    <script src=" assets/plugins/peitychart/jquery.peity.min.js"></script>
                    <script src=" assets/plugins/peitychart/peitychart.init.js"></script>

                    <!-- SIDEBAR JS -->
                    <script src=" assets/plugins/sidebar/sidebar.js"></script>

                    <!-- Perfect SCROLLBAR JS-->
                    <script src=" assets/plugins/p-scroll/perfect-scrollbar.js"></script>
                    <script src=" assets/plugins/p-scroll/pscroll.js"></script>
                    <script src=" assets/plugins/p-scroll/pscroll-1.js"></script>

                    <!-- INTERNAL CHARTJS CHART JS-->
                    <script src=" assets/plugins/chart/Chart.bundle.js"></script>
                    <script src=" assets/plugins/chart/rounded-barchart.js"></script>
                    <script src=" assets/plugins/chart/utils.js"></script>

                    <!-- INTERNAL SELECT2 JS -->
                    <script src=" assets/plugins/select2/select2.full.min.js"></script>

                    <!-- INTERNAL Data tables js-->
                    <script src=" assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
                    <script src=" assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
                    <script src=" assets/plugins/datatable/dataTables.responsive.min.js"></script>

                    <!-- INTERNAL APEXCHART JS -->
                    <script src=" assets/js/apexcharts.js"></script>
                    <script src=" assets/plugins/apexchart/irregular-data-series.js"></script>

                    <!-- C3 CHART JS -->
                    <script src=" assets/plugins/charts-c3/d3.v5.min.js"></script>
                    <script src=" assets/plugins/charts-c3/c3-chart.js"></script>

                    <!-- CHART-DONUT JS -->
                    <script src=" assets/js/charts.js"></script>

                    <!-- INTERNAL Flot JS -->
                    <script src=" assets/plugins/flot/jquery.flot.js"></script>
                    <script src=" assets/plugins/flot/jquery.flot.fillbetween.js"></script>
                    <script src=" assets/plugins/flot/chart.flot.sampledata.js"></script>
                    <script src=" assets/plugins/flot/dashboard.sampledata.js"></script>

                    <!-- INTERNAL Vector js -->
                    <script src=" assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
                    <script src=" assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

                    <!-- SIDE-MENU JS-->
                    <script src=" assets/plugins/sidemenu/sidemenu.js"></script>

                    <!-- INTERNAL INDEX JS -->
                    <script src=" assets/js/index1.js"></script>

                    <!-- Color Theme js -->
                    <script src=" assets/js/themeColors.js"></script>

                    <!-- CUSTOM JS -->
                    <script src=" assets/js/custom.js"></script>

</body>

</html>
