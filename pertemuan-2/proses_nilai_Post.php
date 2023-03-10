<?php
if(isset($_POST['submit'])){
$nama = $_POST  ['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$rataRata = round ((($praktikum*0.30)+($uas*0.35)+($uts*0.35)),2);

echo "Nama: $nama <br>";
echo "Mata Kuliah: $matkul <br>";
echo "Nilai UTS: $uts <br>";
echo "Nilai UAS: $uas <br>";
echo "Nilai Praktikum: $praktikum <br>";
echo "Nilai rata-rata: $rataRata <br>";
} else{
    echo "tidak ada data!!!";
}
if($rataRata > 100){
echo "Grade : I<br>";
echo "Invalid";
}
elseif($rataRata < 0){
echo "Grade : I<br>";
echo "Invalid";
}
elseif ($rataRata >= 85 && $rataRata <= 100){
echo "Grade : A<br>";
echo "Sangat Baik";
}
elseif($rataRata >= 70 && $rataRata <= 84){
echo "Grade : B<br>";
echo "Baik";
}
elseif($rataRata >= 55 && $rataRata <= 69){
echo "Grade : C<br>";
echo "Cukup";
}
elseif($rataRata >= 35 && $rataRata <= 54){
echo "Grade : D<br>";
echo "Kurang";
}
elseif($rataRata <= 34){
echo "Grade : E<br>";
echo "Sangat Kurang";
}
else{
    echo "Grade : I<br>";
    echo "Invalid";
}