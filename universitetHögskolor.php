<?php
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$reader->setReadDataOnly(FALSE);
$reader->setLoadSheetsOnly(["Tabell, totalt"]);
$spreadsheet = $reader->load("data2.xlsx");

$worksheet = $spreadsheet->getActiveSheet();



$row10 = 10 ;
while($row10 <= 27){
    $da = (int)$worksheet->getCell('AV' . $row10)->getValue().'<br>';
    $row10++;
    echo $da; 
}

echo '<br>';

$row10 = 10;
while($row10 <= 27){
    $data = $worksheet->getCell('A' . $row10)->getValue().'<br>';
    $row10++;
    echo $data;  
}

echo '<br>';

$högskola = $worksheet->getCell('A29')->getValue();
echo $högskola;
echo '<br>';
$row30 = 30 ;
while($row30 <= 45){
    $data1= (int)$worksheet->getCell('AV' . $row30)->getValue().'<br>';
    echo $data1;
    $row30++;
}
echo '<br>';

$konstnärligahögskolor = $worksheet->getCell('A47')->getValue();
echo $konstnärligahögskolor;
echo '<br>';
$row48 = 48 ;
while($row48 <= 50){
    $data1= (int)$worksheet->getCell('AV' . $row48)->getValue().'<br>';
    echo $data1;
    $row48++;
}
echo '<br>';

$enskildautbildnigsanordnare = $worksheet->getCell('A52')->getValue();
echo $enskildautbildnigsanordnare;
echo '<br>';
$row53 = 53 ;
while($row53 <= 67){
    $data1= (int)$worksheet->getCell('AV' . $row53)->getValue().'<br>';
    echo $data1;
    $row53++;
}

?>