<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(FALSE);
$reader->setLoadSheetsOnly(["Tabell, totalt"]);
$spreadsheet = $reader->load("data2.xlsx");

$worksheet = $spreadsheet->getActiveSheet();
// Get the highest row number and column letter referenced in the worksheet
$highestRow = $worksheet->getHighestRow(); // e.g. 10

for ($row = 2; $row <= $highestRow; ++$row) {
 $data1 = $worksheet->getCell('AV' . $row)->getValue().',';
 $d1 = trim($data1,',');

}
echo '<br>' ;

for ($row = 8; $row <= $highestRow; ++$row) {
    $data2 = $worksheet->getCell('A' . $row)->getValue().',';
    echo $data2;
}
echo '<br>' ;

for ($row = 1; $row <= $highestRow; ++$row) {
    $data3 = $worksheet->getCell('X' . $row)->getValue().',';
    echo $data3 ;
}

?>