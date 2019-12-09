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
error_reporting(0);
$maill = $_SESSION['email'];
$uname = $_SESSION['user_name'];
$dep_err = $teach_err = $mem1_err = $mem2_err = $prtitle_err = $mem1r_err = $mem2r_err = $mail_err = $m1mail_err = $m2mail_err = $pdes_err = "";
   

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Fast
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
    <script>
      if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href)
      }
    

        window.onload = function() {
            var c = document.getElementById('platypus')
            c.onchange = function() {
                if (c.checked == true) {
                    document.getElementById('teacherDropdown1').style.display = 'inline';
                } else {
                    document.getElementById('teacherDropdown1').style.display = '';
                }
            }
        }
    </script>
    
    <style>
        #teacherDropdown1 {
            display: none;
        }
    </style>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                        <a class="navbar-brand" href="#pablo">Proposal Form</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

                        <ul class="navbar-nav">

                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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

                    <div class="col-md-9">
                        <div class="card card-user">
                            <div class="card-header">
                                <h5 class="card-title">Project Detail</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" action="addProposal.php">
                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label>Batch (disabled)</label>
                                                <input type="text" class="form-control" disabled="" placeholder="Batch" name="batch" value="<?php echo date('Y'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3 px-1">
                                            <div class="form-group">
                                                <label>Department</label>

                                                <select class="form-control" name="dept" id="ddlFruits">
                                                    <option value="cd" name="cd">Choose Department</option>
                                                    <?php
                                                    $sql = mysqli_query($link, "SELECT * FROM departments");
                                                    while ($row = $sql->fetch_assoc()) {
                                                        echo "<option value='" . $row['d_name'] . "'>" . $row['d_name'] . "</option>";
                                                    }
                                                    ?>


                                                </select>
                                                <span class="help-block" style="color: red;"><?php echo $dep_err;?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Choose Teacher</label>

                                                <select class="form-control" id="teacherDropdown" name="teacher">


                                                </select>
                                                <span class="help-block" style="color: red;"><?php echo $teach_err;?></span>

                                            </div>
                                        </div>

                                    </div>






                                    <div class="row">
                                        <div class="col-md-5 pr-1">
                                            <div class="form-group">
                                                <label for="platypus">Choose Second Teacher (Optional)</label>
                                                <input id="platypus" type="checkbox" name="monotreme" value="platypus" />

                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">

                                                <select class="form-control" id="teacherDropdown1" name="Optionalteacher">


                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Leader Name</label>
                                                <input type="text" class="form-control" disabled="" name="l_name" value="<?php echo $uname; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Member 1</label>
                                                <input type="text" name="mem1" class="form-control" placeholder="Member 1 Name">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $mem1_err;?></span>
                                            
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Member 2</label>
                                                <input type="text" name="mem2" class="form-control" placeholder="Member 2 Name">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $mem2_err;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Leader Roll No</label>
                                                <input type="text" class="form-control" disabled="" name="l_rollno" value="<?php echo $maill; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Member 1 Roll No</label>
                                                <input type="text" name="mem1_rollno" class="form-control">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $mem1r_err;?></span>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Member 2 Roll No</label>
                                                <input type="text" name="mem2_rollno" class="form-control">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $mem2r_err;?></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Leader Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email Address">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $mail_err;?></span>
                                        </div>
                                        <div class="col-md-4 px-1">
                                            <div class="form-group">
                                                <label>Member 1 Email</label>
                                                <input type="email" name="Mem1_Email" class="form-control" placeholder="Email Address">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $m1mail_err;?></span>
                                        </div>
                                        <div class="col-md-4 pl-1">
                                            <div class="form-group">
                                                <label>Member 2 Email</label>
                                                <input type="email" name="Mem2_Email" class="form-control" placeholder="Email Address">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $m2mail_err;?></span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Project Tittle</label>
                                                <input type="text" name="project_tittle" class="form-control" placeholder="Write Your Project Tittle">
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $prtitle_err;?></span>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Project Description</label>
                                                <textarea class="form-control textarea" name="project_des"></textarea>
                                            </div>
                                            <span class="help-block" style="color: red;"><?php echo $pdes_err;?></span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="update ml-auto mr-auto">
                                            <button type="submit" name="submit" class="btn btn-primary btn-round">
                                                Submit Proposal</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
</body>

</html>


<script type="text/javascript">
    function myFunction(data) {


        let teacherDropdown = document.getElementById('teacherDropdown')


        teacherDropdown.innerHTML = ''
        //   z.setAttribute("value", "volvocar");
        for (let key in data) {

            var z = document.createElement("option");
            // var t = document.createTextNode(data[key].depart);
            // console.log(t)
            z.innerHTML += data[key].depart
            teacherDropdown.appendChild(z);
        }


    }

    function OptionalTeacher(data) {


        let teacherDropdown1 = document.getElementById('teacherDropdown1')


        teacherDropdown1.innerHTML = ''
        //   z.setAttribute("value", "volvocar");
        for (let key in data) {

            var y = document.createElement("option");
            // var t = document.createTextNode(data[key].depart);
            // console.log(t)
            y.innerHTML += data[key].depart
            teacherDropdown1.appendChild(y);
        }


    }
    $(document).ready(function() {
        $('#ddlFruits').on('change', function() {
            var ddlFruits = $(this).val();
            console.log(ddlFruits)
            $.ajax({
                type: "GET",
                url: './getDepartTeachers.php?ddlFruits=' + ddlFruits,
                success: function(data) {
                    var d = JSON.parse(data);
                    myFunction(d)
                    var c = document.getElementById("platypus")
                    if (c.checked == true) {
                        OptionalTeacher(d)
                    } else {

                    }

                }
            });

        })
    })
</script>


<?php

if (isset($_POST['submit'])) {
    $batch = date('Y');
    $dept = $_POST['dept'];
    $teacher = $_POST['teacher'];
    $Optionalteacher = $_POST['Optionalteacher'];
    $l_name = $_POST['l_name'];
    $mem1 = $_POST['mem1'];
    $mem2 = $_POST['mem2'];
    $project_tittle = $_POST['project_tittle'];
    $l_rollno = $_POST['l_rollno'];
    $mem1_rollno = $_POST['mem1_rollno'];
    $mem2_rollno = $_POST['mem2_rollno'];
    $email = $_POST['email'];
    $Mem1_Email = $_POST['Mem1_Email'];
    $Mem2_Email = $_POST['Mem2_Email'];
    $project_des = $_POST['project_des'];

    $status = "request";

    $sql1 = "select t_id from teachers where t_name = '" . $teacher . "' ";
    $result = mysqli_query($link, $sql1);
    $data1 = mysqli_fetch_assoc($result);
    $teacherId = $data1['t_id'];

    $sql2 = "select t_id from teachers where t_name = '" . $Optionalteacher . "' ";
    $result2 = mysqli_query($link, $sql2);
    $data2 = mysqli_fetch_assoc($result2);
    $OptionalTeacherId = $data2['t_id'];

    $result_set = mysqli_query($link, "select * from proposals where l_rollno = '" . $l_rollno . "'");
    $count = mysqli_num_rows($result_set);
    $data = mysqli_fetch_assoc($result_set);

    $std = $data['status'];
    if (empty($dept)) {
        $dep_err = "Please select deparment name";
    } else {
        $dept = $dept;
    }

    if (empty($teacher)) {
        $teach_err = "Please select teacher";
    } else {
        $teacher = $teacher;
    }
    if (empty($mem1)) {
        $mem1_err = "Please enter memeber name";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $mem1)) {
        $mem1_err = "Please enter a valid member name";
    } else {
        $mem1 = $mem1;
    }


    if (empty($mem2)) {
        $mem2_err = "Please enter memeber name";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $mem2)) {
        $mem2_err = "Please enter a valid member name";
    } else {
        $mem2 = $mem2;
    }

    if (empty($project_tittle)) {
        $prtitle_err = "Please enter memeber name";
    } elseif (!preg_match("/^[a-zA-Z ]*$/", $project_tittle)) {
        $prtitle_err = "Please enter a valid member name";
    } else {
        $project_tittle = $project_tittle;
    }

    if (empty($mem1_rollno)) {
        $mem1r_err = "Please enter your roll number";
    } else if (!is_numeric($mem1_rollno)) {
        $mem1r_err = "Please enter a valid roll number";
    } else {
        $mem1_rollno = $mem1_rollno;
    }


    if (empty($mem2_rollno)) {
        $mem2r_err = "Please enter your roll number";
    } else if (!is_numeric($mem2_rollno)) {
        $mem2r_err = "Please enter a valid roll number";
    } else {
        $mem2_rollno = $mem2_rollno;
    }

    if (empty($email)) {
        $mail_err = "Please enter email";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mail_err = "Invalid email format";
    } else {
        $email=$email;
    }

    if (empty($Mem1_Email)) {
        $m1mail_err = "Please enter email";
    } else if (!filter_var($Mem1_Email, FILTER_VALIDATE_EMAIL)) {
        $m1mail_err = "Invalid email format";
    } else {
        $Mem1_Email = $Mem1_Email;
    }

    if (empty($Mem2_Email)) {
        $m2mail_err = "Please enter email";
    } else if (!filter_var($Mem2_Email, FILTER_VALIDATE_EMAIL)) {
        $m2mail_err = "Invalid email format";
    } else {
        $Mem2_Email = $Mem2_Email;
    }


    if(empty($project_des)){
        $pdes_err="enter description";
    }
    else {
        $project_des=$project_des;
    }

if(empty($dep_err) && empty($teach_err) && empty($mem1_err) && empty($mem2_err) && empty($prtitle_err) && empty($mem1r_err)  && empty($mem2r_err)  && empty($mail_err) && empty($m1mail_err) && empty($m2mail_err) && empty($pdes_err)){


    if ($count == 0) {


        if (!empty($OptionalTeacherId)) {
            $insert = 'INSERT INTO proposals (leader_name,g_mem1_name,g_mem2_name,batch,dept,teacher,optional_teacher,project_tittle,
    project_description,l_rollno,g_mem1_rollno,g_mem2_rollno,email,mem1_email,mem2_email,img,status,create_by,t_id,op_t_id,is_check)
    VALUES ("' . $l_name . '","' . $mem1 . '","' . $mem2 . '","' . $batch . '","' . $dept . '","' . $teacher . '","' . $Optionalteacher . '","' . $project_tittle . '",
    "' . $project_des . '",
    "' . $l_rollno . '","' . $mem1_rollno . '","' . $mem2_rollno . '","' . $email . '","' . $Mem1_Email . '","' . $Mem2_Email . '","' . $img . '","' . $status . '",3,"' . $teacherId . '","' . $OptionalTeacherId . '",0)';
        } else {
            $insert = 'INSERT INTO proposals (leader_name,g_mem1_name,g_mem2_name,batch,dept,teacher,optional_teacher,project_tittle,
    project_description,l_rollno,g_mem1_rollno,g_mem2_rollno,email,mem1_email,mem2_email,img,status,create_by,t_id,op_t_id,is_check)
    VALUES ("' . $l_name . '","' . $mem1 . '","' . $mem2 . '","' . $batch . '","' . $dept . '","' . $teacher . '","' . $Optionalteacher . '","' . $project_tittle . '",
    "' . $project_des . '",
    "' . $l_rollno . '","' . $mem1_rollno . '","' . $mem2_rollno . '","' . $email . '","' . $Mem1_Email . '","' . $Mem2_Email . '","' . $img . '","' . $status . '",3,"' . $teacherId . '",0,0)';
        }

        if (mysqli_query($link, $insert)) {
            echo "insertd";
        } else {
            echo "ERROR: Could not able to execute $insert. " . mysqli_error($link);
        }
    } else {

        if ($std == 'request') {
            echo '<script>swal("Kindly Wait!", "Your Proposal is Pending!", "success");</script>';
        } else if ($std == 'approved') {
            echo '<script>swal("Good job!", "Your Submission is Approved!", "success");</script>';
        } else {
            echo '<script>swal("Sorry!", "Your Submission is being rejected!", "error");</script>';
        }
    }    }
}




?>