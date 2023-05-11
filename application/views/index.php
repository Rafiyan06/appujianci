<?php
$umur = 19; // ganti angka ini dengan umur yang ingin diuji

if ($umur < 0) {
  echo "Umur tidak valid";
} elseif ($umur < 13) {
  echo "Status: Anak-anak";
} elseif ($umur < 18) {
  echo "Status: Remaja";
} elseif ($umur < 60) {
  echo "Status: Dewasa";
} else {
  echo "Status: Lansia";
}
?>
