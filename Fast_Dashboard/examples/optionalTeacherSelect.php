<?php 
$link = mysqli_connect('localhost','root','','fastfyp');
$filter = trim($_GET['opTeacherId']);

$sql = "select * from teachers where t_name = '".$filter."'";

// $query = mysqli_query($link, $sql);
$query =  mysqli_query($link, $sql) or die(mysqli_error($link));

$row = mysqli_fetch_array($query);


    if(isset($_GET['opTeacherId'])){

        
       
        
                $stmnt = $link->prepare('select * from teachers where d_id=?');
                $stmnt->bind_param('i',$row['d_id']);
               
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($t_id,$t_name,$t_dept,$t_email,$pwd,$is_active,$create_on,$create_by,$d_id,$img);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'tname'=>$t_name
                   

                );
                array_push($final,$each);
               
            };
           
            $fi = json_encode($final);
            echo $fi;
            $stmnt->close();
            $link->close();
        
    };
?>