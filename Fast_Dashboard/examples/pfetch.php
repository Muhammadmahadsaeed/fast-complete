<?php 
    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
            $con = mysqli_connect('localhost','root','','fastfyp');
            if($filter == 'all'){
                $stmnt = $con->prepare('select p_id,leader_name,batch,dept,teacher,l_rollno,status from proposals');
            }else {
                $stmnt = $con->prepare('select p_id,leader_name,batch,dept,teacher,l_rollno,status from proposals where batch=?');
                $stmnt->bind_param('s',$filter);
            };
            $stmnt->execute();
            $stmnt->store_result();
            $stmnt->bind_result($id,$lname,$batch,$dept,$teacher,$lroll,$status);
            $final = array();
            while($stmnt->fetch()){
                $each = array(
                    'id'=>$id,
                    'leader'=>$lname,
                    'lroll'=>$lroll,
                    'dept'=>$dept,
                    'teacher'=>$teacher,
                    'batch'=>$batch,
                    'status'=>$status

                );
                array_push($final,$each);
            };
            echo json_encode($final);
            $stmnt->close();
            $con->close();
        };
    };
?>