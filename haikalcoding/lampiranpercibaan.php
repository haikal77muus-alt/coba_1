<?php
$kdpegawai = "003";
$kdbagian = "A";
$gajipokok = 1300000;
if (($kdpegawai == "003") || ($kdbagian == "A"))
{
$tunjstruktural = 0.05 * $gajipokok;
echo "Tunjangan struktural Anda = $tunjstruktural";
}
else {
$tunjstruktural = 5;
echo "Anda tidak mendapat tunjangan struktural";
}
?>