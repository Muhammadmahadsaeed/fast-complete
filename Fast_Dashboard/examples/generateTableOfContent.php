<?php
namespace Dompdf;
require_once './dompdf/autoload.inc.php';
require_once('./connection.php');

$batchId = $_GET['batchId'];

$dompdf = new Dompdf(); 
$approve = "SELECT * FROM proposals where batch = '".$batchId."'";

if($result = mysqli_query($link, $approve)){
    if(mysqli_num_rows($result) > 0){
        $i = 1;
        $output = "<table style='width:100%;border-collapse: collapse;'>";
        $output .= " <tr>
                        <th style='text-align: left;'>Project Tittle</th>
                        <th></th>
                        <th>No</th>
                    </tr> <br>";

        while($row = mysqli_fetch_array($result)){
            
            $output .= '<tr >
           
           
            
            
               
                
                  <td>' .$row["project_tittle"]. ' </td>
                  <td>' .$row["p_id"]. '</td>
                 
                
               
               
           
                
               
           
            </tr>';
                
           
        }
        $output .= '</table>';
$dompdf->loadHtml($output);


$dompdf->setPaper('A4', 'potraite');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));

    

}
else{
   
       
        $output1 = "<html>";
      
            
            $output1 = '<body >
            <div style="z-index: -1000;position:fixed;margin:30%; text-align:center;opacity:0.25">
                <img src="./img/NU_Logo.png" height="300px" width="400px"/>
            </div>
            <div style="text-align:center;text-transform:uppercase;margin-top:30%">
                <h4 style="font-size:2em">There is no proposals</h4>
            </div>
                <br/>
         
               
           
            </body>';
               
           
        }
        $output1 .= '</html>';
$dompdf->loadHtml($output1);


$dompdf->setPaper('A4', 'potraite');
$dompdf->render();
$dompdf->stream("",array("Attachment" => false));

    


}



?>

