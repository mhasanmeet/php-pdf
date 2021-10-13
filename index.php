<?php 
    require('fpdf/fpdf.php');

    //A4 width: 219mm
    // default margin: 10mm each side
    // writeable horizontal: 219-(10*2) = 189mm
    $fpdf = new FPDF('p', 'mm', 'A4');
    $fpdf -> AddPage();

    //Set font to Arial, bold, 14pt
    $fpdf -> SetFont('Arial', 'B', 14);

    // Cell (width, height, text, border, end line, [align])
    $fpdf -> cell(130, 5, 'devshopbd.com', 1, 0);
    $fpdf -> cell(59, 5, 'Invocie', 1, 1);

    // Set font to arial, regular, 14pt
    $fpdf -> setFont('Arial', '', 12);

    $fpdf-> cell(130, 5, '[Street Address]', 1, 0);
    $fpdf-> cell(59, 5, '', 1, 1);

    $fpdf-> cell(130, 5, '[City Country]', 1, 0);
    $fpdf-> cell(25, 5, 'Date', 1, 0);
    $fpdf-> cell(34, 5, '[dd/mm/yyyy]', 1, 1);

    $fpdf-> cell(130, 5, 'Phone [+01682568271]', 1, 0);
    $fpdf-> cell(25, 5, 'Invoice #', 1, 0);
    $fpdf-> cell(34, 5, '[12345]', 1, 1);

    // Sapcer
    $fpdf-> cell(189, 10, '', 1, 1);
    //Billing Address
    $fpdf-> cell(100, 5, 'Bill to', 1, 1);
    //1st cell
    $fpdf-> cell(10, 5, '', 1, 0);
    $fpdf-> cell(90, 5, '[Name:] ', 1, 1);
    $fpdf-> cell(10, 5, '', 1, 0);
    $fpdf-> cell(90, 5, '[Company Name:] ', 1, 1);
    $fpdf-> cell(10, 5, '', 1, 0);
    $fpdf-> cell(90, 5, '[Address:] ', 1, 1);
    $fpdf-> cell(10, 5, '', 1, 0);
    $fpdf-> cell(90, 5, 'Phone', 1, 1);

    //Sapcer
    $fpdf-> cell(189, 10, '', 1, 1);

    //Imvoice Comments
    // $fpdf -> SetFront('', '', 14);
    $fpdf-> cell(130, 5, 'Description', 1, 0);
    $fpdf-> cell(28, 5, 'Vat', 1, 0);
    $fpdf-> cell(31, 5, 'Amount', 1, 1, 'R');

    // $fpdf -> SetFront('', '', 14);
    $fpdf-> cell(130, 5, 'React T-shirt', 1, 0);
    $fpdf-> cell(28, 5, '-', 1, 0);
    $fpdf-> cell(31, 5, '350 BDT', 1, 1, 'R');

    $fpdf-> cell(130, 5, 'JavaScript T-shirt', 1, 0);
    $fpdf-> cell(28, 5, '-', 1, 0);
    $fpdf-> cell(31, 5, '350 BDT', 1, 1, 'R');

    $fpdf-> cell(130, 5, '', 1, 0);
    $fpdf-> cell(25, 5, 'Sub Total', 1, 0);
    $fpdf-> cell(4, 5, '$', 1, 1, 0);
    $fpdf-> cell(30, 5, '350 BDT', 1, 0);



    $fpdf -> output();
?>