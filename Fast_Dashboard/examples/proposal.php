
<?php
require_once('./connection.php');

$idd=$_SESSION['user_role_id'];
$maill=$_SESSION['email'];
// $sql = "SELECT * FROM proposals where STATUS  = 'request'";
// $approve = "SELECT * FROM proposals where STATUS  = 'approved'";
// $reject = "SELECT * FROM proposals where STATUS  = 'rejected'";

?>


<!DOCTYPE html>
<html lang="en">

<head>
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


  <link rel="stylesheet" href="./general.css">
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
                        <a class="navbar-brand" href="#pablo">Student Proposals</a>
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
                <h4 class="card-title" style="display:inline-block"> Proposals</h4>
                <?php
		if($idd ==3){
            ?>
                <a class="btn btn-primary  mr-4 pull-right" href="./addProposal.php">Add Proposal</a>
    <?php }; ?>  
               

              

                <select class="btn btn-primary dropdown-toggle mr-4 pull-right"  id="filter" >
                
                  <option  value="all" name="">All Batch</option>
                  <option  value="2019">2019</option>
                  <option  value="2018">2018</option>
                  <option  value="2017">2017</option>
                </select>

              </div>
              <div class="card-body">


                <section id="tabs">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <nav>
                          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                         
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All Proposals</a>
                           
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Approved</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rejected</a>

                          </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                          <div class="tab-pane fade show active" id="nav-home" value="new" name="new" role="tabpanel" aria-labelledby="nav-home-tab">
                            <br>
                            <br>
                            <table class="table table-bordered" id="table">

                            </table>



                          </div>
                          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div>

                            <?php
		if($idd !=3){
            ?>
                            <form action="" method="post">
                            <input type="button" value="Export to Word" name="submit_val" onclick="generateWord()" class="btn btn-primary pull-right" />
                            <input type="button" value="Export to PDF" name="submit_val" onclick="generatePdf()" class="btn btn-primary pull-right" />
                            <input type="button" value="Print Table Of Content" name="table" onclick="generateTable()" class="btn btn-primary pull-right" />
                            
                            </form>
                            <?php }; ?>
                            </div>
                            <br>
                            <br>

                         
                            <table class="table table-bordered" id="table-approved">

                            </table>
                          </div>
                          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <table class="table table-bordered" id="table-rejected">

                            </table>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </section>






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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>


<script>
  $(document).ready(function() {

    function create_list(data) {
      // console.log(data)

      var table = $('#table-approved');
      var table2 = $('#table-rejected');
      var table3 = $('#table');
      
      table.html('');
      table2.html('');
      table3.html('');
      var table_head = $('<tr>');
      table_head.append($('<th>').text('Leader Name'))
      table_head.append($('<th>').text('Leader roll #'))
      table_head.append($('<th>').text('Dept'))
      table_head.append($('<th>').text('Teacher'))
      table_head.append($('<th>').text('Batch'))
      table_head.append($('<th>').text('Status'))
      table_head.append($('<th>').text('Action'))

      var table_head2 = $('<tr>');
      table_head2.append($('<th>').text('Leader Name'))
      table_head2.append($('<th>').text('Leader roll #'))
      table_head2.append($('<th>').text('Dept'))
      table_head2.append($('<th>').text('Teacher'))
      table_head2.append($('<th>').text('Batch'))
      table_head2.append($('<th>').text('Status'))
      table_head2.append($('<th>').text('Action'))

      var table_head3 = $('<tr>');
      table_head3.append($('<th>').text('Leader Name'))
      table_head3.append($('<th>').text('Leader roll #'))
      table_head3.append($('<th>').text('Dept'))
      table_head3.append($('<th>').text('Teacher'))
      table_head3.append($('<th>').text('Batch'))
      table_head3.append($('<th>').text('Status'))
      table_head3.append($('<th>').text('Action'))
      table.append(table_head2);
      table2.append(table_head);
      table3.append(table_head3)

      for (var x in data) {
        console.log(data[x]);
        if ((data[x].status == 'approved') || (data[x].status == 'rejected') || (data[x].status == 'request')) {

          var html = '<tr>';
     html += '<td>'+data[x].leader+'</td>';
     html += '<td>'+data[x].lroll+'</td>';
     html += '<td>'+data[x].dept+'</td>';
     html += '<td>'+data[x].teacher+'</td>';
     html += '<td>'+data[x].batch+'</td>';
     html += '<td>'+data[x].status+'</td>';
     html += '<td> <a href="proposaldetail.php?id='+data[x].id+'" class="btn btn-light">View</a></td></tr>';
          table3.append(html);
console.log(data[x])
          if (data[x].status == 'rejected') {
            var html = '<tr>';
     html += '<td>'+data[x].leader+'</td>';
     html += '<td>'+data[x].lroll+'</td>';
     html += '<td>'+data[x].dept+'</td>';
     html += '<td>'+data[x].teacher+'</td>';
     html += '<td>'+data[x].batch+'</td>';
     html += '<td>'+data[x].status+'</td>';
     html += '<td> <a href="proposaldetail.php?id='+data[x].id+'" class="btn btn-light">View</a></td></tr>';
            table2.append(html);
            console.log(data[x])
          }
          if (data[x].status == 'approved') {

            var html = '<tr>';
     html += '<td>'+data[x].leader+'</td>';
     html += '<td>'+data[x].lroll+'</td>';
     html += '<td>'+data[x].dept+'</td>';
     html += '<td>'+data[x].teacher+'</td>';
     html += '<td>'+data[x].batch+'</td>';
     html += '<td>'+data[x].status+'</td>';
     html += '<td> <a href="proposaldetail.php?id='+data[x].id+'" class="btn btn-light">View</a></td></tr>';
            
            table.append(html);
          }
        }



      };
    }

    $.ajax({
      url: './pfetch.php?filter=all',
      type: 'GET',
      success: function(data) {
        var d = JSON.parse(data);
         console.log(d)
        create_list(d);

      }
    })

    $('#filter').on('change', function() {
      var filter = $(this).val();
      $.ajax({
        url: './pfetch.php?filter=' + filter,
        type: 'GET',
        success: function(data) {
          var d = JSON.parse(data);
          console.log(d)
          create_list(d);
        }
      })
    })
  })
</script>

<script>
  function viewProposal(e) {
    console.log(e.id)
    window.location = `./ProposalDetail.php?id=${e.id}`;
  }


  function generatePdf(){
   
    var e = document.getElementById("filter");
    let batch = e.options[e.selectedIndex].text;
     
     console.log("pdf",batch)
  
    if(batch == "All Batch"){
      swal("Sorry!", "Invalid Batch Selection!", "error");
    }
   else{
        window.location = `./generate_pdf.php?batchId=${batch}`
   }
    
  }
  function generateWord(){
   
   var e = document.getElementById("filter");
   let batch = e.options[e.selectedIndex].text;
    
    console.log("pdf",batch)
 
   if(batch == "All Batch"){
     swal("Sorry!", "Invalid Batch Selection!", "error");
   }
  else{
       window.location = `./generateWord.php?batchId=${batch}`
  }
   
 }
 function generateTable(){
  var e = document.getElementById("filter");
    let batch = e.options[e.selectedIndex].text;
     
     console.log("pdf",batch)
  
    if(batch == "All Batch"){
      swal("Sorry!", "Invalid Batch Selection!", "error");
    }
   else{
        window.location = `./generateTableOfContent.php?batchId=${batch}`
   }
    
 }
</script>