<?php

require_once('../examples/connection.php');
$selectStudents = "select * from students";
$selectTeachers = "select * from teachers";
$selectProposals = "select * from proposals";
$selectBatchs = "select * from batchs";
if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
  header('location:../login/login.php?lmsg=true');
  
  exit;
}else{
    $idd=$_SESSION['user_role_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Dashboard 
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />

</head>

<body class="">
    <div class="wrapper ">
        <?php include('./sidebar.php'); ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">

                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-settings-gear-65"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Logout</a>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
            <div class="content">
           <?php if($idd !=3){
            ?>
                <div class="row">
                    <?php if($result = mysqli_query($link, $selectStudents)){
                        $rows = mysqli_num_rows($result);

                        ?>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="card card-stats">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-5 col-md-4">
                                                <div class="icon-big text-center icon-warning">
                                                    <i class="nc-icon nc-globe text-warning"></i>
                                                </div>
                                            </div>
                                            <div class="col-7 col-md-8">
                                                <div class="numbers">

                                                    <p class="card-category">Students</p>
                                                    <p class="card-title"><?= $rows ?>
                                                        <p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer ">
                                        <hr>
                                        <div class="stats">
                                            <i class="fa fa-refresh"></i> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }?>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                            <?php if($result = mysqli_query($link, $selectProposals)){
                                $rows = mysqli_num_rows($result);

                                ?>
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-money-coins text-success"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Proposals</p>
                                            <p class="card-title"><?= $rows ?>
                                                <p>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-calendar-o"></i> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                            <?php if($result = mysqli_query($link, $selectTeachers)){
                                $rows = mysqli_num_rows($result);

                                ?>
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-vector text-danger"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Teachers</p>
                                            <p class="card-title"><?= $rows ?>
                                                <p>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-clock-o"></i> In the last hour
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="card card-stats">
                            <div class="card-body ">
                            <?php if($result = mysqli_query($link, $selectBatchs)){
                                $rows = mysqli_num_rows($result);

                                ?>
                                <div class="row">
                                    <div class="col-5 col-md-4">
                                        <div class="icon-big text-center icon-warning">
                                            <i class="nc-icon nc-favourite-28 text-primary"></i>
                                        </div>
                                    </div>
                                    <div class="col-7 col-md-8">
                                        <div class="numbers">
                                            <p class="card-category">Batch</p>
                                            <p class="card-title"><?= $rows ?>
                                                <p>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-refresh"></i> Update now
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                            <?php }?>
            </div>

        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
        demo.initChartsPages();
    });
    </script>
</body>

</html>