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
    <title>JA DOC - DASHBOARD</title>
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

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <!--  <img src=" Dashboard/assets/images/loader.svg" class="loader-img" alt="Loader"> -->
    </div>
    <!-- /GLOBAL-LOADER -->

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <?php
                include "config.php";

                if(isset($_POST['but_submit'])){

                    $user = mysqli_real_escape_string($con,$_POST['txt_uname']);
                    $pass = mysqli_real_escape_string($con,$_POST['txt_pwd']);


                    	if($user=="" || $pass=="")
                        {

                        //echo "<script>alert( 'Os campos tem de estar prenchidos');</script>";

                        }
                        else
                        {
                            $sql= "select * from users where Username='".$user."' and Password='".$pass."'";
                            $result= mysqli_query($con,$sql) or die("Sql Error".mysql_error());
                            $num_rows= mysqli_num_rows($result);
                           if($num_rows>0)
                           {
                               while($dados = mysqli_fetch_array($result)){
                                   $id=$dados['ID_User'];
                              if($dados['Ativo']==1){
                                  if (isset ($_SESSION["ID"])){
                            $_SESSION["ID"] = "$id";

                            }else{
                            $_SESSION["ID"] = "$id";

                            }
                            $url = 'Dashboard/dashboard.php';
                            echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                               }else if ($dados['Ativo']==0){

                          //  echo "<script>alert( 'O Utilizador não está ativo');</script>";
                            //$url = 'login.php';
                          //  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
                               }
                           }
                            }
                            else
                            {
                            {
                                echo "document.getElementById('click2').click();";
                                //$url = 'login.php';
                          //  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

                            }
                        }


                }
                }
    ?>


    <!-- BACKGROUND-IMAGE -->
    <div class="bg-login">

        <!-- GLOABAL LOADER -->

        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">

                <!-- CONTAINER OPEN -->

                <div class="container-login100">
                    <div class="wrap-login100 p-7">
                        <form class="login100-form validate-form"method="post"  >
                            <center><a href="index.html"><img src="../Dashboard/assets/images/brand/logo-4.png" class="header-brand-img desktop-logo" alt="logo" style="width: 65%; height: 65%;"></a></center>
                            <br />
                            <div class="panel panel-primary">
                                <div class="tab-menu-heading">
                                </div>
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="email" name="txt_uname" id="txt_uname" placeholder="Email">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" id="txt_pwd" name="txt_pwd" placeholder="Password">
                                            </div>
                                            <div class="text-begin pt-4">
                                                <p class="mb-0"><a href="forgot-password.html" class="text-primary ms-1">Esqueci-me da Password</a></p>
                                            </div>
                                            <input type='button' class="btn btn-danger mt-2" value='Danger alert' id='click2'>
                                            <div class="container-login100-form-btn">
                                                <input type=submit class="login100-form-btn btn-primary" value="Entrar" name="but_submit" id="but_submit" style="width: 100%;" onclick="error()"/>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->


    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <script>

    function error() {
        swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 20000000000000000000000000000000000000000000000000000000000000000000000000
        });
    };

    </script>

    <!-- JQUERY JS -->
    <script src="../Dashboard/assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../Dashboard/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../Dashboard/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../Dashboard/assets/js/show-password.min.js"></script>

    <!-- SWEET-ALERT JS -->
    <script src="../Dashboard/assets/plugins/sweet-alert/sweetalert.min.js"></script>
    <script src="../Dashboard/assets/js/sweet-alert.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="../Dashboard/assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../Dashboard/assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="../Dashboard/assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../Dashboard/assets/js/custom.js"></script>


</body>

</html>
