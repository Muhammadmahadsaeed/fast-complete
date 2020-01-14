<?php
require_once( './connection.php' );
$batchId = $_GET['batchId'];
$approve = "SELECT * FROM proposals where batch = '".$batchId."'";

if ( $result = mysqli_query( $link, $approve ) ) {
    if ( mysqli_num_rows( $result ) > 0 ) {

        $i = 1;
        $output = '<html>';
        while( $row = mysqli_fetch_array( $result ) ) {

            $output .= '<body >
            
            <div style="text-align:center;text-transform:uppercase">
                <h4>' .$row['project_tittle']. '</h4>
            </div>
                <br/>
            
            <table align="center">
               
                <tr>
                  <td>' .$row['leader_name']. ' </td>
                  <td>' .$row['l_rollno']. '</td>
                  <td style="padding-left:15%">(' .$row['email']. ')</td>
                </tr>
                <tr>
                  <td>' .$row['g_mem1_name']. '</td>
                  <td>' .$row['g_mem1_rollno']. '</td>
                  <td style="padding-left:15%">(' .$row['email']. ')</td>
                </tr>
                <tr>
                <td>' .$row['g_mem2_name']. ' </td>
                <td>' .$row['g_mem2_rollno']. '</td>
                <td style="padding-left:15%">(' .$row['email']. ')</td>
              </tr>
            </table>
               
            <div style="text-align:center">
                <h4>SUPERVISOR</h4>
            </div>
            <div style="text-align:center">
                <span style="font-size:0.9em;text-transform:uppercase">' .$row['teacher']. '</span>
                <span style="font-size:0.8em;padding-left:1%">(' .$row['email']. ')</span><br>
                   
            </div>
            <br><br>
            <span>' .$row['project_description']. '</span>
                
               
            <div style="position: absolute; bottom: 0; right: 0">     
                <span>' .$i. '</span>  
            </div> 
            <br style="page-break-before: always">  
            </body>';
            $i++ ;

        }
        $output .= '</html>';
    }
}

 
          header("Content-Type: application/vnd.msword");
          header("Expires: 0");//no-cache
          header("Cache-Control: must-revalidate, post-check=0, pre-check=0");//no-cache
          header("content-disposition: attachment;filename=proposals.doc");
          
          
          echo "$output";
              
?> 