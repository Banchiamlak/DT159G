<?php
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
$spreadsheet = $reader->load("data1.xlsx");

$namnArr = array();
$befArr = array();
$worksheet = $spreadsheet->getActiveSheet();
// Get the highest row number and column letter referenced in the worksheet
$highestRow = $worksheet->getHighestRow(); // e.g. 10

/*$dataArray = $spreadsheet->getActiveSheet()
    ->rangeToArray(
        'AV8:AV68',     // The worksheet range that we want to retrieve       // Should the array be indexed by cell row and cell column
    );
// var_dump($dataArray);

foreach($dataArray as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }*/
for ($row = 1; $row <= $highestRow; ++$row) {
  echo $worksheet->getCell('G'.$row)->getValue().'<br>';
}

echo '<br><br>' ;

for ($row = 1; $row <= $highestRow; ++$row) {
    echo $worksheet->getCell('I'.$row)->getValue().'<br>';
}
echo '<br><br>' ;

for ($row = 1; $row <= $highestRow; ++$row) {
    echo $worksheet->getCell('A'.$row)->getValue().'<br>';
}



?>