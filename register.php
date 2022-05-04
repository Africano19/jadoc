<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../Dashboard/assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>JA DOC - Documentação e Serviços </title>
    <?php session_start();?>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../Dashboard/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../Dashboard/assets/css/style.css" rel="stylesheet" />
    <link href="../Dashboard/assets/css/dark-style.css" rel="stylesheet" />
    <link href="../Dashboard/assets/css/transparent-style.css" rel="stylesheet">
    <link href="../Dashboard/assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../Dashboard/assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../Dashboard/assets/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr">

    <!-- BACKGROUND-IMAGE -->
    <div class="bg-login">

        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="../Dashboard/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->
                <div class="container-login100">
                    <div class="wrap-login100 p-7">
                        <form class="login100-form validate-form">
                          <center><a href="index.html"><img src="../Dashboard/assets/images/brand/logo-4.png" class="header-brand-img desktop-logo" alt="logo" style="width: 65%; height: 65%;"></a></center>
                          <br />
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="mdi mdi-account" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="text" placeholder="Nome">
                                <input class="input100 border-start-0 ms-0 form-control" type="text" placeholder="Apelido">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Telemovel">
                            </div>
                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Email invalido, utilize o seguinte exemplo: ex@abc.pt">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-email" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="email" placeholder="Email">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Password">
                            </div>
                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                    <i class="zmdi zmdi-eye" aria-hidden="true"></i>
                                </a>
                                <input class="input100 border-start-0 ms-0 form-control" type="password" placeholder="Repita a Password">
                            </div>

                            <label class="custom-control custom-checkbox mt-4">
									<input type="checkbox" class="custom-control-input">
									<span class="custom-control-label">Aceitar <a href="terms.html">Os termos e Condições</a></span>
								</label>
                            <div class="container-login100-form-btn">
                                <a href="index.html" class="login100-form-btn btn-primary">
										Register
									</a>
                            </div>
                            <div class="text-center pt-3">
                                <p class="text-dark mb-0">Already have account?<a href="login.php" class="text-primary ms-1">Sign In</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- END PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="../Dashboard/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../Dashboard/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../Dashboard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../Dashboard/assets/js/show-password.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../Dashboard/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../Dashboard/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../Dashboard/assets/js/custom.js"></script>

</body>

</html>
