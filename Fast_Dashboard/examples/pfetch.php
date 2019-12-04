<?php 

require_once('./connection.php');
$maill=$_SESSION['email'];
$idd=$_SESSION['user_role_id'];

    if(isset($_GET['filter'])){
        $filter = trim($_GET['filter']);
        if(!empty($_GET['filter'])){
            $con = mysqli_connect('localhost','root','','fastfyp');
            if($filter == 'all'){
                if($idd==2){
                $stmnt = $con->prepare('select p.p_id,p.leader_name,p.batch,p.dept,p.teacher,p.l_rollno,p.status from proposals as p inner join teachers as t on p.t_id=t.t_id where t.t_email=?');
                $stmnt->bind_param('s',$maill);
                }
                else if($idd==3)
                {
                    $stmnt = $con->prepare('select p.p_id,p.leader_name,p.batch,p.dept,p.teacher,p.l_rollno,p.status from proposals as p inner join students as s on p.l_rollno=s.std_rollno where s.std_rollno=?');
                $stmnt->bind_param('s',$maill);
                }
                else
                {
                    $stmnt = $con->prepare('select p_id,leader_name,batch,dept,teacher,l_rollno,status from proposals');
                   
                }
            }else {
                if($idd==2){
                    $stmnt = $con->prepare('select p.p_id,p.leader_name,p.batch,p.dept,p.teacher,p.l_rollno,p.status from proposals as p inner join teachers as t on p.t_id=t.t_id where p.batch=? and t.t_email=?');
                    $stmnt->bind_param('ss',$filter,$maill);
                    }
                    else if($idd==3)
                    {
                    $stmnt = $con->prepare('select p.p_id,p.leader_name,p.batch,p.dept,p.teacher,p.l_rollno,p.status from proposals as p inner join students as s on p.l_rollno=s.std_rollno where p.batch=? and s.std_rollno=?');
                    $stmnt->bind_param('ss',$filter,$maill);
                    }
                    else
                    {
                        $stmnt = $con->prepare('select p_id,leader_name,batch,dept,teacher,l_rollno,status from proposals where batch=?');
                      
                    }
               
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