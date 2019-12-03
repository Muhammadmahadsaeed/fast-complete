<?php 
    if(isset($_GET['ddlFruits'])){
        $filter = trim($_GET['ddlFruits']);
    
            $con = mysqli_connect('localhost','root','','fastfyp');
    
                $stmnt = $con->prepare('select * from teachers where t_dept=?');
                $stmnt->bind_param('s',$filter);
            
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($t_id,$t_name,$t_dept,$t_email,$pwd,$is_active,$create_on,$create_by,$d_id,$img);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'depart'=>$t_name,
                   

                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        
    };
?>