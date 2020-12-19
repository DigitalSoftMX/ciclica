<?php 
@import_request_variables("GP","");

$sucursal="discos";

include_once("../Librerias/cfg_connections.php");
include ("../Librerias/Classes/PHPExcel/Writer/Excel5.php");
require_once "../Librerias/Classes/PHPExcel.php";
require_once "../Librerias/Classes/PHPExcel/RichText.php";


$letrasColumnas= array("","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","AA","AB","AC","AD","AE","AF","AG","AH","AI","AJ","AK","AL","AM","AN","AO","AP","AQ","AR","AS","AT","AU","AV","AW","AX","AY","AZ");



$cnx=Conectarse($sucursal);




$objPHPExcel = new PHPExcel();
$objPHPExcel->getActiveSheet()->setTitle("Clientes");

$objPHPExcel->getActiveSheet()->mergeCells('D2:G3');
$objPHPExcel->getActiveSheet()->setCellValue("D2", "CLIENTES");
$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(50);
$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(35);
$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(15);
$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);

$consulta="SELECT idcliente CLAVE, CONCAT(nombre,' ',apepat,' ',apemat )NOMBRE, CONCAT (calle,' ',numero,' ',colonia)DIRECCION, telefono  TELEFONO, fe_re REGISTRO   FROM cliente";

$rs = @mysql_query($consulta,$cnx);
$col=2;
	for($i=0;$i<@mysql_num_fields($rs);$i++)
	{
		$objPHPExcel->getActiveSheet()->getStyle($letrasColumnas[$col].$fil)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
		$objPHPExcel->getActiveSheet()->getStyle($letrasColumnas[$col].$fil)->getFill()->getStartColor()->setRGB('DBE5F1');
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$col].$fil,str_replace("_"," ",strtoupper(mysql_field_name($rs, $i))));
		$col++;
	}
	
	$fil=4;
	$columna=2;
	while($row = @mysql_fetch_object($rs))
	{
		$fil++;
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna].$fil,$row->CLIENTE);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+1].$fil,$row->PATERNO);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+2].$fil,$row->MATERNO);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+3].$fil,$row->NOMBRE);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+4].$fil,$row->SALARIO);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+5].$fil,$row->ESTADO);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+6].$fil,$row->COD_POSTAL);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+7].$fil,$row->CALLE);
		$objPHPExcel->getActiveSheet()->setCellValue($letrasColumnas[$columna+8].$fil,$row->COLONIA);
	}
	
	$objPHPExcel->getActiveSheet()->getStyle("B4:".$letrasColumnas[$col-1].$fil)->getBorders()->getAllBorders()->setBorderStyle(PHPExcel_Style_Border::BORDER_THIN);




$objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);

$nombreRpt="excel_empleados.xls";

$objWriter->save($nombreRpt);

$directorio = getcwd();
echo "<HTML><SCRIPT>document.location='".$nombreRpt."';</SCRIPT></HTML>";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Generador Excel</title>
</head>

<body>

</body>
</html>