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



<!DOCTYPE html>
<html lang="en">

<head>
<?php include('./connection.php');
 $resultset_2 = mysqli_query($link,"select * from departments") or die("ERROR: Could not connect. " . mysqli_error($link));
if(isset($_POST['submit'])){
  
    
    $resultset_1 = mysqli_query($link,"select * from departments where d_name='".$_POST["d_name"]."' ") or die("ERROR: Could not connect. " . mysqli_error($link));
   
    $count = mysqli_num_rows($resultset_1);

       if($count == 0)
        {
          if(!empty($_POST["d_name"]))
          {
          $sql = mysqli_query($link,"INSERT INTO departments (d_name) VALUES ('".$_POST["d_name"]."')") or die("ERROR: Could not connect. " . mysqli_error($link));
          header("Refresh:0");
          }
          else{
            $error= 'Enter Department Value' ;
            header("Refresh:5");
          }  
        }else{
         
           $error= 'The department is already present' ;
           header("Refresh:5");
           
        }
    };

    if(isset($_POST['update'])){
      $id=$_GET['id'];
      echo "<script>console.log($id)</script>";
      $resultset_1 = mysqli_query($link,"select * from departments where d_name='".$_POST["d_name"]."' ") or die("ERROR: Could not connect. " . mysqli_error($link));
     
      $count = mysqli_num_rows($resultset_1);
  
         if($count == 0)
          {
            if(!empty($_POST["d_name"]))
            {
            $sql = mysqli_query($link,"INSERT INTO departments (d_name) VALUES ('".$_POST["d_name"]."')") or die("ERROR: Could not connect. " . mysqli_error($link));
            header("Refresh:0");
            }
            else{
              $error= 'Enter Department Value' ;
            }  
          }else{
           
             $error= 'The department is already present' ;
             
          }
      };
  

 
// Close connection

?>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
                        <a class="navbar-brand" href="#pablo">All Department</a>
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
      <!-- <div class="panel-header panel-header-sm">


</div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 style="display:inline-block" class="card-title"> Departments</h4>
                <button class="btn pull-right" data-toggle="modal" data-target="#form">Add Department</button>
              </div>
              <div class="card-body">
                <?php
                if(!empty($error)){
                  ?>
              <div class="alert alert-danger" role="alert">
                <?=$error;?>
                </div>
                <?php } 
                
                  if( mysqli_num_rows($resultset_2)>0 ){
                   
                    ?>
                
                  <table class="table">
                    <thead class=" text-primary">
                      <th >
                        Department Name 
                      </th>
                  
                     
                    </thead>
                    <tbody>
                     
                    <?php while($row=mysqli_fetch_array($resultset_2)){ ?>
                      <tr>
                        <td>
                          <?=$row['d_name']?>
                        </td>
                       
                     
                        <td class="text-right">
                        
                        <button href="?id=<?=$row['d_id']?>" data-toggle="modal" data-target="#form" class="btn">Edit</button>
                        <button href="./ProposalDetail.php" style="background-color:red" class="btn">Delete</button>
                        
                        
                        </td>
                      

                       
                      </tr>
                      <?php
                   
                    }
                } else {
                  echo "ERROR: Could not able to execute . " . mysqli_error($link);
                }
                ?>
                    </tbody>
                  </table>
               
              </div>
            </div>
          </div>
         
        </div>

     


<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action=""> 
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Department Name</label>
            <input type="text" class="form-control" id="email1" name="d_name" aria-describedby="emailHelp" placeholder="Enter Department Name">
            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
          </div>
         
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="form2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Edit Department</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action=""> 
        <div class="modal-body">
          <div class="form-group">
            <label for="email1">Department Name</label>
            <input type="text" class="form-control" id="email1" name="d_name" aria-describedby="emailHelp" placeholder="Enter Department Name">
            <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
          </div>
         
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" name="update" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>



      </div>
    
    </div>
  </div>

  
 
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <!-- <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script> -->
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
</body>
<?php mysqli_close($link); ?>
</html>




