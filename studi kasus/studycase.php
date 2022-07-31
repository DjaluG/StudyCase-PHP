<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studycase</title>
</head>
<body>
    

<ul>
    <li>
        <h3>Luas Segitiga</h3>
        <?php
    $a = 8;
    $t = 2;

    $luas = ($a * $t)/2;
    echo "Alas : " . $a . "<br>";
    echo "Tinggi : " . $t . "<br>";
    echo "Penyelesaian : " . "(" . $a . "X" . $t . ")/" . 2 . "<br>";
    echo "Hasil : " . $luas;
    ?>
    </li>
</ul>
<ul>
        <li><h3>Luas Lingkaran</h3></li>
        <?php
        $phi = 3.14;
        $r = 7;
        $rr = 7;

        $luas = $phi * $r * $rr;

        echo "Phi : " . $phi . "<br>";
        echo "Jari-Jari : " . $r . "<br>";
        echo "Jari-Jari : " . $rr . "<br>";
        echo "Penyelesaian : " . $phi . "X" . $r . "X" . $rr . "<br>";
        echo "Hasil : " . $luas;
        ?>
    </ul>

    <ul>
        <li><h3>Bilangan Prima</h3></li>
        <?php
        for($a=1;$a<=70;$a++){ 
            $k=0;
            for($b=1;$b<=$a;$b++){ 
                if($a % $b == 0){ 
                    $k++;
                }
            }
                if($k == 2){
                echo $a.',';
                }
        }
         
        ?>
    </ul>

    <ul>
        <li><h3>Berat Badan Ideal</h3></li>
        <form method="post" action=""> 
    TINGGI BADAN (CM) <input type="text" name="tinggi" /><br />
    BERAT BADAN (KG)<input type="text" name="berat" /><br />
    <input type="submit" name="submit" value="Submit" /> 
    </form> 

<?php
if(isset($_POST['submit'])){
$tinggi=$_POST['tinggi'];
$berat=$_POST['berat'];
$hit1=$tinggi-100;
$ideal=$hit1-($hit1/10);

echo "TINGGI BADAN ANDA :$tinggi CM,";
echo "BERAT BADAN ANDA  :$berat KG, ";

if ($berat>=2+$ideal||$berat==$ideal||$berat>=$ideal-2)
{
    echo "KATEGORI IDEAL"; 
}
else 
{
    echo "KATEGORI TIDAK IDEAL"; 
}
}
?>

    </ul>

<?php
for ($i = 0; $i <= 60; $i ++){
 if($i % 2 == 0){
     echo "($i) adalah angka genap <br>";
     }else {
         echo "($i) adalah angka ganjil <br>";
     }
}
?>
</body>