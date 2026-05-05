<?php
/**
 * public-export.php
 * Endpoint untuk ekspor data matriks dari dashboard publik ke PDF atau Excel.
 * Dipanggil via GET: public-export.php?type=pdf&kode=01&tahun=2024
 */
ini_set("display_errors", 0);
error_reporting(0);

if (!defined('PATH_TEMPLATE')) define('PATH_TEMPLATE', 'template/smartadmin/');
require_once dirname(__FILE__).'/lib/server/class.os.php';

$os  = new Os();
$conn = $os->conn;

$type  = isset($_GET['type'])  ? $_GET['type']  : '';
$kode  = isset($_GET['kode'])  ? $_GET['kode']  : '';
$tahun = isset($_GET['tahun']) ? $_GET['tahun'] : '';

if (!$kode || !$tahun || !in_array($type, ['pdf','excel'])) {
    die('Parameter tidak lengkap. Gunakan: ?type=pdf|excel&kode=XX&tahun=YYYY');
}

// =====================================================================
// AMBIL DATA DARI DATABASE (sama persis dengan public-service.php)
// =====================================================================

// Judul data pilah
$sqlJudul = "SELECT judul_data_pilah, instansi, header_baris FROM data_pilah WHERE kode_data_pilah = :kode";
$stmtJ = $conn->prepare($sqlJudul);
$stmtJ->execute([':kode' => $kode]);
$dataPilah = $stmtJ->fetch(PDO::FETCH_ASSOC);
$judul   = $dataPilah ? $dataPilah['judul_data_pilah'] : 'Data Pilah';
$instansi = $dataPilah ? $dataPilah['instansi'] : '-';
$headerBaris = ($dataPilah && $dataPilah['header_baris']) ? $dataPilah['header_baris'] : 'Kecamatan';

// Kolom
$sqlKolom = "SELECT * FROM data_pilah_kolom WHERE kode_data_pilah = :kode ORDER BY kode_kolom";
$stmtK = $conn->prepare($sqlKolom);
$stmtK->execute([':kode' => $kode]);
$koloms = $stmtK->fetchAll(PDO::FETCH_ASSOC);

// Baris
$sqlBaris = "SELECT * FROM data_pilah_baris WHERE kode_data_pilah = :kode ORDER BY no_urut ASC";
$stmtB = $conn->prepare($sqlBaris);
$stmtB->execute([':kode' => $kode]);
$barisList = $stmtB->fetchAll(PDO::FETCH_ASSOC);

// Cell values
$sqlCell = "SELECT * FROM data_pilah_cell WHERE kode_data_pilah = :kode AND tahun = :tahun";
$stmtC = $conn->prepare($sqlCell);
$stmtC->execute([':kode' => $kode, ':tahun' => $tahun]);
$cells = $stmtC->fetchAll(PDO::FETCH_ASSOC);

$cellMap = array();
foreach($cells as $c) {
    $cellMap[$c['kode_baris'] . '|' . $c['kode_kolom']] = $c['val'];
}

// =====================================================================
// BUILD HTML TABLE (digunakan oleh PDF & sebagai referensi Excel)
// =====================================================================
function buildHtmlTable($judul, $instansi, $tahun, $headerBaris, $koloms, $barisList, $cellMap) {
    $html  = '<h3 style="text-align:center; margin-bottom:2px;">' . htmlspecialchars($judul) . '</h3>';
    $html .= '<p style="text-align:center; font-size:12px; color:#666; margin-top:0;">Instansi: ' . htmlspecialchars($instansi) . ' — Tahun ' . htmlspecialchars($tahun) . '</p>';
    $html .= '<table border="1" cellpadding="4" cellspacing="0" style="width:100%; border-collapse:collapse; font-size:12px;">';
    
    // Header
    $html .= '<thead>';
    $html .= '<tr style="background-color:#3276b1; color:#fff;">';
    $html .= '<th style="width:40px; text-align:center;">No</th>';
    $html .= '<th style="min-width:120px;">' . htmlspecialchars($headerBaris) . '</th>';
    foreach ($koloms as $k) {
        $label = $k['header_kolom'] ? $k['header_kolom'] . ' ' . $k['nama_kolom'] : $k['nama_kolom'];
        $html .= '<th style="text-align:center;">' . htmlspecialchars($label) . '</th>';
    }
    $html .= '</tr>';
    $html .= '</thead>';
    
    // Body
    $html .= '<tbody>';
    $no = 1;
    foreach ($barisList as $b) {
        $html .= '<tr>';
        $html .= '<td style="text-align:center;">' . $no . '</td>';
        $html .= '<td style="font-weight:bold;">' . htmlspecialchars($b['nama_baris']) . '</td>';
        foreach ($koloms as $k) {
            $key = $b['kode_baris'] . '|' . $k['kode_kolom'];
            $val = isset($cellMap[$key]) ? $cellMap[$key] : 0;
            $html .= '<td style="text-align:right;">' . number_format((float)$val, 0, ',', '.') . '</td>';
        }
        $html .= '</tr>';
        $no++;
    }
    $html .= '</tbody>';
    $html .= '</table>';
    
    return $html;
}


// =====================================================================
// EXPORT PDF (menggunakan mPDF via class.html2pdf.php)
// =====================================================================
if ($type === 'pdf') {
    require_once dirname(__FILE__).'/lib/server/class.html2pdf.php';
    
    $pdf = new Html2pdf();
    $pdf->setPageSize(297, 210, 'L'); // A4 Landscape
    $pdf->setMargins(10, 10, 10, 10);
    
    $css = '
        body { font-family: Arial, sans-serif; }
        h3 { font-size: 16px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid #333; padding: 4px 6px; font-size: 11px; }
        th { background-color: #3276b1; color: #fff; text-align: center; }
        td { text-align: right; }
        td:first-child { text-align: center; }
        td:nth-child(2) { text-align: left; font-weight: bold; }
    ';
    $pdf->addCss($css);
    
    $tableHtml = buildHtmlTable($judul, $instansi, $tahun, $headerBaris, $koloms, $barisList, $cellMap);
    $pdf->addHtml($tableHtml);
    
    $filename = 'Laporan_' . preg_replace('/[^A-Za-z0-9_]/', '_', $judul) . '_' . $tahun . '.pdf';
    
    // Stream langsung ke browser
    $pdf->mpdf->Output($filename, 'I');
    exit;
}


// =====================================================================
// EXPORT EXCEL (menggunakan PHPExcel native — tanpa template)
// =====================================================================
if ($type === 'excel') {
    $pathPHPExcel = dirname(__FILE__) . '/lib/phpexcel/PHPExcel.php';
    $pathPHPExcel = str_replace(array('/', '\\'), DIRECTORY_SEPARATOR, $pathPHPExcel);
    require_once($pathPHPExcel);
    
    $objPHPExcel = new PHPExcel();
    $sheet = $objPHPExcel->getActiveSheet();
    $sheet->setTitle('Data Pilah');
    
    // ---- TITLE ROW ----
    $totalCols = count($koloms) + 2; // No + Nama Baris + Kolom data
    $lastColLetter = PHPExcel_Cell::stringFromColumnIndex($totalCols - 1);
    
    $sheet->mergeCells('A1:' . $lastColLetter . '1');
    $sheet->setCellValue('A1', $judul . ' — Tahun ' . $tahun);
    $sheet->getStyle('A1')->getFont()->setBold(true)->setSize(14);
    $sheet->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    $sheet->mergeCells('A2:' . $lastColLetter . '2');
    $sheet->setCellValue('A2', 'Instansi: ' . $instansi);
    $sheet->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('A2')->getFont()->setSize(11)->setItalic(true);
    
    // ---- HEADER ROW ----
    $headerRow = 4;
    $sheet->setCellValue('A' . $headerRow, 'No');
    $sheet->setCellValue('B' . $headerRow, $headerBaris);
    
    $colIdx = 2; // Start from column C (index 2)
    foreach ($koloms as $k) {
        $label = $k['header_kolom'] ? $k['header_kolom'] . ' ' . $k['nama_kolom'] : $k['nama_kolom'];
        $colLetter = PHPExcel_Cell::stringFromColumnIndex($colIdx);
        $sheet->setCellValue($colLetter . $headerRow, $label);
        $colIdx++;
    }
    
    // Style header
    $headerRange = 'A' . $headerRow . ':' . $lastColLetter . $headerRow;
    $headerStyle = array(
        'font' => array('bold' => true, 'color' => array('rgb' => 'FFFFFF'), 'size' => 11),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'color' => array('rgb' => '3276B1')
        ),
        'alignment' => array('horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER),
        'borders' => array(
            'allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
        )
    );
    $sheet->getStyle($headerRange)->applyFromArray($headerStyle);
    
    // ---- DATA ROWS ----
    $dataRow = $headerRow + 1;
    $no = 1;
    foreach ($barisList as $b) {
        $sheet->setCellValue('A' . $dataRow, $no);
        $sheet->setCellValue('B' . $dataRow, $b['nama_baris']);
        $sheet->getStyle('B' . $dataRow)->getFont()->setBold(true);
        
        $colIdx = 2;
        foreach ($koloms as $k) {
            $key = $b['kode_baris'] . '|' . $k['kode_kolom'];
            $val = isset($cellMap[$key]) ? (float)$cellMap[$key] : 0;
            $colLetter = PHPExcel_Cell::stringFromColumnIndex($colIdx);
            $sheet->setCellValue($colLetter . $dataRow, $val);
            $colIdx++;
        }
        $no++;
        $dataRow++;
    }
    
    // Style data area
    $lastDataRow = $dataRow - 1;
    $dataRange = 'A' . ($headerRow + 1) . ':' . $lastColLetter . $lastDataRow;
    $dataStyle = array(
        'borders' => array(
            'allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)
        )
    );
    $sheet->getStyle($dataRange)->applyFromArray($dataStyle);
    $sheet->getStyle('A' . ($headerRow + 1) . ':A' . $lastDataRow)->getAlignment()
        ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    
    // Auto-size columns
    for ($i = 0; $i < $totalCols; $i++) {
        $sheet->getColumnDimension(PHPExcel_Cell::stringFromColumnIndex($i))->setAutoSize(true);
    }
    
    // ---- OUTPUT (stream ke browser) ----
    $filename = 'Laporan_' . preg_replace('/[^A-Za-z0-9_]/', '_', $judul) . '_' . $tahun . '.xls';
    
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save('php://output');
    
    $objPHPExcel->disconnectWorksheets();
    unset($objPHPExcel);
    exit;
}
