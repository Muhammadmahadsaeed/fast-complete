<?php
namespace Dompdf;
require_once './dompdf/autoload.inc.php';
require_once( './connection.php' );

$batchId = $_GET['batchId'];
// $dom = new DOMDocument();
$pw = new \PhpOffice\PhpWord\PhpWord();
$section = $pw->addSection();
$approve = "SELECT * FROM proposals where batch = '".$batchId."'";

if ( $result = mysqli_query( $link, $approve ) ) {
    if ( mysqli_num_rows( $result ) > 0 ) {

        $i = 1;
        $output = '<html>';
        while( $row = mysqli_fetch_array( $result ) ) {

            $output .= '<body >
            <div style="z-index: -1000;position:fixed;margin:30%; text-align:center;opacity:0.25">
                <img src="./img/NU_Logo.png" height="300px" width="400px"/>
            </div>
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
            </body>';
            $i++ ;

        }
        $output .= '</html>';
        \PhpOffice\PhpWord\Shared\Html::addHtml($section, $output, false, false);
        // $dom->loadHTML( $output );
        // $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor( './template.docx' );

        // Swap out my variables for the HTML content
        // $templateProcessor->setValue( 'author', 'Robin Metcalfe' );
        // $templateProcessor->setValue( 'title', $documentTitle );
        // $templateProcessor->setValue( 'content', $output );
    }
}
// header("Content-Description: File Transfer");
// header('Content-Disposition: attachment; filename="generated.docx"');
// header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
// header('Content-Transfer-Encoding: binary');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// header('Expires: 0');
// $templateProcessor->saveAs("php://output");
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="template.docx"');
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($pw, 'Word2016');
$objWriter->save('php://output');
?>