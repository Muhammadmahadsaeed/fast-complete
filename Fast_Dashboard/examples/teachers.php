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
<?php require_once('./connection.php'); 

$selectTeacher = "select * from teachers"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Paper Dashboard 2 by Creative Tim
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
                        <a class="navbar-brand" href="#pablo">All Teachers</a>
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
                                <h4 style="display:inline-block" class="card-title"> Teachers</h4>
                                <button class="btn pull-right" data-toggle="modal" data-target="#form">Add
                                    Teacher</button>
                            </div>
                            <div class="card-body">
                                <?php


          if($result = mysqli_query($link, $selectTeacher)){
            if(mysqli_num_rows($result) > 0){
              echo '
              
              <table class="table">
              <thead class=" text-primary">
                  <th>
                      Teacher Name
                  </th>
                  <th>
                      Teacher Email
                  </th>
                  <th>
                      Department
                  </th>
                  <th>
                      Created At
                  </th>
                  
                  <th>Action</th>
              </thead>
              <tbody>
              
              ';
        while($row = mysqli_fetch_array($result)){
         
        echo '


            <tr>
                <td>
                '. $row["t_name"] .'
                </td>
                <td>
                '. $row["t_email"] .'
                </td>
                <td>
                '. $row["t_dept"] .'
                </td>
                <td>
                '. $row["create_on"] .'
                </td>
              
                <td>
                <button href="./ProposalDetail.php" class="btn">Edit</button>
                <button href="./ProposalDetail.php" style="background-color:red" class="btn">Delete</button>
                
                </td>
            </tr>
          




        ';
        }
        echo '</tbody>
        </table>';
      }
      else{
        echo "No records matching your query were found.";
    }
    }
    ?>
                               

                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-bottom-0">
                            <h5 class="modal-title" id="exampleModalLabel">Add Teacher Detail</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="name">Teacher Name</label>
                                    <input type="text" class="form-control" name="t_name" id="name"
                                        aria-describedby="emailHelp" placeholder="Enter Teacher Name">
                                    <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="dept">Department</label>
                                    <input type="text" class="form-control" id="dept" name="dept"
                                        aria-describedby="emailHelp" placeholder="Enter Department Name">
                                    <!-- <small id="emailHelp" class="form-text text-muted">Your information is safe with us.</small> -->
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        aria-describedby="emailHelp" placeholder="Enter Teacher Email">
                                    <small id="emailHelp" class="form-text text-muted">Your information is safe with
                                        us.</small>
                                </div>

                                <div class="form-group">
                                    <label for="password1">Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">

                                    <label for="fileUpload"
                                        class="file-upload btn btn-primary btn-block rounded-pill shadow"><i
                                            class="fa fa-upload mr-2"></i>Browse for file ...
                                        <input id="fileUpload" name="img" type="file">
                                    </label>

                                </div>
                            </div>
                            <div class="modal-footer border-top-0 d-flex justify-content-center">
                                <button type="submit" name="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>





        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!--  Google Maps Plugin    -->

    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <!-- <script>
    function SelectText(element) {
      var doc = document,
        text = element,
        range, selection;
      if (doc.body.createTextRange) {
        range = document.body.createTextRange();
        range.moveToElementText(text);
        range.select();
      } else if (window.getSelection) {
        selection = window.getSelection();
        range = document.createRange();
        range.selectNodeContents(text);
        selection.removeAllRanges();
        selection.addRange(range);
      }
    }
    window.onload = function() {
      var iconsWrapper = document.getElementById('icons-wrapper'),
        listItems = iconsWrapper.getElementsByTagName('li');
      for (var i = 0; i < listItems.length; i++) {
        listItems[i].onclick = function fun(event) {
          var selectedTagName = event.target.tagName.toLowerCase();
          if (selectedTagName == 'p' || selectedTagName == 'em') {
            SelectText(event.target);
          } else if (selectedTagName == 'input') {
            event.target.setSelectionRange(0, event.target.value.length);
          }
        }

        var beforeContentChar = window.getComputedStyle(listItems[i].getElementsByTagName('i')[0], '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, ""),
          beforeContent = beforeContentChar.charCodeAt(0).toString(16);
        var beforeContentElement = document.createElement("em");
        beforeContentElement.textContent = "\\" + beforeContent;
        listItems[i].appendChild(beforeContentElement);

        //create input element to copy/paste chart
        var charCharac = document.createElement('input');
        charCharac.setAttribute('type', 'text');
        charCharac.setAttribute('maxlength', '1');
        charCharac.setAttribute('readonly', 'true');
        charCharac.setAttribute('value', beforeContentChar);
        listItems[i].appendChild(charCharac);
      }
    }
  </script> -->
</body>

</html>

<?php 


if(isset($_POST['submit'])){
  $name = $_POST['t_name'];
  $dept = $_POST['dept'];
  $email = $_POST['email'];
  $pwd = $_POST['password1'];
  $img = 'mahad';

  $select = "select d_id from departments where d_name ='".$dept."'";
 
  if($result = mysqli_query($link, $select)){
    if(mysqli_num_rows($result) > 0){
       
        while($row = mysqli_fetch_assoc($result)){
         $sql = 'INSERT INTO teachers (t_name,t_dept,t_email,pwd,create_by,d_id,img)
                 VALUES ("'.$name.'","'.$dept.'","'.$email.'","'.$pwd.'","'.$row['d_id'].'","'.$row['d_id'].'","'.$img.'")';
        }
       
  if(mysqli_query($link, $sql)){
      echo "insertd";
      $name = '';
      $dept = '';
      $email = '';
      $pwd = '';
      $img = '';
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
  }
       
    } else{
        echo "No records matching your query were found.";
    }
  } else{
    echo "ERROR: Could not able to execute $select. " . mysqli_error($link);
  }

  mysqli_close($link);
}



// Close connection

// if(mysqli_query($link, $select)){
//     echo $select;
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }
 




?>

