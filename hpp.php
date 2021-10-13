<?php 
    require('fpdf/fpdf.php'); 

    $fpdf = new FPDF('p', 'mm', 'a4');
    $fpdf -> AddPage();

    //Image

    $fpdf->SetFont('Arial', '', 12);

    $fpdf->cell(20, 10, 'ID', 1, 0);
    $fpdf->cell(50, 10, 'Name', 1, 0);
    $fpdf->cell(100, 5, 'Score', 1, 0);
    $fpdf->cell(20, 10, 'Passing', 1, 0);
    $fpdf->cell(0, 5, '', 0, 1);

    $fpdf->cell(70, 5, '', 0, 0);
    $fpdf->cell(25, 5, 'q1', 1, 0);
    $fpdf->cell(25, 5, 'q2', 1, 0);
    $fpdf->cell(25, 5, 'q3', 1, 0);
    $fpdf->cell(25, 5, 'q4', 1, 1);

    $fpdf->setFont('Arial', '', 12);
    
    for($i=0; $i<=20; $i++){
        $fpdf->cell(20, 5, $i, 'LR', 0, 'R');
        $fpdf->cell(50, 5, 'Student'. $i,'LR', 0);
        $fpdf->cell(25, 5, rand(70,100),'LR', 0);
        $fpdf->cell(25, 5, rand(70,100),'LR', 0);
        $fpdf->cell(25, 5, rand(70,100),'LR', 0);
        $fpdf->cell(25, 5, rand(70,100),'LR', 0);
        $fpdf->cell(25, 5, 'passed','LR', 1);
    }

    $fpdf->cell(190, 5, '', 'T', 1);

    $fpdf->output('');
?>