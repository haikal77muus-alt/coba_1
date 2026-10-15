<html>
 <form method="POST">
   <input type="number" name="angka1">
   <input type="number" name="angka2"> <br><br>
   <input type="submit" name="operator" value="+">
   <input type="submit" name="operator" value="-">
   <input type="submit" name="operator" value="x">
   <input type="submit" name="operator" value="%"> 
 </form>
</html> 

<?php

$a=$_POST['angka1'];
$b=$_POST['angka2'];
//rumus operasi//
$op=$_POST['operator'];
if($op=="+"){
   $c=$a+$b;
  echo "hasilnya adalah $c";
}elseif($op=="-"){
  $c=$a-$b;
   echo "hasilnya adalah".$c;
}elseif($op=="x"){
  $c=$a*$b;
   echo "hasilnya adalah".$c;
}elseif($op=="%"){
  $c=$a/$b;
   echo "hasilnya adalah".$c; 
}
for ($i = 1; $i <= 1; $i++) {
     if ($i==50) {
      break;
     }
      echo "angka:$c<br>" ;
}

$nilai = $c;
if ($nilai > 50)
{
echo "Nilai lebih besar dari 50";
}
else if($nilai < 50)
{
echo "Nilai lebih kecil dari 50";
}
else
{
echo "Nilai sama dengan 50";
}


?>
