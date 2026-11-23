<?php
$berat = 3;
$member = true;

if ($berat <= 1) {
    $ongkir = 10000;
} elseif ($berat <= 5) {
    $ongkir = 10000 + ($berat - 1) * 4000;
} else {
    $ongkir = 0;
}

if ($berat > 5 && $member == true) {
    $ongkir = 0;
}

echo "Berat: $berat kg<br>";
echo "Member: " . ($member ? "Ya" : "Tidak") . "<br>";
echo "Ongkir: Rp" . number_format($ongkir, 0, ',', '.');
?>
