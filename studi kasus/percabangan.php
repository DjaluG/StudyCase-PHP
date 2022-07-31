<?php

$data = true;

if($data){
    echo "Variabel data bernilai true";
}

?>
<br>
<?php
$baju = true;

if($baju){
    echo "Variabel baju bernilai true";
}

?>
<br>
<?php

$nilai = 70;

if($nilai > 70) {
    echo "Selamat anda lulus";
}   else {
    echo "Mohon maaf anda harus mengulang";
}
echo "<br>";

?>
<?php

$nilai = 99;

echo $nilai > 70 ? "Selamat anda lulus" : "Mohon maaf anda harus mengulang";
?>
<br>

<?php
$nilai = 20;
echo "Variabel tersebut bernilai : ($nilai) <br>";

if ($nilai >= 50){
    echo "GOOD JOB !";
}elseif($nilai <= 50){
    echo "Jangan menyerah !";
} else {
    echo "Coba lagi";
}
?>