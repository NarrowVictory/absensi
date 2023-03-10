
	<?php
    //koneksi ke database
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbnm = "sbd_10113076";
     
    $conn = mysqli_connect($host, $user, $pass);
    if ($conn) {
    $open = mysqli_select_db($dbnm);
    if (!$open) {
    die ("Database tidak dapat dibuka karena ".mysqli_error());
    }
    } else {
    die ("Server mysqli tidak terhubung karena ".mysqli_error());
    }
    //akhir koneksi
     
	#ambil data di tabel dan masukkan ke array
    $query = "select id_kelas,nama_kelas,k.id_guru,g.nama_guru from kelas k join guru g on k.id_guru=g.id_guru";
    $sql = mysqli_query ($query);
    $data = array();
    while ($row = mysqli_fetch_assoc($sql)) {
    array_push($data, $row);
    }
	
    #setting judul laporan dan header tabel
    $judul = "LAPORAN DAFTAR GURU";
	
    $header = array(
    array("label"=>"Id Kelas", "length"=>20, "align"=>"C"),
	array("label"=>"Nama Kelas", "length"=>40, "align"=>"C"),
	array("label"=>"NIP", "length"=>40, "align"=>"C"),
	array("label"=>"Nama Guru", "length"=>37, "align"=>"C")
	);
     
    #sertakan library FPDF dan bentuk objek
    require_once ("fpdf/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage();
     
    #tampilkan judul laporan
    $pdf->SetFont('Arial','B','12');
    $pdf->Cell(0,20, $judul, '0', 1, 'C');
     
    #buat header tabel
    $pdf->SetFont('Arial','','10');
    $pdf->SetFillColor(128,0,0);
    $pdf->SetTextColor(255);
    $pdf->SetDrawColor(20,10,0);
    foreach ($header as $kolom) {
    $pdf->Cell($kolom['length'], 4, $kolom['label'], 1, '0', $kolom['align'], true);
    }
    $pdf->Ln();
     
    #tampilkan data tabelnya
    $pdf->SetFillColor(224,235,255);
    $pdf->SetTextColor(0);
    $pdf->SetFont('');
    $fill=false;
    foreach ($data as $baris) {
    $i = 0;
    foreach ($baris as $cell) {
    $pdf->Cell($header[$i]['length'], 4, $cell, 1, '0', $kolom['align'], $fill);
    $i++;
    }
    $fill = !$fill;
    $pdf->Ln();
    }
     
    #output file PDF
	
    $pdf->Output();
    ?>