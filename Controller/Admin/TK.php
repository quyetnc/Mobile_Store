<?php
include_once("Model/Order.php");
include_once("Model/Product.php");
$Product = new Product();

$SLSP = $Product->CountProduct();


$Order = new Order();
$CountHD = $Order->CountOrder();
// Inday
$HandlingInDay = $Order->CountOrderNotHandlingInDay();
$OrderInDayDone = $Order->CountOrderInDayDone();
$OrderInDay = $Order->CountOrderInDay();
if ($OrderInDay == 0)
{
    $TiLeDoneInDay = 0;
}
else
{
    $TiLeDoneInDay = $OrderInDayDone/$OrderInDay;
}

$TotalInDay = $Order->GetTotalDay();
if ($TotalInDay==null)
{
    $ThuNhapTrongNgay = 0;
}
else 
{
    $ThuNhapTrongNgay = $TotalInDay['TotalDay'];
}

// InMonth
$HandlingInMonth = $Order->CountOrderNotHandlingInMonth();
$OrderInMonth = $Order->CountOrderInMonth();
$OrderInMonthDone = $Order->CountOrderInMonthDone();
$TiLeDoneInMonth = $OrderInMonthDone/$OrderInMonth;
$TotalInMonth = $Order->GetTotalMonth();
if ($TotalInMonth==null)
{
    $ThuNhapTrongThang = 0;
}
else 
{
    $ThuNhapTrongThang = $TotalInMonth['TotalMonth'];
}




require("Classes/PHPExcel.php");


if(isset($_POST['btnExport'])){
 $objExcel= new PHPExcel;
 $objExcel->setActiveSheetIndex(0);
 $sheet=$objExcel->getActiveSheet()->setTitle('Table');
 $col=1;
 $sheet->setCellValue('A' .$col,'BẢNG XÁC THỰC ĐƠN HÀNG');
 $col=2;
 $sheet->setCellValue('A'.$col,'MaKH');
 $objWriter = new PHPExcel_Writer_Excel2007($objExcel);
 $filename='CQin.xlsx';
 $objWriter->save($filename);
 ob_start();
 header('Content-Disposition: attachment; filename="' . $filename . '"');
 header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
 header('Content-Length: ' . filesize($filename));
 header('Content-Transfer-Encoding: binary');
 header('Cache-Control: must-revalidate');
 header('Pragma: no-cache');
 ob_end_flush();
 readfile($filename);
 return;
}



include_once("View/Admin/BangDK.php");
?>