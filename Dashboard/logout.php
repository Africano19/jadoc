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
    <link rel="shortcut icon" type="image/x-icon" href=" assets/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>JA DOC - DASHBOARD</title>
    <?php session_start();?>
    <!-- BOOTSTRAP CSS -->
    <link id="style" href=" assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href=" assets/css/style.css" rel="stylesheet" />
    <link href=" assets/css/dark-style.css" rel="stylesheet" />
    <link href=" assets/css/transparent-style.css" rel="stylesheet">
    <link href=" assets/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href=" assets/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href=" assets/colors/color1.css" />

</head>

<body class="">

    <!-- BACKGROUND-IMAGE -->
    <div class="bg-login">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src=" ../Dashboard/assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- End GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <!-- PAGE-CONTENT OPEN -->
            <?php
                session_destroy();
                header('Location: ../login.php');
            ?>
            <!-- PAGE-CONTENT OPEN CLOSED -->
        </div>
        <!-- End PAGE -->

    </div>
    <!-- BACKGROUND-IMAGE -->

    <!-- JQUERY JS -->
    <script src=" assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src=" assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src=" assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src=" assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src=" assets/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src=" assets/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src=" assets/js/custom.js"></script>

</body>

</html>