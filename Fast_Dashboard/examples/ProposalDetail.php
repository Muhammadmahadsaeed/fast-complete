<!--
=========================================================
 Paper Dashboard 2 - v2.0.0
=========================================================

 Product Page: https://www.creative-tim.com/product/paper-dashboard-2
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/paper-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->


<?php
require_once('./connection.php');
$idd=$_SESSION['user_role_id'];
$p_id = $_GET['id'];

$sql = "SELECT * FROM proposals where p_id  = $p_id";




  

?>


<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='utf-8' />
  <link rel='apple-touch-icon' sizes='76x76' href='../assets/img/apple-icon.png'>
  <link rel='icon' type='image/png' href='../assets/img/favicon.png'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
  <title>
   Fast
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700,200' rel='stylesheet' />
  <link href='https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' rel='stylesheet'>
  <!-- CSS Files -->
  <link href='../assets/css/bootstrap.min.css' rel='stylesheet' />
  <link href='../assets/css/paper-dashboard.css?v=2.0.0' rel='stylesheet' />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href='../assets/demo/demo.css' rel='stylesheet' />
</head>

<body class=''>
  <div class='wrapper '>
    <?php include('./sidebar.php'); ?>
    <div class='main-panel'>
      <!-- Navbar -->
      <nav class='navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent'>
        <div class='container-fluid'>
          <div class='navbar-wrapper'>
            <div class='navbar-toggle'>
              <button type='button' class='navbar-toggler'>
                <span class='navbar-toggler-bar bar1'></span>
                <span class='navbar-toggler-bar bar2'></span>
                <span class='navbar-toggler-bar bar3'></span>
              </button>
            </div>
            <a class='navbar-brand' href='#pablo'>Paper Dashboard 2</a>
          </div>
          <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navigation'
            aria-controls='navigation-index' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
            <span class='navbar-toggler-bar navbar-kebab'></span>
          </button>
          <div class='collapse navbar-collapse justify-content-end' id='navigation'>
            <form>
              <div class='input-group no-border'>
                <input type='text' value='' class='form-control' placeholder='Search...'>
                <div class='input-group-append'>
                  <div class='input-group-text'>
                    <i class='nc-icon nc-zoom-split'></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class='navbar-nav'>
              <li class='nav-item'>
                <a class='nav-link btn-magnify' href='#pablo'>
                  <i class='nc-icon nc-layout-11'></i>
                  <p>
                    <span class='d-lg-none d-md-block'>Stats</span>
                  </p>
                </a>
              </li>
              <li class='nav-item btn-rotate dropdown'>
                <a class='nav-link dropdown-toggle' href='http://example.com' id='navbarDropdownMenuLink'
                  data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                  <i class='nc-icon nc-bell-55'></i>
                  <p>
                    <span class='d-lg-none d-md-block'>Some Actions</span>
                  </p>
                </a>
                <div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownMenuLink'>
                  <a class='dropdown-item' href='#'>Action</a>
                  <a class='dropdown-item' href='#'>Another action</a>
                  <a class='dropdown-item' href='#'>Something else here</a>
                </div>
              </li>
              <li class='nav-item'>
                <a class='nav-link btn-rotate' href='#pablo'>
                  <i class='nc-icon nc-settings-gear-65'></i>
                  <p>
                    <span class='d-lg-none d-md-block'>Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class='panel-header panel-header-sm'> -->
      <div class='content'>
        <div class='row'>
          <?php


            if($result = mysqli_query($link, $sql)){
              if(mysqli_num_rows($result) > 0){
                 
                    while($row = mysqli_fetch_array($result)){
                     
          ?>
                      

          <div class="col-md-4">
          <div class="card card-user">
            <div class="image">
              <img src="../assets/img/damir-bosnjak.jpg">
            </div>
            <div class="card-body">
              <div class="author">
                <a href="#">
                  <img class="avatar border-gray" src="../assets/img/mike.jpg" >
                  <h5 class="title">Group Leader</h5>
                </a>
                <p class="description">
                  <?= $row["leader_name"]?>
                </p>
              </div>
              <p class="description text-center">
                Roll #   <?= $row["l_rollno"]?>
                <br> Teacher: <?= $row["teacher"]?>
               
              </p>
            </div>

          </div>
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Team Members</h4>
            </div>
            <div class="card-body">
              <ul class="list-unstyled team-members">
                <li>
                  <div class="row">

                    <div class="col-md-7 col-7">
                    Member 1: <?= $row["g_mem1_name"]?>
                      <br />
                      <span class="text-muted">
                        Roll #  <?= $row["g_mem1_rollno"]?>
                      </span>
                    </div>

                  </div>
                </li>
                <li>
                  <div class="row">

                    <div class="col-md-7 col-7">
                    Member 2: <?= $row["g_mem2_name"]?>
                      <br />
                      <span class="text-muted">
                        Roll # <?= $row["g_mem1_rollno"]?>
                      </span>
                    </div>

                  </div>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Project Title:  <?= $row["project_tittle"]?></h5>
            </div>
            <div class="card-body">
            <h5 style="color:blue">Project Description</h5>
              <h6 >
              <?=$row["project_description"]?>
              </h6>
            </div>
            <div class="card-footer">
            <form action="" method="post">
            <?php if($idd != 3){?>
              <input style="background-color:red; margin-left:5%" type="submit" class="btn pull-right" name="reject" value="Reject" />
              <input type="submit" class="btn btn-primary pull-right" name="approve" value="Approve" />
            <?php }?>
            </form>
             

            </div>
          </div>
        </div>
          
          
          <?php      
        

          }

        } else{
            echo 'No records matching your query were found.';
        }
      } else{
        echo 'ERROR: Could not able to execute $sql. ' . mysqli_error($link);
      }
      
      ?>


          
        </div>
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src='../assets/js/core/jquery.min.js'></script>
  <script src='../assets/js/core/popper.min.js'></script>
  <script src='../assets/js/core/bootstrap.min.js'></script>
  <script src='../assets/js/plugins/perfect-scrollbar.jquery.min.js'></script>
  <!--  Google Maps Plugin    -->
  <script src='https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'></script>
  <!-- Chart JS -->
  <script src='../assets/js/plugins/chartjs.min.js'></script>
  <!--  Notifications Plugin    -->
  <script src='../assets/js/plugins/bootstrap-notify.js'></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src='../assets/js/paper-dashboard.min.js?v=2.0.0' type='text/javascript'></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src='../assets/demo/demo.js'></script>
</body>





</html>

<?php 

if(isset($_POST['approve'])){
  echo "================================================================================================";
  $id = $_GET['id']; 


  $update = "UPDATE proposals SET status = 'approved' WHERE p_id=$id";
  
    if(mysqli_query($link, $update)){
  
      $to = "a.haq.shahid@outlook.com";
      $subject = "My subject";
      $txt = "Hello accept!";
      $headers = "From: mahadkhan809@gmail.com";
     
    
      mail($to,$subject,$txt,$headers);

    echo "Records were updated successfully.";
    } 
    else {
    echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
    }
}

if(isset($_POST['reject'])){
$id = $_GET['id']; 

echo $id;
$update = "UPDATE proposals SET status = 'rejected' WHERE p_id=$id";

  if(mysqli_query($link, $update)){

    $to = "mahadkhan809@gmail.com";
    $subject = "My subject";
    $txt = "Hello reject!";
    $headers = "From: mahadkhan809@gmail.com";
   
  
    mail($to,$subject,$txt,$headers);

  echo "Records were updated successfully.";
  } 
  else {
  echo "ERROR: Could not able to execute $update. " . mysqli_error($link);
  }





echo "send====================";

}


?>

   



