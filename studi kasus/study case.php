<!DOCTYPE html>
<html lang="en">
<head>
    <title>Studycase</title>
</head>
<body>
    <ul>
        <li> <h3>Luas Segitiga</h3></li>
    <?php
    $a = 8;
    $t = 2;

    $luas = ($a * $t)/2;
    echo "Alas : " . $a . "<br>";
    echo "Tinggi : " . $t . "<br>";
    echo "Penyelesaian : " . "(" . $a . "*" . $t . ")/" . 2 . "<br>";
    echo "Hasil : " . $luas;
    ?>

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
        echo "Penyelesaian : " . $phi . "*" . $r . "*" . $rr . "<br>";
        echo "Hasil : " . $luas;
        ?>
    </ul>