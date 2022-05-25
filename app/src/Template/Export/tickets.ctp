<?php

$objPHPExcel = new \PHPExcel();

$objWorksheet = $objPHPExcel->getActiveSheet();

$style_header = array(
	'fill' => array(
		'type' => \PHPExcel_Style_Fill::FILL_SOLID,
		'color' => array('rgb'=>'ADD8E6'),
	),
	'font' => array(
		'bold' => true,
	)
);

$column_data = [
	'No' => 'no',
    'Ticket No' => 'ticket_no',
    'Nama Lengkap' => 'user_fullname',
    'Username' => 'user_username',
    'Tanggal Pesan' => 'create_date',
    'Tanggal Pembayaran' => 'payment_date',
    'Tanggal Masuk Wisata' => 'success_date',
    'Destinasi' => 'tourism',
    'Total Ticket' => 'total_ticket',
    'Total Harga' => 'total_price',
    'Status' => 'ticket_status'
];

$first_column = 'A';
$column_letters = [];
for ($i=0; $i<count($column_data); $i++) {
	$column_letters[] = $first_column;

	$first_column++;
}

$columnLetter = \PHPExcel_Cell::stringFromColumnIndex(0);

for ($col=$column_letters[0]; $col!==end($column_letters); $col++) {
	$objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
}

$objPHPExcel->getActiveSheet()->mergeCells($column_letters[0].'1:'.end($column_letters).'1');
$objPHPExcel->getActiveSheet()->setCellValueExplicit($column_letters[0].'1', 'REPORT TICKET', \PHPExcel_Cell_DataType::TYPE_STRING);
$objPHPExcel->getActiveSheet()->getStyle($column_letters[0].'1:'.end($column_letters).'2')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
$objPHPExcel->getActiveSheet()->getStyle($column_letters[0].'1:'.end($column_letters).'2')->applyFromArray($style_header);

$i = 0;
foreach ($column_data as $col_key => $col_value) {
	$objPHPExcel->getActiveSheet()->setCellValueExplicit(\PHPExcel_Cell::stringFromColumnIndex($i).'2', $col_key, \PHPExcel_Cell_DataType::TYPE_STRING);

	$i++;
}

$objPHPExcel->setActiveSheetIndex(0);

if (!empty($Tickets['data'])) {
	$no = 1;
	$row = 3;
	$idx_data = 0;
	$letter = $column_letters[0];

	foreach ($Tickets['data'] as $value) {
		if ($idx_data == count($column_data)) {
			$idx_data = 0;
			$letter = $column_letters[0];
		}

		foreach ($column_data as $col_key => $col_value) {
			switch ($col_value) {
				case 'no':
					$objPHPExcel->getActiveSheet()->setCellValueExplicit($letter.$row, $no++, \PHPExcel_Cell_DataType::TYPE_STRING);
                    break;
                case 'total_price':
                    $val = 'Rp. '.number_format($value[$col_value], 0, ",", ".");

					$objPHPExcel->getActiveSheet()->setCellValueExplicit($letter.$row, $val, \PHPExcel_Cell_DataType::TYPE_STRING);
                    break;
                case 'tourism':
                    $val = ucwords($value[$col_value]);

					$objPHPExcel->getActiveSheet()->setCellValueExplicit($letter.$row, $val, \PHPExcel_Cell_DataType::TYPE_STRING);
					break;
                default:
					$objPHPExcel->getActiveSheet()->setCellValueExplicit($letter.$row, $value[$col_value], \PHPExcel_Cell_DataType::TYPE_STRING);
					break;
			}

			$letter++;
			$idx_data++;
		}

		$row++;
	}
}

$styleArray = array(
	'borders' => array(
		'allborders' => array(
			'style' => \PHPExcel_Style_Border::BORDER_THIN
		)
	)
);
$objPHPExcel->getActiveSheet()->getStyle('A1:' .$objPHPExcel->getActiveSheet()->getHighestColumn().$objPHPExcel->getActiveSheet()->getHighestRow())->applyFromArray($styleArray);

$file_name = 'export-ticket-' . date('YmdHis') . '.xlsx';

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="' . $file_name . '"');
header('Cache-Control: max-age=0');

$objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save('php://output');
exit;
