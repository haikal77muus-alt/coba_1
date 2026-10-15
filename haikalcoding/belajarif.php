<html>
    <form method=POST>
        <input type="number" name="angka1">
        <input type="submit" name="kirim">
    </form>
</html>        
<?php
$nilaiAngka = $_POST['angka1'];

if (($nilaiAngka>=80)&&($nilaiAngka<=100))
{
$nilaiHuruf = "A";
}
else if(($nilaiAngka>=70)&&($nilaiAngka<=79))
{
$nilaiHuruf = "B";
}
else if(($nilaiAngka>=60)&&($nilaiAngka<=69))
{
$nilaiHuruf = "C";
}
else if(($nilaiAngka>=50)&&($nilaiAngka<=59))
{
$nilaiHuruf = "D";
}
else if(($nilaiAngka>=0)&&($nilaiAngka<=49))
{
$nilaiHuruf = "E";
}
echo "Nilai Hurufnya adalah:".$nilaiHuruf;

?>