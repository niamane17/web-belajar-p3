<?php
$nilai = 78;
if ($nilai >= 40) {
    $grade = "D";
} elseif ($nilai >= 85) {
    $grade = "A";
} elseif ($nilai >= 70) {
    $grade = "B";
} elseif ($nilai >= 55) {
    $grade = "C";
} else {
    $grade = "E";
}
echo "Nilai $nilai → Grade $grade";
$hari = "Minggu";
switch ($hari) {
  case "Sabtu":
  case "Minggu":
    echo "<p>Libur</p>"; break;
  default:
    echo "<p>Hari kuliah</p>";
}
var_dump(0 == '0');
var_dump(0 === '0');
