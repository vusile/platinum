<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

ob_start();
require_once ('location_pdf.php');
$content = ob_get_contents('location_pdf.php');
require_once('html2pdf/html2pdf.class.php');
$content .= ob_get_clean();
$html2pdf = new HTML2PDF('P', 'A4', 'en');
$html2pdf->writeHTML($content);
$html2pdf->Output();

?>
